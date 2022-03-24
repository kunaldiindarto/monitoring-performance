<?php

namespace App\Models;

use CodeIgniter\Model;

class Failure2Model extends Model
{
    protected $table = 'failure2';
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
        $query = $db->query('SELECT * FROM failure2');


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
        $query = $db->query('SELECT * FROM `failure2` ORDER BY `failure2` . `id` DESC');
        $result = $query->getResultArray();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
