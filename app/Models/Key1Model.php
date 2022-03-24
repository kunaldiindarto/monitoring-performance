<?php

namespace App\Models;

use CodeIgniter\Model;

class Key1Model extends Model
{
    protected $table = 'key_1';
    protected $useTimestamps = true;
    protected $primaryKey = ['id'];

    protected $allowedFields = ['key1'];

    public function getKey()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM `key_1` ORDER BY `key_1` . `id` DESC");
        $result = $query->getResultArray();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
