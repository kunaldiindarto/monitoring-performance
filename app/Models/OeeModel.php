<?php

namespace App\Models;

use CodeIgniter\Model;

class OeeModel extends Model
{
    protected $table = 'oee';
    protected $useTimestamps = true;
    // protected $returnType     = 'array';
    protected $allowedFields = ['total_av', 'pldt', 'setup_loss', 'set_adjustment', 'shutdown_loss'];
}
