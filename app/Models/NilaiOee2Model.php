<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiOee2Model extends Model
{
    protected $table = "nilaioee2";
    protected $primaryKey = "id";
    protected $allowedFields = ["availability", "performance", "quality", "oee", "speed_loss", "breakdown_loss", "downtime_loss", "defecttime_loss"];

    protected $useTimestamps = false;

    public function getParameters()
    {
        $builder = $this->builder();
        $builder->select('');
        $builder->orderBy('id', 'DESC');
        $data = $builder->get(1);

        if ($data) {
            return $data->getResult();
        }
        return false;
    }
}
