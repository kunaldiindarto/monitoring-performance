<?php

namespace App\Controllers;

use App\Models\Blink1Model;
use App\Models\FailureModel;
use App\Models\Kondisi1Model;
use App\Models\LifetimeModel;
use App\Models\MaintenanceModel;
use App\Models\MinorstopModel;
use App\Models\NilaiOeeModel;
use App\Models\OeeModel;
use App\Models\OtherlossModel;
use App\Models\PerformanceModel;
use App\Models\PressureModel;
use App\Models\ProcessModel;
use App\Models\QualityModel;
use App\Models\Stat1Model;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Validation\Rules;

class Client1 extends BaseController
{
    use ResponseTrait;
    public function __construct()
    {
        $this->oeeModel = new OeeModel();
        $this->performanceModel = new PerformanceModel();
        $this->quality1Model = new QualityModel();
        $this->stat1Model = new Stat1Model();
        $this->pressureModel = new PressureModel();
        $this->lifeTime1 = new LifetimeModel();
        $this->process1 = new ProcessModel();

        $this->otherLoss1 = new OtherlossModel();
        $this->minorStop1 = new MinorstopModel();
        $this->failure1 = new FailureModel();

        $this->nilaiOee1 = new NilaiOeeModel();

        $this->maintenance1 = new MaintenanceModel();
        $this->kondisi = new Kondisi1Model();
        $this->blink = new Blink1Model();

        $this->validation =  \Config\Services::validation();
    }

    public function index()
    {
        $oee = $this->oeeModel->findAll();
        $performance = $this->performanceModel->findAll();

        $data = [
            'oee' => $oee,
            'performance' => $performance,
        ];

        return $this->respond($data);
    }

    public function loop()
    {
        $stat1 = $this->stat1Model->getStatusM1();
        $pressure = $this->pressureModel->getPressure();
        $lifeTime = $this->lifeTime1->getLifetime2();
        $minorStop = $this->minorStop1->minorStop();
        $failure = $this->failure1->failure();
        $otherLoss = $this->otherLoss1->otherloss();
        // $otherLossMP = $otherLoss['mp'];
        // $otherLossAngin = $otherLoss['angin'];
        $otherLossTotal = $otherLoss['total'];

        $process = $this->process1->getProcess();
        $quality = $this->quality1Model->findAll();

        $failure2 = $this->failure1->failure2();
        $minorStop2 = $this->minorStop1->minorStop2();
        $kondisi = $this->kondisi->getKondisi();
        $blink = $this->blink->getBlink1();


        $jam = [];
        $menit = [];
        $detik = [];

        $jamFailure = [];
        $menitFailure = [];
        $detikFailure = [];

        $jamOlMP = [];
        $menitOlMP = [];
        $detikOlMP = [];

        $jamOlAngin = [];
        $menitOlAngin = [];
        $detikOlAngin = [];

        $jamOlTotal = [];
        $menitOlTotal = [];
        $detikOlTotal = [];
        $i = 0;
        $j = 0;
        foreach ($minorStop as $row) {

            array_push($jam, $minorStop[$i]['jam']);
            array_push($menit, $minorStop[$i]['menit']);
            array_push($detik, $minorStop[$i]['detik']);
            $i++;
        }

        foreach ($failure as $row2) {
            array_push($jamFailure, $row2['jam']);
            array_push($menitFailure, $row2['menit']);
            array_push($detikFailure, $row2['detik']);
        }

        $sumJam = array_sum($jam);
        $sumMenit = array_sum($menit);
        $sumDetik = array_sum($detik);

        $sumJamFailure = array_sum($jamFailure);
        $sumMenitFailure = array_sum($menitFailure);
        $sumDetikFailure = array_sum($detikFailure);


        // foreach ($otherLossMP as $row) {
        //     array_push($jamOlMP, $row['jam']);
        //     array_push($menitOlMP, $row['menit']);
        //     array_push($detikOlMP, $row['detik']);
        // }

        // foreach ($otherLossAngin as $row2) {
        //     array_push($jamOlAngin, $row2['jam']);
        //     array_push($menitOlAngin, $row2['menit']);
        //     array_push($detikOlAngin, $row2['detik']);
        // }
        foreach ($otherLossTotal as $row3) {
            array_push($jamOlTotal, $row3['jam']);
            array_push($menitOlTotal, $row3['menit']);
            array_push($detikOlTotal, $row3['detik']);
        }


        // $sumJamOlMP = array_sum($jamOlMP);
        // $sumMenitOlMP = array_sum($menitOlMP);
        // $sumDetikOlMP = array_sum($detikOlMP);

        // $sumJamOlAngin = array_sum($jamOlAngin);
        // $sumMenitOlAngin = array_sum($menitOlAngin);
        // $sumDetikOlAngin = array_sum($detikOlAngin);

        $sumJamOlTotal = array_sum($jamOlTotal);
        $sumMenitOlTotal = array_sum($menitOlTotal);
        $sumDetikOlTotal = array_sum($detikOlTotal);

        $data = [
            'stat1' => $stat1,
            'pressure' => $pressure,
            'lifetime' => $lifeTime,
            'failure_id' => $failure2[0]['id'],
            'minorstop_id' => $minorStop2[0]['id'],
            'minorstop' => [
                'jam' => $sumJam,
                'menit' => $sumMenit,
                'detik' => $sumDetik
            ],
            'failure' => [
                'jam' => $sumJamFailure,
                'menit' => $sumMenitFailure,
                'detik' => $sumDetikFailure
            ],

            // 'otherloss_mp' => [
            //     'jam'   => $sumJamOlMP,
            //     'menit' => $sumMenitOlMP,
            //     'detik' => $sumDetikOlMP
            // ],
            // 'otherloss_angin' => [
            //     'jam'   => $sumJamOlAngin,
            //     'menit' => $sumMenitOlAngin,
            //     'detik' => $sumDetikOlAngin
            // ],
            'otherloss_total' => [
                'jam'   => $sumJamOlTotal,
                'menit' => $sumMenitOlTotal,
                'detik' => $sumDetikOlTotal
            ],
            'process'   => $process[0],
            'quality'   => $quality,
            'kondisi'   => $kondisi,
            'blink'     => $blink
        ];

        return $this->respond($data);
    }

