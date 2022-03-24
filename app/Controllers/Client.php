<?php

namespace App\Controllers;

use App\Models\Blink4Model;
use App\Models\Failure4Model;
use App\Models\Kondisi4Model;
use App\Models\Lifetime4Model;
use App\Models\Maintenance4Model;
use App\Models\Minorstop4Model;
use App\Models\NilaiOee4Model;
use App\Models\Oee4Model;
use App\Models\Otherloss4Model;
use App\Models\Performance4Model;
use App\Models\PressureModel;
use App\Models\Process4Model;
use App\Models\Quality4Model;
use App\Models\Stat4Model;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Validation\Rules;

class Client extends BaseController
{
    use ResponseTrait;
    public function __construct()
    {
        $this->oeeModel = new Oee4Model();
        $this->performanceModel = new Performance4Model();
        $this->quality4Model = new Quality4Model();
        $this->stat4Model = new Stat4Model();
        $this->pressureModel = new PressureModel();
        $this->lifeTime4 = new Lifetime4Model();
        $this->process4 = new Process4Model();

        $this->otherLoss4 = new Otherloss4Model();
        $this->minorStop4 = new Minorstop4Model();
        $this->failure4 = new Failure4Model();

        $this->nilaiOee4 = new NilaiOee4Model();

        $this->maintenance4 = new Maintenance4Model();
        $this->kondisi4 = new Kondisi4Model();
        $this->blink = new Blink4Model();


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
        $stat4 = $this->stat4Model->getStatusM4();
        $pressure = $this->pressureModel->getPressure();
        $lifeTime = $this->lifeTime4->getLifetime2();
        $minorStop = $this->minorStop4->minorStop();
        $failure = $this->failure4->failure();
        $otherLoss = $this->otherLoss4->otherloss();
        // $otherLossMP = $otherLoss['mp'];
        // $otherLossAngin = $otherLoss['angin'];
        $otherlossTotal = $otherLoss['total'];

        $process = $this->process4->getProcess();
        $quality = $this->quality4Model->findAll();

        $failure2 = $this->failure4->failure2();
        $minorStop2 = $this->minorStop4->minorStop2();
        $kondisi = $this->kondisi4->getKondisi();
        $blink = $this->blink->getBlink4();


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


        foreach ($otherlossTotal as $row3) {
            array_push($jamOlTotal, $row3['jam']);
            array_push($menitOlTotal, $row3['menit']);
            array_push($detikOlTotal, $row3['detik']);
        }

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

        $sumJamOlTotal = array_sum($jamOlTotal);
        $sumMenitOlTotal = array_sum($menitOlTotal);
        $sumDetikOlTotal = array_sum($detikOlTotal);

        // $sumJamOlMP = array_sum($jamOlMP);
        // $sumMenitOlMP = array_sum($menitOlMP);
        // $sumDetikOlMP = array_sum($detikOlMP);

        // $sumJamOlAngin = array_sum($jamOlAngin);
        // $sumMenitOlAngin = array_sum($menitOlAngin);
        // $sumDetikOlAngin = array_sum($detikOlAngin);

        $data = [
            'stat4' => $stat4,
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
        $failure2 = $this->failure4->failure2();
        dd($failure2[0]['id']);
    }

    public function create()
    {
        $model = new Blink4Model();
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
        $model = $this->kondisi4;
        $stat = $this->request->getPost('kondisi');
        // $input = $this->getRequestInput($this->request);
        $data = [
            'kondisi' => $stat,
            'message' => 'kondisi 4 dimasukan ke DB'
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

        $this->maintenance4->insert($data);

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

        $this->nilaiOee4->insert($data);

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
            $simpan = $this->lifeTime4->insert($data);
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
            $simpan = $this->otherLoss4->insert($data);
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
            $simpan = $this->minorStop4->insert($data);
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
            $simpan = $this->failure4->insert($data);
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
