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

    .short-div {
        height: 25px;
    }

    .bg-mttr {
        background-color: #DAF7A6;
    }

    .rectangle {
        height: 100px;
        width: 200px;
    }

    .rectangle2 {
        height: 60px;
        width: 10px;
        background-color: red;
        margin-top: 20px;
        margin-left: 12px;
    }

    .header-oee {
        background-color: #004080;
    }

    .header-dll {
        background-color: #4c3180;
    }

    .red {
        background-color: red;
    }
</style>

<div class="container">

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-success hover-expand-effect" style="height: 90px;">
                <div class="icon">
                    <i class="material-icons">playlist_add_check</i>
                </div>
                <div class="content">
                    <div class="text">Output production</div>
                    <div class="number count-to" id="product"></div>

                </div>
            </div>
        </div>

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
            <div class="info-box hover-expand-effect bg-info" style="height: 90px;">
                <div class="icon">
                    <i class="material-icons">settings</i>
                </div>
                <div class="content wrap-lifetime">
                    <div class="text">MTBF</div>
                    <div class="number count-to" id="nilai-mtbf"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box hover-expand-effect bg-mttr" style="height: 90px;">
                <div class="icon">
                    <i class="material-icons">settings</i>
                </div>
                <div class="content wrap-lifetime">
                    <div class="text">MTTR</div>
                    <div class="number count-to" id="nilai-mttr"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">

            <div class="card">
                <div class="card-header text-center text-white header-dll">
                    Status Mesin 1
                </div>
                <div class="card-body">
                    <div id="mesin1" class="info-box">
                        <div class="content">
                            <!-- <div class="text">**</div> -->
                            <div class="number count-to"></div>
                        </div>
                    </div>

                    <h5 class="mt-2" id="type-alarm1">tes</h5>
                </div>

            </div>
            <div class="card mt-2">
                <div class="card-header text-center text-white header-dll">
                    Tombol
                    <h6>Masukan key script!</h6>
                </div>
                <div class="card-body mx-auto">
                    <button type="button" class="btn btn-primary mt-6" data-toggle="modal" data-target="#staticBackdrop" id="tombol-key" style="opacity: 0;" disabled>
                        Open Key
                    </button>
                    <button class="btn btn-primary ml-4 mt-6" id="ack-m4" style="opacity: 0;" disabled>ACK</button>
                </div>

            </div>
        </div>
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header text-center text-white header-dll">
                    OEE dan Losses
                </div>
                <div class="card-body">
                    <div style="margin-left: 20px;" id="piee"></div>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header text-center text-white header-dll">
                    Grafik Produksi
                </div>
                <div class="card-body">
                    <div id="grafik-proses"></div>
                </div>
            </div>
        </div>


    </div>

    <div class="row text-center">
        <div class="col-lg-3 mt-4">

            <div class="card">
                <h5 class="card-header text-white header-oee"> Availability </h5>
                <div class="card-body">
                    <!-- <h5>Availability</h5> -->
                    <div id="gauge-avail"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mt-4">
            <div class="card">
                <h5 class="card-header text-white header-oee"> Performance </h5>
                <div class="card-body">
                    <div id="gauge-performance"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mt-4">
            <div class="card">
                <h5 class="card-header text-white header-oee"> Quality </h5>
                <div class="card-body">
                    <div id="gauge-quality"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mt-4">
            <div class="card">
                <h5 class="card-header text-white header-oee"> OEE </h5>
                <div class="card-body">
                    <div id="gauge-oee"></div>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-3 text-center">
        <div class="col-lg-6">
            <div class="card">
                <h5 class="card-header text-white" style="background-color: #45b3e0;"> MTBF </h5>
                <div class="card-body">

                    <div id="mtbf"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <h5 class="card-header bg-mttr"> MTTR </h5>
                <div class="card-body">
                    <div id="mttr"></div>
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

