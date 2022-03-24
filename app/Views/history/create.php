<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>

            <?php endif; ?>
            <h2 class="my-3">Masukan Data Downtime</h2>
            <form action="/history/save" method="post">

                <div class="form-group row">
                    <label for="mesin" class="col-sm-2 col-form-label">Pilih Mesin</label>
                    <div class="col-sm-10">
                        <select class="form-control  <?= ($validation->hasError('mesin')) ? 'is-invalid' : ''; ?>" name="mesin" autofocus value="<?= old('mesin'); ?>" id="pilih-mesin">
                            <option></option>
                            <option>Mesin 1</option>
                            <option>Mesin 2</option>
                            <option>Mesin 3</option>
                            <option>Mesin 4</option>
                            <input type="hidden" name="mesin" class="form-control" id="val-mesin">
                        </select>
                        <div id="mesin" class="text-danger">
                            <?= $validation->getError('mesin'); ?>
                        </div>
                    </div>
                    <!-- //!tulisan danger -->
                </div>
                <div class="form-group row">
                    <label for="downtime" class="col-sm-2 col-form-label">Downtime</label>
                    <div class="col-sm-10">
                        <select class="form-control <?= ($validation->hasError('downtime')) ? 'is-invalid' : ''; ?>" name="downtime" autofocus value="<?= old('downtime'); ?>" id="pilih-downtime">
                            <option></option>
                            <option>Failure</option>
                            <option>Other Loss</option>
                            <option>Minor Stop</option>
                            <input type="hidden" name="downtime" class="form-control" id="val-downtime">
                        </select>
                        <div id="downtime" class="text-danger">
                            <?= $validation->getError('downtime'); ?>
                        </div>
                    </div>
                    <!-- //!tulisan danger -->
                </div>

                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('jam')) ? 'is-invalid' : ''; ?>" id="jam" name="jam" autofocus value="<?= old('jam'); ?>">

                    </div>
                    <div id="jam" class="text-danger" style="margin-left:130px; margin-top:0px;">
                        <?= $validation->getError('jam'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="menit" class="col-sm-2 col-form-label">Menit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('menit')) ? 'is-invalid' : ''; ?>" id="menit" name="menit" autofocus value="<?= old('menit'); ?>">
                    </div>
                    <div id="menit" class="text-danger" style="margin-left:130px; margin-top:0px;">
                        <?= $validation->getError('menit'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="setup_loss" class="col-sm-2 col-form-label">Detik</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('detik')) ? 'is-invalid' : ''; ?>" id="detik" name="detik" autofocus value="<?= old('detik'); ?>">
                    </div>
                    <div id="detik" class="text-danger" style="margin-left:130px; margin-top:0px;">
                        <?= $validation->getError('detik'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <select class="form-control  <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" name="deskripsi" autofocus value="<?= old('deskripsi'); ?>" id="pilih-deskripsi">
                            <option></option>
                            <input type="hidden" name="deskripsi" class="form-control" id="val-deskripsi">
                        </select>
                        <div id="mesin" class="text-danger">
                            <?= $validation->getError('deskripsi'); ?>
                        </div>
                    </div>
                    <!-- //!tulisan danger -->
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script>
    const pilihMesin = document.getElementById("pilih-mesin");
    const outputMesin = document.getElementById('val-mesin');

    const pilihDowntime = document.getElementById("pilih-downtime");
    const outputDowntime = document.getElementById("val-downtime");

    const pilihTrouble = document.getElementById("pilih-deskripsi");
    const outputDeskripsi = document.getElementById("val-deskripsi");

    pilihMesin.addEventListener("change", function() {
        let nilaiMesin = pilihMesin.options[pilihMesin.selectedIndex].text;
        console.log(nilaiMesin);
        outputMesin.value = nilaiMesin;
    });

    pilihDowntime.addEventListener("change", function() {
        let nilaiDowntime = pilihDowntime.options[pilihDowntime.selectedIndex].text;
        console.log(nilaiDowntime);
        outputDowntime.value = nilaiDowntime;

        let nilaiDeskripsi = showOptions(nilaiDowntime);
        pilihTrouble.innerHTML = nilaiDeskripsi;

    });
    pilihTrouble.addEventListener("change", function() {
        let nilaiDeskripsi = pilihTrouble.options[pilihTrouble.selectedIndex].text;
        console.log(nilaiDeskripsi);
        outputDeskripsi.value = nilaiDeskripsi;
    });


    // pilihTrouble.onchange = function() {
    //     let nilaiDeskripsi = pilihTrouble.options[pilihTrouble.selectedIndex].text;
    //     console.log(nilaiDeskripsi);
    // };

    function showOptions(jenis) {
        let jenisTrouble = jenis;
        if (jenisTrouble === "Minor Stop") {
            return `
                    <option></option>
                    <option>Kabel limit switch putus</option>
                    <option>Kabel sensor proximity putus</option>
                    <option>Oli Hidrolik atas kurang</option>
                    <option>Cleaning cetakan</option>
                    <option>Cetakan kurang presisi</option>                  
                    <option>Bahan menempel di cetakan</option>                  
            `;
        } else if (jenisTrouble === "Failure") {
            return `
                    <option></option>
                    <option>Daya tekan pengepresan kurang optimal</option>
                    <option>Pipa hidrolik pecah</option>
                    <option>Boister tidak bisa keluar masuk</option>
                    <option>Oli Hidrolik kebocoran</option>                                 
            `;
        } else if (jenisTrouble === "Other Loss") {
            return `
                    <option></option>
                    <option>Menunggu bahan baku</option>
                    <option>Tidak ada sumber listrik</option>
            `;
        }

    }
</script>

<?= $this->endSection(); ?>