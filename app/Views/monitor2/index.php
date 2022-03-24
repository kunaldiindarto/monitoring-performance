<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

<!-- Waves Effect Css -->
<link href="<?= base_url(); ?>/bsbmaterial/plugin/node-waves/waves.css" rel="stylesheet" />

<!-- Animation Css -->
<link href="<?= base_url(); ?>/bsbmaterial/plugin/animate-css/animate.css" rel="stylesheet" />

<!-- Custom Css -->
<link href="<?= base_url(); ?>/bsbmaterial/css/style2.css" rel="stylesheet">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="<?= base_url(); ?>/bsbmaterial/css/themes/all-themes.css" rel="stylesheet" />

<style>
    .hijau {
        color: greenyellow;
        background-color: greenyellow;
    }

    .merah {
        background-color: red;
    }

    .merah p {
        color: black;
    }

    .rectangle {
        height: 50px;
        width: 100px;
        background-color: grey;
    }

    .marg {
        margin-left: 900px;
        margin-bottom: 10px;
        opacity: 1;
    }

    .tulisan-alarm {
        color: black;
    }

    /* slider input */
    /* The switch - the box around the slider */
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;

        margin-left: 75px;
        /* margin-right: auto; */
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    .bg-danger {
        animation: blinker 1s linear infinite;
    }

    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }

    .blink-merah {
        background-color: #FC3B3B;
        animation: blinker 1s linear infinite;
    }

    .scroll {
        height: 170px;
        overflow: scroll;
    }

    .font {
        margin-top: 5px;
        font-size: 0.9em;

    }

    .header-oee {
        background-color: #004080;
    }

    .header-dll {
        background-color: #4c3180;
    }

    .bg-mttr {
        background-color: #DAF7A6;
    }

    .red {
        background-color: red;
    }
</style>

