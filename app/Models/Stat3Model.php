<?php

namespace App\Models;

use CodeIgniter\Model;

class Stat3Model extends Model
{
    protected $table = "stat_3";
    protected $primaryKey = "id";
    protected $allowedFields = ["status"];

    protected $useTimestamps = false;

    public function getStatusM3()
    {
        $builder = $this->builder();
        $builder->select('');
        $builder->orderBy('created_at', 'DESC');
        $data = $builder->get(1);

        if ($data) {
            return $data->getResult();
        }
        return false;
    }
}
