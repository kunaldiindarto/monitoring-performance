<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

use App\Models\Blink4Model;
use App\Models\Oee4Model;
use App\Models\Performance4Model;
use App\Models\PressureModel;
use App\Models\Quality4Model;
use App\Models\Stat4Model;


header('Access-Control-Allow-Origin: *');

class Webservice extends ResourceController
{
    use ResponseTrait;
    protected $format = 'json';
    protected $modelName = 'App\Models\Blink4Model';
    public function __construct()
    {
        $this->oeeModel = new Oee4Model();
        $this->qualityModel = new Quality4Model();
        $this->performanceModel = new Performance4Model();
        $this->stat4Model = new Stat4Model();
        $this->pressureModel = new PressureModel();

        $this->blink4Model = new Blink4Model();
    }
    public function index()
    {
        $oee = $this->oeeModel->findAll();
        $quality   = $this->qualityModel->findAll();
        $performance = $this->performanceModel->findAll();
        $stat4 = $this->stat4Model->getStatusM4();
        $pressure = $this->pressureModel->getPressure();

        $data = [
            'oee' => $oee,
            'performance' => $performance,
            'stat4' => $stat4,
            'pressure' => $pressure
        ];

        return $this->respond($data);
    }
    public function create()
    {
        $model = new Blink4Model();
        $data = [
            'status' => $this->request->getPost('status'),
            'detail' => $this->request->getPost('detail')
        ];
        // $data = json_decode(file_get_contents("php://input"));
        // $data = $this->request->getPost();
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Saved'
            ]
        ];

        return $this->respondCreated($data, 201);
    }
}
