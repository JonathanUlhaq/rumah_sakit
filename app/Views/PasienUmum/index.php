<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>



<div class="fix-header fix-sidebar card-no-border">

    <div class="row">
        <!-- column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Data Pasien Umum</h4>
                            <h6 class="card-subtitle">Data Pasien Umum RSUD</h6>
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
                    <?php if (session()->Getflashdata('delete')) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo session()->Getflashdata('delete'); ?>
                        </div>
                    <?php } ?>
                    <?php if (session()->Getflashdata('pesan')) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo session()->Getflashdata('pesan'); ?>
                        </div>
                    <?php } ?>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Pasien</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th style="padding-left : 70px;"> Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 +  (5 * ($currentPage - 1));
                                foreach ($dataa as $d) : ?>
                                    <tr>
                                        <th><?= $i++; ?></th>
                                        <td><?= $d['nama_pasien']; ?></td>
                                        <td><?= $d['jenis_kelamin']; ?></td>
                                        <td><?= $d['tanggal_lahir'] ?></td>
                                        <td><a class="btn btn-outline-success mdi mdi-magnify-plus" href="/umum/<?= $d['id_pasien']; ?>"> Detail</a>
                                            <a class="btn btn-outline-danger mdi mdi-delete" onclick="return confirm('Apakah Anda Yakin ?')" href="/umum/hapus/<?= $d['id_pasien']; ?>"> Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <?= $pager->links('pasien', 'pagers'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>


<?= $this->endSection(); ?>