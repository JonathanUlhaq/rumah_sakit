<?php

namespace App\Controllers;


use App\Models\ModelAntrian;
use App\Models\ModelDokter;

class User extends BaseController
{
    public function __construct()
    {
        $this->dataModel = new ModelAntrian();
        $this->dataDokter = new ModelDokter();
    }
    public function index()
    {
        $con = mysqli_connect('127.0.0.1', 'root', '', 'rumah_sakit');
        $nomor = $this->dataModel->countAllResults();
        $sql = mysqli_query($con, 'SELECT * FROM antrian ORDER BY id_antri ASC LIMIT 1');
        $row = mysqli_fetch_assoc($sql);
        $antris = 0;
        if ($nomor < 0) {
            $antris = 0;
        } elseif ($nomor > 0) {
            $antris = (int)$row['nomor_antrian'];
        }
        $data = [
            'tittle' => 'RSU Magetan',
            'jumlah' => $antris,
        ];
        return view('User/index', $data);
    }



    public function dokterjaga($id = 'ortopedi')
    {
        $dokter = $this->dataDokter->where(['spesialis' => $id])->findAll();

        $data = [
            'tittle' => 'RSU Magetan | Sejarah',
            'dokter' => $dokter,

        ];
        return view('User/dokterjaga', $data);
    }

    public function sejarah()
    {

        $data = [
            'tittle' => 'RSU Magetan | Sejarah',

        ];
        return view('User/sejarah', $data);
    }
    public function visi()
    {

        $data = [
            'tittle' => 'RSU Magetan | Visi dan Misi',

        ];
        return view('User/visi', $data);
    }
    public function kontak()
    {

        $data = [
            'tittle' => 'RSU Magetan | Kontak',

        ];
        return view('User/kontak', $data);
    }
}
