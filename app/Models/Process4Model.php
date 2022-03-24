<?php

namespace App\Models;

use CodeIgniter\Model;

class Process4Model extends Model
{
    protected $table = "process4";
    protected $primaryKey = "id";
    protected $allowedFields = ["process4"];

    protected $useTimestamps = false;

    public function getProcess()
    {
        $builder = $this->builder();
        $builder->select('process4');
        $builder->orderBy('id', 'DESC');
        $data = $builder->get();
        if ($data) {
            return $data->getResult();
        }
        return false;
    }

    public function valProcess()
    {
        $builder = $this->builder();
        $builder->select('process, created_at');
        $builder->orderBy('created_at', 'ASC');
        $data = $builder->get();
        if ($data) {
            return $data->getResult();
        }
        return false;
    }
}
