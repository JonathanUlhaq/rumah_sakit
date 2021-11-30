<?= $this->extend('LayoutUser/tanpanav'); ?>
<?= $this->section('kontens'); ?>

<body class="host_version">
    <div class="all-title-box" style="padding-bottom: 100px;">
        <div class="container text-center">
            <h1>Verifikasi Pasien<span class="m_1">Verifikasi Pendaftaran Antrian Pasien</span></h1>
        </div>
    </div>

    <div id="overviews" class="section lb">
        <div class="container">

            <div class="card-deck">
                <div class="card text-center">
                    <div class="card-body wow fadeIn">
                        <h1 class="card-title">Pasien BPJS</h1>
                        <p class="card-text">Mendaftar antrian sebagai pasien BPJS dengan menginputkan nomor BPJS sebagai verifikasi</p>
                        <a href="/pasienbaru/pasienbpjs" class="btn btn-primary"> Mendaftar Sebagai Pasien BPJS</a>
                    </div>
                    <img class="card-img-top" src="<?= base_url(); ?>/images/bpjs.png" alt="Card image cap">
                </div>

                <div class="card text-center">
                    <div class="card-body wow fadeIn">
                        <h1 class="card-title">Pasien Umum</h1>
                        <a href="/pasienbaru/pasinumum" class="btn btn-primary"> Mendaftar Sebagai Pasien Umum</a>
                    </div>
                    <img class="card-img-top" src="<?= base_url(); ?>/images/umum.jpg" alt="Card image cap">
                </div>


            </div>
            <div style="padding-top: 30px;" class="back"></div>
            <a href="/" class="btn btn-danger "> Kembali ke Halaman Utama</a>
        </div><!-- end row -->
    </div><!-- end container -->
    </div><!-- end section -->

</body>
<?= $this->endSection(); ?>