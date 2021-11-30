<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>

<div class="col-12">
    <div class="card">
        <div class="card-block">
            <h1 class="mt-5">Update Riwayat Pasien</h1>
            Silahkan Mengisikan Data Berikut
            <hr />
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Form Update Riwayat Pasien</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="/RiwayatPasien/update/<?= $dataa['id_riwayat']; ?>">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_riwayat" value="<?= $dataa['id_riwayat']; ?>">
                <div class="mb-3">
                    <label for="nomor_rm" class="form-label">Nomor RM</label>
                    <input type="text" autofocus class="form-control  <?= ($validation->hasError('nomor_rm')) ? 'is-invalid' : ''; ?> " name="nomor_rm" value="<?= (old('nomor_rm')) ? old('nomor_rm') : $dataa['nomor_rm'] ?>">

                </div>
                <div class=" mb-3">
                    <label for="nama_pasien" class="form-label">Nama Pasien</label>
                    <select class="form-control" name="nama_pasien" value="<?= (old('nama_pasien')) ? old('nama_pasien') : $dataa['nama_pasien']; ?>">
                        <?php foreach ($passien as $p) { ?>
                            <option value="<?= $p['nama_pasien']; ?>"><?= $p['nama_pasien']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="riwayat_penyakit" class="form-label">Riwayat Penyakit</label>
                    <input type="text" class="form-control <?= ($validation->hasError('riwayat_penyakit')) ? 'is-invalid' : ''; ?>" name="riwayat_penyakit" value="<?= (old('riwayat_penyakit')) ? old('riwayat_penyakit') : $dataa['riwayat_penyakit']; ?>">

                </div>
                <button type="submit" class="btn btn-outline-info mdi mdi-update">Ubah</button>
                <a href="/riwayatumum" class="btn btn-outline-danger mdi mdi-exit-to-app">Kembali</a>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>