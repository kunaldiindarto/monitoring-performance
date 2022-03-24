<?php

namespace App\Models;

use CodeIgniter\Model;

class Blink4Model extends Model
{
    protected $table = "blink_m4";
    protected $primaryKey = "id";
    protected $allowedFields = ["status", "detail"];

    public function getBlink4()
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
