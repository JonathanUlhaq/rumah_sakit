<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\ModelSpesialis;

class PasienUmum extends BaseController
{
    public function __construct()
    {
        $this->dataModel = new DataModel();
        $this->dataSpesialis = new ModelSpesialis();
    }
    public function index()
    {
        $currentPage = $this->request->getVar('pagers') ? $this->request->getVar('pagers')  : 1;

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $pasien = $this->dataModel->search($keyword);
        } else {
            $pasien = $this->dataModel;
        }

        $data = [
            'tittle' => 'Admin | Data Pasien RSU Magetan',
            'dataa' => $pasien->paginate(5, 'pasien'),
            'pager' => $this->dataModel->pager,
            'nav' => 'Data Pasien RSU Magetan',
            'currentPage' => $currentPage
        ];
        return view('PasienUmum/index', $data);
    }




    public function detail($id)
    {
        $data = [
            'tittle' => 'Admin | Data Pasien RSU Magetan',
            'dataa' => $this->dataModel->where(['id_pasien' => $id])->first(),
            'nav' => 'Data Pasien RSU Magetan > Detail '
        ];
        return view('PasienUmum/detail', $data);
    }

    public function edit($id)
    {

        $data = [
            'tittle' => 'Admin | Data Pasien RSU Magetan',
            'validation' => \Config\Services::validation(),
            'dataa' => $this->dataModel->where(['id_pasien' => $id])->first(),
            'poli' => $this->dataSpesialis->findAll(),
            'nav' => 'Data Pasien RSU Magetan > Detail > Ubah',
            'navv' => 'Data Pasien RSU Magetan '
        ];
        return view('PasienUmum/update', $data);
    }

    public function update($id)
    {

        if (!$this->validate([

            'nik' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => '{field} Mohon di isi',
                    'decimal' => '{field} Mohon diisi Numerik'
                ]
            ],
            'nama_pasien' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ],
            'Alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ],
            'nomor_telepon' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => '{field} Mohon di isi',
                    'decimal' => '{field} Mohon diisi Numerik'
                ]
            ]


        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/PasienUmum/edit/' . $this->request->getVar('id_pasien'))->withInput()->with('validation', $validation);
        };

        $random = rand(1, 500);

        $this->dataModel->save([
            'id_pasien' => $id,
            'nik' => $this->request->getVar('nik'),
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'nomor_telepon' => $this->request->getVar('nomor_telepon'),
            'nomor_bpjs' => $this->request->getVar('nomor_bpjs'),
            'Alamat' => $this->request->getVar('Alamat'),
            'nomor_rm' => $random,
            'spesialis' => $this->request->getVar('spesialis'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/umum');
    }

    public function delete($id)
    {
        $this->dataModel->delete($id);
        session()->setFlashdata('delete', 'Data berhasil dihapus');
        return redirect()->to('/umum');
    }
}
