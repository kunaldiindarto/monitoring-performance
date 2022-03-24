<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<style>
    .scroll {
        height: 170px;
        overflow: scroll;
    }
</style>

<div class="container">

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>

    <?php endif; ?>

    <div class="paket">

        <div class="row">
            <div class="col">
                <h1 class="text-center">Mesin 1</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Other Loss</h3>
            </div>
        </div>

        <div class="row">
            <div class="col mx-auto scroll">
                <table class="table table-bordered table-sm">
                    <thead class="text-center">
                        <tr class="table-info">
                            <th rowspan="2">No</th>
                            <th colspan="3">Durasi Kerusakan </th>
                            <th rowspan="2"> Jam Kejadian</th>
                            <th rowspan="2">Deskripsi</th>
                            <?php if (has_permission('manage-editdt')) : ?>
                                <th rowspan="2">Aksi</th>
                            <?php endif; ?>
                        </tr>
                        <tr class="table-info">
                            <th scope="row">Jam</th>
                            <th scope="row">Menit</th>
                            <th>Detik</th>
                        </tr>
                    </thead>
                    <tbody id="tabel-otherloss">

                    </tbody>

                </table>


            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Minor Stop</h3>
            </div>
        </div>

        <div class="row">
            <div class="col mx-auto scroll">
                <table class="table table-bordered table-sm">
                    <thead class="text-center">
                        <tr class="table-info">
                            <th rowspan="2">No</th>
                            <th colspan="3">Durasi Kerusakan </th>
                            <th rowspan="2"> Jam Kejadian</th>
                            <th rowspan="2">Deskripsi</th>
                            <?php if (has_permission('manage-editdt')) : ?>
                                <th rowspan="2">Aksi</th>
                            <?php endif; ?>
                        </tr>
                        <tr class="table-info">
                            <th scope="row">Jam</th>
                            <th scope="row">Menit</th>
                            <th>Detik</th>
                        </tr>
                    </thead>
                    <tbody id="tabel-minorstop">

                    </tbody>

                </table>


            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Failure</h3>
            </div>
        </div>
        <div class="row">
            <div class="col mx-auto scroll">
                <table class="table table-bordered table-sm">
                    <thead class="text-center">
                        <tr class="table-info">
                            <th rowspan="2">No</th>
                            <th colspan="3">Durasi Kerusakan </th>
                            <th rowspan="2"> Jam Kejadian</th>
                            <th rowspan="2">Deskripsi</th>
                            <?php if (has_permission('manage-editdt')) : ?>
                                <th rowspan="2">Aksi</th>
                            <?php endif; ?>
                        </tr>
                        <tr class="table-info">
                            <th scope="row">Jam</th>
                            <th scope="row">Menit</th>
                            <th>Detik</th>
                        </tr>
                    </thead>
                    <tbody id="tabel-failure">

                    </tbody>

                </table>


            </div>
        </div>
    </div>

    <div class="paket2">

        <div class="row">
            <div class="col">
                <h1 class="text-center">Mesin 2</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Other Loss</h3>
            </div>
        </div>

        <div class="row">
            <div class="col mx-auto scroll">
                <table class="table table-bordered table-sm">
                    <thead class="text-center">
                        <tr class="table-warning">
                            <th rowspan="2">No</th>
                            <th colspan="3">Durasi Kerusakan </th>
                            <th rowspan="2"> Jam Kejadian</th>
                            <th rowspan="2">Deskripsi</th>
                            <?php if (has_permission('manage-editdt')) : ?>
                                <th rowspan="2">Aksi</th>
                            <?php endif; ?>
                        </tr>
                        <tr class="table-warning">
                            <th scope="row">Jam</th>
                            <th scope="row">Menit</th>
                            <th>Detik</th>
                        </tr>
                    </thead>
                    <tbody id="tabel-otherloss2">

                    </tbody>

                </table>


            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Minor Stop</h3>
            </div>
        </div>

        <div class="row">
            <div class="col mx-auto scroll">
                <table class="table table-bordered table-sm">
                    <thead class="text-center">
                        <tr class="table-warning">
                            <th rowspan="2">No</th>
                            <th colspan="3">Durasi Kerusakan </th>
                            <th rowspan="2"> Jam Kejadian</th>
                            <th rowspan="2">Deskripsi</th>
                            <?php if (has_permission('manage-editdt')) : ?>
                                <th rowspan="2">Aksi</th>
                            <?php endif; ?>
                        </tr>
                        <tr class="table-warning">
                            <th scope="row">Jam</th>
                            <th scope="row">Menit</th>
                            <th>Detik</th>
                        </tr>
                    </thead>
                    <tbody id="tabel-minorstop2">

                    </tbody>

                </table>


            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Failure</h3>
            </div>
        </div>
        <div class="row">
            <div class="col mx-auto scroll">
                <table class="table table-bordered table-sm">
                    <thead class="text-center">
                        <tr class="table-warning">
                            <th rowspan="2">No</th>
                            <th colspan="3">Durasi Kerusakan </th>
                            <th rowspan="2"> Jam Kejadian</th>
                            <th rowspan="2">Deskripsi</th>
                            <?php if (has_permission('manage-editdt')) : ?>
                                <th rowspan="2">Aksi</th>
                            <?php endif; ?>
                        </tr>
                        <tr class="table-warning">
                            <th scope="row">Jam</th>
                            <th scope="row">Menit</th>
                            <th>Detik</th>
                        </tr>
                    </thead>
                    <tbody id="tabel-failure2">

                    </tbody>

                </table>


            </div>
        </div>
    </div>

    <div class="paket3">

        <div class="row">
            <div class="col">
                <h1 class="text-center">Mesin 3</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Other Loss</h3>
            </div>
        </div>

        <div class="row">
            <div class="col mx-auto scroll">
                <table class="table table-bordered table-sm">
                    <thead class="text-center">
                        <tr class="table-light">
                            <th rowspan="2">No</th>
                            <th colspan="3">Durasi Kerusakan </th>
                            <th rowspan="2"> Jam Kejadian</th>
                            <th rowspan="2">Deskripsi</th>
                            <?php if (has_permission('manage-editdt')) : ?>
                                <th rowspan="2">Aksi</th>
                            <?php endif; ?>
                        </tr>
                        <tr class="table-light">
                            <th scope="row">Jam</th>
                            <th scope="row">Menit</th>
                            <th>Detik</th>
                        </tr>
                    </thead>
                    <tbody id="tabel-otherloss3">

                    </tbody>

                </table>


            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Minor Stop</h3>
            </div>
        </div>

        <div class="row">
            <div class="col mx-auto scroll">
                <table class="table table-bordered table-sm">
                    <thead class="text-center">
                        <tr class="table-light">
                            <th rowspan="2">No</th>
                            <th colspan="3">Durasi Kerusakan </th>
                            <th rowspan="2"> Jam Kejadian</th>
                            <th rowspan="2">Deskripsi</th>
                            <?php if (has_permission('manage-editdt')) : ?>
                                <th rowspan="2">Aksi</th>
                            <?php endif; ?>
                        </tr>
                        <tr class="table-light">
                            <th scope="row">Jam</th>
                            <th scope="row">Menit</th>
                            <th>Detik</th>
                        </tr>
                    </thead>
                    <tbody id="tabel-minorstop3">

                    </tbody>

                </table>


            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Failure</h3>
            </div>
        </div>
        <div class="row">
            <div class="col mx-auto scroll">
                <table class="table table-bordered table-sm">
                    <thead class="text-center">
                        <tr class="table-light">
                            <th rowspan="2">No</th>
                            <th colspan="3">Durasi Kerusakan </th>
                            <th rowspan="2"> Jam Kejadian</th>
                            <th rowspan="2">Deskripsi</th>
                            <?php if (has_permission('manage-editdt')) : ?>
                                <th rowspan="2">Aksi</th>
                            <?php endif; ?>
                        </tr>
                        <tr class="table-light">
                            <th scope="row">Jam</th>
                            <th scope="row">Menit</th>
                            <th>Detik</th>
                        </tr>
                    </thead>
                    <tbody id="tabel-failure3">

                    </tbody>

                </table>


            </div>
        </div>
    </div>

    <div class="paket4">

        <div class="row">
            <div class="col">
                <h1 class="text-center">Mesin 4</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Other Loss</h3>
            </div>
        </div>

        <div class="row">
            <div class="col mx-auto scroll">
                <table class="table table-bordered table-sm">
                    <thead class="text-center">
                        <tr class="table-success">
                            <th rowspan="2">No</th>
                            <th colspan="3">Durasi Kerusakan </th>
                            <th rowspan="2"> Jam Kejadian</th>
                            <th rowspan="2">Deskripsi</th>
                            <?php if (has_permission('manage-editdt')) : ?>
                                <th rowspan="2">Aksi</th>
                            <?php endif; ?>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">Jam</th>
                            <th scope="row">Menit</th>
                            <th>Detik</th>
                        </tr>
                    </thead>
                    <tbody id="tabel-otherloss4">

                    </tbody>

                </table>


            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Minor Stop</h3>
            </div>
        </div>

        <div class="row">
            <div class="col mx-auto scroll">
                <table class="table table-bordered table-sm">
                    <thead class="text-center">
                        <tr class="table-success">
                            <th rowspan="2">No</th>
                            <th colspan="3">Durasi Kerusakan </th>
                            <th rowspan="2"> Jam Kejadian</th>
                            <th rowspan="2">Deskripsi</th>
                            <?php if (has_permission('manage-editdt')) : ?>
                                <th rowspan="2">Aksi</th>
                            <?php endif; ?>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">Jam</th>
                            <th scope="row">Menit</th>
                            <th>Detik</th>
                        </tr>
                    </thead>
                    <tbody id="tabel-minorstop4">

                    </tbody>

                </table>


            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Failure</h3>
            </div>
        </div>
        <div class="row">
            <div class="col mx-auto scroll">
                <table class="table table-bordered table-sm">
                    <thead class="text-center">
                        <tr class="table-success">
                            <th rowspan="2">No</th>
                            <th colspan="3">Durasi Kerusakan </th>
                            <th rowspan="2"> Jam Kejadian</th>
                            <th rowspan="2">Deskripsi</th>
                            <?php if (has_permission('manage-editdt')) : ?>
                                <th rowspan="2">Aksi</th>
                            <?php endif; ?>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">Jam</th>
                            <th scope="row">Menit</th>
                            <th>Detik</th>
                        </tr>
                    </thead>
                    <tbody id="tabel-failure4">

                    </tbody>

                </table>


            </div>
        </div>
    </div>