<script>
    const tombolKey = document.getElementById("tombol-key");
    const tombolUnderstood = document.getElementById("under");
    const isiKunci = document.getElementById("isi-kunci");

    let clicking = true;
    let kondisi = null;
    // let clear;
    let myVar = setInterval(getProcess, 1000);
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

            myVar = setInterval(getProcess, 1000);

        } catch (err) {
            console.log(err);
        }

    });



    // setInterval(function() {
    //     getProcess();

    // }, 500);

    // ?-----------------------------------------------------------------
    function dataAjax(params) {
        return fetch('<?= base_url(); ?>/mesin/m1data', {
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

    // const hitungMundur = setInterval(() => {
    //     lifeTime();
    // }, 400);
    // $('#product').html(val[0].process);


    const product = document.getElementById("product");

    let tujuan = 0;
    let val = 0;

    let hariTujuan = 0;
    let jamTujuan = 0;
    let menitTujuan = 0;
    let detikTujuan = 0;
    const tempelLifetime = document.getElementById("lifetime");
    const alarmLifetime = document.getElementById("alarmLifetime");
    const satuanLifetime = document.getElementById("satuan");

    // inisialisasi status mesin 1
    const mesin1 = document.getElementById("mesin1");
    const typeAlarm1 = document.getElementById("type-alarm1");
    let resuitM1 = "";

    // inisialisasi tabel oee
    // const tabelOee = document.getElementById("tabel-oee");

    async function getProcess() {
        try {

            // nilai output
            const data = await dataAjax();
            console.log(data);
            let process = data.process[0].process;
            product.innerHTML = process;

            // *lifetime mesin 1
            let lt = lifeTime(data);

            // *status mesin 1
            let statuss = statusMesin1(data);

            // piechart
            let pie = pieChart(data);

            // mtbf
            let lineMTBF = mtbfChart(data);
            // mttr
            let lineMTTR = mttrChart(data);

            // // tabel oee
            // let tabel = updateTable(data);
            let gauge = gaugeOEE(data);
            let graphProcess = processChart(data);

        } catch (err) {
            console.log(err);
        }



    }

    function lifeTime(data) {
        let sakelar_M1 = data.stat1[0].status;

        let blinkData = data.blink1[0].status;
        let hari = data.selisih1[0].hari;
        let jam = data.selisih1[0].jam;
        let menit = data.selisih1[0].menit;
        let detik = data.selisih1[0].detik;


        if (sakelar_M1 === "on1" && blinkData !== "sd") {
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

    function statusMesin1(data) {
        const statM1 = data.stat1[0].status;

        const blink = data.blink1[0].status;
        const detail = data.blink1[0].detail;

        console.log("status m1 adlah " + statM1);
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

    function pieChart(data) {
        // piechart m1 
        oee = parseFloat(data.oee[0].oee);
        breakdownLoss = parseFloat(data.oee[0].breakdown_loss);
        downtimeLoss = parseFloat(data.oee[0].downtime_loss);
        defectTimeLoss = parseFloat(data.oee[0].defecttime_loss);
        perfLoss = parseFloat(data.oee[0].speed_loss);

        let dataOee = [{
            values: [oee, downtimeLoss, defectTimeLoss, perfLoss],
            labels: ['OEE', 'Downtime Loss', 'Defect Loss', 'Performance Loss'],
            type: 'pie',
            title: {
                text: "OEE & losses"
            },
        }];

        let layout = {
            height: 300,
            width: 362,
            margin: {
                l: 75,
                r: 0,
                b: 0,
                t: 35,
            },
            font: {
                size: 12,
            },
            paper_bgcolor: "#FFF700"
        };

        let config = {
            responsive: true
        };

        Plotly.newPlot('piee', dataOee, layout, config);

    }

    let mtbf = [];
    let dateTimeMTBF = [];
    let dan = 0;

    function mtbfChart(data) {
        const dataMTBF = data.maintenance

        dataMTBF.forEach(dataMTBF => {
            mtbf.push(dataMTBF.mtbf);
            dan += 1;
        });
        dan -= 1;
        const nilaiMTBF = data.maintenance[dan].mtbf
        document.getElementById("nilai-mtbf").innerHTML = nilaiMTBF;

        dataMTBF.forEach(dataMTBF => {
            dateTimeMTBF.push(dataMTBF.created_at);
        });

        var trace = {
            x: dateTimeMTBF,
            y: mtbf,
            type: 'scatter'
        };

        let hasil = [trace];

        Plotly.newPlot('mtbf', hasil);

        mtbf = [];
        dateTimeMTBF = [];
        dan = 0;
    }

    let mttr = [];
    let dateTimeMTTR = [];
    let dam = 0;

    function mttrChart(data) {
        const dataMTTR = data.maintenance

        dataMTTR.forEach(dataMTTR => {
            mttr.push(dataMTTR.mttr);
            dam += 1;
        });
        dam -= 1;
        const nilaiMTTR = data.maintenance[dam].mttr
        document.getElementById("nilai-mttr").innerHTML = nilaiMTTR;

        dataMTTR.forEach(dataMTTR => {
            dateTimeMTTR.push(dataMTTR.created_at);
        });

        var trace2 = {
            x: dateTimeMTTR,
            y: mttr,
            type: 'scatter'
        };

        let hasil2 = [trace2];

        Plotly.newPlot('mttr', hasil2);

        mttr = [];
        dateTimeMTTR = [];
        dam = 0;

    }

    let nilaiProses = [];
    let dateTimeProses = [];

    function processChart(data) {
        const dataProses = data.process2

        dataProses.forEach(dataProses => {
            nilaiProses.push(dataProses.process);
        });

        dataProses.forEach(dataProses => {
            dateTimeProses.push(dataProses.created_at);
        });

        let trace3 = {
            x: dateTimeProses,
            y: nilaiProses,
            type: 'scatter'
        };

        let layout4 = {
            height: 300,
            // width: 290,
            autosize: 1,
            xaxis: {
                visible: 0,
                showline: true,
                showgrid: true,
                zeroline: true,
            },
            yaxis: {
                visible: 0,
                showline: true,
                showgrid: true,
                zeroline: true,
            },
            margin: {
                l: 0,
                r: 0,
                b: 0,
                t: 25,
            },
        }

        let hasil3 = [trace3];

        Plotly.newPlot('grafik-proses', hasil3, layout4);

        nilaiProses = [];
        dateTimeProses = [];

    }

    function gaugeOEE(data) {
        let layout = {
            width: 210,
            height: 200,
            margin: {
                l: 0,
                r: 0,
                b: 0,
                t: 0,
            },
            font: {
                size: 12,
            }
        };

        let configuration = {
            responsive: true
        };

        // *ambil data dari api
        const nilaiOEE = data.oee[0]
        let avail = nilaiOEE.availability;
        let perform = nilaiOEE.performance;
        let quality = nilaiOEE.quality;
        let oee = nilaiOEE.oee;

        // *data availability
        let isiData = [{
            domain: {
                x: [0, 1],
                y: [0, 1]
            },
            value: avail,
            type: "indicator",
            mode: "gauge+number",
            delta: {
                reference: 1
            },
            gauge: {
                axis: {
                    range: [null, 100]
                }
            }
        }];

        // *data untuk performance
        let isiData2 = [{
            domain: {
                x: [0, 1],
                y: [0, 1]
            },
            value: perform,
            type: "indicator",
            mode: "gauge+number",
            delta: {
                reference: 1
            },
            gauge: {
                axis: {
                    range: [null, 100]
                }
            }
        }];

        let isiData3 = [{
            domain: {
                x: [0, 1],
                y: [0, 1]
            },
            value: quality,
            type: "indicator",
            mode: "gauge+number",
            delta: {
                reference: 1
            },
            gauge: {
                axis: {
                    range: [null, 100]
                }
            }
        }];

        let isiData4 = [{
            domain: {
                x: [0, 1],
                y: [0, 1]
            },
            value: oee,
            type: "indicator",
            mode: "gauge+number",
            delta: {
                reference: 1
            },
            gauge: {
                axis: {
                    range: [null, 100]
                }
            }
        }];

        Plotly.newPlot('gauge-avail', isiData, layout, configuration);
        Plotly.newPlot('gauge-performance', isiData2, layout, configuration);
        Plotly.newPlot('gauge-quality', isiData3, layout, configuration);
        Plotly.newPlot('gauge-oee', isiData4, layout, configuration);
    }

    // function updateTable(content) {
    //     let isiTable = '';
    //     // console.log(content);
    //     const a = content.oee;
    //     a.forEach(c => isiTable += showTable(c));
    //     tabelOee.innerHTML = isiTable;
    // }

    // function showTable(c) {
    //     return `<tr>
    //             <th scope="row">${c.availability}</th>
    //             <td>${c.performance}</td>
    //             <td>${c.quality}</td>
    //             <td>${c.oee}</td>
    //          </tr>`;

    // }


    let show = true;
    window.addEventListener('keydown', function(event) {
        if (event.ctrlKey && event.shiftKey && event.code === 'KeyU') {
            // do something here
            alert("berhasil menggunakan keyscript");
            document.getElementById("tombol-key").style.opacity = 1;
            document.querySelector("#ack-m4").style.opacity = 1;

            document.getElementById("tombol-key").disabled = false;
            document.querySelector("#ack-m4").disabled = false;

            if (!show === true) {
                // alert("berhasil menggunakan keyscript");
                document.getElementById("tombol-key").style.opacity = 0;
                document.querySelector("#ack-m4").style.opacity = 0;

                document.getElementById("tombol-key").disabled = true;
                document.querySelector("#ack-m4").disabled = true;

            }
            show = !show;
        }
    });


    function cekLogin() {
        let IDlogin = <?= user()->id; ?>;
        let UserLogin = "";

        if (IDlogin === 1) {
            UserLogin = "Super Admin";
        } else if (IDlogin === 3) {
            UserLogin = "Quality Control";
        } else if (IDlogin === 2) {
            UserLogin = "Teknik";
        }

        return UserLogin;
    }

    function cekUsername() {
        let userName = "<?= user()->username; ?>";
        return userName;
    }

    const ackMesin1 = document.querySelector("#ack-m4");
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

    async function postAckPressure(data) {
        // console.log(data);
        let konversi = JSON.stringify(data);
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