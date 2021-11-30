<?php

namespace App\Controllers;

use App\Models\ModelSpesialis;


class Spesialis extends BaseController
{
    public function __construct()
    {
        $this->dataModel = new ModelSpesialis();
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
            'tittle' => 'Admin | Data Spesialis',
            'nav' => 'Data Spesialis',
            'dataa' => $dokter->paginate(5, 'spesialis'),
            'pager' => $this->dataModel->pager,
            'currentPage' => $currentPage
        ];
        return view('Spesialis/index', $data);
    }


    public function edit($id)
    {

        $data = [
            'tittle' => 'Admin | Edit Spesialis',
            'validation' => \Config\Services::validation(),
            'dataa' => $this->dataModel->where(['id_spesialis' => $id])->first(),
            'nav' => 'Data Spesialis > Ubah'
        ];
        return view('Spesialis/update', $data);
    }

    public function update($id)
    {

        if (!$this->validate([

            'spesialis' => [
                'rules' => ['required'],
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/Spesialis/edit/' . $this->request->getVar('id_spesialis'))->withInput()->with('validation', $validation);
        };

        $this->dataModel->save([
            'id_spesialis' => $id,
            'spesialis' => $this->request->getVar('spesialis')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/poli');
    }

    public function delete($id)
    {
        $this->dataModel->delete($id);
        session()->setFlashdata('delete', 'Data berhasil dihapus');
        return redirect()->to('/poli');
    }

    public function create()
    {
        $data = [
            'tittle' => 'Admin | Tambah Data Dokter Jaga',
            'validation' => \Config\Services::validation(),
            'nav' => 'Data Spesialis > Tambah Data'
        ];
        return view('Spesialis/create', $data);
    }

    public function tambah()
    {
        if (!$this->validate([

            'spesialis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/Spesialis/create')->withInput()->with('validation', $validation);
        };

        $this->dataModel->save([
            'spesialis' => $this->request->getVar('spesialis')
        ]);
        session()->setFlashdata('yes', 'Data berhasil ditambah');
        return redirect()->to('/poli');
    }
}
