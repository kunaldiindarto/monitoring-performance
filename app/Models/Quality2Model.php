<?php

namespace App\Models;

use CodeIgniter\Model;

class Quality2Model extends Model
{
    protected $table = 'quality2';
    protected $useTimestamps = true;
    // protected $returnType     = 'array';
    protected $allowedFields = ['id', 'defect'];

    // return $this->db->get('quality');
}
