<?php

namespace App\Controllers;

use App\Models\AckModel;
use App\Models\Blink1Model;
use App\Models\Blink2Model;
use App\Models\Blink3Model;
use App\Models\Blink4Model;
use App\Models\Lifetime2Model;
use App\Models\Lifetime3Model;
use App\Models\Lifetime4Model;
use App\Models\LifetimeModel;
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
use App\Models\TujuanLife2Model;
use App\Models\TujuanLife3Model;
use App\Models\TujuanLife4Model;
use App\Models\TujuanLifeModel;

class Data extends BaseController
{
    public function __construct()
    {
        $this->processModel = new ProcessModel();
        $this->process2Model = new Process2Model();
        $this->process3Model = new Process3Model();
        $this->process4Model = new Process4Model();

        $this->stat1Model = new Stat1Model();
        $this->stat2Model = new Stat2Model();
        $this->stat3Model = new Stat3Model();
        $this->stat4Model = new Stat4Model();

        $this->blink1Model = new Blink1Model();
        $this->blink2Model = new Blink2Model();
        $this->blink3Model = new Blink3Model();
        $this->blink4Model = new Blink4Model();

        $this->pressureModel = new PressureModel();
        $this->nilaiOeeModel = new NilaiOeeModel();
        $this->ackModel = new AckModel();

        $this->lifetime1Model = new LifetimeModel();
        $this->lifetime2Model = new Lifetime2Model();
        $this->lifetime3Model = new Lifetime3Model();
        $this->lifetime4Model = new Lifetime4Model();

        $this->tujuanLife1Model = new TujuanLifeModel();
        $this->tujuanLife2Model = new TujuanLife2Model();
        $this->tujuanLife3Model = new TujuanLife3Model();
        $this->tujuanLife4Model = new TujuanLife4Model();
    }
    public function index()
    {
        $process1 = $this->processModel->getProcess();
        $process2 = $this->process2Model->getProcess();
        $process3 = $this->process3Model->getProcess();
        $process4 = $this->process4Model->getProcess();

        $stat1 = $this->stat1Model->getStatusM1();
        $stat2 = $this->stat2Model->getStatusM2();
        $stat3 = $this->stat3Model->getStatusM3();
        $stat4 = $this->stat4Model->getStatusM4();

        $blinkAlarm1 = $this->blink1Model->getBlink1();
        $blinkAlarm2 = $this->blink2Model->getBlink2();
        $blinkAlarm3 = $this->blink3Model->getBlink3();
        $blinkAlarm4 = $this->blink4Model->getBlink4();

        $tabel = $this->ackModel->getAckHistory();
        $pressure = $this->pressureModel->getPressure();
        $pressureGrafik = $this->pressureModel->getPressureGrafik();

        $selisihLifeTime1 = $this->lifetime1Model->getLifetime();
        $selisihLifeTime2 = $this->lifetime2Model->getLifetime();
        $selisihLifeTime3 = $this->lifetime3Model->getLifetime();
        $selisihLifeTime4 = $this->lifetime4Model->getLifetime();

        $tujuanLife1 = $this->tujuanLife1Model->getTujuan();
        $tujuanLife2 = $this->tujuanLife2Model->getTujuan();
        $tujuanLife3 = $this->tujuanLife3Model->getTujuan();
        $tujuanLife4 = $this->tujuanLife4Model->getTujuan();

        $db = \Config\Database::connect();

        $query = $db->query('SELECT * FROM (
                SELECT * FROM pressure_transmitter ORDER BY id DESC LIMIT 500
             )Var1
                ORDER BY id ASC');

        $results = $query->getResult();

        $data = [
            'process1'  => $process1,
            'process2'  => $process2,
            'process3'  => $process3,
            'process4'  => $process4,
            'stat1'     => $stat1,
            'stat2'     => $stat2,
            'stat3'     => $stat3,
            'stat4'     => $stat4,
            'blink1'    => $blinkAlarm1,
            'blink2'    => $blinkAlarm2,
            'blink3'    => $blinkAlarm3,
            'blink4'    => $blinkAlarm4,
            'selisih1'  => $selisihLifeTime1,
            'selisih2'  => $selisihLifeTime2,
            'selisih3'  => $selisihLifeTime3,
            'selisih4'  => $selisihLifeTime4,
            'tujuan1'   => $tujuanLife1,
            'tujuan2'   => $tujuanLife2,
            'tujuan3'   => $tujuanLife3,
            'tujuan4'   => $tujuanLife4,
            'tabel'     => $tabel,
            'pressure'  => $pressure,
            'pressureg' => $results,
        ];
        return json_encode($data);
    }
}
