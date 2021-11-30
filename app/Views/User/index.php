<?= $this->extend('LayoutUser/template'); ?>
<?= $this->section('konten'); ?>


<body class="host_version">

    <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('<?= base_url(); ?>/images/hospital.jpg');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-right">
                                    <div class="big-tagline">
                                        <h2>Selamat Datang di Website <strong>RSU Magetan</strong></h2>
                                        <p class="lead">Sistem informasi rumah sakit untuk mempermudah masyarakat Magetan dalam mengakses informasi dan pelayanan antrian di RSU Magetan</p>
                                        <div class="text-center">
                                            <p class="lead">Pendaftaran Antrian Pasien Online :</p>
                                            <a href="/pasienbaru/pasienbpjs" class="hover-btn-new "><span>Pasien Baru BPJS</span></a>
                                            <a href="/pasienbaru/pasinumum" class="hover-btn-new"><span>Pasien Baru Umum</span></a>
                                            <a href="/pasienlama" class="hover-btn-new"><span>Pasien Lama</span></a>

                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div>
            <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('<?= base_url(); ?>/images/about_03.jpg');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-left">
                                    <div class="big-tagline">
                                        <h2 data-animation="animated zoomInRight">Cara Melakukan Pendaftaran Antrian Pasien <strong>Online</strong></h2>
                                        <p class="lead" data-animation="animated fadeInLeft">Pasien dapat melihat mekanisme alur pendaftaran online untuk melakukan proses pendaftaran</p>
                                        <a href="#section3" class="hover-btn-new"><span>Selengkapnya</span></a>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div>

            <!-- Left Control -->
            <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
        <section id="section3">
    </div>

    <!-- end col -->
    </section>
    <section class="page-section section lb">
        <div class="container text-center">
            <ul class="nav nav-pills nav-stacked" id="myTabs">
                <span data-scroll><i class=""></i></span>
                <li>
                    <p class="" style="font-size: 30px;">Nomor Antrian : </p>
                </li>
                <li>
                    <p s class="stat_count " style="font-size: 30px;"><?= $jumlah; ?></p>
                </li>
            </ul>
        </div>
    </section>
    <div class="container">

        <div class="row text-center">
            <div class="col-lg-12">
                <div class="customwidget text-center">
                    <h1>Rumah Sakit Umum Magetan</h1>
                    <p>Rumah Sakit Umum Magetan merupakan rumah sakit yang berada di Kabupaten Magetan</p>

                </div>
            </div>
        </div>

    </div>



    <section class="page-section section lb">
        <div class="container">

            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Alur Pendaftaran Nomor Antrian Pasien Baru</h3>
                    <p class="lead">Berikut alur pendaftaran pasien baru</p>
                </div>
            </div><!-- end title -->
            <div class="timeline">
                <div class="timeline__wrap">
                    <div class="timeline__items">
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-02">
                                <h2>Klik Pasien Baru</h2>
                                <p>Klik pasien baru BPJS untuk pasien BPJS dan umum untuk pasien umum</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-01">
                                <h2>Pengisian Data Diri</h2>
                                <p>Mencantumkan nomor BPJS bagi pasien BPJS</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-05">
                                <h2>Pilih Klinik dan Tulis Keluhan</h2>
                                <p>Pilih Poliklinik dan tulis keluhan anda pada form antrian</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-03">
                                <h2>Cetak Nomor Antrian</h2>
                                <p>Nomor antrian dapat di screenshot atau di print</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="page-section">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Alur Pendaftaran Nomor Antrian Pasien Lama</h3>
                    <p class="lead">Berikut Alur Pendaftaran Lama</p>
                </div>
            </div><!-- end title -->
            <div class="timeline">
                <div class="timeline__wrap">
                    <div class="timeline__items">

                        <div class="timeline__item">
                            <div class="timeline__content img-bg-02">
                                <h2>Klik Pasien Lama</h2>
                                <p>Klik pasien lama pada landing page</p>
                            </div>
                        </div>

                        <div class="timeline__item">
                            <div class="timeline__content img-bg-06">
                                <h2>Memasukkan Nomor Rekam Medis</h2>
                                <p>Memasukkan nomor rekam medis yang telah terdaftar</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-03">
                                <h2>Pilih Klinik dan Tulis Keluhan</h2>
                                <p>Pilih Poliklinik dan tulis keluhan anda pada form antrian</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-04">
                                <h2>Cetak Nomor Antrian</h2>
                                <p>Nomor antrian dapat di screenshot atau di print</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end col -->
    <!-- end row -->
    <!-- end container -->
    <!-- end section -->
    <section id="section1"> </section>
    <div id="overviews" class="section lb">
        <div class="container">

            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Pelayanan Kami</h3>
                    <p class="lead">Pelayanan dan Fasilitas RSU Magetan</p>
                </div>
            </div><!-- end title -->

            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Instalasi Gawat Darurat</h2>
                        <p>Instalasi Emergensi/Instalasi Gawat Darurat (IGD) adalah salah satu bagian di dalam sebuah rumah sakit yang menyediakan penanganan awal bagi pasien yang menderita sakit dan cedera, yang dapat mengancam kelangsungan hidupnya. Di IGD terdapat dokter dari berbagai spesialisasi bersama sejumlah perawat dan dokter jaga. Instalasi Gawat Darurat berfungsi memberikan pelayanan medis yang sifatnya gawat dan darurat selama 24 jam sehari, 7 hari seminggu. Pasien dengan penyakit akut yang masuk ke IGD dapat dikategorikan menjadi kasus gawat dan darurat, gawat tapi tidak darurat, darurat tapi tidak gawat, tidak gawat dan tidak darurat. Gawat adalah keadaan yang berkenaan dengan suatu penyakit atau kondisi lainnya yang mengancam jiwa, sedangkan darurat adalah keadaan yang terjadi tiba-tiba dan tidak diperkirakan sebelumnya, suatu kecelakaan, kebutuhan yang segera atau mendesak.</p>


                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="<?= base_url(); ?>/images/about_02.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="<?= base_url(); ?>/images/about_03.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Rawat Jalan</h2>
                        <p>Rawat jalan adalah pelayanan medis kepada seorang pasien untuk tujuan pengamatan, diagnosis, pengobatan, rehabilitasi, dan pelayanan kesehatan lainnya, tanpa mengharuskan pasien tersebut dirawat inap. Keuntungannya, pasien tidak perlu mengeluarkan biaya untuk menginap (opname).</p>

                    </div><!-- end messagebox -->
                </div><!-- end col -->

            </div>

            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Rawat Inap</h2>
                        <p>Rawat inap adalah pelayanan terhadap pasien yang masuk ke rumah sakit dengan menggunakan tempat tidur untuk keperluan observasi, diagnosis, terapi, rehabilitasi medik dan penunjang medik lainnya.</p>

                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="<?= base_url(); ?>/images/about_04.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="<?= base_url(); ?>/images/about_05.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Laboratorium</h2>
                        <p>Instalasi laboratorium adalah salah satu instalasi di rumah sakit yang merupakan pelayanan penunjang yang bertujuan : Membantu diagnose suatu penyakit sehingga dokter dapat menangani suatu penyakit dengan tepat, cepat, dan akurat.</p>


                    </div><!-- end messagebox -->
                </div><!-- end col -->

            </div>

            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Sterilisasi CSSD</h2>
                        <p>yaitu suatu Instalasi di rumah sakit yang menjadi koordinator dari suatu sistem kerja supply dan alat alat steril. Secara ideal, CSSD adalah satu instalasi yang independen dengan fasilitas untuk menerima, mendesinfeksi, membersihkan, mengemas, mensterilkan, menyimpan dan mendistribusikan alat alat (baik yang dapat dipakai berulang kali dan alat sekali pakai), sesuai dengan standar prosedur.</p>


                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="<?= base_url(); ?>/images/about_06.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="<?= base_url(); ?>/images/about_07.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Instalasi Kedokteran Holistik</h2>
                        <p>Terapi holistik sejatinya adalah metode penyembuhan yang menggabungkan teknik penyembuhan ala barat dan timur. Metode ini juga merupakan gabungan pengobatan altematif dan kedokteran modern.</p>

                    </div><!-- end messagebox -->
                </div><!-- end col -->

            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Gizi</h2>
                        <p>Ahli Gizi merupakan tenaga spesialis yang bertugas memberikan saran dan informasi kepada pasien terkait tata pelaksanaan gizi dan nutrisi yang kaitannya terhadap diagnosis atau masalah kesehatan</p>




                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="<?= base_url(); ?>/images/about_08.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="<?= base_url(); ?>/images/about_09.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Bank Darah</h2>
                        <p>Bank Darah Rumah Sakit (BDRS) adalah sebuah unit pelayanan di rumah sakit yang bertanggung jawab atas ketersediaannya darah untuk transfusi yang aman, berkualitas dan dalam jumlah yang cukup untuk mendukung pelayanan kesehatan di rumah sakit dan fasilitas pelayanan kesehatan lainnya (Permenkes 83 / 2014, BAB III Pasal 40).</p>




                    </div><!-- end messagebox -->
                </div><!-- end col -->

            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Farmasi</h2>
                        <p>Farmasi adalah ilmu yang mempelajari segala seluk-beluk mengenai obat. Ilmu farmasi adalah terapan dari (sedikitnya) tiga bidang ilmu yaitu kedokteran, kimia, dan biologi. Ruang lingkup ilmu farmasi tak hanya berfokus pada bidang ilmu eksakta, melainkan juga pada bidang ilmu sosial seperti Manajemen Farmasi dan Farmakoekonomi. </p>


                    </div><!-- end col -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="<?= base_url(); ?>/images/about_10.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="<?= base_url(); ?>/images/about_11.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Intensive Care</h2>
                        <p>Ruang Intensif atau Intensif Care Unit adalah ruangan yang digunakan untuk pelayanan pasien dewasa dengan masalah jantung yang masih memerlukan monitoring yang ketat, memerlukan alat bantu baik pasien medical atau paska bedah.</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

            </div>

            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Pemulasaran Jenazah</h2>
                        <p>Pemulasaran Jenazah merupakan penguburan jenazah dengan menerapkan protokol protokol kesehatan covid-19</p>

                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="<?= base_url(); ?>/images/about_12.jpeg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="<?= base_url(); ?>/images/about_13.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Rehabilitasi Medik</h2>
                        <p>Rehabilitasi medik adalah terapi yang dilakukan guna mengembalikan fungsi tubuh yang mengalami masalah. Biasanya bagi seseorang yang telah menjalani pengobatan atau operasi akibat cedera parah, infeksi, stroke, maupun tumor.</p>
                    </div><!-- end messagebox -->
                </div>

                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="message-box">
                            <h2>Radiologi</h2>
                            <p>Instalasi Radiologi merupakan salah satu instalasi penunjang medis yang memberikan layanan pemeriksaan radiologi dengan hasil pemeriksaan berupa foto/ gambar untuk membantu dokter yang merawat pasien dalam penegakan diagnosis.</p>
                        </div><!-- end messagebox -->
                    </div><!-- end col -->

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="post-media wow fadeIn">
                            <img src="<?= base_url(); ?>/images/about_14.jpg" alt="" class="img-fluid img-rounded">
                        </div><!-- end media -->
                    </div><!-- end col -->
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="post-media wow fadeIn">
                            <img src="<?= base_url(); ?>/images/about_15.jpg" alt="" class="img-fluid img-rounded">
                        </div><!-- end media -->
                    </div><!-- end col -->

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="message-box">
                            <h2>Rekam Medis</h2>
                            <p>Rekam medis adalah keterangan baik yang tertulis maupun terekam tentang identitas, anamnesa, penentuan fisik , laboratorium, diagnosa segala pelayanan dan tindakan medik yang diberikan kepada pasien dan pengobatan baik yang dirawat inap, rawat jalan maupun yang mendapatkan pelayanan gawat darurat</p>
                        </div><!-- end messagebox -->
                    </div><!-- end col -->

                </div>

                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="message-box">
                            <h2>Sanitasi</h2>
                            <p>Pengertian Sanitasi adalah perilaku disengaja dalam pembudayaan hidup bersih dengan maksud mencegah manusia bersentuhan langsung dengan kotoran dan bahan buangan berbahaya lainnya dengan harapan usaha ini akan menjaga dan meningkatkan kesehatan manusia.</p>



                            <!-- <a href="#" class="hover-btn-new"><span class="text-white">Selengkapnya</span></a> -->
                        </div><!-- end messagebox -->
                    </div><!-- end col -->

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="post-media wow fadeIn">
                            <img src="<?= base_url(); ?>/images/about_16.jpeg" alt="" class="img-fluid img-rounded">
                        </div><!-- end media -->
                    </div><!-- end col -->
                </div>


            </div><!-- end row -->

        </div><!-- end container -->
    </div><!-- end section -->






</body>

</html>

<?= $this->endSection(); ?>