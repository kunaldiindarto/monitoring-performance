<?php

namespace App\Models;

use CodeIgniter\Model;

class Lifetime4Model extends Model
{
    protected $table = "setlifetime4";
    protected $primaryKey = "id";
    protected $allowedFields = ["hari", "jam", "menit", "detik"];

    protected $useTimestamps = true;

    public function getLifetime()
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

    public function getLifetime2()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM `setlifetime4` ORDER BY `setlifetime4` . `id` DESC');

        $row = $query->getRow(0);
        $rowHari = $row->hari;
        $rowJam = $row->jam;
        $rowMenit = $row->menit;
        $rowDetik = $row->detik;

        $data = [
            'hari' => $rowHari,
            'jam'  => $rowJam,
            'menit' => $rowMenit,
            'detik' => $rowDetik
        ];

        return $data;
    }
}
