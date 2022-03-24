<?php

namespace App\Models;

use CodeIgniter\Model;

class Maintenance2Model extends Model
{
    protected $table = "maintenance2";
    protected $primaryKey = "id";
    protected $allowedFields = ["mtbf", "mttr"];

    protected $useTimestamps = false;
}
