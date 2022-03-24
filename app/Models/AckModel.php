<?php

namespace App\Models;

use CodeIgniter\Model;

class AckModel extends Model
{
    protected $table = 'ack';
    protected $useTimestamps = true;

    protected $allowedFields = ['name', 'role', 'alarm_status'];

    public function getAckHistory()
    {
        $builder = $this->builder();
        $data = $builder->get();

        if ($data) {
            return $data->getResult();
        }

        return false;
    }
}
