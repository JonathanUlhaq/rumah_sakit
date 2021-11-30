<?php

namespace App\Controllers;

use App\Models\ModelAdmin;

class Register extends BaseController
{
    public function __construct()
    {
        $this->modelAdmin = new ModelAdmin();
    }
    public function index()
    {
        $data = [
            'tittle' => 'Admin | Tambah Data Admin',
            'nav' => 'Tambah Data Admin',
            'validation' => \Config\Services::validation()
        ];
        return view('Admin/register', $data);
    }

    public function process()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[admin.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
            'no_hp' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => '{field} Harus Diisi',
                    'decimal' => '{field} Harus Diisi Angka'
                ]
            ],
            'nama' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/Register/index')->withInput()->with('validation', $validation);
        }

        $this->modelAdmin->save([
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'nama' => $this->request->getVar('nama'),
        ]);
        session()->setFlashdata('yess', 'Admin berhasil ditambah');
        return redirect()->to('/dashboard');
    }
}
