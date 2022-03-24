<?php

namespace App\Models;

use CodeIgniter\Model;

class Oee4Model extends Model
{
    protected $table = 'oee4';
    protected $useTimestamps = true;
    // protected $returnType     = 'array';
    protected $allowedFields = ['total_av', 'pldt', 'setup_loss', 'set_adjustment', 'shutdown_loss'];
}
