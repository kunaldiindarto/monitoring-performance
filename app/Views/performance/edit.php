<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Masukan data ideal cycle time</h2>

            <?php foreach ($performance as $key => $value) : ?>
                <form action="/performance/pupdate/<?= $value->id ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="ideal_ct" class="col-sm-2 col-form-label">Ideal Cycle Time</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('ideal_ct')) ? 'is-invalid' : ''; ?>" id="ideal_ct" name="ideal_ct" autofocus value="<?= $value->ideal_ct ?>">
                        </div>
                        <div id="ideal_ct" class="text-danger" style="margin-left:130px; margin-top:0px;">
                            <?= $validation->getError('ideal_ct'); ?>
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