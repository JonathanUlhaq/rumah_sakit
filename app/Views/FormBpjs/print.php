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
    <title>Form Pendaftaran | Pasien Baru Umum</title>

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
            <div class="card-body text-center ">
                <p style="font-size: 20px;"> Nomor RM : <?= $nomor['nomor_rm']; ?> </p>
                <div class="text-center " style="text-align: center;">
                    <p style="font-size: 30px;">RUMAH SAKIT UMUM MAGETAN</p>

                    <p style="font-size: 20px;">Jl. Pahlawan No. 14, Magetan, Jawa Timur</p>
                    <p style="font-size: 20px;">Website : http://rsumagetan.gov.id</p>
                    <hr>
                    <p style="font-size: 35px;"> Estimasi Waktu Pelayanan :</p>
                    <p style="font-size: 30px;"> <?= $antrian['estimasi_waktu']; ?> </p>
                    <p style="font-size: 15px;"> Mohon hadir 15 menit sebelum waktu yang ditentukan </p>
                    <h3>Nomor Antrian</h3>
                    <h1 style="font-size: 100px;"><?= $antrian['nomor_antrian']; ?></h1>
                    <h2 style="font-size: 50px;"><?= $antrian['nama_pasien']; ?></h2>
                    <h2 style="font-size: 25px;">Nomor BPJS : <strong><?= $nomor['nomor_bpjs']; ?></strong></h2>
                    <p style="font-size: 20px;"> Pengambilan : <?= $antrian['tanggal_berobat']; ?> </p>

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?= base_url(); ?>/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/datepicker/moment.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?= base_url(); ?>/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->