<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Edit downtime</h2>

            <form action="/history/update/<?= $tabel; ?>/<?= $parameter['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('jam')) ? 'is-invalid' : ''; ?>" id="jam" name="jam" autofocus value="<?= $parameter['jam']; ?>">
                    </div>
                    <div id="jam" class="text-danger" style="margin-left:130px; margin-top:0px;">
                        <?= $validation->getError('jam'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="menit" class="col-sm-2 col-form-label">Menit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('menit')) ? 'is-invalid' : ''; ?>" id="menit" name="menit" autofocus value="<?= $parameter['menit']; ?>">
                    </div>
                    <div id="menit" class="text-danger" style="margin-left:130px; margin-top:0px;">
                        <?= $validation->getError('menit'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="detik" class="col-sm-2 col-form-label">detiks</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('detik')) ? 'is-invalid' : ''; ?>" id="detik" name="detik" autofocus value="<?= $parameter['detik']; ?>">
                    </div>
                    <div id="detik" class="text-danger" style="margin-left:130px; margin-top:0px;">
                        <?= $validation->getError('detik'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" name="deskripsi" autofocus value="<?= $parameter['deskripsi']; ?>">
                    </div>
                    <div id="deskripsi" class="text-danger" style="margin-left:130px; margin-top:0px;">
                        <?= $validation->getError('deskripsi'); ?>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Ubah Data</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>