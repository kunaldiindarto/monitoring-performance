<?php

namespace App\Models;

use CodeIgniter\Model;

class Key3Model extends Model
{
    protected $table = 'key_3';
    protected $useTimestamps = true;

    protected $allowedFields = ['key3'];
}
