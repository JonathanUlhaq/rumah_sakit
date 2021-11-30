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
                            <h4 class="card-title">Data Dokter Jaga</h4>
                            <h6 class="card-subtitle">Data Dokter Jaga RSUD</h6>
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
                    <a href="/dokter/create" class="btn btn-outline-success mt-3 mb-3 mdi mdi-library-plus">Tambah Data</a>
                    <?php if (session()->Getflashdata('pesan')) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo session()->Getflashdata('pesan'); ?>
                        </div>
                    <?php } ?>
                    <?php if (session()->Getflashdata('yes')) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo session()->Getflashdata('yes'); ?>
                        </div>
                    <?php } ?>
                    <?php if (session()->Getflashdata('delete')) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo session()->Getflashdata('delete'); ?>
                        </div>
                    <?php } ?>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>NIP</th>
                                    <th>Foto Dokter</th>
                                    <th>Nama Dokter</th>
                                    <th>Spesialis</th>
                                    <th>Hari Jaga</th>
                                    <th>Pukul Jaga</th>
                                    <th style="padding-left : 70px;"> Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 + (5 * ($currentPage - 1));
                                foreach ($dataa as $d) : ?>

                                    <tr>
                                        <th><?= $i++; ?></th>
                                        <td><?= $d['nip']; ?></td>
                                        <td><img width="150px" class="img-thumbnail" src="<?= base_url() . "/uploads/foto/" . $d['foto']; ?>"></td>
                                        <td><?= $d['nama_dokter']; ?></td>
                                        <td><?= $d['spesialis'] ?></td>
                                        <td><?= $d['hari_jaga'] ?></td>
                                        <td><?= $d['pukul_jaga'] ?></td>
                                        <td><a class="btn btn-outline-success mdi mdi-update" href="/dokter/edit/<?= $d['id_dokter']; ?>">Ubah</a>
                                            <a class="btn btn-outline-danger mdi mdi-delete mt-3" onclick="return confirm('Apakah anda yakin ?')" href="/dokter/delete/<?= $d['id_dokter']; ?>">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <?= $pager->links('dokter', 'pagers'); ?>
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