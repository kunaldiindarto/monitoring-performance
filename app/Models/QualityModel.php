<?php

namespace App\Models;

use CodeIgniter\Model;

class QualityModel extends Model
{
    protected $table = 'quality';
    protected $useTimestamps = true;
    // protected $returnType     = 'array';
    protected $allowedFields = ['id', 'defect'];

    // return $this->db->get('quality');
}
