<?php

namespace App\Controllers;

use App\Models\Key1Model;
use App\Models\PressureModel;
use App\Models\Process2Model;
use App\Models\Process3Model;
use App\Models\Process4Model;
use App\Models\ProcessModel;
use App\Models\Stat1Model;
use App\Models\Stat2Model;
use App\Models\Stat3Model;
use App\Models\Stat4Model;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Validation\Rules;

class General extends BaseController
{
    use ResponseTrait;

    public function __construct()
    {
        $this->key = new Key1Model();

        $this->stat1 = new Stat1Model();
        $this->stat2 = new Stat2Model();
        $this->stat3 = new Stat3Model();
        $this->stat4 = new Stat4Model();

        $this->pressure = new PressureModel();
        $this->process1 = new ProcessModel();
        $this->process2 = new Process2Model();
        $this->process3 = new Process3Model();
        $this->process4 = new Process4Model();

        $this->validation =  \Config\Services::validation();
    }
    public function index()
    {
        $key = $this->key->getKey();

        $data = [
            'key'   => $key[0]['key1']
        ];

        return $this->respond($data);
    }
    public function postStat1()
    {
        $status = $this->request->getPost('status');
        $data = [
            'status' => $status,
        ];

        if ($this->validation->run($data, 'cekStatus') == FALSE) {
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $this->validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {
            $simpan = $this->stat1->insert($data);
            if ($simpan) {
                $msg = ['message' => 'insert status mesin 1 successfully'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }
        }

        // $this->stat1->insert($data);
    }
    public function postStat2()
    {
        $status = $this->request->getPost('status');
        $data = [
            'status' => $status,
        ];

        if ($this->validation->run($data, 'cekStatus2') == FALSE) {
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $this->validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {
            $simpan = $this->stat2->insert($data);
            if ($simpan) {
                $msg = ['message' => 'insert status mesin 2 successfully'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }
        }
    }
    public function postStat3()
    {
        $status = $this->request->getPost('status');
        $data = [
            'status' => $status,
        ];

        if ($this->validation->run($data, 'cekStatus3') == FALSE) {
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $this->validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {
            $simpan = $this->stat3->insert($data);
            if ($simpan) {
                $msg = ['message' => 'insert status mesin 3 successfully'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }
        }
    }
    public function postStat4()
    {
        $status = $this->request->getPost('status');
        $data = [
            'status' => $status,
        ];

        if ($this->validation->run($data, 'cekStatus4') == FALSE) {
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $this->validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {
            $simpan = $this->stat4->insert($data);
            if ($simpan) {
                $msg = ['message' => 'insert status mesin 4 successfully'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }
        }
    }

    public function postPressure()
    {
        $pressure = $this->request->getPost('bar');
        // $input = $this->getRequestInput($this->request);
        $data = [
            'bar' => $pressure,
        ];

        $this->pressure->insert($data);

        return $this->respondCreated($data, 201);
    }

    public function postProcess()
    {
        $process = $this->request->getPost('process');
        // $input = $this->getRequestInput($this->request);
        $data = [
            'process' => $process,
        ];

        $this->process1->insert($data);

        return $this->respondCreated($data, 201);
    }

    public function postProcess2()
    {
        $process2 = $this->request->getPost('process');
        // $input = $this->getRequestInput($this->request);
        $data = [
            'process2' => $process2,
        ];

        $this->process2->insert($data);

        return $this->respondCreated($data, 201);
    }

    public function postProcess3()
    {
        $process3 = $this->request->getPost('process');
        // $input = $this->getRequestInput($this->request);
        $data = [
            'process3' => $process3,
        ];

        $this->process3->insert($data);

        return $this->respondCreated($data, 201);
    }

    public function postProcess4()
    {
        $process4 = $this->request->getPost('process');
        // $input = $this->getRequestInput($this->request);
        $data = [
            'process4' => $process4,
        ];

        $this->process4->insert($data);

        return $this->respondCreated($data, 201);
    }

    public function trial()
    {
        $db = \Config\Database::connect();
        $tableAngin = "pressure_transmitter";
        $ack = "ack";
        $key = "key_1";

        $Otherloss = "otherloss";
        $Otherloss2 = "otherloss2";
        $Otherloss3 = "otherloss3";
        $Otherloss4 = "otherloss4";

        $minorStop1 = "minorstop";
        $minorStop2 = "minorstop2";
        $minorStop3 = "minorstop3";
        $minorStop4 = "minorstop4";

        $failure = "failure";
        $failure2 = "failure2";
        $failure3 = "failure3";
        $failure4 = "failure4";

        $blink1 = "blink_m1";
        $blink2 = "blink_m2";
        $blink3 = "blink_m3";
        $blink4 = "blink_m4";

        $nilaiOee = "nilaioee";
        $nilaiOee2 = "nilaioee2";
        $nilaiOee3 = "nilaioee3";
        $nilaiOee4 = "nilaioee4";

        $maintenance = "maintenance";
        $maintenance2 = "maintenance2";
        $maintenance3 = "maintenance3";
        $maintenance4 = "maintenance4";

        $process = "process";
        $process2 = "process2";
        $process3 = "process3";
        $process4 = "process4";

        $stat_1 = "stat_1";
        $stat_2 = "stat_2";
        $stat_3 = "stat_3";
        $stat_4 = "stat_4";

        $blinkStatus = "off";
        $status1 = "tidak ada MP";
        $status2 = "tidak ada sumber Angin";
        $statusMinor = "Trouble mesin ringan";
        $statusFailure = "Trouble mesin besar";
        $statusKey1 = "lockoff1";

        $queryTruncate = $db->query("TRUNCATE TABLE $tableAngin");
        $queryTruncate = $db->query("TRUNCATE TABLE $ack");
        $queryTruncate = $db->query("TRUNCATE TABLE $key");

        $queryTruncate = $db->query("TRUNCATE TABLE $Otherloss");
        $queryTruncate = $db->query("TRUNCATE TABLE $Otherloss2");
        $queryTruncate = $db->query("TRUNCATE TABLE $Otherloss3");
        $queryTruncate = $db->query("TRUNCATE TABLE $Otherloss4");

        $queryTruncate = $db->query("TRUNCATE TABLE $minorStop1");
        $queryTruncate = $db->query("TRUNCATE TABLE $minorStop2");
        $queryTruncate = $db->query("TRUNCATE TABLE $minorStop3");
        $queryTruncate = $db->query("TRUNCATE TABLE $minorStop4");

        $queryTruncate = $db->query("TRUNCATE TABLE $failure");
        $queryTruncate = $db->query("TRUNCATE TABLE $failure2");
        $queryTruncate = $db->query("TRUNCATE TABLE $failure3");
        $queryTruncate = $db->query("TRUNCATE TABLE $failure4");

        $queryTruncate = $db->query("TRUNCATE TABLE $blink1");
        $queryTruncate = $db->query("TRUNCATE TABLE $blink2");
        $queryTruncate = $db->query("TRUNCATE TABLE $blink3");
        $queryTruncate = $db->query("TRUNCATE TABLE $blink4");

        $queryTruncate = $db->query("TRUNCATE TABLE $nilaiOee");
        $queryTruncate = $db->query("TRUNCATE TABLE $nilaiOee2");
        $queryTruncate = $db->query("TRUNCATE TABLE $nilaiOee3");
        $queryTruncate = $db->query("TRUNCATE TABLE $nilaiOee4");

        $queryTruncate = $db->query("TRUNCATE TABLE $maintenance");
        $queryTruncate = $db->query("TRUNCATE TABLE $maintenance2");
        $queryTruncate = $db->query("TRUNCATE TABLE $maintenance3");
        $queryTruncate = $db->query("TRUNCATE TABLE $maintenance4");

        $queryTruncate = $db->query("TRUNCATE TABLE $process");
        $queryTruncate = $db->query("TRUNCATE TABLE $process2");
        $queryTruncate = $db->query("TRUNCATE TABLE $process3");
        $queryTruncate = $db->query("TRUNCATE TABLE $process4");

        $queryTruncate = $db->query("TRUNCATE TABLE $stat_1");
        $queryTruncate = $db->query("TRUNCATE TABLE $stat_2");
        $queryTruncate = $db->query("TRUNCATE TABLE $stat_3");
        $queryTruncate = $db->query("TRUNCATE TABLE $stat_4");

        # ? isi dummy otherloss
        $insertSakelar = $this->key->insert(['key1' => $statusKey1]);
        $insertangin = $this->pressure->insert(['bar' => 3.25]);
        $insertquery = $db->query("INSERT INTO `$Otherloss` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$status1')");
        $insertquery = $db->query("INSERT INTO `{$Otherloss}` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$status2')");

        $insertquery = $db->query("INSERT INTO `$Otherloss2` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$status1')");
        $insertquery = $db->query("INSERT INTO `$Otherloss2` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$status2')");

        $insertquery = $db->query("INSERT INTO `$Otherloss3` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$status1')");
        $insertquery = $db->query("INSERT INTO `$Otherloss3` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$status2')");

        $insertquery = $db->query("INSERT INTO `$Otherloss4` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$status1')");
        $insertquery = $db->query("INSERT INTO `$Otherloss4` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$status2')");

        $insertquery = $db->query("INSERT INTO `$minorStop1` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$statusMinor')");
        $insertquery = $db->query("INSERT INTO `$minorStop2` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$statusMinor')");
        $insertquery = $db->query("INSERT INTO `$minorStop3` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$statusMinor')");
        $insertquery = $db->query("INSERT INTO `$minorStop4` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$statusMinor')");

        $insertquery = $db->query("INSERT INTO `$failure` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$statusFailure')");
        $insertquery = $db->query("INSERT INTO `$failure2` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$statusFailure')");
        $insertquery = $db->query("INSERT INTO `$failure3` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$statusFailure')");
        $insertquery = $db->query("INSERT INTO `$failure4` (jam, menit, detik, deskripsi) VALUES (0, 0, 1, '$statusFailure')");

        $insertquery = $db->query("INSERT INTO `$blink1` (status) VALUES ('$blinkStatus')");
        $insertquery = $db->query("INSERT INTO `$blink2` (status) VALUES ('$blinkStatus')");
        $insertquery = $db->query("INSERT INTO `$blink3` (status) VALUES ('$blinkStatus')");
        $insertquery = $db->query("INSERT INTO `$blink4` (status) VALUES ('$blinkStatus')");

        $insertquery = $db->query("INSERT INTO `$nilaiOee` (availability, performance, quality, oee, speed_loss, breakdown_loss, downtime_loss, defecttime_loss) VALUES (0, 0, 0, 0, 0, 0, 0, 0)");
        $insertquery = $db->query("INSERT INTO `$nilaiOee2` (availability, performance, quality, oee, speed_loss, breakdown_loss, downtime_loss, defecttime_loss) VALUES (0, 0, 0, 0, 0, 0, 0, 0)");
        $insertquery = $db->query("INSERT INTO `$nilaiOee3` (availability, performance, quality, oee, speed_loss, breakdown_loss, downtime_loss, defecttime_loss) VALUES (0, 0, 0, 0, 0, 0, 0, 0)");
        $insertquery = $db->query("INSERT INTO `$nilaiOee4` (availability, performance, quality, oee, speed_loss, breakdown_loss, downtime_loss, defecttime_loss) VALUES (0, 0, 0, 0, 0, 0, 0, 0)");

        $insertquery = $db->query("INSERT INTO `$maintenance` (mtbf, mttr) VALUES (1, 1)");
        $insertquery = $db->query("INSERT INTO `$maintenance2` (mtbf, mttr) VALUES (1, 1)");
        $insertquery = $db->query("INSERT INTO `$maintenance3` (mtbf, mttr) VALUES (1, 1)");
        $insertquery = $db->query("INSERT INTO `$maintenance4` (mtbf, mttr) VALUES (1, 1)");

        $insertquery = $db->query("INSERT INTO `$process` (process) VALUES (1)");
        $insertquery = $db->query("INSERT INTO `$process2` (process2) VALUES (1)");
        $insertquery = $db->query("INSERT INTO `$process3` (process3) VALUES (1)");
        $insertquery = $db->query("INSERT INTO `$process4` (process4) VALUES (1)");

        $insertquery = $db->query("INSERT INTO `$stat_1` (status) VALUES ('off1')");
        $insertquery = $db->query("INSERT INTO `$stat_2` (status) VALUES ('off2')");
        $insertquery = $db->query("INSERT INTO `$stat_3` (status) VALUES ('off3')");
        $insertquery = $db->query("INSERT INTO `$stat_4` (status) VALUES ('off4')");

        echo 'reset berhasil';
        // return view('/');
        
    }
}
