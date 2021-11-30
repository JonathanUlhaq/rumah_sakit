<?php

namespace App\Models;


use CodeIgniter\Model;

class ModelDokter extends Model
{
    protected $table      = 'dokter';
    protected $primaryKey = 'id_dokter';
    protected $useTimestamps = true;
    protected $allowedFields = ['nip', 'nama_dokter', 'spesialis', 'foto', 'hari_jaga', 'pukul_jaga'];




    public function search($keyword)
    {
        return $this->table('dokter')->like('nip', $keyword)->orlike('nama_dokter', $keyword)->orlike('spesialis', $keyword);
    }
}
