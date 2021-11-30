<?php

namespace App\Controllers;

use App\Models\ModelRiwayat;
use App\Models\DataModel;


class RiwayatPasien extends BaseController
{
    public function __construct()
    {
        $this->dataModel = new ModelRiwayat();
        $this->dataPasien = new DataModel();
    }
    public function index()
    {
        $currentPage = $this->request->getVar('pagers') ? $this->request->getVar('pagers')  : 1;

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $dokter = $this->dataModel->search($keyword);
        } else {
            $dokter = $this->dataModel;
        }
        $data = [
            'tittle' => 'Admin | Riwayat Pasien Umum',
            'nav' => 'Data Riwayat Pasien Umum',
            'dataa' => $dokter->paginate(5, 'riwayat_penyakit'),
            'pager' => $this->dataModel->pager,
            'currentPage' => $currentPage
        ];
        return view('RiwayatPasien/index', $data);
    }

    public function edit($id)
    {

        $data = [
            'tittle' => 'Admin | Edit Pasien Umum',
            'validation' => \Config\Services::validation(),
            'dataa' => $this->dataModel->where(['id_riwayat' => $id])->first(),
            'passien' => $this->dataPasien->findAll(),
            'nav' => 'Data Riwayat Pasien Umum > Ubah'

        ];
        return view('RiwayatPasien/update', $data);
    }

    public function update($id)
    {

        if (!$this->validate([

            'nomor_rm' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => '{field} Mohon di isi',
                    'decimal' => '{field} Mohon diisi Numerik'
                ]
            ],
            'riwayat_penyakit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ],
            'nama_pasien' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/RiwayatPasien/edit/' . $this->request->getVar('id_riwayat'))->withInput()->with('validation', $validation);
        };

        $this->dataModel->save([
            'id_riwayat' => $id,
            'nomor_rm' => $this->request->getVar('nomor_rm'),
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'riwayat_penyakit' => $this->request->getVar('riwayat_penyakit'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/riwayatumum');
    }


    public function delete($id)
    {
        $this->dataModel->delete($id);
        session()->setFlashdata('delete', 'Data berhasil dihapus');
        return redirect()->to('/riwayatumum');
    }
}
