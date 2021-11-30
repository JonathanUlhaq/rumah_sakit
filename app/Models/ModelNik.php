<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNik extends Model
{
    protected $table = 'kependudukan';
    protected $useTimestamps = false;
    protected $allowedFields = ['ktp'];
}
