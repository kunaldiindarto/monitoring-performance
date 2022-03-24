<?php

namespace App\Models;

use CodeIgniter\Model;

class Failure4Model extends Model
{
    protected $table = 'failure4';
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
        $query = $db->query('SELECT * FROM failure4');


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
        $query = $db->query('SELECT * FROM `failure4` ORDER BY `failure4` . `id` DESC');
        $result = $query->getResultArray();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
