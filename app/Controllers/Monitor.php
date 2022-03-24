<?php

namespace App\Controllers;

use App\Models\AckModel;
use App\Models\Blink1Model;
use App\Models\Blink2Model;
use App\Models\Blink3Model;
use App\Models\Blink4Model;
use App\Models\Key1Model;
use App\Models\Key2Model;
use App\Models\Key3Model;
use App\Models\Key4Model;
use App\Models\NilaiOeeModel;
use App\Models\PressureModel;
use App\Models\Process2Model;
use App\Models\Process3Model;
use App\Models\Process4Model;
use App\Models\ProcessModel;
use App\Models\Stat1Model;
use App\Models\Stat2Model;
use App\Models\Stat3Model;
use App\Models\Stat4Model;

class Monitor extends BaseController
{
    protected $request;

    public function __construct()
    {
        $this->model = new ProcessModel();
        $this->model2 = new PressureModel();
        $this->model3 = new NilaiOeeModel();

        $this->model4 = new Stat1Model();

        $this->model5 = new AckModel();

        $this->model6 = new Blink1Model();

        $this->model7 = new Stat2Model();
        $this->model8 = new Stat3Model();
        $this->model9 = new Stat4Model();

        $this->model10 = new Blink2Model();
        $this->model11 = new Blink3Model();
        $this->model12 = new Blink4Model();

        $this->processModel2 = new Process2Model();
        $this->processModel3 = new Process3Model();
        $this->processModel4 = new Process4Model();

        $request = \Config\Services::request();
        $this->request = $request;
    }

    public function index()
    {
        return view('monitor/index');
    }
    public function getCountOutput()
    {
        $process = $this->model->getProcess();
        // dd($process[0]);
        $data = [
            // 'title' => 'nilai process',
            'process' => $process
        ];
        // $data = $process;
        // dd($data);

        // echo view('monval/product', $data);
        return json_encode($data);
    }
    public function getHasilM1()
    {
        $process = $this->model->getProcess();
        // dd($process[0]);
        $data = [
            // 'title' => 'nilai process',
            'process' => $process
        ];
        // $data = $process;
        // dd($data);

        // echo view('monval/product', $data);
        return json_encode($data);
    }
    public function getHasilM2()
    {
        $process = $this->processModel2->getProcess();
        $data = [
            'process' => $process
        ];
        return json_encode($data);
    }
    public function getHasilM3()
    {
        $process = $this->processModel3->getProcess();
        $data = [
            'process' => $process
        ];
        return json_encode($data);
    }
    public function getHasilM4()
    {
        $process = $this->processModel4->getProcess();
        $data = [
            'process' => $process
        ];
        return json_encode($data);
    }

    public function grafikLine()
    {
        $grafik = $this->model->valProcess();

        $data = [
            'value' => $grafik
        ];
        return json_encode($data);
    }
    public function grafikPressure()
    {
        $pressure = $this->model2->getPressure();
        // dd($pressure);

        $data = [
            'pressure' => $pressure
        ];
        return json_encode($data);
    }
    public function valuePressure()
    {
        $pressure = $this->model2->getPressure();
        // dd($pressure);

        $data = [
            'pressure' => $pressure
        ];
        return json_encode($data);
    }
    public function pieOee()
    {
        $nilai = $this->model3->getParameters();

        $data = [
            'nilaioee'  => $nilai
        ];
        return json_encode($data);
    }

