<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSpesialis extends Model
{
    protected $table      = 'spesialis';
    protected $primaryKey = 'id_spesialis';
    protected $useTimestamps = true;
    protected $allowedFields = ['spesialis'];

    public function search($keyword)
    {
        return $this->table('spesialis')->like('spesialis', $keyword);
    }
}
