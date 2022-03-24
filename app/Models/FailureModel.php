<?php

namespace App\Models;

use CodeIgniter\Model;

class FailureModel extends Model
{
    protected $table = 'failure';
    protected $useTimestamps = true;

    protected $allowedFields = ['jam', 'menit', 'detik', 'deskripsi'];

    public function getFailure()
    {
        $builder = $this->builder();
        $builder->select('*');

        $data = $builder->get();
        if ($data) {
            return $data->getResult();
        }
        return false;
    }


    public function failure()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM failure');


        $result = $query->getResultArray();


        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function failure2()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM `failure` ORDER BY `failure` . `id` DESC');
        $result = $query->getResultArray();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