    public function minorStop()
    {
        $failure2 = $this->failure1->failure2();
        dd($failure2[0]['id']);
    }

    public function create()
    {
        $model = $this->blink;
        $stat = $this->request->getPost('status');
        $detail = $this->request->getPost('detail');
        // $input = $this->getRequestInput($this->request);
        $data = [
            'status' => $stat,
            'detail' => $detail
        ];

        $model->insert($data);

        return $this->respondCreated($data, 201);
    }
    public function postBlink()
    {
        // !bisa ditambahkan untuk validasi
        $model = $this->blink;
        $stat = $this->request->getPost('status');
        $detail = $this->request->getPost('detail');
        // $input = $this->getRequestInput($this->request);
        $data = [
            'status' => $stat,
            'detail' => $detail
        ];

        $model->insert($data);

        return $this->respondCreated($data, 201);
    }

    public function postKondisi()
    {
        $model = $this->kondisi;
        $stat = $this->request->getPost('kondisi');
        // $input = $this->getRequestInput($this->request);
        $data = [
            'kondisi' => $stat,
            'message' => 'kondisi 1 dimasukan ke DB'
        ];

        $model->insert($data);

        return $this->respondCreated($data, 201);
    }

    public function postMaintenance()
    {

        $mtbf = $this->request->getPost('mtbf');
        $mttr = $this->request->getPost('mttr');
        // $input = $this->getRequestInput($this->request);
        $data = [
            'mtbf' => $mtbf,
            'mttr' => $mttr
        ];

        $this->maintenance1->insert($data);

        return $this->respondCreated($data, 201);
    }

    public function postOee()
    {

        $availability = $this->request->getPost('availability');
        $performance = $this->request->getPost('performance');
        $quality = $this->request->getPost('quality');
        $oee = $this->request->getPost('oee');
        $speed_loss = $this->request->getPost('speed_loss');
        $breakdown_loss = $this->request->getPost('breakdown_loss');
        $downtime_loss = $this->request->getPost('downtime_loss');
        $defecttime_loss = $this->request->getPost('defecttime_loss');

        $data = [
            'availability' => $availability,
            'performance' => $performance,
            'quality' => $quality,
            'oee'     => $oee,
            'speed_loss' => $speed_loss,
            'breakdown_loss' => $breakdown_loss,
            'downtime_loss' => $downtime_loss,
            'defecttime_loss' => $defecttime_loss,
        ];

        $this->nilaiOee1->insert($data);

        return $this->respondCreated($data, 201);
    }



    public function postLifetime()
    {
        $hari = $this->request->getPost('hari');
        $jam = $this->request->getPost('jam');
        $menit = $this->request->getPost('menit');
        $detik = $this->request->getPost('detik');

        $data = [
            'hari' => $hari,
            'jam'  => $jam,
            'menit' => $menit,
            'detik' => $detik
        ];

        if ($this->validation->run($data, 'cekLifetime') == FALSE) {
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $this->validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {
            $simpan = $this->lifeTime1->insert($data);
            if ($simpan) {
                $msg = ['message' => 'insert lifetime successfully'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }
        }
    }


    public function postOtherloss()
    {
        $jamOL = $this->request->getPost('jam');
        $menitOL = $this->request->getPost('menit');
        $detikOL = $this->request->getPost('detik');
        $deskripsiOL = $this->request->getPost('deskripsi');

        $data = [
            'jam'   => $jamOL,
            'menit' => $menitOL,
            'detik' => $detikOL,
            'deskripsi' => $deskripsiOL
        ];

        if ($this->validation->run($data, 'cek') == FALSE) {
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $this->validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {
            $simpan = $this->otherLoss1->insert($data);
            if ($simpan) {
                $msg = ['message' => 'insert otherloss successfully'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }

            // return $this->respondCreated($data, 201);
        }
    }

    public function postMinorstop()
    {
        $jamMin = $this->request->getPost('jam');
        $menitMin = $this->request->getPost('menit');
        $detikMin = $this->request->getPost('detik');
        $deskripsiMin = $this->request->getPost('deskripsi');

        $data = [
            'jam'   => $jamMin,
            'menit' => $menitMin,
            'detik' => $detikMin,
            'deskripsi' => $deskripsiMin
        ];

        if ($this->validation->run($data, 'cek') == FALSE) {
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $this->validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {
            $simpan = $this->minorStop1->insert($data);
            if ($simpan) {
                $msg = ['message' => 'insert minor stop successfully'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }

            // return $this->respondCreated($data, 201);
        }
    }

    public function postFailure()
    {
        $jamFail = $this->request->getPost('jam');
        $menitFail = $this->request->getPost('menit');
        $detikFail = $this->request->getPost('detik');
        $deskripsiFail = $this->request->getPost('deskripsi');

        $data = [
            'jam'   => $jamFail,
            'menit' => $menitFail,
            'detik' => $detikFail,
            'deskripsi' => $deskripsiFail
        ];

        if ($this->validation->run($data, 'cek') == FALSE) {
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $this->validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {
            $simpan = $this->failure1->insert($data);
            if ($simpan) {
                $msg = ['message' => 'insert failure successfully'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }

            // return $this->respondCreated($data, 201);
        }
    }
}
