<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2 text-center">Nilai Input Parameter OEE</h1>
            <h2>Availability</h2>
            <!-- <a href="/dashboard/create" class="btn btn-warning mb-3">Tambah Data OEE</a> -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>

            <?php endif; ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Total Availability</th>
                        <th scope="col">Planned Downtime</th>
                        <th scope="col">Setup Loss</th>
                        <th scope="col">Set adjustment</th>
                        <th scope="col">Shutdown Loss</th>
                        <th scope="col"> Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($oee as $o) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $o['total_av']; ?></td>
                            <td><?= $o['pldt']; ?></td>
                            <td><?= $o['setup_loss']; ?></td>
                            <td><?= $o['set_adjustment']; ?></td>
                            <td><?= $o['shutdown_loss']; ?></td>
                            <?php if (has_permission('manage-users')) : ?>
                                <td>
                                    <a href="/dashboard/edit/<?= $o['id']; ?>" class="btn btn-info"> Edit</a>

                                    <!-- <form action="/dashboard/<?= $o['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda  Yakin?');">Delete</button>
                                    </form> -->


                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <br><br><br>

    <div class="row">
        <div class="col-6">
            <h3>Performance of Rate</h3>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ideal Cycle Time(/min)</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($performance as $keyy => $valuee) : ?>
                        <tr>
                            <th scope="row"></th>
                            <td><?= $valuee->ideal_ct; ?></td>
                            <?php if (has_permission('manage-teknik')) : ?>
                                <td>
                                    <a href="/performance/edit" class="btn btn-success"> Input</a>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <h3>Quality of Rate</h3>
            <table class="table">
                <thead class="thead-dark">

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Defect Loss(/min)</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($quality as $key => $value) : ?>
                        <tr>
                            <th scope="row"></th>
                            <td><?= $value->defect ?></td>
                            <?php if (has_permission('manage-quality')) : ?>
                                <td>
                                    <a href="/quality/edit/<?= $value->id ?>" class="btn btn-success"> Input</a>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>


    </div>

    <div class="row">
        <div class="col">
            <h2 class="text-center">Setting Lifetime</h2>
        </div>
    </div>

    <div class="row">
        <div class="col"></div>

        <div class="col">

            <table class="table">
                <thead class="thead-dark">

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Menit</th>
                        <th scope="col" colspan="2" class="text-center">aksi</th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($lifetime as $l => $nilai) : ?>
                        <tr>
                            <th scope="row"></th>
                            <td><?= $nilai->hari; ?></td>
                            <td><?= $nilai->jam; ?></td>
                            <td><?= $nilai->menit; ?></td>
                            <?php if (has_permission('manage-teknik')) : ?>
                                <!-- <td><a href="" class="btn btn-success"> Input</a></td> -->
                                <td><a href="/lifetime/edit/<?= $nilai->id ?>" class="btn btn-success"> Input</a></td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>

        <div class="col"></div>
    </div>

</div>
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>



<?= $this->endSection(); ?>