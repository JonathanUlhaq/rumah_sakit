<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <!-- Column -->
    <div class="col-lg-8 col-md-7">
        <?php if (!empty(session()->getFlashdata('yess'))) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h4>Berhasil</h4>
                </hr />
                <?php echo session()->getFlashdata('yess'); ?>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-wrap">
                            <div>
                                <h3 class="card-title">Jumlah Pasien Perbulan</h3>
                                <h6 class="card-subtitle">Admin RSUD</h6>
                            </div>
                            <div class="ml-auto">
                                <ul class="list-inline">
                                    <li>
                                        <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Perempuan</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Laki - Laki</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="amp-pxl" style="height: 360px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-5">
        <div class="card">
            <div class="card-block">
                <h3 class="card-title">Poliklink</h3>
                <h6 class="card-subtitle">Presentase Poliklinik</h6>
                <div id="visitor" style="height:290px; width:100%;"></div>
            </div>
            <div>
                <hr class="m-t-0 m-b-0">
            </div>
            <div class="card-block text-center ">
                <ul class="list-inline m-b-0">

                    <h6 class="text-muted text-info"><i class="fa fa-hospital-o font-10 m-r-10 "></i>RSU Magetan</h6>

                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-7">
        <div class="card text-center " style="padding-bottom: 60px;">
            <div class="card-header">
                Jumlah Antrian
            </div>

            <blockquote class="blockquote mb-0">
                <h5 class="card-tittle"><?php echo date('h:i:sa') ?></h5> <?php //strtotime() 
                                                                            ?>
            </blockquote>


            <h2 class="card-text"> <br><?= $jumlah; ?> <br>Pasien</h2>

        </div>
    </div>
    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col-8">
                        <h4 class="card-title">Data Antrian Pasien</h4>
                        <h6 class="card-subtitle">Data Antrian Pasien RSU Magetan</h6>
                        <form method="get" action="">
                            <div class="input-group">
                                <div class="input-group">
                                    <input type="text" name="keyword" class="form-control rounded" placeholder="Masukkan Keyword" />
                                    <button type="submit" class="btn btn-outline-primary">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php if (session()->Getflashdata('pesan')) { ?>
                    <div class="alert alert-primary" role="alert">
                        <?php echo session()->Getflashdata('pesan'); ?>
                    </div>
                <?php } ?>
                <?php if (session()->Getflashdata('delete')) { ?>
                    <div class="alert alert-primary" role="alert">
                        <?php echo session()->Getflashdata('delete'); ?>
                    </div>
                <?php } ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Pasien</th>
                                <th>Nomor Antrian</th>
                                <th>Estimasi Waktu</th>
                                <th style="padding-left : 70px;"> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 + (5 * ($currentPage - 1));
                            foreach ($dataa as $d) : ?>

                                <tr>
                                    <th><?= $i++; ?></th>
                                    <td><?= $d['nama_pasien']; ?></td>
                                    <td><?= $d['nomor_antrian']; ?></td>
                                    <td><?= $d['estimasi_waktu'] ?></td>
                                    <td><a href="/delete/<?= $d['id_antri']; ?>" class="btn btn-outline-success mdi mdi-account-check"> Sudah Antri</a href="/delete/<?= $d['id_antri']; ?>">
                                    </td>
                                </tr>

                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>