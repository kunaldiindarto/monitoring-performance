<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Insert Data</h2>

            <form action="/param2/save" method="post">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="total_av" class="col-sm-2 col-form-label">Total Availability</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('total_av')) ? 'is-invalid' : ''; ?>" id="total_av" name="total_av" autofocus value="<?= old('total_av'); ?>">
                    </div>
                    <div id="total_av" class="text-danger" style="margin-left:130px; margin-top:0px;">
                        <?= $validation->getError('total_av'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pldt" class="col-sm-2 col-form-label">Planned Downtime</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pldt" name="pldt" value="<?= old('pldt'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="setup_loss" class="col-sm-2 col-form-label">Setup Loss</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="setup_loss" name="setup_loss" value="<?= old('setup_loss'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="set_adjustment" class="col-sm-2 col-form-label">Setting Adjustment</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="set_adjustment" name="set_adjustment" value="<?= old('set_adjustment'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="shutdown_loss" class="col-sm-2 col-form-label">Shutdown Loss</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="shutdown_loss" name="shutdown_loss" value="<?= old('shutdown_loss'); ?>">
                    </div>
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