    public function lockM1()
    {
        $key1Model = new Key1Model();
        if ($this->request->isAJAX()) {
            // $data = service('request')->getPost(['data']);
            // $request = \Config\Services::request();
            // var_dump($this->request->getPost('data'));

            $data = $this->request->getVar('key');

            if ($data == 'lockon1') {
                $pesan = 'berhasil buka kunci mesin';
            } else {
                $pesan = 'berhasil mengunci mesin';
            }

            $simpanData = [
                'key1'  => $data
            ];

            $key1Model->insert($simpanData);

            return json_encode([
                'success' => $pesan,
                'csrf'    => csrf_hash(),
                'data'    => $data,
            ]);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }
    public function lockM2()
    {
        $key2Model = new Key2Model();
        if ($this->request->isAJAX()) {
            // $data = service('request')->getPost(['data']);
            // $request = \Config\Services::request();
            // var_dump($this->request->getPost('data'));

            $data = $this->request->getVar('key');

            if ($data == 'lockon2') {
                $pesan = 'berhasil buka kunci mesin 2';
            } else {
                $pesan = 'berhasil mengunci mesin 2';
            }

            $simpanData = [
                'key2'  => $data
            ];

            $key2Model->insert($simpanData);

            return json_encode([
                'success' => $pesan,
                'csrf'    => csrf_hash(),
                'data'    => $data,
            ]);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }
    public function lockM3()
    {
        $key3Model = new Key3Model();
        if ($this->request->isAJAX()) {
            // $data = service('request')->getPost(['data']);
            // $request = \Config\Services::request();
            // var_dump($this->request->getPost('data'));

            $data = $this->request->getVar('key');

            if ($data == 'lockon3') {
                $pesan = 'berhasil buka kunci mesin 3';
            } else {
                $pesan = 'berhasil mengunci mesin 3';
            }

            $simpanData = [
                'key3'  => $data
            ];

            $key3Model->insert($simpanData);

            return json_encode([
                'success' => $pesan,
                'csrf'    => csrf_hash(),
                'data'    => $data,
            ]);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }
    public function lockM4()
    {
        $key4Model = new Key4Model();
        if ($this->request->isAJAX()) {
            // $data = service('request')->getPost(['data']);
            // $request = \Config\Services::request();
            // var_dump($this->request->getPost('data'));

            $data = $this->request->getVar('key');

            if ($data == 'lockon4') {
                $pesan = 'berhasil buka kunci mesin 4';
            } else {
                $pesan = 'berhasil mengunci mesin 4';
            }

            $simpanData = [
                'key4'  => $data
            ];

            $key4Model->insert($simpanData);

            return json_encode([
                'success' => $pesan,
                'csrf'    => csrf_hash(),
                'data'    => $data,
            ]);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function statusM1()
    {
        $stat = $this->model4->getStatusM1();

        $data = [
            'statusM1'  => $stat
        ];
        return json_encode($data);
    }


    public function statusM2()
    {
        $stat = $this->model7->getStatusM2();

        $data = [
            'statusM2'  => $stat
        ];
        return json_encode($data);
    }

    public function statusM3()
    {
        $stat = $this->model8->getStatusM3();

        $data = [
            'statusM3'  => $stat
        ];
        return json_encode($data);
    }

    public function statusM4()
    {
        $stat = $this->model9->getStatusM4();

        $data = [
            'statusM4'  => $stat
        ];
        return json_encode($data);
    }

    public function postAckPressure()
    {
        $ackModel = new AckModel();

        if ($this->request->isAJAX()) {
            // $data = $this->request->getVar();
            $name = $this->request->getVar('name');
            $role = $this->request->getVar('role');
            $pressure = $this->request->getVar('pressure');
            $status = $this->request->getVar('status');

            $saveData = [
                'name'  => $name,
                'role'  => $role,
                'alarm_status'  => $status
            ];

            $ackModel->insert($saveData);


            // lanjut query masukan ke database bikin ack dan tampilan scroll
            return json_encode([
                // 'value' => $data,
                'success'  => 'data ACK berhasil direkam',
                'role'  => $role,
                'status'    => $status,
            ]);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function getAck()
    {
        $tabel = $this->model5->getAckHistory();

        // dd($tabel);

        $data = [
            'tabel' => $tabel
        ];
        return json_encode($data);
    }

    public function getBlink1()
    {
        $blinkAlarm = $this->model6->getBlink1();

        $data = [
            'blink_1'   => $blinkAlarm,
        ];

        return json_encode($data);
    }
    public function getBlink2()
    {
        $blinkAlarm = $this->model10->getBlink2();

        $data = [
            'blink_2'   => $blinkAlarm,
        ];

        return json_encode($data);
    }
    public function getBlink3()
    {
        $blinkAlarm = $this->model11->getBlink3();

        $data = [
            'blink_3'   => $blinkAlarm,
        ];

        return json_encode($data);
    }
    public function getBlink4()
    {
        $blinkAlarm = $this->model12->getBlink4();

        $data = [
            'blink_4'   => $blinkAlarm,
        ];

        return json_encode($data);
    }
}
