<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Nomor Antrian Pendaftaran | Pasien Baru Umum</title>

    <!-- Icons font CSS-->
    <link href="<?= base_url(); ?>/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?= base_url(); ?>/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url(); ?>/css/form/main.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body text-center ">
                    <p style="font-size: 20px;"> Nomor RM : <?= $nomor['nomor_rm']; ?> </p><br>
                    <div class="text-center " style="text-align: center;">
                        <h2>RUMAH SAKIT UMUM MAGETAN</h2>
                        <br>
                        <h4>Jl. Pahlawan No. 14, Magetan, Jawa Timur</h5>
                            <h5>Website : http://rsumagetan.gov.id</h5><br>
                            <hr><br>
                            <p style="font-size: 35px;"> Estimasi Waktu Pelayanan :</p>
                            <p style="font-size: 30px;"> <?= $antrian['estimasi_waktu']; ?> </p>
                            <p style="font-size: 15px;"> <strong>Mohon hadir 15 menit sebelum waktu yang ditentukan</strong> </p><br><br>
                            <h3>Nomor Antrian</h3>
                            <h1 style="font-size: 100px;"><strong><?= $antrian['nomor_antrian']; ?></strong></h1>
                            <h2 style="font-size: 50px;"><strong><?= $antrian['nama_pasien']; ?></strong></h2>

                            <h2 style="font-size: 25px;">Nomor BPJS : <strong><?= $nomor['nomor_bpjs']; ?></strong></h2><br>

                            <p style="font-size: 20px;"> Tanggal Pengambilan : <?= $antrian['tanggal_berobat']; ?> </p><br>
                            <p style="font-size: 15px;"><strong> * Nomor antrian dapat di screenshoot atau cetak</strong></p>

                            <br><br><br>
                            <a href="/printbpjs" class="btn btn--radius btn--green">Cetak</a>
                            <a href="/" class="btn btn--radius btn--red" onclick="return confirm('Apakah anda yakin sudah menyimpan nomor tersebut ?')">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src=" <?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?= base_url(); ?>/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/datepicker/moment.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?= base_url(); ?>/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->