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
    <title>Form Pendaftaran | Pasien Baru BPJS</title>

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
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Form Pendaftaran Antrian Pasien Lama</h2>
                    <h4 class="title">Verifikasi RM</h4>

                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="valid">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <h4>Periksa Form Pendaftaran Antrian Pasien BPJS</h4>
                                </hr />
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="/FormLama/tambah">
                        <?= csrf_field(); ?>
                        <div class="col-1">
                            <div class="input-group">
                                <input class="input--style-1" type="text" value="<?= old('nomor_rm') ?>" placeholder="Masukkan Nomor RM Anda" name="nomor_rm">
                            </div>
                        </div>

                        <h4 class="title">Poli dan Keluhan</h4>


                        <div class="col-1">
                            <div class="input-group">
                                <input class="input--style-1" type="text" value="<?= old('riwayat_penyakit') ?>" placeholder="Keluhan Sakit" name="riwayat_penyakit">
                            </div>
                        </div>


                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="spesialis">
                                    <option disabled="disabled" selected="selected">Poli</option>
                                    <?php foreach ($poli as $p) : ?>
                                        <option value="<?= $p["spesialis"]; ?>"><?= $p["spesialis"]; ?></option>
                                    <?php endforeach ?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="p-t-20">

                            <button class="btn btn--radius btn--green" type="submit">Daftar</button>
                            <a href="/" class="btn btn--radius btn--red">Kembali</a>

                        </div>
                    </form>

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