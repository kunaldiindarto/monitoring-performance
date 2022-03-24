<?php

namespace App\Models;

use CodeIgniter\Model;

class Quality4Model extends Model
{
    protected $table = 'quality4';
    protected $useTimestamps = true;
    // protected $returnType     = 'array';
    protected $allowedFields = ['id', 'defect'];

    // return $this->db->get('quality');
}
