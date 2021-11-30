<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAntrian extends Model
{
    protected $table      = 'antrian';
    protected $primaryKey = 'id_antri';
    protected $useTimestamps = true;
    protected $createdField  = 'tanggal_berobat';
    protected $allowedFields = ['nama_pasien', 'nomor_antrian', 'estimasi_waktu'];

    public function search($keyword)
    {
        return $this->table('riwayat_penyakit')->like('nama_pasien', $keyword)->orlike('nomor_antrian', $keyword);
    }
}
