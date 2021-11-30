<?php

namespace App\Controllers;


use App\Models\DataModel;
use App\Models\ModelAntrian;
use App\Models\ModelRiwayat;
use App\Models\ModelSpesialis;

use Dompdf\Dompdf;

class FormLama extends BaseController
{


    public function __construct()
    {

        $this->dataModel = new DataModel();
        $this->dataAntrian = new ModelAntrian();
        $this->dataRiwayat = new ModelRiwayat();
        $this->dataSpesialis = new ModelSpesialis();
    }

    public function create()
    {
        $data = [
            'tittle' => 'RSU Magetan | Formulir Pasien Lama',
            'validation' => \Config\Services::validation(),
            'poli' => $this->dataSpesialis->findAll(),

        ];
        return view('FormLama/create', $data);
    }


    public function tambah()
    {
        if (!$this->validate([

            'nomor_rm' => [
                'rules' => 'required|decimal|is_not_unique[riwayat_penyakit.nomor_rm]',
                'errors' => [
                    'required' => '{field} Mohon di isi',
                    'decimal' => '{field} Mohon diisi Numerik',
                    'is_not_unique' => 'RM tidak terdaftar'
                ]
            ],
            'spesialis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ],
            'riwayat_penyakit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Mohon di isi'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/FormLama/create')->withInput()->with('validation', $validation);
        };

        $id = $this->request->getVar('nomor_rm');
        $con = mysqli_connect('127.0.0.1', 'root', '', 'rumah_sakit');
        $sqls = mysqli_query($con, "SELECT * FROM pasien WHERE nomor_rm = $id  ORDER BY id_pasien DESC LIMIT 1");
        $rows = mysqli_fetch_assoc($sqls);

        $dataR = [
            'riwayat_penyakit' => $this->request->getVar('riwayat_penyakit'),
            'nama_pasien' => $rows['nama_pasien'],
            'spesialis' => $this->request->getVar('spesialis'),
            'nomor_rm' => $this->request->getVar('nomor_rm')
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
            'nama_pasien' => $rows['nama_pasien'],
            'nomor_antrian' => $antris,
            'estimasi_waktu' => $hari,

        ];

        $simpan = $this->dataAntrian->insert($antri);



        session()->setFlashdata('yes', 'Data berhasil ditambah');
        return redirect()->to('/FormLama/tiket/' . $id);
    }

    public function tiket($id)
    {


        $con = mysqli_connect('127.0.0.1', 'root', '', 'rumah_sakit');
        $sql = mysqli_query($con, "SELECT * FROM antrian ORDER BY id_antri DESC LIMIT 1");
        $row = mysqli_fetch_assoc($sql);


        $sqls = mysqli_query($con, "SELECT * FROM pasien WHERE nomor_rm = $id  ORDER BY id_pasien DESC LIMIT 1");
        $rows = mysqli_fetch_assoc($sqls);






        $data = [
            'tittle' => 'RSU Magetan | Formulir Pasien',
            'validation' => \Config\Services::validation(),
            'antrian' => $row,
            'nama' => $rows,

        ];
        return view('FormLama/tiket', $data);
    }

    public function print($id)
    {

        $con = mysqli_connect('127.0.0.1', 'root', '', 'rumah_sakit');
        $sql = mysqli_query($con, 'SELECT * FROM antrian ORDER BY id_antri DESC LIMIT 1');
        $row = mysqli_fetch_assoc($sql);

        $sqls = mysqli_query($con, "SELECT * FROM pasien WHERE nomor_rm = $id  ORDER BY id_pasien DESC LIMIT 1");
        $rows = mysqli_fetch_assoc($sqls);


        $data = [
            'tittle' => 'RSU Magetan | Formulir Pasien',
            'validation' => \Config\Services::validation(),
            'antrian' => $row,
            'antrian' => $row,
            'nama' => $rows

        ];
        return view('FormLama/print', $data);

        redirect()->to('/');
    }

    public function printpdf($id)
    {


        $con = mysqli_connect('127.0.0.1', 'root', '', 'rumah_sakit');
        $sql = mysqli_query($con, 'SELECT * FROM antrian ORDER BY id_antri DESC LIMIT 1');
        $row = mysqli_fetch_assoc($sql);

        $sqls = mysqli_query($con, "SELECT * FROM pasien WHERE nomor_rm = $id  ORDER BY id_pasien DESC LIMIT 1");
        $rows = mysqli_fetch_assoc($sqls);



        $data = [
            'tittle' => 'RSU Magetan | Formulir Pasien',
            'validation' => \Config\Services::validation(),
            'antrian' => $row,
            'antrian' => $row,
            'nama' => $rows
        ];
        $cetak = view('FormLama/print', $data);

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
