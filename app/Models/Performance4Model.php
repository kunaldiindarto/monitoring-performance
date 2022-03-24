<?php

namespace App\Models;

use CodeIgniter\Model;

class Performance4Model extends Model
{
    protected $table = 'performance4';
    protected $useTimestamps = true;
    // protected $returnType     = 'array';
    protected $allowedFields = ['id', 'ideal_ct'];

    // return $this->db->get('quality');
}
