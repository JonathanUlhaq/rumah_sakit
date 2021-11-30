<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRiwayat extends Model
{
    protected $table      = 'riwayat_penyakit';
    protected $primaryKey = 'id_riwayat';
    protected $useTimestamps = true;
    protected $createdField  = 'tanggal_berobat';
    protected $allowedFields = ['nama_pasien', 'nomor_rm', 'riwayat_penyakit', 'nomor_rm', 'spesialis'];


    public function search($keyword)
    {
        return $this->table('riwayat_penyakit')->like('nama_pasien', $keyword)->orlike('nomor_rm', $keyword)->orlike('riwayat_penyakit', $keyword);
    }
}
