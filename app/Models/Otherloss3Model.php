<?php

namespace App\Models;

use CodeIgniter\Model;

class Otherloss3Model extends Model
{
    protected $table = 'otherloss3';
    protected $useTimestamps = true;

    protected $allowedFields = ['jam', 'menit', 'detik', 'deskripsi'];

    public function getOtherloss()
    {
        $builder = $this->builder();
        $builder->select('*');

        $data = $builder->get();
        if ($data) {
            return $data->getResult();
        }
        return false;
    }

    public function otherLoss()
    {
        $db = \Config\Database::connect();
        // $query = $db->query("SELECT * FROM otherloss3 WHERE deskripsi = 'tidak ada MP'");
        // $query2 = $db->query("SELECT * FROM otherloss3 WHERE deskripsi = 'tidak ada sumber angin'");
        $query3 = $db->query("SELECT * FROM otherloss3");

        // $result = $query->getResultArray();
        // $result2 = $query2->getResultArray();
        $result3 = $query3->getResultArray();

        $data = [
            // 'mp' => $result,
            // 'angin' => $result2,
            'total' => $result3
        ];

        if ($result3) {
            return $data;
        } else {
            return false;
        }
    }
}
