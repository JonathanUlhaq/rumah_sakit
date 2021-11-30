<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>

<div class="col-12">
    <div class="card">
        <div class="card-block">
            <h1 class="mt-5">Tambah Data Jadwal Dokter Jaga</h1>
            Silahkan Mengisikan Data Berikut
            <hr />
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Form Tambah Data Jadwal Dokter Jaga</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="/Jadwal/tambah">
                <?= csrf_field(); ?>

                <div class=" mb-3">
                    <label for="nama_dokter" class="form-label">Nama Dokter</label>
                    <select class="form-control" name="nama_dokter" autofocus value="<?= old('nama_dokter'); ?>">
                        <?php foreach ($poli as $p) { ?>
                            <option value="<?= $p['nama_dokter']; ?>"><?= $p['nama_dokter']; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="hari" class="form-label">Hari</label>
                    <input type="text" class="form-control" name="hari" autofocus value="<?= old('hari'); ?>">

                </div>


                <div class="mb-3">
                    <label for="jam" class="form-label">Pukul</label>
                    <input type="text" class="form-control" name="jam" autofocus value="<?= old('jam'); ?>">

                </div>

                <button type="submit" class="btn btn-outline-success mdi mdi-library-plus"> Tambah Data</button>
                <a href="/jadwal" class="btn btn-outline-danger mdi mdi-exit-to-app">Kembali</a>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>