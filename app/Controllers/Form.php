<?php

namespace App\Controllers;


use App\Models\DataModel;
use App\Models\ModelAntrian;
use App\Models\ModelRiwayat;
use App\Models\ModelSpesialis;

use Dompdf\Dompdf;

class Form extends BaseController
{


    public function __construct()
    {

        $this->dataModel = new DataModel();
        $this->dataAntrian = new ModelAntrian();
        $this->dataRiwayat = new ModelRiwayat();
        $this->dataSpesialis = new ModelSpesialis();
    }

    public function index()
    {
        $data = [
            'tittle' => 'RSU Magetan | Formulir Pasien',
            'poli' => $this->dataSpesialis->findAll(),
        ];
        return view('Form/index', $data);
    }

    public function create()
    {
        $data = [
            'tittle' => 'RSU Magetan | Formulir Pasien',
            'validation' => \Config\Services::validation(),
            'poli' => $this->dataSpesialis->findAll(),
            'nav' => 'Data Pasien BPJS > Tambah Data'
        ];
        return view('Form/create', $data);
    }

    public function tambah2()
    {
        $data = [
            'spesialis' => $this->request->getVar('spesialis'),
        ];
        $this->dataModel->insert($data);

        $dataR = [
            'riwayat_penyakit' => $this->request->getVar('riwayat_penyakit')
        ];


        $this->dataRiwayat->insert($dataR);
    }

    public function tambah()
    {
        if (!$this->validate([

            'nik' => [
                'rules' => 'required|decimal|is_not_unique[kependudukan.ktp]|is_unique[pasien.nik]',
                'errors' => [
                    'required' => '{field} Mohon di isi',
                    'decimal' => '{field} Mohon diisi Numerik',
                    'is_not_unique' => 'NIK tidak terdaftar pada kependudukan',
                    'is_unique' => 'NIK telah terdaftar',
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
            ],
            'spesialis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/Form/create')->withInput()->with('validation', $validation);
        };
        $random = rand(1, 5000);

        $data = [
            'nik' => $this->request->getVar('nik'),
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'nomor_telepon' => $this->request->getVar('nomor_telepon'),
            'nomor_bpjs' => $this->request->getVar('nomor_bpjs'),
            'Alamat' => $this->request->getVar('Alamat'),
            'nomor_rm' => $random,
            'nomor_bpjs' => $this->request->getVar('nomor_bpjs'),
        ];
        $this->dataModel->insert($data);



        $dataR = [
            'riwayat_penyakit' => $this->request->getVar('riwayat_penyakit'),
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'spesialis' => $this->request->getVar('spesialis'),
            'nomor_rm' => $random
        ];


        $this->dataRiwayat->insert($dataR);
        $nomor = $this->dataAntrian->countAll('nomor_antrian');
        $con = mysqli_connect('127.0.0.1', 'root', '', 'rumah_sakit');
        $sql = mysqli_query($con, 'SELECT * FROM antrian ORDER BY id_antri DESC LIMIT 1');
        $row = mysqli_fetch_assoc($sql);

        $antris = 1;
        if ($nomor < 0) {
            $antris = 1;
        } elseif ($nomor > 0) {
            $antris = (int)$row['nomor_antrian'] + 1;
        }

        $estimasi = $nomor * 7;
        date_default_timezone_set('Asia/Jakarta');
        $date = date('h:i:sa', strtotime("+$estimasi minute +1 hour"));
        $hari = strtoupper($date);
        $antri = [
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'nomor_antrian' => $antris,
            'estimasi_waktu' => $hari,

        ];

        $simpan = $this->dataAntrian->insert($antri);



        session()->setFlashdata('yes', 'Data berhasil ditambah');
        return redirect()->to('/Form/tiket');
    }

    public function tiket()
    {

        $con = mysqli_connect('127.0.0.1', 'root', '', 'rumah_sakit');
        $sql = mysqli_query($con, 'SELECT * FROM antrian ORDER BY id_antri DESC LIMIT 1');
        $row = mysqli_fetch_assoc($sql);
        $skl = mysqli_query($con, 'SELECT * FROM pasien ORDER BY id_pasien DESC LIMIT 1');
        $rows = mysqli_fetch_assoc($skl);




        $data = [
            'tittle' => 'RSU Magetan | Formulir Pasien',
            'validation' => \Config\Services::validation(),
            'antrian' => $row,
            'nama' => $rows

        ];
        return view('Form/tiket', $data);
    }

    public function print()
    {

        $con = mysqli_connect('127.0.0.1', 'root', '', 'rumah_sakit');
        $sql = mysqli_query($con, 'SELECT * FROM antrian ORDER BY id_antri DESC LIMIT 1');
        $row = mysqli_fetch_assoc($sql);
        $skl = mysqli_query($con, 'SELECT * FROM pasien ORDER BY id_pasien DESC LIMIT 1');
        $rows = mysqli_fetch_assoc($skl);



        $data = [
            'tittle' => 'RSU Magetan | Formulir Pasien',
            'validation' => \Config\Services::validation(),
            'antrian' => $row,
            'nama' => $rows
        ];
        return view('Form/print', $data);

        redirect()->to('/');
    }

    public function printpdf()
    {


        $con = mysqli_connect('127.0.0.1', 'root', '', 'rumah_sakit');
        $sql = mysqli_query($con, 'SELECT * FROM antrian ORDER BY id_antri DESC LIMIT 1');
        $row = mysqli_fetch_assoc($sql);
        $skl = mysqli_query($con, 'SELECT * FROM pasien ORDER BY id_pasien DESC LIMIT 1');
        $rows = mysqli_fetch_assoc($skl);


        $data = [
            'tittle' => 'RSU Magetan | Formulir Pasien',
            'validation' => \Config\Services::validation(),
            'antrian' => $row,
            'nama' => $rows
        ];
        $cetak = view('Form/print', $data);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->getOptions()->setChroot('/path/to/common/assets-directory');
        $dompdf->loadHtml($cetak);

        // (Optional) Setup the paper size and orientation
        $customPaper = array(0, 0, 420, 800);
        $dompdf->setPaper($customPaper, 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('Nomor Antrian Atas Nama : ' . $row['nama_pasien']);

        return redirect()->to('/');
    }
}
