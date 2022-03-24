<?php

namespace App\Controllers;

use App\Models\Blink1Model;
use App\Models\Blink2Model;
use App\Models\Blink3Model;
use App\Models\Blink4Model;
use App\Models\Lifetime2Model;
use App\Models\Lifetime3Model;
use App\Models\Lifetime4Model;
use App\Models\LifetimeModel;
use App\Models\NilaiOee2Model;
use App\Models\NilaiOee3Model;
use App\Models\NilaiOee4Model;
use App\Models\NilaiOeeModel;
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

class Mesin extends BaseController
{
    public function __construct()
    {
        $this->oeeM1 = new NilaiOeeModel();

        $this->processModel = new ProcessModel();
        $this->stat1Model = new Stat1Model();
        $this->blink1Model = new Blink1Model();
        $this->lifetime1Model = new LifetimeModel();

        $this->tujuanLife1Model = new TujuanLifeModel();
        // todo----------------------------------
        $this->oeeM2 = new NilaiOee2Model();

        $this->process2Model = new Process2Model();
        $this->stat2Model = new Stat2Model();
        $this->blink2Model = new Blink2Model();
        $this->lifetime2Model = new Lifetime2Model();
        $this->tujuanLife2Model = new TujuanLife2Model();
        // todo----------------------------------
        $this->oeeM3 = new NilaiOee3Model();

        $this->process3Model = new Process3Model();
        $this->stat3Model = new Stat3Model();
        $this->blink3Model = new Blink3Model();
        $this->lifetime3Model = new Lifetime3Model();
        $this->tujuanLife3Model = new TujuanLife3Model();
        // todo----------------------------------
        $this->oeeM4 = new NilaiOee4Model();

        $this->process4Model = new Process4Model();
        $this->stat4Model = new Stat4Model();
        $this->blink4Model = new Blink4Model();
        $this->lifetime4Model = new Lifetime4Model();
        $this->tujuanLife4Model = new TujuanLife4Model();
    }

    public function index()
    {
        return view('mesin/index');
    }

    public function m1()
    {
        return view('mesin/m1');
    }

    public function m2()
    {

        return view('mesin/m2');
    }

    public function m3()
    {

        return view('mesin/m3');
    }

    public function m4()
    {

        return view('mesin/m4');
    }

    public function m1Data()
    {
        $process = $this->processModel->getProcess();
        $stat1 = $this->stat1Model->getStatusM1();
        $blinkAlarm1 = $this->blink1Model->getBlink1();
        $selisihLifeTime1 = $this->lifetime1Model->getLifetime();
        $tujuanLife1 = $this->tujuanLife1Model->getTujuan();

        $oeeParameter = $this->oeeM1->getParameters();

        // ? ambil 20 data untuk grafik mtbf dan mttr (cara barbar buat ngambil 20 data)
        $db = \Config\Database::connect();

        $query = $db->query('SELECT * FROM (
            SELECT * FROM maintenance ORDER BY id DESC LIMIT 50
            )Var1
            ORDER BY id ASC');

        $query2 = $db->query('SELECT * FROM (
            SELECT * FROM process ORDER BY id DESC LIMIT 200
            )Var1
            ORDER BY id ASC');

        $maintenance1 = $query->getResult();
        $grafikProcess1 = $query2->getResult();

        $data = [
            'process'   => $process,
            'process2'  => $grafikProcess1,
            'stat1'    => $stat1,
            'blink1'     => $blinkAlarm1,
            'oee'       => $oeeParameter,
            'selisih1'  => $selisihLifeTime1,
            'tujuan1'   => $tujuanLife1,
            'maintenance' => $maintenance1
        ];

        return json_encode($data);
    }

