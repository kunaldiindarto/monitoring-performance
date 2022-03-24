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
</style>

<div class="container">
    <!-- <div class="row ml-1">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-success hover-expand-effect">
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
            <div class="info-box bg-success hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">playlist_add_check</i>
                </div>
                <div class="content">
                    <div class="text">NEW TASKS</div>
                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">125</div>
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
            <div class="info-box hover-expand-effect" id="alarmPressure">
                <div class="icon">
                    <i class="material-icons">ac_unit</i>
                </div>
                <div class="content">
                    <div class="text">Status Pressure</div>
                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">Safe</div>
                </div>
            </div>
        </div>

    </div> -->

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box hover-expand-effect" id="alarmPressure">
            <div class="icon">
                <i class="material-icons">ac_unit</i>
            </div>
            <div class="content">
                <div class="text">Status Pressure</div>
                <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">Safe</div>
            </div>
        </div>
    </div>

    <div class="row ml-1">
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

    <div class="row ackbutton">
        <!-- <div class="col-sm-3 marg">
        <button class="btn btn-secondary confirmack">ACK</button>
    </div> -->
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mesin 1</h5>
                    <div id="mesin1" class="info-box">
                        <div class="content">
                            <div class="text">**</div>
                            <div class="number count-to"></div>
                        </div>
                    </div>

                    <button class="btn btn-primary" id="tombolA_on" style="opacity: 0;">Open Key</button>
                    <button class="btn btn-primary ml-4" id="ack-m1" style="opacity: 0;">ACK</button>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mesin 2</h5>
                    <div id="mesin2" class="info-box">
                        <div class="content">
                            <div class="text">**</div>
                            <div class="number count-to"></div>
                        </div>
                    </div>

                    <button class="btn btn-primary" id="tombol2_on" style="opacity: 0;">Open Key</button>
                    <button class="btn btn-primary ml-4" id="ack-m2" style="opacity: 0;">ACK</button>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mesin 3</h5>
                    <div id="mesin3" class="info-box">
                        <div class="content">
                            <div class="text">**</div>
                            <div class="number count-to"></div>
                        </div>
                    </div>

                    <button class="btn btn-primary" id="tombol3_on" style="opacity: 0;">Open Key</button>
                    <button class="btn btn-primary ml-4" id="ack-m3" style="opacity: 0;">ACK</button>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mesin 4</h5>
                    <div id="mesin4" class="info-box">
                        <div class="content">
                            <div class="text">**</div>
                            <div class="number count-to"></div>
                        </div>
                    </div>

                    <button class="btn btn-primary" id="tombol4_on" style="opacity: 0;">Open Key</button>
                    <button class="btn btn-primary ml-4" id="ack-m4" style="opacity: 0;">ACK</button>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-6">
            <div class="container">
                <h3>Monitoring tekanan angin</h3>
                <div id="pressure"></div>
                <button class="btn btn-info" id="ack-pressure" style="opacity: 0;">Acknowledge</button>

            </div>
        </div>

        <div class="col-6">
            <h3>Update output produksi</h3>
            <div id="myDiv"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="container">
                <h3>OEE mesin 1</h3>
                <div id="piee"></div>
            </div>
        </div>
        <div class="col-6">
            <div class="container">
                <h3>OEE mesin 2</h3>
                <div id="pie2"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="container">
                <h3>OEE mesin 3</h3>
                <div id="pie3"></div>
            </div>
        </div>
        <div class="col-6">
            <div class="container">
                <h3>OEE mesin 4</h3>
                <div id="pie4"></div>
            </div>
        </div>

    </div>

    <div class="row">
        <h1 class="mx-auto">Historical Ack</h1>
        <div class="col-10 mx-auto scroll">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Alarm Status</th>
                        <th scope="col">Update</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody id="ins-ack">

                </tbody>
            </table>
        </div>
    </div>

</div>


