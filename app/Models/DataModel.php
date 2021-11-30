<?php

namespace App\Models;

use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table      = 'pasien';
    protected $primaryKey = 'id_pasien';
    protected $useTimestamps = true;
    protected $createdField  = 'tanggal_berobat';
    protected $allowedFields = ['Alamat', 'nomor_rm', 'nik', 'nama_pasien', 'jenis_kelamin', 'tanggal_lahir', 'nomor_telepon', 'nomor_bpjs'];
    protected $db;



    public function search($keyword)
    {
        return $this->table('pasien')->like('nama_pasien', $keyword)->orlike('jenis_kelamin', $keyword)->orlike('tanggal_lahir', $keyword);
    }
}
