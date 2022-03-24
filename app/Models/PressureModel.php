<?php

namespace App\Models;

use CodeIgniter\Model;

class PressureModel extends Model
{
    protected $table = "pressure_transmitter";
    protected $primaryKey = "id";
    protected $allowedFields = ["bar"];

    protected $useTimestamps = false;

    protected $db;

    public function __construct()
    {
        $builder = $this->builder();
    }

    public function getPressure()
    {
        // $this->builder->select('bar, created_at');
        // $this->builder->orderBy('created_at', 'DESC');

        $builder = $this->builder();
        $builder->select('');
        $builder->orderBy('id', 'DESC');

        $data = $this->builder->get(1);
        if ($data) {
            return $data->getResult();
        }

        return false;
    }
    public function getPressureGrafik()
    {
        // $this->builder->select('bar, created_at');
        // $this->builder->orderBy('created_at', 'DESC');


        $builder = $this->builder();
        $builder->select('');
        $builder->orderBy('id', 'DESC');
        $builder->orderBy('id', 'ASC');

        $data = $this->builder->get(20);

        // $db = \Config\Database::connect();

        // SELECT * FROM (
        //     SELECT * FROM yourTableName ORDER BY id DESC LIMIT 10
        //  )Var1
        //     ORDER BY id ASC

        // $data = $db->query("
        //     SELECT * FROM `pressure_transmitter` ORDER BY `id` DESC LIMIT 10");

        if ($data) {
            return $data;
        }

        return false;
    }
}
