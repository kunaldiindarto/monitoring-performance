<?php

namespace App\Models;

use CodeIgniter\Model;

class Blink3Model extends Model
{
    protected $table = "blink_m3";
    protected $primaryKey = "id";
    protected $allowedFields = ["status", "detail"];

    public function getBlink3()
    {
        $builder = $this->builder();
        $builder->select('');
        $builder->orderBy('id', 'DESC');

        $data  = $this->builder->get(1);
        if ($data) {
            return $data->getResult();
        }

        return false;
    }
}
