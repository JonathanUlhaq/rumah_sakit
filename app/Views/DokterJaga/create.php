<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>

<div class="col-12">
    <div class="card">
        <div class="card-block">
            <h1 class="mt-5">Tambah Data Dokter Jaga</h1>
            Silahkan Mengisikan Data Berikut
            <hr />
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Form Tambah Data Dokter Jaga</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="/DokterJaga/tambah" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nip')) ? 'is-invalid' : ''; ?> " name="nip" autofocus value="<?= old('nip'); ?>" placeholder="Masukkan NIP">

                </div>
                <div class=" mb-3">
                    <label for="nama_dokter" class="form-label">Nama Dokter</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama_dokter')) ? 'is-invalid' : ''; ?>" name="nama_dokter" autofocus value="<?= old('nama_dokter'); ?>" placeholder="Masukkan nama dokter">

                </div>
                <div class=" mb-3">
                    <label for="foto" class="form-label">Foto Dokter ( PNG,JPG,JPEG (Maks 8mb )</label>
                    <input type="file" class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" name="foto" autofocus>

                </div>
                <div class=" mb-3">
                    <label for="spesialis" class="form-label">Spesialis</label>
                    <select class="form-control" name="spesialis" autofocus value="<?= old('spesialis'); ?>" placeholder="Masukkan spesialis dokter">
                        <?php foreach ($poli as $p) { ?>
                            <option value="<?= $p['spesialis']; ?>"><?= $p['spesialis']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="hari_jaga" class="form-label">Hari Jaga</label>
                    <input type="text" class="form-control <?= ($validation->hasError('hari_jaga')) ? 'is-invalid' : ''; ?> " name="hari_jaga" autofocus value="<?= old('hari_jaga'); ?>" placeholder="Masukkan Hari Jaga">

                </div>
                <div class=" mb-3">
                    <label for="pukul_jaga" class="form-label">Pukul Jaga</label>
                    <input type="text" class="form-control <?= ($validation->hasError('pukul_jaga')) ? 'is-invalid' : ''; ?>" name="pukul_jaga" autofocus value="<?= old('pukul_jaga'); ?>" placeholder="Masukkan Pukul Jaga">

                </div>

                <button type="submit" class="btn btn-outline-success mdi mdi-library-plus"> Tambah Data</button>
                <a href="/dokter" class="btn btn-outline-danger mdi mdi-exit-to-app">Kembali</a>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>