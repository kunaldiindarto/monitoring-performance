<?php

namespace App\Models;

use CodeIgniter\Model;

class Minorstop3Model extends Model
{
    protected $table = 'minorstop3';
    protected $useTimestamps = true;

    protected $allowedFields = ['jam', 'menit', 'detik', 'deskripsi'];

    public function getMinorstop()
    {
        $builder = $this->builder();
        $builder->select('*');

        $data = $builder->get();
        if ($data) {
            return $data->getResult();
        }
        return false;
    }

    public function minorStop()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM minorstop3');
        $result = $query->getResultArray();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function minorStop2()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM `minorstop3` ORDER BY `minorstop3` . `id` DESC');
        $result = $query->getResultArray();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
