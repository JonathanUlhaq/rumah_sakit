<?= $this->extend('LayoutUser/template'); ?>
<?= $this->section('konten'); ?>



<body class="host_version">
    <div class="all-title-box">
        <div class="container text-center" style="padding-bottom: 60px;">
            <h1>Dokter Jaga<span class="m_1">Check Jadwal Dokter Jaga</span></h1>
        </div>
    </div>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="order-last">
            <div class=" custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div>
            <div class="">
                <h1><a href="index.html" class="logo">Dokter Jaga <span>Spesialis</span></a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="/jadwaljaga/Ortopedi"><span class="fa fa-wheelchair mr-3"></span> Ortopedi</a>
                    </li>
                    <li>
                        <a href="/jadwaljaga/Kebidanan"><span class="fa fa-user-md mr-3"></span> Kebidanan</a>
                    </li>
                    <li>
                        <a href="/jadwaljaga/Anak"><span class="fa fa-child mr-3"></span> Anak</a>
                    </li>
                    <li>
                        <a href="/jadwaljaga/Tumbuh Kembang"><span class="fa fa-level-up mr-3"></span> Tumbuh Kembang</a>
                    </li>
                    <li>
                        <a href="/jadwaljaga/Bedah Umum"><span class="fa fa-medkit mr-3"></span> Bedah Umum</a>
                    </li>
                    <li>
                        <a href="/jadwaljaga/Bedah Disgestif atau Pencernaan"><span class="fa fa-cutlery mr-3"></span> Bedah Pencernaan</a>
                    </li>
                    <li>
                        <a href="/jadwaljaga/Bedah Saraf"><span class="fa fa-neuter mr-3"></span> Bedah Saraf</a>
                    </li>
                    <li>
                        <a href="/jadwaljaga/Paru"><span class="fa fa-gratipay mr-3"></span> Paru</a>
                    </li>
                    <li>
                        <a href="/jadwaljaga/Hati"><span class="fa fa-heartbeat mr-3"></span> Hati</a>
                    </li>
                    <li>
                        <a href="/jadwaljaga/Kulit dan Kelamin"><span class="fa fa-users mr-3"></span> Kulit dan Kelamin</a>
                    </li>
                </ul>





            </div>


        </nav>

        <!-- Page Content  -->


        <div id="content" class="p-4 p-md-5 pt-5">

            <div class="container text-center">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="customwidget text-center">



                        </div>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <?php foreach ($dokter as $d) : ?>
                    <div class="card">
                        <img width="150px" style="margin-left: auto; margin-right: auto; " class="img-thumbnail" src="<?= base_url() . "/uploads/foto/" . $d['foto']; ?>">
                        <div class="card-body">
                            <hr>
                            <h5 class="card-title">Nama : <?= $d['nama_dokter']; ?></h5>
                            <p class="card-text">Spesialis :<?= $d['spesialis']; ?></p>
                            <p class="card-text">
                                <strong class="text-muted">Jadwal Praktik</strong>
                            </p>
                            <p class="card-text">
                            <p class="text-muted">Hari : <?= $d['hari_jaga']; ?></p>
                            </p>
                            <p class="card-text">
                            <p class="text-muted">Pukul : <?= $d['pukul_jaga']; ?></p>
                            </p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </div>
</body>
<script src="<?= base_url(); ?>/js/side/jquery.min.js"></script>
<script src="<?= base_url(); ?>/js/side/popper.js"></script>
<script src="<?= base_url(); ?>/js/side/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/js/side/main.js"></script>



<?= $this->endSection(); ?>