<div class="container">

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

        </div>
        <div class="col mt-2">

        </div>
        <div class="col">
            <!-- Button trigger modal -->

        </div>
    </div>


    <div class="row ml-4">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box hover-expand-effect" style="height: 90px;" id="alarmLifetime">
                <div class="icon">
                    <i class="material-icons">local_hospital</i>
                </div>
                <div class="content wrap-lifetime">
                    <div class="text">Life Time</div>
                    <div class="font font-weight-bold" id="lifetime">1 hari 1 jam 2 min</div>
                    <div class="font font-weight-bold" id="satuan">D : H : M : S</div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box hover-expand-effect" style="height: 90px;" id="alarmLifetime2">
                <div class="icon">
                    <i class="material-icons">local_hospital</i>
                </div>
                <div class="content wrap-lifetime2">
                    <div class="text">Life Time</div>
                    <div class="font font-weight-bold" id="lifetime2">1 hari 1 jam 2 min</div>
                    <div class="font font-weight-bold" id="satuan2">D : H : M : S</div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box hover-expand-effect" style="height: 90px;" id="alarmLifetime3">
                <div class="icon">
                    <i class="material-icons">local_hospital</i>
                </div>
                <div class="content wrap-lifetime3">
                    <div class="text">Life Time</div>
                    <div class="font font-weight-bold" id="lifetime3">1 hari 1 jam 2 min</div>
                    <div class="font font-weight-bold" id="satuan3">D : H : M : S</div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box hover-expand-effect" style="height: 90px;" id="alarmLifetime4">
                <div class="icon">
                    <i class="material-icons">local_hospital</i>
                </div>
                <div class="content wrap-lifetime4">
                    <div class="text">Life Time</div>
                    <div class="font font-weight-bold" id="lifetime4">1 hari 1 jam 2 min</div>
                    <div class="font font-weight-bold" id="satuan4">D : H : M : S</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header text-center text-white header-oee">
                    Status Mesin 1
                </div>
                <div class="card-body">
                    <h7 class="text" id="type-alarm1">tes</h7>
                    <div id="mesin1" class="info-box">
                        <div class="content">
                            <div class="number count-to"></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary" id="ack-m1" style="opacity: 0;" disabled>ACK</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card-header text-center text-white header-oee">
                Status Mesin 2
            </div>
            <div class="card">
                <div class="card-body">
                    <h7 class="text" id="type-alarm2">tes</h7>
                    <div id="mesin2" class="info-box">
                        <div class="content">
                            <div class="number count-to"></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary" id="ack-m2" style="opacity: 0;" disabled>ACK</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header text-center text-white header-oee">
                    Status Mesin 3
                </div>
                <div class="card-body">
                    <h7 class="text" id="type-alarm3">tes</h7>
                    <div id="mesin3" class="info-box">
                        <div class="content">
                            <div class="number count-to"></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary" id="ack-m3" style="opacity: 0;" disabled>ACK</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header text-center text-white header-oee">
                    Status Mesin 4
                </div>
                <div class="card-body">
                    <h7 class="text" id="type-alarm4">tes</h7>
                    <div id="mesin4" class="info-box">
                        <div class="content">
                            <div class="number count-to"></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary" id="ack-m4" style="opacity: 0;" disabled>ACK</button>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row mt-4">
        <div class="col-4">
            <div class="card text-center">
                <h5 class="card-header text-white header-dll">Tombol Kunci</h5>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" id="tombol-key" style="opacity: 0;" disabled>
                        Open Key
                    </button>
                </div>
            </div>
            <div class="card mt-5">
                <h5 class="card-header text-center header-dll text-white">Status Pressure</h5>
                <div class="card-body">
                    <div class="info-box hover-expand-effect" id="alarmPressure">
                        <div class="icon">
                            <i class="material-icons">ac_unit</i>
                        </div>
                        <div class="content">
                            <div class="text">Status Pressure</div>
                            <div class="number count-to" dataa-from="0" dataa-to="125" dataa-speed="15" dataa-fresh-interval="20" id="status-pressure">Safe</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-info" id="ack-pressure" style="opacity: 0;" disabled>Acknowledge</button>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <h5 class="card-header text-center text-white header-dll">Grafik Tekanan Angin</h5>
                <div class="card-body">
                    <div id="pressure"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <h5 class="card-header bg-mttr text-center">Grafik Hasil Produksi</h5>
                <div class="card-body">
                    <div id="myDiv"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="container">
                <!-- <h3>OEE mesin 1</h3> -->
                <div id="piee"></div>
            </div>
        </div>
        <div class="col-6">
            <div class="container">
                <!-- <h3>OEE mesin 2</h3> -->
                <div id="pie2"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="container">
                <!-- <h3>OEE mesin 3</h3> -->
                <div id="pie3"></div>
            </div>
        </div>
        <div class="col-6">
            <div class="container">
                <!-- <h3>OEE mesin 4</h3> -->
                <div id="pie4"></div>
            </div>
        </div>

    </div>

    <div class="row mt-4">
        <div class="col">
            <div class="card d-flex justify-content-center">
                <h5 class="card-header text-center bg-dark text-white">Historical Ack</h5>
                <div class="card-body">
                    <div class="scroll">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Alarm Status</th>
                                    <th scope="col">Update</th>
                                </tr>
                            </thead>
                            <tbody id="ins-ack">

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="isi-kunci">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="under">Yes</button>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url(); ?>/js/jquery-3.6.0.min.js"></script>
<script src="<?= base_url(); ?>/js/plotly.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // coba canvas js lagiii


    const tombolKey = document.getElementById("tombol-key");
    const tombolUnderstood = document.getElementById("under");
    const isiKunci = document.getElementById("isi-kunci");

    let clicking = true;
    let kondisi = null;
    // let clear;
    let myVar = setInterval(dash, 1000);
    tombolKey.addEventListener("click", function(e) {
        kondisi = false;
        clearInterval(myVar);
        console.log(kondisi);

        if (clicking === true) {
            isiKunci.innerHTML = "Buka kunci ?"
        } else {
            isiKunci.innerHTML = "kunci tombol ?"
        }



    });

    tombolUnderstood.addEventListener("click", async function(e) {
        // *masukin untuk lock onterus indikator bla bla
        try {

            if (clicking === true) {
                tombolKey.innerHTML = "off";
                tombolUnderstood.innerHTML = "turn off";
                let _data = {
                    key: "lockon1",
                    kelas: "4aee",
                }
                const onSakelar = await postSakelar(_data);

                alert(onSakelar.success);
                clicking = false;
            } else if (clicking === false) {
                tombolKey.innerHTML = "on";
                tombolUnderstood.innerHTML = "turn on";
                let _data = {
                    key: "lockoff1",
                    kelas: "4aee",
                }
                const onSakelar = await postSakelar(_data);

                alert(onSakelar.success);
                clicking = true;
            }

            myVar = setInterval(dash, 1000);

        } catch (err) {
            console.log(err);
        }

    });



    // clearInterval(myVar);

    // todo inisialisasi lifetime1

    let tujuan = 0;
    let val = 0;

    let hariTujuan = 0;
    let jamTujuan = 0;
    let menitTujuan = 0;
    let detikTujuan = 0;
    const tempelLifetime = document.getElementById("lifetime");
    const alarmLifetime = document.getElementById("alarmLifetime");
    const satuanLifetime = document.getElementById("satuan");

    // todo lifetime2
    let tujuan2 = 0;
    let val2 = 0;

    let hariTujuan2 = 0;
    let jamTujuan2 = 0;
    let menitTujuan2 = 0;
    let detikTujuan2 = 0;
    const tempelLifetime2 = document.getElementById("lifetime2");
    const alarmLifetime2 = document.getElementById("alarmLifetime2");
    const satuanLifetime2 = document.getElementById("satuan2");

    // *lifetime mesin 3
    let hariTujuan3 = 0;
    let jamTujuan3 = 0;
    let menitTujuan3 = 0;
    let detikTujuan3 = 0;
    const tempelLifetime3 = document.getElementById("lifetime3");
    const alarmLifetime3 = document.getElementById("alarmLifetime3");
    const satuanLifetime3 = document.getElementById("satuan3");

    // *lifetime mesin 4

    let hariTujuan4 = 0;
    let jamTujuan4 = 0;
    let menitTujuan4 = 0;
    let detikTujuan4 = 0;
    const tempelLifetime4 = document.getElementById("lifetime4");
    const alarmLifetime4 = document.getElementById("alarmLifetime4");
    const satuanLifetime4 = document.getElementById("satuan4");

    // todo status mesin 
    // *mesin 1
    const mesin1 = document.getElementById("mesin1");
    const typeAlarm1 = document.getElementById("type-alarm1");
    let resuitM1 = "";


    // *mesin 2 alarm
    const mesin2 = document.getElementById("mesin2");
    let resuitM2 = "";
    const typeAlarm2 = document.getElementById("type-alarm2");

    // *mesin 3 alarm
    const mesin3 = document.getElementById("mesin3");
    let resuitM3 = "";
    const typeAlarm3 = document.getElementById("type-alarm3");

    // *mesin 4 alarm
    const mesin4 = document.getElementById("mesin4");
    let resuitM4 = "";
    const typeAlarm4 = document.getElementById("type-alarm4");

    // * tabel historical ack

    const insertTableAck = document.getElementById("ins-ack");

    async function dash() {
        try {
            const dataa = await dataAjax();
            console.log(dataa);
            const pressure = press(dataa);

            const lt1 = lifetime(dataa);
            const lt2 = lifetime2(dataa);
            const lt3 = lifetime3(dataa);
            const lt4 = lifetime4(dataa);

            const st1 = statusM1(dataa);
            const st2 = statusM2(dataa);
            const st3 = statusM3(dataa);
            const st4 = statusM4(dataa);

            const grafikHasil = barChart(dataa);

            const grafikPressure = lineChart(dataa);

            updateTable(dataa);
            const resultUser = cekLogin();
            console.log(resultUser);

        } catch (err) {
            console.log(err);
        }
    }
    // *linechart

    let isiPressure = 0.0;

    let nilaii = [];
    let dateTime = [];

    function lineChart(dataa) {

        const p = dataa.pressureg
        const number = [1, 2, 3];
        p.forEach(p => {
            nilaii.push(p.bar);
        });

        p.forEach(p => {
            dateTime.push(p.created_at);
        });
        // console.log(nilaii);
        // console.log(dateTime);

        let trace1 = {
            x: dateTime,
            y: nilaii,
            type: 'scatter'
        };

        let layout10 = {
            height: 500,
            width: 690
        };


        let config = {
            responsive: true
        }

        let hasil = [trace1];

        Plotly.newPlot('pressure', hasil, layout10, config);

        nilaii = [];
        dateTime = [];
    }


    // 
    tekanan = 0.0;
    let statusPressDash = ""
    const insertStatusPressure = document.getElementById("status-pressure")

    function press(dataa) {
        tekanan = dataa.pressure[0].bar;

        if (tekanan >= 0 && tekanan <= 1.5) {
            statusPressure = "Supply pneumatic danger";
            alarmPressure.classList.remove("bg-warning");
            alarmPressure.classList.remove("bg-success");
            alarmPressure.classList.add("bg-danger");
            insertStatusPressure.innerHTML = "Danger";

        } else if (tekanan > 1.5 && tekanan <= 3) {
            statusPressure = "Supply pneumatic warning";

            alarmPressure.classList.remove("bg-danger");
            alarmPressure.classList.remove("bg-success");
            alarmPressure.classList.add("bg-warning");
            insertStatusPressure.innerHTML = "Warning";
        } else {
            statusPressure = "Supply pneumatic safe";
            alarmPressure.classList.remove("bg-danger");
            alarmPressure.classList.remove("bg-warning");
            alarmPressure.classList.add("bg-success");
            insertStatusPressure.innerHTML = "Safe";
        }
    }

    function lifetime(dataa) {
        let sakelar_M1 = dataa.stat1[0].status;

        let blink1_2 = dataa.blink1[0].status;;
        let hari = dataa.selisih1[0].hari;
        let jam = dataa.selisih1[0].jam;
        let menit = dataa.selisih1[0].menit;
        let detik = dataa.selisih1[0].detik;

// !tambahin and kondisi untuk shutdown(optional dari python)
        if (sakelar_M1 === "on1" & blink1_2 !== "sd") {
            tempelLifetime.innerHTML = +hari + " : " + jam + " : " + menit + " : " + detik;
            satuanLifetime.innerHTML = "D : H : M : S";
            if (sakelar_M1 === "on1" && hari >= 1) {
                tempelLifetime.innerHTML = +hari + " : " + jam + " : " + menit + " : " + detik;
                satuanLifetime.innerHTML = "D : H : M : S";

                alarmLifetime.classList.remove("bg-danger");
                alarmLifetime.classList.remove("bg-warning");
                alarmLifetime.classList.remove("merah");
                alarmLifetime.classList.add("bg-success");

            } else if (sakelar_M1 === "on1" && hari < 1 && jam > 1) {
                tempelLifetime.innerHTML = +hari + " : " + jam + " : " + menit + " : " + detik;
                satuanLifetime.innerHTML = "D : H : M : S";

                alarmLifetime.classList.remove("bg-danger");
                alarmLifetime.classList.remove("bg-success");
                alarmLifetime.classList.remove("merah");
                alarmLifetime.classList.add("bg-warning");
            } else if (sakelar_M1 === "on1" && hari < 1 && jam <= 1) {
                tempelLifetime.innerHTML = +hari + " : " + jam + " : " + menit + " : " + detik;
                satuanLifetime.innerHTML = "D : H : M : S";

                alarmLifetime.classList.remove("bg-warning");
                alarmLifetime.classList.remove("bg-success");
                alarmLifetime.classList.remove("merah");
                alarmLifetime.classList.add("bg-danger");
            }

        } else {
            alarmLifetime.classList.remove("bg-warning");
            alarmLifetime.classList.remove("bg-success");
            alarmLifetime.classList.remove("bg-danger");
            alarmLifetime.classList.add("merah");
            tempelLifetime.innerHTML = `<p> MESIN OFF </p>`;
            satuanLifetime.remove();

        }
    }

    function lifetime2(dataa) {
        let sakelar_M2 = dataa.stat2[0].status;

        let blink2_2 = dataa.blink2[0].status;
        let hari2 = dataa.selisih2[0].hari;
        let jam2 = dataa.selisih2[0].jam;
        let menit2 = dataa.selisih2[0].menit;
        let detik2 = dataa.selisih2[0].detik;

        if (sakelar_M2 === "on2" && blink2_2 !== "sd") {
            tempelLifetime2.innerHTML = +hari2 + " : " + jam2 + " : " + menit2 + " : " + detik2;
            satuanLifetime2.innerHTML = "D : H : M : S";
            if (sakelar_M2 === "on2" && hari2 >= 1) {
                tempelLifetime2.innerHTML = +hari2 + " : " + jam2 + " : " + menit2 + " : " + detik2;
                satuanLifetime2.innerHTML = "D : H : M : S";

                alarmLifetime2.classList.remove("bg-danger");
                alarmLifetime2.classList.remove("bg-warning");
                alarmLifetime2.classList.remove("merah");
                alarmLifetime2.classList.add("bg-success");

            } else if (sakelar_M2 === "on2" && hari2 < 1 && jam2 > 1) {
                tempelLifetime2.innerHTML = +hari2 + " : " + jam2 + " : " + menit2 + " : " + detik2;
                satuanLifetime2.innerHTML = "D : H : M : S";

                alarmLifetime2.classList.remove("bg-danger");
                alarmLifetime2.classList.remove("bg-success");
                alarmLifetime2.classList.remove("merah");
                alarmLifetime2.classList.add("bg-warning");
            } else if (sakelar_M2 === "on2" && hari2 < 1 && jam2 <= 1) {
                tempelLifetime2.innerHTML = +hari2 + " : " + jam2 + " : " + menit2 + " : " + detik2;
                satuanLifetime2.innerHTML = "D : H : M : S";

                alarmLifetime2.classList.remove("bg-warning");
                alarmLifetime2.classList.remove("bg-success");
                alarmLifetime2.classList.remove("merah");
                alarmLifetime2.classList.add("bg-danger");
            }

        } else {
            alarmLifetime2.classList.remove("bg-warning");
            alarmLifetime2.classList.remove("bg-success");
            alarmLifetime2.classList.remove("bg-danger");
            alarmLifetime2.classList.add("merah");
            tempelLifetime2.innerHTML = `<p> MESIN OFF </p>`;
            satuanLifetime2.remove();

        }
        // console.log(+hariTujuan + " hari " + jamTujuan + " jam" + menitTujuan + " menit" + detikTujuan + " detik");
    }

    function lifetime3(dataa) {

        let sakelar_M3 = dataa.stat3[0].status;

        let blink3_2 = dataa.blink3[0].status;
        let hari3 = dataa.selisih3[0].hari;
        let jam3 = dataa.selisih3[0].jam;
        let menit3 = dataa.selisih3[0].menit;
        let detik3 = dataa.selisih3[0].detik;

        if (sakelar_M3 === "on3" && blink3_2 !== "sd") {
            tempelLifetime3.innerHTML = +hari3 + " : " + jam3 + " : " + menit3 + " : " + detik3;
            satuanLifetime3.innerHTML = "D : H : M : S";
            if (sakelar_M3 === "on3" && hari3 >= 1) {
                tempelLifetime3.innerHTML = +hari3 + " : " + jam3 + " : " + menit3 + " : " + detik3;
                satuanLifetime3.innerHTML = "D : H : M : S";

                alarmLifetime3.classList.remove("bg-danger");
                alarmLifetime3.classList.remove("bg-warning");
                alarmLifetime3.classList.remove("merah");
                alarmLifetime3.classList.add("bg-success");

            } else if (sakelar_M3 === "on3" && hari3 < 1 && jam3 > 1) {
                tempelLifetime3.innerHTML = +hari3 + " : " + jam3 + " : " + menit3 + " : " + detik3;
                satuanLifetime3.innerHTML = "D : H : M : S";

                alarmLifetime3.classList.remove("bg-danger");
                alarmLifetime3.classList.remove("bg-success");
                alarmLifetime3.classList.remove("merah");
                alarmLifetime3.classList.add("bg-warning");
            } else if (sakelar_M3 === "on3" && hari3 < 1 && jam3 <= 1) {
                tempelLifetime3.innerHTML = +hari3 + " : " + jam3 + " : " + menit3 + " : " + detik3;
                satuanLifetime3.innerHTML = "D : H : M : S";

                alarmLifetime3.classList.remove("bg-warning");
                alarmLifetime3.classList.remove("bg-success");
                alarmLifetime3.classList.remove("merah");
                alarmLifetime3.classList.add("bg-danger");
            }

        } else {
            alarmLifetime3.classList.remove("bg-warning");
            alarmLifetime3.classList.remove("bg-success");
            alarmLifetime3.classList.remove("bg-danger");
            alarmLifetime3.classList.add("merah");
            tempelLifetime3.innerHTML = `<p> MESIN OFF </p>`;
            satuanLifetime3.remove();

        }
        // console.log(+hariTujuan + " hari " + jamTujuan + " jam" + menitTujuan + " menit" + detikTujuan + " detik");
    }


    function lifetime4(dataa) {
        let sakelar_M4 = dataa.stat4[0].status;

        let blink4_2 = dataa.blink4[0].status;
        let hari4 = dataa.selisih4[0].hari;
        let jam4 = dataa.selisih4[0].jam;
        let menit4 = dataa.selisih4[0].menit;
        let detik4 = dataa.selisih4[0].detik;

        if (sakelar_M4 === "on4" && blink4_2 !== "sd") {
            tempelLifetime4.innerHTML = +hari4 + " : " + jam4 + " : " + menit4 + " : " + detik4;
            satuanLifetime4.innerHTML = "D : H : M : S";
            if (sakelar_M4 === "on4" && hari4 >= 1) {
                tempelLifetime4.innerHTML = +hari4 + " : " + jam4 + " : " + menit4 + " : " + detik4;
                satuanLifetime4.innerHTML = "D : H : M : S";

                alarmLifetime4.classList.remove("bg-danger");
                alarmLifetime4.classList.remove("bg-warning");
                alarmLifetime4.classList.remove("merah");
                alarmLifetime4.classList.add("bg-success");

            } else if (sakelar_M4 === "on4" && hari4 < 1 && jam4 > 1) {
                tempelLifetime4.innerHTML = +hari4 + " : " + jam4 + " : " + menit4 + " : " + detik4;
                satuanLifetime4.innerHTML = "D : H : M : S";

                alarmLifetime4.classList.remove("bg-danger");
                alarmLifetime4.classList.remove("bg-success");
                alarmLifetime4.classList.remove("merah");
                alarmLifetime4.classList.add("bg-warning");
            } else if (sakelar_M4 === "on4" && hari4 < 1 && jam4 <= 1) {
                tempelLifetime4.innerHTML = +hari4 + " : " + jam4 + " : " + menit4 + " : " + detik4;
                satuanLifetime4.innerHTML = "D : H : M : S";

                alarmLifetime4.classList.remove("bg-warning");
                alarmLifetime4.classList.remove("bg-success");
                alarmLifetime4.classList.remove("merah");
                alarmLifetime4.classList.add("bg-danger");
            }

        } else {
            alarmLifetime4.classList.remove("bg-warning");
            alarmLifetime4.classList.remove("bg-success");
            alarmLifetime4.classList.remove("bg-danger");
            alarmLifetime4.classList.add("merah");
            tempelLifetime4.innerHTML = `<p> MESIN OFF </p>`;
            satuanLifetime4.remove();

        }
        // console.log(+hariTujuan + " hari " + jamTujuan + " jam" + menitTujuan + " menit" + detikTujuan + " detik");
    }

    function statusM1(dataa) {
        const statM1 = dataa.stat1[0].status;

        const blink = dataa.blink1[0].status;
        const detail = dataa.blink1[0].detail;

        // console.log("status m1 adlah " + statM1);
        if (statM1 === "on1" && blink === "off") {
            mesin1.classList.remove("blink-merah");
            mesin1.classList.remove("red");
            mesin1.classList.add("hijau");
            resultM1 = "Safe";

        } else {
            mesin1.classList.remove("hijau");
            mesin1.classList.remove("red");
            mesin1.classList.add("blink-merah");

            resultM1 = detail;
        }
        if (blink === "mf" || blink === "olmp" || blink === "olair" || blink === "sd") {
            mesin1.classList.remove("blink-merah");
            mesin1.classList.remove("hijau");
            mesin1.classList.add("red");
        }

        typeAlarm1.innerHTML = resultM1;
    }

    function statusM2(dataa) {
        let statM2 = dataa.stat2[0].status;

        let blink2 = dataa.blink2[0].status;
        let detail2 = dataa.blink2[0].detail;

        // console.log("status m2 adlah " + statM2);
        if (statM2 === "on2" && blink2 === "off") {
            mesin2.classList.remove("blink-merah");
            mesin2.classList.remove("red");
            mesin2.classList.add("hijau");

            resultM2 = "Safe";
        } else {
            mesin2.classList.remove("hijau");
            mesin2.classList.remove("red");
            mesin2.classList.add("blink-merah");

            resultM2 = detail2;
        }
        if (blink2 === "mf" || blink2 === "olmp" || blink2 === "olair" || blink2 === "sd") {
            mesin2.classList.remove("blink-merah");
            mesin2.classList.remove("hijau");
            mesin2.classList.add("red");
        }

        typeAlarm2.innerHTML = resultM2;
    }

    function statusM3(dataa) {
        let statM3 = dataa.stat3[0].status;

        let blink3 = dataa.blink3[0].status;
        let detail3 = dataa.blink3[0].detail;

        if (statM3 === "on3" && blink3 === "off") {
            mesin3.classList.remove("blink-merah");
            mesin3.classList.remove("red");
            mesin3.classList.add("hijau");

            resultM3 = "Safe";
        } else {
            mesin3.classList.remove("hijau");
            mesin3.classList.remove("red");
            mesin3.classList.add("blink-merah");

            resultM3 = detail3;
        }
        if (blink3 === "mf" || blink3 === "olmp" || blink3 === "olair" || blink3 === "sd") {
            mesin3.classList.remove("blink-merah");
            mesin3.classList.remove("hijau");
            mesin3.classList.add("red");
        }

        typeAlarm3.innerHTML = resultM3;
    }

    function statusM4(dataa) {
        let statM4 = dataa.stat4[0].status;

        let blink4 = dataa.blink4[0].status;
        let detail4 = dataa.blink4[0].detail;

        if (statM4 === "on4" && blink4 === "off") {
            mesin4.classList.remove("blink-merah");
            mesin4.classList.remove("red");
            mesin4.classList.add("hijau");

            resultM4 = "Safe";
        } else {
            mesin4.classList.remove("hijau");
            mesin4.classList.remove("red");
            mesin4.classList.add("blink-merah");

            resultM4 = detail4;
        }
        if (blink4 === "mf" || blink4 === "olmp" || blink4 === "olair" || blink4 === "sd") {
            mesin4.classList.remove("blink-merah");
            mesin4.classList.remove("hijau");
            mesin4.classList.add("red");
        }

        typeAlarm4.innerHTML = resultM4;
    }

    function barChart(dataa) {

        const hasilOutputM1 = dataa.process1[0].process
        const hasilOutputM2 = dataa.process2[0].process2
        const hasilOutputM3 = dataa.process3[0].process3
        const hasilOutputM4 = dataa.process4[0].process4

        let isi = [{
            x: ['mesin 1', 'mesin 2', 'mesin 3', 'mesin 4'],
            y: [hasilOutputM1, hasilOutputM2, hasilOutputM3, hasilOutputM4],
            marker: {
                color: ['rgba(255,79,29,0.7)', 'rgba(0,25,49,0.7)', 'rgba(0,68,49,0.7)', 'rgba(180,68,126,0.7)']
            },
            type: 'bar'
        }];

        let layout = {};

        let config = {
            responsive: true
        }
        Plotly.newPlot('myDiv', isi, layout, config);

    }

    // ?-----------------------------------------------------------------
    function dataAjax(params) {
        return fetch('<?= base_url(); ?>/data/', {
                method: "get",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(response => {
                // console.log(response);
                if (!response.ok) {
                    throw new Error(response.statusText);
                }
                return response.json();
            })
            .then(result => {
                // console.log(result);
                return result;
            });
    }

    // ?keyscript
    // todo key scipt
    let show = true;
    resultUser2 = cekLogin();
    window.addEventListener('keydown', function(event) {
        if (event.ctrlKey && event.shiftKey && event.code === 'KeyU' && resultUser2 !== "Guest") {
            // do something here
            alert("berhasil menggunakan keyscript");

            document.getElementById("tombol-key").style.opacity = 1;

            document.getElementById("ack-pressure").style.opacity = 1;
            document.getElementById("ack-m1").style.opacity = 1;
            document.getElementById("ack-m2").style.opacity = 1;
            document.getElementById("ack-m3").style.opacity = 1;
            document.getElementById("ack-m4").style.opacity = 1;

            document.getElementById("tombol-key").disabled = false;
            document.getElementById("ack-pressure").disabled = false;
            document.getElementById("ack-m1").disabled = false;
            document.getElementById("ack-m2").disabled = false;
            document.getElementById("ack-m3").disabled = false;
            document.getElementById("ack-m4").disabled = false;

            if (!show === true) {
                // alert("berhasil menggunakan keyscript");

                document.getElementById("tombol-key").style.opacity = 0;

                document.getElementById("ack-pressure").style.opacity = 0;
                document.getElementById("ack-m1").style.opacity = 0;
                document.getElementById("ack-m2").style.opacity = 0;
                document.getElementById("ack-m3").style.opacity = 0;
                document.getElementById("ack-m4").style.opacity = 0;

                document.getElementById("tombol-key").disabled = true;
                document.getElementById("ack-pressure").disabled = true;
                document.getElementById("ack-m1").disabled = true;
                document.getElementById("ack-m2").disabled = true;
                document.getElementById("ack-m3").disabled = true;
                document.getElementById("ack-m4").disabled = true;
            }
            show = !show;

        }

    });

    // * tabel history ack
    function updateTable(content) {
        let isiTable = '';
        const a = content.tabel;
        a.forEach(c => isiTable += showTable(c));
        insertTableAck.innerHTML = isiTable;
    }

    function showTable(c) {
        // console.log(c.name);

        return /*html*/ `<tr>
            <th scope="row">${c.id}</th>
            <td>${c.name}</td>
            <td>${c.role}</td>
            <td>${c.alarm_status}</td>
            <td>${c.created_at}</td>
         </tr>`;

    }

    // todo ack 
    // *tombol ack pressure
    function cekLogin() {
        let IDlogin = <?= user()->id; ?>;
        let UserLogin = "";

        if (IDlogin === 1) {
            UserLogin = "Super Admin";
        } else if (IDlogin === 3) {
            UserLogin = "Quality Control";
        } else if (IDlogin === 2) {
            UserLogin = "Teknik";
        } else if (IDlogin === 16) {
            UserLogin = "Operator";
        } else {
            UserLogin = "Guest";
        }
        console.log(IDlogin);

        return UserLogin;
    }

    function cekUsername() {
        let userName = "<?= user()->username; ?>";
        return userName;
    }

    const ackPressure = document.querySelector('#ack-pressure')

    ackPressure.addEventListener('click', async function(e) {
        try {

            let dataAckPressure = '';
            let loginIDUser = <?= user()->id; ?>;
            let loginUser = "";
            const nameUserr = cekUsername();

            if (loginIDUser === 1) {
                loginUser = "Super Admin";
            } else if (loginIDUser === 3) {
                loginUser = "Quality Control";
            } else if (loginIDUser === 2) {
                loginUser = "Teknik";
            }
            // post dataa langsung ke database

            let sendAck = {
                name: nameUserr,
                role: loginUser,
                status: statusPressure,
                pressure: tekanan
            }

            let send = await postAckPressure(sendAck);
            alert(send.success + "| Role: " + send.role + "| Status mesin: " + send.status);

        } catch (err) {
            console.log(err);
        }
        // console.log(send);
    });



    //* tombol ack mesin
    const ackMesin1 = document.querySelector("#ack-m1");
    ackMesin1.addEventListener('click', async function(e) {
        try {
            const resultUserLogin = cekLogin();
            const kirimResultM1 = resultM1;
            const nameUser = cekUsername();

            let dataAckM1 = {
                name: nameUser,
                role: resultUserLogin,
                status: kirimResultM1,
                pressure: 0
            }
            let sendAckM1 = await postAckPressure(dataAckM1);
            alert(sendAckM1.success + "| Role: " + sendAckM1.role + "| Status mesin: " + sendAckM1.status);

        } catch (err) {
            console.log(err);
        }
    });

    // *tombol ack mesin 2
    const ackMesin2 = document.querySelector("#ack-m2");
    ackMesin2.addEventListener('click', async function(e) {
        try {
            const resultUserLogin2 = cekLogin();
            const kirimResultM2 = resultM2;
            const nameUser2 = cekUsername();

            let dataAckM2 = {
                name: nameUser2,
                role: resultUserLogin2,
                status: kirimResultM2,
                pressure: 0
            }

            let sendAckM2 = await postAckPressure(dataAckM2);
            alert(sendAckM2.success + "| Role: " + sendAckM2.role + "| Status mesin: " + sendAckM2.status);

        } catch (err) {
            console.log(err);
        }
    });

    // *tombol ack mesin 3
    const ackMesin3 = document.querySelector("#ack-m3");
    ackMesin3.addEventListener('click', async function(e) {
        try {
            const resultUserLogin3 = cekLogin();
            const kirimResultM3 = resultM3;
            const nameUser3 = cekUsername();

            let dataAckM3 = {
                name: nameUser3,
                role: resultUserLogin3,
                status: kirimResultM3,
                pressure: 0
            }

            let sendAckM3 = await postAckPressure(dataAckM3);
            alert(sendAckM3.success + "| Role: " + sendAckM3.role + "| Status mesin: " + sendAckM3.status);

        } catch (err) {
            console.log(err);
        }
    });

    // *tombol ack mesin 4
    const ackMesin4 = document.querySelector("#ack-m4");
    ackMesin4.addEventListener('click', async function(e) {
        try {
            const resultUserLogin4 = cekLogin();
            const kirimResultM4 = resultM4;
            const nameUser4 = cekUsername();

            let dataAckM4 = {
                name: nameUser4,
                role: resultUserLogin4,
                status: kirimResultM4,
                pressure: 0
            }

            let sendAckM4 = await postAckPressure(dataAckM4);
            alert(sendAckM4.success + "| Role: " + sendAckM4.role + "| Status mesin: " + sendAckM4.status);

        } catch (err) {
            console.log(err);
        }
    });

    // ?-----------------------

    async function postAckPressure(dataa) {
        // console.log(dataa);
        let konversi = JSON.stringify(dataa);
        const response = await fetch('<?= base_url(); ?>/monitor/postackpressure', {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                },
                body: konversi
            })
            .then(function(response) {
                // console.log(response);
                if (!response.ok === true) {
                    throw new Error(response.statusText);
                }
                return response.json();
            })
            .then(function(json) {
                console.log(json);
                return json;
            });
        return response;
    }

    async function postSakelar(dataa) {
        // console.log(dataa);
        let converting = JSON.stringify(dataa);
        const response = await fetch('<?= base_url(); ?>/monitor/lockm1', {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                },
                body: converting
            })
            .then(function(response) {
                // console.log(response);
                if (!response.ok === true) {
                    throw new Error(response.statusText);
                }
                return response.json();
            })
            .then(function(json) {
                console.log(json);
                return json;
            });
        return response;
    }
</script>

<?= $this->endSection(); ?>