    public function m2Data()
    {
        $process = $this->process2Model->getProcess();
        $stat2 = $this->stat2Model->getStatusM2();
        $blinkAlarm2 = $this->blink2Model->getBlink2();
        $selisihLifeTime2 = $this->lifetime2Model->getLifetime();
        $tujuanLife2 = $this->tujuanLife2Model->getTujuan();

        $oeeParameter = $this->oeeM2->getParameters();

        // ? ambil 20 data untuk grafik mtbf dan mttr (cara barbar buat ngambil 20 data)
        $db = \Config\Database::connect();

        $query = $db->query('SELECT * FROM (
            SELECT * FROM maintenance2 ORDER BY id DESC LIMIT 50
            )Var1
            ORDER BY id ASC');

        $query2 = $db->query('SELECT * FROM (
            SELECT * FROM process2 ORDER BY id DESC LIMIT 200
            )Var1
            ORDER BY id ASC');

        $maintenance2 = $query->getResult();
        $grafikProcess2 = $query2->getResult();

        $data = [
            'process'   => $process,
            'process2'  => $grafikProcess2,
            'stat1'    => $stat2,
            'blink1'     => $blinkAlarm2,
            'oee'       => $oeeParameter,
            'selisih1'  => $selisihLifeTime2,
            'tujuan1'   => $tujuanLife2,
            'maintenance' => $maintenance2
        ];

        return json_encode($data);
    }

    public function m3Data()
    {
        $process = $this->process3Model->getProcess();
        $stat3 = $this->stat3Model->getStatusM3();
        $blinkAlarm3 = $this->blink3Model->getBlink3();
        $selisihLifeTime3 = $this->lifetime3Model->getLifetime();
        $tujuanLife3 = $this->tujuanLife3Model->getTujuan();

        $oeeParameter = $this->oeeM3->getParameters();

        // ? ambil 20 data untuk grafik mtbf dan mttr (cara barbar buat ngambil 20 data)
        $db = \Config\Database::connect();

        $query = $db->query('SELECT * FROM (
                SELECT * FROM maintenance3 ORDER BY id DESC LIMIT 200
             )Var1
                ORDER BY id ASC');

        $query2 = $db->query('SELECT * FROM (
                SELECT * FROM process3 ORDER BY id DESC LIMIT 200
             )Var1
                ORDER BY id ASC');

        $maintenance3 = $query->getResult();
        $grafikProcess3 = $query2->getResult();

        $data = [
            'process'   => $process,
            'process2'  => $grafikProcess3,
            'stat1'    => $stat3,
            'blink1'     => $blinkAlarm3,
            'oee'       => $oeeParameter,
            'selisih1'  => $selisihLifeTime3,
            'tujuan1'   => $tujuanLife3,
            'maintenance' => $maintenance3
        ];

        return json_encode($data);
    }

    public function m4Data()
    {
        $process = $this->process4Model->getProcess();
        $stat4 = $this->stat4Model->getStatusM4();
        $blinkAlarm4 = $this->blink4Model->getBlink4();
        $selisihLifeTime4 = $this->lifetime4Model->getLifetime();
        $tujuanLife4 = $this->tujuanLife4Model->getTujuan();

        $oeeParameter = $this->oeeM4->getParameters();

        // ? ambil 20 data untuk grafik mtbf dan mttr (cara barbar buat ngambil 20 data)
        $db = \Config\Database::connect();

        $query = $db->query('SELECT * FROM (
                SELECT * FROM maintenance4 ORDER BY id DESC LIMIT 200
             )Var1
                ORDER BY id ASC');

        $query2 = $db->query('SELECT * FROM (
                SELECT * FROM process4 ORDER BY id DESC LIMIT 20
             )Var1
                ORDER BY id ASC');


        $maintenance = $query->getResult();
        $grafikProcess = $query2->getResult();

        $data = [
            'process'   => $process,
            'process2'  => $grafikProcess,
            'stat1'    => $stat4,
            'blink1'     => $blinkAlarm4,
            'oee'       => $oeeParameter,
            'selisih1'  => $selisihLifeTime4,
            'tujuan1'   => $tujuanLife4,
            'maintenance' => $maintenance
        ];

        return json_encode($data);
    }
}
