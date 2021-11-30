<?php

namespace App\Controllers;

use App\Models\ModelAdmin;

class Login extends BaseController
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

        ];
        return view('Admin/login');
    }

    public function process()
    {

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $this->modelAdmin->where(['username' => $username])->first();

        if ($dataUser) {
            if (password_verify($password, $dataUser['password'])) {
                session()->set([
                    'username' => $dataUser['username'],
                    'name' => $dataUser['nama'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('/dashboard'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
