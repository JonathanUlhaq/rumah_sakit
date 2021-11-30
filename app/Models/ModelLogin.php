<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
    protected $table = 'admin';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'nomor_hp', 'alamat'];
}