<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url(); ?>/js/jquery-3.6.0.min.js"></script>
<script src="<?= base_url(); ?>/chartjs/chart.min.js"></script>
<script src="<?= base_url(); ?>/js/plotly.min.js"></script>
<script>
    setInterval(async function() {
        getProcess();
        pressureGraph();
        pieChart();
        pieChart2();
        pieChart3();
        pieChart4();
        statusM1();
        statusM2();
        statusM3();
        statusM4();
        main();
        tabelACK();
        barChart();

    }, 1000);


    function getProcess() {
        // nilai output
        $.ajax({
            url: "/monitor/getcountoutput",
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            success: function(data) {

                if (data) {
                    // var json_data;
                    var obj = JSON.parse(data);
                    $.each(obj, function(i, val) {
                        // console.log(val[0].process);
                        $('#product').html(val[0].process);
                    })
                } else {
                    // $('#product').html(`<p> error </p>`);
                }
            }
        });
    }


    // *todo ---------- grafik buat pressure---------


    var pressureValue = [];
    var times = new Date();
    var time = [];

    var dataPressure = [{
        x: [times],
        y: [],
        mode: 'lines',
        line: {
            color: '#873D27'
        }
    }]

    Plotly.newPlot('pressure', dataPressure);

    function pressureGraph() {

        fetch('<?= base_url(); ?>/monitor/grafikpressure', {
                method: "get",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(function(response) {
                return response.json();
            })
            .then((function(data) {

                var lengthData = data.pressure.length;
                // console.log(data.pressure[0].created_at);
                for (j = 0; j < lengthData; j++) {
                    pressureValue.push(data.pressure[j].bar);
                    // time.push(data.pressure[j].created_at);
                    time.push(data.pressure[j].created_at);
                }
            }))
            .catch(function(error) {
                console.log(error);
            });

        // console.log(times);
        // console.log(pressureValue);

        //plotly
        var updateData = {
            x: [
                [times]
            ],
            y: [
                [pressureValue]
            ]
        }

        var olderTime = times.setMinutes(times.getMinutes() - 1);
        var futureTime = times.setMinutes(times.getMinutes() + 1);

        var minuteView = {
            xaxis: {
                type: 'date',
                range: [olderTime, futureTime]
            }
        };

        Plotly.relayout('pressure', minuteView);

        Plotly.extendTraces('pressure', updateData, [0]);
        times = new Date();
    }



    // pie chart oee
    let oee = 0.0;
    let breakdownLoss = 0.0;
    let downtimeLoss = 0.0;
    let defectTimeLoss = 0.0;
    let speedLoss = 0.0;

    function pieChart() {
        fetch('<?= base_url(); ?>/monitor/pieoee', {
                method: "get",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(function(response) {
                return response.json();
            })
            .then((function(data) {
                // console.log(data);
                oee = parseFloat(data.nilaioee[0].oee);
                breakdownLoss = parseFloat(data.nilaioee[0].breakdown_loss);
                downtimeLoss = parseFloat(data.nilaioee[0].downtime_loss);
                defectTimeLoss = parseFloat(data.nilaioee[0].defecttime_loss);
                speedLoss = parseFloat(data.nilaioee[0].speed_loss);

                var dataOee = [{
                    values: [oee, breakdownLoss, downtimeLoss, defectTimeLoss, speedLoss],
                    labels: ['OEE', 'Breakdown Loss', 'Downtime Loss', 'Defect Loss', 'Speed Loss'],
                    type: 'pie'
                }];

                var layout = {
                    height: 440,
                    width: 400
                };

                Plotly.newPlot('piee', dataOee, layout);

            }))
            .catch(function(error) {
                console.log(error);
            });

    }

    let oee2 = 0.0;
    let breakdownLoss2 = 0.0;
    let downtimeLoss2 = 0.0;
    let defectTimeLoss2 = 0.0;
    let speedLoss2 = 0.0;

    function pieChart2() {
        fetch('<?= base_url(); ?>/monitor/pieoee', {
                method: "get",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(function(response) {
                return response.json();
            })
            .then((function(data) {
                // console.log(data);
                oee2 = parseFloat(data.nilaioee[0].oee);
                breakdownLoss2 = parseFloat(data.nilaioee[0].breakdown_loss);
                downtimeLoss2 = parseFloat(data.nilaioee[0].downtime_loss);
                defectTimeLoss2 = parseFloat(data.nilaioee[0].defecttime_loss);
                speedLoss2 = parseFloat(data.nilaioee[0].speed_loss);

                var dataOee2 = [{
                    values: [oee2, breakdownLoss2, downtimeLoss2, defectTimeLoss2, speedLoss2],
                    labels: ['OEE', 'Breakdown Loss', 'Downtime Loss', 'Defect Loss', 'Speed Loss'],
                    type: 'pie'
                }];

                var layout2 = {
                    height: 440,
                    width: 400
                };

                Plotly.newPlot('pie2', dataOee2, layout2);

            }))
            .catch(function(error) {
                console.log(error);
            });

    }

    let oee3 = 0.0;
    let breakdownLoss3 = 0.0;
    let downtimeLoss3 = 0.0;
    let defectTimeLoss3 = 0.0;
    let speedLoss3 = 0.0;

    function pieChart3() {
        fetch('<?= base_url(); ?>/monitor/pieoee', {
                method: "get",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(function(response) {
                return response.json();
            })
            .then((function(data) {
                // console.log(data);
                oee3 = parseFloat(data.nilaioee[0].oee);
                breakdownLoss3 = parseFloat(data.nilaioee[0].breakdown_loss);
                downtimeLoss3 = parseFloat(data.nilaioee[0].downtime_loss);
                defectTimeLoss3 = parseFloat(data.nilaioee[0].defecttime_loss);
                speedLoss3 = parseFloat(data.nilaioee[0].speed_loss);

                var dataOee3 = [{
                    values: [oee3, breakdownLoss3, downtimeLoss3, defectTimeLoss3, speedLoss3],
                    labels: ['OEE', 'Breakdown Loss', 'Downtime Loss', 'Defect Loss', 'Speed Loss'],
                    type: 'pie'
                }];

                var layout3 = {
                    height: 440,
                    width: 400
                };

                Plotly.newPlot('pie3', dataOee3, layout3);

            }))
            .catch(function(error) {
                console.log(error);
            });

    }

    let oee4 = 0.0;
    let breakdownLoss4 = 0.0;
    let downtimeLoss4 = 0.0;
    let defectTimeLoss4 = 0.0;
    let speedLoss4 = 0.0;

    function pieChart4() {
        fetch('<?= base_url(); ?>/monitor/pieoee', {
                method: "get",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(function(response) {
                return response.json();
            })
            .then((function(data) {
                // console.log(data);
                oee4 = parseFloat(data.nilaioee[0].oee);
                breakdownLoss4 = parseFloat(data.nilaioee[0].breakdown_loss);
                downtimeLoss4 = parseFloat(data.nilaioee[0].downtime_loss);
                defectTimeLoss4 = parseFloat(data.nilaioee[0].defecttime_loss);
                speedLoss4 = parseFloat(data.nilaioee[0].speed_loss);

                var dataOee4 = [{
                    values: [oee4, breakdownLoss4, downtimeLoss4, defectTimeLoss4, speedLoss4],
                    labels: ['OEE', 'Breakdown Loss', 'Downtime Loss', 'Defect Loss', 'Speed Loss'],
                    type: 'pie'
                }];

                var layout4 = {
                    height: 440,
                    width: 400
                };

                Plotly.newPlot('pie4', dataOee4, layout4);

            }))
            .catch(function(error) {
                console.log(error);
            });

    }


    // *canvas JS
    // !kalo ga jalan pake plotly

    // *ambil data produksi per mesin
    function outputM1() {
        return fetch('<?= base_url(); ?>/monitor/gethasilm1', {
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

    function outputM2() {
        return fetch('<?= base_url(); ?>/monitor/gethasilm2', {
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

    function outputM3() {
        return fetch('<?= base_url(); ?>/monitor/gethasilm3', {
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

    function outputM4() {
        return fetch('<?= base_url(); ?>/monitor/gethasilm4', {
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


    async function barChart() {
        try {
            const hasilOutputtM1 = await outputM1();
            const hasilOutputtM2 = await outputM2();
            const hasilOutputtM3 = await outputM3();
            const hasilOutputtM4 = await outputM4();

            const hasilOutputM1 = hasilOutputtM1.process[0].process
            const hasilOutputM2 = hasilOutputtM2.process[0].process2
            const hasilOutputM3 = hasilOutputtM3.process[0].process3
            const hasilOutputM4 = hasilOutputtM4.process[0].process4

            console.log(hasilOutputM2);

            let isi = [{
                x: ['mesin 1', 'mesin 2', 'mesin 3', 'mesin 4'],
                y: [hasilOutputM1, hasilOutputM2, hasilOutputM3, hasilOutputM4],
                marker: {
                    color: ['rgba(255,79,29,0.7)', 'rgba(0,25,49,0.7)', 'rgba(0,68,49,0.7)', 'rgba(180,68,126,0.7)']
                },
                type: 'bar'
            }];
            Plotly.newPlot('myDiv', isi);

        } catch (err) {
            console.log(err);
        }
    }
    // ----
    // todo key scipt
    let show = true;
    window.addEventListener('keydown', function(event) {
        if (event.ctrlKey && event.shiftKey && event.code === 'KeyU') {
            // do something here
            alert("berhasil menggunakan keyscript");
            $("#tombolA_on").css({
                opacity: 1
            });

            document.querySelector("#ack-pressure").style.opacity = 1;
            document.querySelector("#ack-m1").style.opacity = 1;

            document.getElementById("tombol2_on").style.opacity = 1;
            document.getElementById("ack-m2").style.opacity = 1;

            document.getElementById("tombol3_on").style.opacity = 1;
            document.getElementById("ack-m3").style.opacity = 1;

            document.getElementById("tombol4_on").style.opacity = 1;
            document.getElementById("ack-m4").style.opacity = 1;

            if (!show === true) {
                // alert("berhasil menggunakan keyscript");
                $("#tombolA_on").css({
                    opacity: 0
                });

                document.querySelector("#ack-pressure").style.opacity = 0;
                document.querySelector("#ack-m1").style.opacity = 0;

                document.getElementById("tombol2_on").style.opacity = 0;
                document.getElementById("ack-m2").style.opacity = 0;

                document.getElementById("tombol3_on").style.opacity = 0;
                document.getElementById("ack-m3").style.opacity = 0;

                document.getElementById("tombol4_on").style.opacity = 0;
                document.getElementById("ack-m4").style.opacity = 0;
            }
            show = !show;

        }

    });
    // !supaya tidak pusing kalo keburu ganti jadi vanilla js
    const tombolA = $("#tombolA_on");
    let ngeklik = true;

    tombolA.click(function(e) {
        console.log("you click tombol A");
        var pesan = confirm("Yakin akses mesin?");
        // console.log(tombolA.value);

        if (pesan == true) {
            // *state untuk menyalakan kunci
            if (ngeklik === true) {
                tombolA.text("Off")
                let _data = {
                    key: "lockon1",
                    kelas: "4aee",
                }
                console.log(JSON.stringify(_data));

                $.ajax({
                    url: "<?= base_url(); ?>/monitor/lockm1",
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    type: "POST",
                    data: _data,
                    dataType: "JSON",
                    success: function(response) {
                        console.log(response);
                        alert(response.success);
                    },
                    error: function(xhr, ajaxOptions, throwError) {
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    }
                });

            }

        } else {
            alert("kunci tidak jadi dibuka");
        }
        // *state untuk mengunci kembali kunci
        if (pesan == true && ngeklik === false) {
            tombolA.text("On")
            let _data = {
                key: "lockoff1",
                kelas: "4aee",
            }
            console.log(JSON.stringify(_data));

            $.ajax({
                url: "<?= base_url(); ?>/monitor/lockm1",
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                type: "POST",
                data: _data,
                dataType: "JSON",
                success: function(response) {
                    console.log(response);
                    alert(response.success);
                },
                error: function(xhr, ajaxOptions, throwError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        }
        ngeklik = !ngeklik;

    });

    // *tombol mesin 2 
    const tombolM2 = $("#tombol2_on");
    let ngeklik2 = true;

    tombolM2.click(function(e) {
        console.log("you click tombol 2");
        let pesan2 = confirm("Yakin akses mesin 2?");
        // console.log(tombolA.value);

        if (pesan2 == true) {
            // *state untuk menyalakan kunci
            if (ngeklik2 === true) {
                tombolM2.text("Off")
                let _data2 = {
                    key: "lockon2",
                    kelas: "4aee",
                }
                console.log(JSON.stringify(_data2));

                $.ajax({
                    url: "<?= base_url(); ?>/monitor/lockm2",
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    type: "POST",
                    data: _data2,
                    dataType: "JSON",
                    success: function(response) {
                        console.log(response);
                        alert(response.success);
                    },
                    error: function(xhr, ajaxOptions, throwError) {
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    }
                });

            }

        } else {
            alert("kunci mesin 2 tidak jadi dibuka");
        }
        // *state untuk mengunci kembali kunci
        if (pesan2 == true && ngeklik2 === false) {
            tombolM2.text("On")
            let _data2 = {
                key: "lockoff2",
                kelas: "4aee",
            }
            console.log(JSON.stringify(_data2));

            $.ajax({
                url: "<?= base_url(); ?>/monitor/lockm2",
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                type: "POST",
                data: _data2,
                dataType: "JSON",
                success: function(response) {
                    console.log(response);
                    alert(response.success);
                },
                error: function(xhr, ajaxOptions, throwError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        }
        ngeklik2 = !ngeklik2;

    });

    // *tombol mesin 3
    const tombolM3 = $("#tombol3_on");
    let ngeklik3 = true;

    tombolM3.click(function(e) {
        console.log("you click tombol 3");
        let pesan3 = confirm("Yakin akses mesin 3?");
        // console.log(tombolA.value);

        if (pesan3 == true) {
            // *state untuk menyalakan kunci
            if (ngeklik3 === true) {
                tombolM3.text("Off")
                let _data3 = {
                    key: "lockon3",
                    kelas: "4aee",
                }
                console.log(JSON.stringify(_data3));

                $.ajax({
                    url: "<?= base_url(); ?>/monitor/lockm3",
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    type: "POST",
                    data: _data3,
                    dataType: "JSON",
                    success: function(response) {
                        console.log(response);
                        alert(response.success);
                    },
                    error: function(xhr, ajaxOptions, throwError) {
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    }
                });

            }

        } else {
            alert("kunci mesin 3 tidak jadi dibuka");
        }
        // *state untuk mengunci kembali kunci
        if (pesan3 == true && ngeklik3 === false) {
            tombolM3.text("On")
            let _data3 = {
                key: "lockoff3",
                kelas: "4aee",
            }
            console.log(JSON.stringify(_data3));

            $.ajax({
                url: "<?= base_url(); ?>/monitor/lockm3",
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                type: "POST",
                data: _data3,
                dataType: "JSON",
                success: function(response) {
                    console.log(response);
                    alert(response.success);
                },
                error: function(xhr, ajaxOptions, throwError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        }
        ngeklik3 = !ngeklik3;

    });

    // *tombol mesin 4
    const tombolM4 = $("#tombol4_on");
    let ngeklik4 = true;

    tombolM4.click(function(e) {
        console.log("you click tombol 4");
        let pesan4 = confirm("Yakin akses mesin 4?");
        // console.log(tombolA.value);

        if (pesan4 == true) {
            // *state untuk menyalakan kunci
            if (ngeklik4 === true) {
                tombolM4.text("Off")
                let _data4 = {
                    key: "lockon4",
                    kelas: "4aee",
                }
                console.log(JSON.stringify(_data4));

                $.ajax({
                    url: "<?= base_url(); ?>/monitor/lockm4",
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    type: "POST",
                    data: _data4,
                    dataType: "JSON",
                    success: function(response) {
                        console.log(response);
                        alert(response.success);
                    },
                    error: function(xhr, ajaxOptions, throwError) {
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    }
                });

            }

        } else {
            alert("kunci mesin 4 tidak jadi dibuka");
        }
        // *state untuk mengunci kembali kunci
        if (pesan4 == true && ngeklik4 === false) {
            tombolM4.text("On")
            let _data4 = {
                key: "lockoff4",
                kelas: "4aee",
            }
            console.log(JSON.stringify(_data4));

            $.ajax({
                url: "<?= base_url(); ?>/monitor/lockm4",
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                type: "POST",
                data: _data4,
                dataType: "JSON",
                success: function(response) {
                    console.log(response);
                    alert(response.success);
                },
                error: function(xhr, ajaxOptions, throwError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        }
        ngeklik4 = !ngeklik4;

    });

    // !ganti jadi async karena data yang diambil ada 2 dari db untuk menjalankan alarm
    // *mesin 1 alarm
    let mesin1 = document.getElementById("mesin1");
    let resuitM1 = "";
    async function statusM1() {
        try {
            // *ambil data untuk on off mesin sakelar
            const nyalaMesin = await key1();

            const readblink = await statBlink1();

            const blink = readblink.blink_1[0].status;
            const detail = readblink.blink_1[0].detail;

            let statM1 = nyalaMesin.statusM1[0].status;
            console.log("status m1 adlah " + statM1);
            if (statM1 === "on1" && blink === "off") {
                mesin1.classList.remove("blink-merah");
                mesin1.classList.add("hijau");

                resultM1 = "Safe";
            } else {
                mesin1.classList.remove("hijau");
                mesin1.classList.add("blink-merah");

                resultM1 = detail;
            }

        } catch (err) {
            console.log(err);
        }

    }

    function key1() {
        return fetch('<?= base_url(); ?>/monitor/statusm1', {
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

    }

    function statBlink1(params) {
        return fetch('<?= base_url(); ?>/monitor/getblink1', {
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
            });
        // .then(json => {
        //     // console.log(json.blink_1[0].status);
        //     let callback = json.blink_1[0].status;
        //     return callback;

        //     // ? parsing data callback langsung value nya karena ini datanya satu
        // })
    }

    // *mesin 2 alarm
    let mesin2 = document.getElementById("mesin2");
    let resuitM2 = "";
    async function statusM2() {
        try {
            // *ambil data untuk on off mesin sakelar
            const nyalaMesin2 = await key2();

            const readblink2 = await statBlink2();

            const blink2 = readblink2.blink_2[0].status;
            const detail2 = readblink2.blink_2[0].detail;

            let statM2 = nyalaMesin2.statusM2[0].status;
            console.log("status m2 adlah " + statM2);
            if (statM2 === "on2" && blink2 === "off") {
                mesin2.classList.remove("blink-merah");
                mesin2.classList.add("hijau");

                resultM2 = "Safe";
            } else {
                mesin2.classList.remove("hijau");
                mesin2.classList.add("blink-merah");

                resultM2 = detail2;
            }

        } catch (err) {
            console.log(err);
        }

    }

    function key2() {
        return fetch('<?= base_url(); ?>/monitor/statusm2', {
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

    }

    function statBlink2(params) {
        return fetch('<?= base_url(); ?>/monitor/getblink2', {
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
            });
    }
    // *mesin 3 alarm
    let mesin3 = document.getElementById("mesin3");
    let resuitM3 = "";
    async function statusM3() {
        try {
            // *ambil data untuk on off mesin sakelar
            const nyalaMesin3 = await key3();

            const readblink3 = await statBlink3();

            const blink3 = readblink3.blink_3[0].status;
            const detail3 = readblink3.blink_3[0].detail;

            let statM3 = nyalaMesin3.statusM3[0].status;
            console.log("status m3 adlah " + statM3);
            if (statM3 === "on3" && blink3 === "off") {
                mesin3.classList.remove("blink-merah");
                mesin3.classList.add("hijau");

                resultM3 = "Safe";
            } else {
                mesin3.classList.remove("hijau");
                mesin3.classList.add("blink-merah");

                resultM3 = detail3;
            }

        } catch (err) {
            console.log(err);
        }

    }

    function key3() {
        return fetch('<?= base_url(); ?>/monitor/statusm3', {
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

    }

    function statBlink3(params) {
        return fetch('<?= base_url(); ?>/monitor/getblink3', {
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
            });
    }

    // *mesin 4 alarm
    let mesin4 = document.getElementById("mesin4");
    let resuitM4 = "";
    async function statusM4() {
        try {
            // *ambil data untuk on off mesin sakelar
            const nyalaMesin4 = await key4();

            const readblink4 = await statBlink4();

            const blink4 = readblink4.blink_4[0].status;
            const detail4 = readblink4.blink_4[0].detail;

            let statM4 = nyalaMesin4.statusM4[0].status;
            console.log("status m4 adlah " + statM4);
            if (statM4 === "on4" && blink4 === "off") {
                mesin4.classList.remove("blink-merah");
                mesin4.classList.add("hijau");

                resultM4 = "Safe";
            } else {
                mesin4.classList.remove("hijau");
                mesin4.classList.add("blink-merah");

                resultM4 = detail4;
            }

        } catch (err) {
            console.log(err);
        }

    }

    function key4() {
        return fetch('<?= base_url(); ?>/monitor/statusm4', {
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

    }

    function statBlink4(params) {
        return fetch('<?= base_url(); ?>/monitor/getblink4', {
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
            });
    }

    // selesai

    let jsondata = "";
    let hold;
    let apiUrl = "<?= base_url(); ?>/monitor/grafikpressure";
    let ackUrl = "<?= base_url(); ?>/monitor/valuepressure";
    let statusPressure = ""


    async function main() {
        try {
            //OPTION 2
            jsondata = await getJson(apiUrl);

            let tekanan = jsondata.pressure[0].bar;
            // console.log("tekanan adalah: " + tekanan);

            if (tekanan >= 0 && tekanan <= 2) {
                statusPressure = "Supply pneumatic kurang";
                alarmPressure.classList.remove("bg-warning");
                alarmPressure.classList.remove("bg-success");
                alarmPressure.classList.add("bg-danger");

            } else if (tekanan > 2 && tekanan <= 3) {
                statusPressure = "Supply pneumatic warning";

                alarmPressure.classList.remove("bg-danger");
                alarmPressure.classList.remove("bg-success");
                alarmPressure.classList.add("bg-warning");
            } else {
                statusPressure = "Supply pneumatic safe";
                alarmPressure.classList.remove("bg-danger");
                alarmPressure.classList.remove("bg-warning");
                alarmPressure.classList.add("bg-success");
            }

        } catch (err) {
            console.log(err);
        }

    }


    async function getJson(url) {
        let response = await fetch(url, {
                method: "get",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(function(response) {

                if (!response.ok === true) {
                    throw new Error(response.statusText);
                }
                return response.json();
            });
        // let data = await response.json()
        return response;
    }
    async function getDataAckPressure(url) {
        let response = await fetch(url, {
                method: "get",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(function(response) {

                if (!response.ok === true) {
                    throw new Error(response.statusText);
                }
                return response.json();
            });
        // let data = await response.json()
        return response;
    }

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

    // tombol ack pressure
    const ackPressure = document.querySelector('#ack-pressure')

    ackPressure.addEventListener('click', async function(e) {
        try {

            let dataAckPressure = '';
            let loginIDUser = <?= user()->id; ?>;
            let loginUser = "";
            const nameUserr = cekUsername();

            console.log("login id adalah " + loginIDUser);
            let tek = await getDataAckPressure(ackUrl);
            let teka = tek.pressure[0].bar;

            console.log("teka adalah" + teka);

            if (loginIDUser === 2) {
                loginUser = "Admin";
            } else if (loginIDUser === 3) {
                loginUser = "Quality Control";
            } else if (loginIDUser === 2) {
                loginUser = "Teknik";
            }
            // post data langsung ke database

            let sendAck = {
                name: nameUserr,
                role: loginUser,
                status: statusPressure,
                pressure: teka
            }

            let send = await postAckPressure(sendAck);
            alert(send.success + "| Role: " + send.role + "| Status mesin: " + send.status);

        } catch (err) {
            console.log(err);
        }
        // console.log(send);
    });

    // *tombol ack mesin 1
    function cekLogin() {
        let IDlogin = <?= user()->id; ?>;
        let UserLogin = "";

        if (IDlogin === 1) {
            UserLogin = "Admin";
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

    // !-------------------------
    const insertTableAck = document.getElementById("ins-ack");

    async function tabelACK(params) {
        try {
            const content = await dataAck();
            console.log(content.tabel[0].id);
            updateTable(content);

        } catch (err) {
            console.log(err)
        }
    }


    function dataAck() {
        return fetch('<?= base_url(); ?>/monitor/getack', {
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

    }

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
                <td>${c.detail}</td>
             </tr>`;

    }
    const hitungMundur = setInterval(() => {
        lifeTime();


        // if (selisihSekarang < 0) {
        //     clearInterval(hitungMundur);
        // }

    }, 400);
    const hitungMundur2 = setInterval(() => {
        lifeTime2();
    }, 400);
    const hitungMundur3 = setInterval(() => {
        lifeTime3();
    }, 400);
    const hitungMundur4 = setInterval(() => {
        lifeTime4();
    }, 400);

    // * lifetime 1 mesin dulu
    function getSelisihLife() {
        return fetch('<?= base_url(); ?>/lifetime/getselisihlife', {
                method: "get",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(response => {
                return response.json();

                if (!response.ok) {
                    throw new Error(response.statusText);
                }
            })
            .then(result => {
                // console.log(result);
                return result;
            });

    }

    async function postsisaLifeTime(data) {
        // console.log(data);
        let konv = JSON.stringify(data);
        const res = await fetch('<?= base_url(); ?>/lifetime/postsisaselisih', {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                },
                body: konv
            })
            .then(function(response) {
                // console.log(response);
                if (!response.ok === true) {
                    throw new Error(response.statusText);
                }
                return response.json();
            })
            .then(json => console.log(json));
        return res;
    }

    let tujuan = 0;
    let val = 0;

    let hariTujuan = 0;
    let jamTujuan = 0;
    let menitTujuan = 0;
    let detikTujuan = 0;
    const tempelLifetime = document.getElementById("lifetime");
    const alarmLifetime = document.getElementById("alarmLifetime");
    const satuanLifetime = document.getElementById("satuan");

    async function lifeTime() {
        try {
            const nyalaMesin_1 = await key1();
            let sakelar_M1 = nyalaMesin_1.statusM1[0].status;

            const selisihSet = await getSelisihLife();

            let hari = selisihSet.selisih[0].hari;
            let jam = selisihSet.selisih[0].jam;
            let menit = selisihSet.selisih[0].menit;
            let detik = selisihSet.selisih[0].detik;

            if (sakelar_M1 === "on1") {
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
        // console.log(+hariTujuan + " hari " + jamTujuan + " jam" + menitTujuan + " menit" + detikTujuan + " detik");
        catch (err) {
            console.log(err);
        }
    }

    // *lifetime mesin 2
    function getSelisihLife2() {
        return fetch('<?= base_url(); ?>/lifetime/getselisihlife2', {
                method: "get",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(response => {
                return response.json();

                if (!response.ok) {
                    throw new Error(response.statusText);
                }
            })
            .then(result => {
                // console.log(result);
                return result;
            });

    }

    async function postsisaLifeTime2(data) {
        // console.log(data);
        let konvv = JSON.stringify(data);
        const res = await fetch('<?= base_url(); ?>/lifetime/postsisaselisih2', {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                },
                body: konvv
            })
            .then(function(response) {
                // console.log(response);
                if (!response.ok === true) {
                    throw new Error(response.statusText);
                }
                return response.json();
            })
            .then(json => console.log(json));
        return res;
    }

    let tujuan2 = 0;
    let val2 = 0;

    let hariTujuan2 = 0;
    let jamTujuan2 = 0;
    let menitTujuan2 = 0;
    let detikTujuan2 = 0;
    const tempelLifetime2 = document.getElementById("lifetime2");
    const alarmLifetime2 = document.getElementById("alarmLifetime2");
    const satuanLifetime2 = document.getElementById("satuan2");

    async function lifeTime2() {
        try {
            const nyalaMesin_2 = await key2();
            let sakelar_M2 = nyalaMesin_2.statusM2[0].status;

            const selisihSet2 = await getSelisihLife2();

            let hari2 = selisihSet2.selisih[0].hari;
            let jam2 = selisihSet2.selisih[0].jam;
            let menit2 = selisihSet2.selisih[0].menit;
            let detik2 = selisihSet2.selisih[0].detik;

            if (sakelar_M2 === "on2") {
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


        }
        // console.log(+hariTujuan + " hari " + jamTujuan + " jam" + menitTujuan + " menit" + detikTujuan + " detik");
        catch (err) {
            console.log(err);
        }
    }

    // *lifetime mesin 3
    function getSelisihLife3() {
        return fetch('<?= base_url(); ?>/lifetime/getselisihlife3', {
                method: "get",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(response => {
                return response.json();

                if (!response.ok) {
                    throw new Error(response.statusText);
                }
            })
            .then(result => {
                // console.log(result);
                return result;
            });

    }

    async function postsisaLifeTime3(data) {
        // console.log(data);
        let konvvv = JSON.stringify(data);
        const rest = await fetch('<?= base_url(); ?>/lifetime/postsisaselisih3', {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                },
                body: konvv
            })
            .then(function(response) {
                // console.log(response);
                if (!response.ok === true) {
                    throw new Error(response.statusText);
                }
                return response.json();
            })
            .then(json => console.log(json));
        return rest;
    }

    let hariTujuan3 = 0;
    let jamTujuan3 = 0;
    let menitTujuan3 = 0;
    let detikTujuan3 = 0;
    const tempelLifetime3 = document.getElementById("lifetime3");
    const alarmLifetime3 = document.getElementById("alarmLifetime3");
    const satuanLifetime3 = document.getElementById("satuan3");

    async function lifeTime3() {
        try {
            const nyalaMesin_3 = await key3();
            let sakelar_M3 = nyalaMesin_3.statusM3[0].status;

            const selisihSet3 = await getSelisihLife3();

            let hari3 = selisihSet3.selisih[0].hari;
            let jam3 = selisihSet3.selisih[0].jam;
            let menit3 = selisihSet3.selisih[0].menit;
            let detik3 = selisihSet3.selisih[0].detik;

            if (sakelar_M3 === "on3") {
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


        }
        // console.log(+hariTujuan + " hari " + jamTujuan + " jam" + menitTujuan + " menit" + detikTujuan + " detik");
        catch (err) {
            console.log(err);
        }
    }

    // *lifetime mesin 4
    function getSelisihLife4() {
        return fetch('<?= base_url(); ?>/lifetime/getselisihlife4', {
                method: "get",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(response => {
                return response.json();

                if (!response.ok) {
                    throw new Error(response.statusText);
                }
            })
            .then(result => {
                // console.log(result);
                return result;
            });

    }

    async function postsisaLifeTime4(data) {
        // console.log(data);
        let konvvvv = JSON.stringify(data);
        const resta = await fetch('<?= base_url(); ?>/lifetime/postsisaselisih4', {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                },
                body: konvvv
            })
            .then(function(response) {
                // console.log(response);
                if (!response.ok === true) {
                    throw new Error(response.statusText);
                }
                return response.json();
            })
            .then(json => console.log(json));
        return resta;
    }

    let hariTujuan4 = 0;
    let jamTujuan4 = 0;
    let menitTujuan4 = 0;
    let detikTujuan4 = 0;
    const tempelLifetime4 = document.getElementById("lifetime4");
    const alarmLifetime4 = document.getElementById("alarmLifetime4");
    const satuanLifetime4 = document.getElementById("satuan4");

    async function lifeTime4() {
        try {
            const nyalaMesin_4 = await key4();
            let sakelar_M4 = nyalaMesin_4.statusM4[0].status;

            const selisihSet4 = await getSelisihLife4();

            let hari4 = selisihSet4.selisih[0].hari;
            let jam4 = selisihSet4.selisih[0].jam;
            let menit4 = selisihSet4.selisih[0].menit;
            let detik4 = selisihSet4.selisih[0].detik;

            if (sakelar_M4 === "on4") {
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


        }
        // console.log(+hariTujuan + " hari " + jamTujuan + " jam" + menitTujuan + " menit" + detikTujuan + " detik");
        catch (err) {
            console.log(err);
        }
    }
</script>

<?= $this->endSection(); ?>