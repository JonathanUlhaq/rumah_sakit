<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>

<div class="col-12">
    <div class="card">
        <div class="card-block">
            <h1 class="mt-5">Ubah Data Spesialis</h1>
            Silahkan Mengisikan Data Berikut
            <hr />
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Form Ubah Data Spesialis</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="/DokterJaga/update/<?= $dataa['id_dokter']; ?>" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_dokter" value="<?= $dataa['id_dokter']; ?>">
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nip')) ? 'is-invalid' : ''; ?> " name="nip" value="<?= (old('nip')) ? old('nip') : $dataa['nip'] ?>">

                </div>
                <div class=" mb-3">
                    <label for="foto" class="form-label">Foto Dokter ( PNG,JPG,JPEG (Maks 8mb )</label>
                    <input type="file" class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" name="foto" autofocus value="<?= (old('foto')) ? old('foto') : $dataa['foto'] ?>">

                </div>
                <div class=" mb-3">
                    <label for="nama_dokter" class="form-label">Nama Dokter</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama_dokter')) ? 'is-invalid' : ''; ?>" name="nama_dokter" value="<?= (old('nama_dokter')) ? old('nama_dokter') : $dataa['nama_dokter']; ?>">

                </div>
                <div class="mb-3">
                    <label for="spesialis" class="form-label">Poli</label>
                    <select class="form-control" name="spesialis" value="<?= (old('spesialis')) ? old('spesialis') : $dataa['spesialis']; ?>">
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

                <button type="submit" class="btn btn-outline-success mdi mdi-update">Ubah</button>
                <a href="/dokter" class="btn btn-outline-danger mdi mdi-exit-to-app">Kembali</a>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>