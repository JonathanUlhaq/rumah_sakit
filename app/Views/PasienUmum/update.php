<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>

<div class="col-12">
    <div class="card">
        <div class="card-block">
            <h1 class="mt-5">Update Data Pasien</h1>
            Silahkan Mengisikan Data Berikut
            <hr />
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Form Tambah Admin</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="/PasienUmum/update/<?= $dataa['id_pasien']; ?>">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_pasien" value="<?= $dataa['id_pasien']; ?>">
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input readonly type="text" class="form-control  <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?> " name="nik" value="<?= (old('nik')) ? old('nik') : $dataa['nik'] ?>">

                </div>
                <div class=" mb-3">
                    <label for="nama_pasien" class="form-label">Nama Pasien</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama_pasien')) ? 'is-invalid' : ''; ?>" name="nama_pasien" value="<?= (old('nama_pasien')) ? old('nama_pasien') : $dataa['nama_pasien']; ?>">

                </div>
                <div class=" mb-3">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control <?= ($validation->hasError('Alamat')) ? 'is-invalid' : ''; ?>" name="Alamat" value="<?= (old('Alamat')) ? old('Alamat') : $dataa['Alamat']; ?>">

                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" value="<?= (old('jenis_kelamin')) ? old('jenis_kelamin') : $dataa['jenis_kelamin']; ?>">
                        <option value="Laki-Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?>" name="tanggal_lahir" value="<?= (old('tanggal_lahir')) ? old('tanggal_lahir') : $dataa['tanggal_lahir']; ?>">

                </div>
                <div class="mb-3">
                    <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nomor_telepon')) ? 'is-invalid' : ''; ?>" name="nomor_telepon" value="<?= (old('nomor_telepon')) ? old('nomor_telepon') : $dataa['nomor_telepon']; ?>">

                </div>
                <?php if ($dataa['nomor_bpjs'] == true) { ?>
                    <div class="mb-3">
                        <label for="nomor_bpjs" class="form-label">Nomor BPJS</label>
                        <input type="text" class="form-control<?= ($validation->hasError('nomor_bpjs')) ? 'is-invalid' : ''; ?>" name="nomor_bpjs" value="<?= (old('nomor_bpjs')) ? old('nomor_bpjs') : $dataa['nomor_bpjs']; ?>">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-outline-info mdi mdi-update">Ubah</button>
                <a href="/umum" class="btn btn-outline-danger mdi mdi-exit-to-app">Kembali</a>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>