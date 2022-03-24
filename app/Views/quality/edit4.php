<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Masukan data defect</h2>

            <?php foreach ($quality as $key => $value) : ?>
                <form action="/quality/qupdate4/<?= $value->id ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="defect" class="col-sm-2 col-form-label">Defect Loss</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('defect')) ? 'is-invalid' : ''; ?>" id="defect" name="defect" autofocus value="<?= $value->defect ?>">
                        </div>
                        <div id="defect" class="text-danger" style="margin-left:130px; margin-top:0px;">
                            <?= $validation->getError('defect'); ?>
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