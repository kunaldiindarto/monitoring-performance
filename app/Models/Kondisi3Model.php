<?php

namespace App\Models;

use CodeIgniter\Model;

class Kondisi3Model extends Model
{
    protected $table = 'kondisi3';
    protected $useTimestamps = true;
    protected $primaryKey = ['id'];

    protected $allowedFields = ['kondisi'];

    public function getKondisi()
    {
        $builder = $this->builder();
        $builder->select('kondisi');
        $builder->orderBy('id', 'DESC');
        $data = $builder->get(1);
        if ($data) {
            return $data->getResult();
        }
        return false;
    }
}
