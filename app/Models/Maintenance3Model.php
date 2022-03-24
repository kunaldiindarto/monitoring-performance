<?php

namespace App\Models;

use CodeIgniter\Model;

class Maintenance3Model extends Model
{
    protected $table = "maintenance3";
    protected $primaryKey = "id";
    protected $allowedFields = ["mtbf", "mttr"];

    protected $useTimestamps = false;
}
