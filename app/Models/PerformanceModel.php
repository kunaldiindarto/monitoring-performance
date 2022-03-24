<?php

namespace App\Models;

use CodeIgniter\Model;

class PerformanceModel extends Model
{
    protected $table = 'performance';
    protected $useTimestamps = true;
    // protected $returnType     = 'array';
    protected $allowedFields = ['id', 'ideal_ct'];

    // return $this->db->get('quality');
}
