<?php

namespace App\Models;

use CodeIgniter\Model;

class Performance3Model extends Model
{
    protected $table = 'performance3';
    protected $useTimestamps = true;
    // protected $returnType     = 'array';
    protected $allowedFields = ['id', 'ideal_ct'];

    // return $this->db->get('quality');
}
