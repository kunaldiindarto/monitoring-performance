<?php

namespace App\Models;

use CodeIgniter\Model;

class Quality3Model extends Model
{
    protected $table = 'quality3';
    protected $useTimestamps = true;
    // protected $returnType     = 'array';
    protected $allowedFields = ['id', 'defect'];

    // return $this->db->get('quality');
}
