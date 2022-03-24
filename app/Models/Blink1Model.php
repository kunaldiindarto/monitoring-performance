<?php

namespace App\Models;

use CodeIgniter\Model;

class Blink1Model extends Model
{
    protected $table = "blink_m1";
    protected $primaryKey = "id";
    protected $allowedFields = ["status", "detail"];

    public function getBlink1()
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
