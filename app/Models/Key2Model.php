<?php

namespace App\Models;

use CodeIgniter\Model;

class Key2Model extends Model
{
    protected $table = 'key_2';
    protected $useTimestamps = true;

    protected $allowedFields = ['key2'];
}
