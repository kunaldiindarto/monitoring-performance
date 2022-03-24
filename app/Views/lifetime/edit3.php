<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Masukan data defect</h2>

            <?php foreach ($lifetime as $l => $value) : ?>
                <form action="/lifetime/ltupdate3/<?= $value->id ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('hari')) ? 'is-invalid' : ''; ?>" id="hari" name="hari" autofocus value="<?= $value->hari ?>">
                        </div>
                        <div id="hari" class="text-danger" style="margin-left:130px; margin-top:0px;">
                            <?= $validation->getError('hari'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('jam')) ? 'is-invalid' : ''; ?>" id="jam" name="jam" autofocus value="<?= $value->jam ?>">
                        </div>
                        <div id="jam" class="text-danger" style="margin-left:130px; margin-top:0px;">
                            <?= $validation->getError('jam'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="menit" class="col-sm-2 col-form-label">Menits</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('menit')) ? 'is-invalid' : ''; ?>" id="menit" name="menit" autofocus value="<?= $value->menit ?>">
                        </div>
                        <div id="menit" class="text-danger" style="margin-left:130px; margin-top:0px;">
                            <?= $validation->getError('menit'); ?>
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Ubah Data</button>
                        </div>
                    </div>
                </form>
            <?php endforeach; ?>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>