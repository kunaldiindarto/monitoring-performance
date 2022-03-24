<?php

namespace App\Models;

use CodeIgniter\Model;

class Blink2Model extends Model
{
    protected $table = "blink_m2";
    protected $primaryKey = "id";
    protected $allowedFields = ["status", "detail"];

    public function getBlink2()
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