</div>


<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
    const tabelOtherloss = document.getElementById("tabel-otherloss")
    const tabelMinorstop = document.getElementById("tabel-minorstop");
    const tabelFailure = document.getElementById("tabel-failure");

    const tabelOtherloss2 = document.getElementById("tabel-otherloss2")
    const tabelMinorstop2 = document.getElementById("tabel-minorstop2");
    const tabelFailure2 = document.getElementById("tabel-failure2");

    const tabelOtherloss3 = document.getElementById("tabel-otherloss3")
    const tabelMinorstop3 = document.getElementById("tabel-minorstop3");
    const tabelFailure3 = document.getElementById("tabel-failure3");

    const tabelOtherloss4 = document.getElementById("tabel-otherloss4")
    const tabelMinorstop4 = document.getElementById("tabel-minorstop4");
    const tabelFailure4 = document.getElementById("tabel-failure4");

    setInterval(() => {
        main();
    }, 2000);


    async function main() {
        try {
            const data = await dataAjax();

            let insOtherloss = updateTable10(data);
            let insMinorstop = updateTable11(data);
            let insFailure = updateTable12(data);

            let insOtherloss2 = updateTable7(data);
            let insMinorstop2 = updateTable8(data);
            let insFailure2 = updateTable9(data);

            let insOtherloss3 = updateTable4(data);
            let insMinorstop3 = updateTable5(data);
            let insFailure3 = updateTable6(data);

            let insOtherloss4 = updateTable(data);
            let insMinorstop4 = updateTable2(data);
            let insFailure4 = updateTable3(data);
        } catch (err) {
            console.log(err);
        }

    }

    function dataAjax() {
        return fetch('<?= base_url(); ?>/history/data', {
                method: "get",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(response.statusText);
                }
                return response.json();
            })
            .then(result => {
                console.log(result);
                return result;
            });
    }

    // *tabel otherloss
    let tableName = "";

    function updateTable10(content) {
        let isiTable10 = '';
        tableName = "otherloss"
        const j = content.otherloss;
        j.forEach(c => isiTable10 += showTable(c));
        tabelOtherloss.innerHTML = isiTable10;
    }

    // *tabel minorstop
    function updateTable11(content) {
        let isiTable11 = '';
        tableName = "minorstop";
        const k = content.minorstop;
        k.forEach(c => isiTable11 += showTable(c));
        tabelMinorstop.innerHTML = isiTable11;
    }

    // *tabel failure
    function updateTable12(content) {
        let isiTable12 = '';
        tableName = "failure";
        const l = content.failure;
        l.forEach(c => isiTable12 += showTable(c));
        tabelFailure.innerHTML = isiTable12;
    }


    // *tabel otherloss2
    function updateTable7(content) {
        let isiTable7 = '';
        tableName = "otherloss2";
        const g = content.otherloss2;
        g.forEach(c => isiTable7 += showTable(c));
        tabelOtherloss2.innerHTML = isiTable7;
    }

    // *tabel minorstop2
    function updateTable8(content) {
        let isiTable8 = '';
        tableName = "minorstop2";
        const h = content.minorstop2;
        h.forEach(c => isiTable8 += showTable(c));
        tabelMinorstop2.innerHTML = isiTable8;
    }

    // *tabel failure2
    function updateTable9(content) {
        let isiTable9 = '';
        tableName = "failure2";
        const i = content.failure2;
        i.forEach(c => isiTable9 += showTable(c));
        tabelFailure2.innerHTML = isiTable9;
    }

    // *tabel otherloss3
    function updateTable4(content) {
        let isiTable4 = '';
        tableName = "otherloss3";
        const d = content.otherloss3;
        d.forEach(c => isiTable4 += showTable(c));
        tabelOtherloss3.innerHTML = isiTable4;
    }
    // *tabel minorstop3
    function updateTable5(content) {
        let isiTable5 = '';
        tableName = "minorstop3";
        const e = content.minorstop3;
        e.forEach(c => isiTable5 += showTable(c));
        tabelMinorstop3.innerHTML = isiTable5;
    }

    // *tabel failure3
    function updateTable6(content) {
        let isiTable6 = '';
        tableName = "failure3";
        const f = content.failure3;
        f.forEach(c => isiTable6 += showTable(c));
        tabelFailure3.innerHTML = isiTable6;
    }


    // *tabel otherloss4
    function updateTable(content) {
        let isiTable = '';
        tableName = "otherloss4";
        const a = content.otherloss4;
        a.forEach(c => isiTable += showTable(c));
        tabelOtherloss4.innerHTML = isiTable;
    }

    // *tabel minorstop4
    function updateTable2(content) {
        let isiTable2 = '';
        tableName = "minorstop4";
        const b = content.minorstop4;
        b.forEach(c => isiTable2 += showTable(c));
        tabelMinorstop4.innerHTML = isiTable2;
    }

    // *tabel failure4
    function updateTable3(content) {
        let isiTable3 = '';
        tableName = "failure4";
        const d = content.failure4;
        d.forEach(c => isiTable3 += showTable(c));
        tabelFailure4.innerHTML = isiTable3;
    }

    function showTable(c) {
        return `<tr>
                    <th scope="row">${c.id}</th>
                    <td>${c.jam}</td>
                    <td>${c.menit}</td>
                    <td>${c.detik}</td>
                    <td>${c.created_at}</td>
                    <td>${c.deskripsi}</td>
                    <?php if (has_permission('manage-editdt')) : ?>
                        <td>
                        <?php if (has_permission('manage-deletedt')) : ?>        
                            <form action="/history/${tableName}/${c.id}" method="post" class="text-center">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda  Yakin?');">Delete</button>
                        <?php endif; ?>        
                            <a href="/history/edit/${tableName}/${c.id}" class="btn btn-info"> Edit</a>
                            </form>                    
                            </td>
                        </tr>
                    <?php endif; ?>
                        `;
    }
</script>

<?= $this->endSection(); ?>