<?php

namespace App\Models;

use CodeIgniter\Model;

class TujuanLife3Model extends Model
{
    protected $table = 'tujuanlifetime3';
    protected $useTimestamps = true;

    protected $allowedFields = ['tujuan'];

    public function getTujuan()
    {
        $builder = $this->builder();
        $builder->select('');
        $builder->orderBy('id', 'DESC');

        $data = $this->builder->get(1);
        if ($data) {
            return $data->getResult();
        }
        return false;
    }
}
