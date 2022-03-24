<?php

namespace App\Models;

use CodeIgniter\Model;

class Maintenance4Model extends Model
{
    protected $table = "maintenance4";
    protected $primaryKey = "id";
    protected $allowedFields = ['mtbf', 'mttr'];

    protected $useTimestamps = false;
}
