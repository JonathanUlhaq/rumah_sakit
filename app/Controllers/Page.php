<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use App\Models\ModelAntrian;
use App\Models\DataModel;


class Page extends BaseController
{
    public function __construct()
    {
        $this->dataModel = new ModelAntrian();
        $this->dataPasien = new DataModel();
        $this->db = db_connect();
    }
    public function index()
    {

        $currentPage = $this->request->getVar('pagers') ? $this->request->getVar('pagers')  : 1;

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $antrian = $this->dataModel->search($keyword);
        } else {
            $antrian = $this->dataModel;
        }

        $data = [
            'nav' => 'Dashboard',
            'tittle' => 'Admin | Dashboard',
            'dataa' => $antrian->findAll(),
            'jumlah' => $this->dataModel->countAll('nama_pasien'),
            'pager' => $this->dataModel->pager,
            'currentPage' => $currentPage,

        ];
        return view('Page/index', $data);
    }




    public function delete($id)
    {
        $this->dataModel->delete($id);
        session()->setFlashdata('delete', 'Data berhasil dihapus');
        return redirect()->to('/dashboard');
    }
}
