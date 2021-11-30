<?php

namespace App\Controllers;

use App\Models\ModelDokter;
use App\Models\ModelSpesialis;

class DokterJaga extends BaseController
{
    public function __construct()
    {
        $this->dataModel = new ModelDokter();
        $this->dataSpesialis = new ModelSpesialis();
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
            'tittle' => 'Admin | Data Dokter Jaga',
            'nav' => 'Data Dokter Jaga',
            'dataa' => $dokter->paginate(5, 'dokter'),
            'pager' => $this->dataModel->pager,
            'currentPage' => $currentPage
        ];
        return view('DokterJaga/index', $data);
    }


    public function edit($id)
    {

        $data = [
            'tittle' => 'Admin | Edit Dokter Jaga',
            'validation' => \Config\Services::validation(),
            'dataa' => $this->dataModel->where(['id_dokter' => $id])->first(),
            'poli' => $this->dataSpesialis->findAll(),
            'nav' => 'Data Dokter Jaga > Ubah'
        ];
        return view('DokterJaga/update', $data);
    }

    public function update($id)
    {
        $dataLama = $this->dataModel->where(['id_dokter' => $id])->first();
        if ($dataLama['nip'] == $this->request->getVar('nip')) {
            $rule = 'required|decimal';
        } else {
            $rule = 'required|is_unique[dokter.nip]|decimal';
        }

        if (!$this->validate([

            'nip' => [
                'rules' => $rule,
                'errors' => [
                    'required' => '{field} Mohon di isi',
                    'is_unique' => '{field} NIK sudah terdaftar',
                    'decimal' => '{field} Mohon diisi Numerik'
                ]
            ],
            'nama_dokter' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ],
            'spesialis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ],
            'hari_jaga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ],
            'pukul_jaga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,8048]',
                'errors' => [
                    'uploaded' => 'Foto Harus di upload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 8 MB'
                ]

            ]

        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/DokterJaga/edit/' . $this->request->getVar('id_dokter'))->withInput()->with('validation', $validation);
        };
        $fotos = $this->request->getFile('foto');
        $photo = $fotos->getRandomName();

        $this->dataModel->save([
            'id_dokter' => $id,
            'nip' => $this->request->getVar('nip'),
            'nama_dokter' => $this->request->getVar('nama_dokter'),
            'spesialis' => $this->request->getVar('spesialis'),
            'pukul_jaga' => $this->request->getVar('pukul_jaga'),
            'hari_jaga' => $this->request->getVar('hari_jaga'),
            'foto' => $photo
        ]);
        $fotos->move('uploads/foto/', $photo);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/dokter');
    }

    public function delete($id)
    {
        $dataa = $this->dataModel->where(['id_dokter' => $id])->first();
        $fotoss = $dataa['foto'];
        if (file_exists(('uploads/foto/' . $fotoss))) {
            unlink('uploads/foto/' . $fotoss);
        }
        $this->dataModel->delete($id);
        session()->setFlashdata('delete', 'Data berhasil dihapus');
        return redirect()->to('/dokter');
    }

    public function create()
    {
        $data = [
            'tittle' => 'Admin | Tambah Data Dokter Jaga',
            'validation' => \Config\Services::validation(),
            'poli' => $this->dataSpesialis->findAll(),
            'nav' => 'Data Dokter Jaga > Tambah Data'
        ];
        return view('DokterJaga/create', $data);
    }

    public function tambah()
    {
        if (!$this->validate([

            'nip' => [
                'rules' => 'required|decimal|is_unique[dokter.nip]',
                'errors' => [
                    'required' => '{field} Mohon di isi',
                    'is_unique' => '{field} NIK sudah terdaftar',
                    'decimal' => '{field} Mohon diisi Numerik'
                ]
            ],
            'nama_dokter' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ],
            'spesialis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ],
            'hari_jaga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ],
            'pukul_jaga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,8048]',
                'errors' => [
                    'uploaded' => 'Foto Harus di upload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 8 MB'
                ]

            ]

        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/DokterJaga/create')->withInput()->with('validation', $validation);
        };
        $fotos = $this->request->getFile('foto');
        $photo = $fotos->getRandomName();

        $this->dataModel->save([

            'nip' => $this->request->getVar('nip'),
            'nama_dokter' => $this->request->getVar('nama_dokter'),
            'spesialis' => $this->request->getVar('spesialis'),
            'hari_jaga' => $this->request->getVar('hari_jaga'),
            'pukul_jaga' => $this->request->getVar('pukul_jaga'),
            'foto' => $photo
        ]);
        $fotos->move('uploads/foto/', $photo);
        session()->setFlashdata('yes', 'Data berhasil ditambah');
        return redirect()->to('/dokter');
    }
}
