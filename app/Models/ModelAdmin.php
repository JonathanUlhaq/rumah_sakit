<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    protected $table = "admin";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'username', 'password', 'no_hp', 'alamat'];
}
