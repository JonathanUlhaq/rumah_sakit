<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>

<div class="col-12">
    <div class="card">
        <div class="card-block">

            <form method="post" action="/PasienBpjs/update/<?= $dataa['id_pasienbpjs']; ?>">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_pasienbpjs" value="<?= $dataa['id_pasienbpjs']; ?>">
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control  <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?> " name="nik" value="<?= (old('nik')) ? old('nik') : $dataa['nik'] ?>">
                    <div class=" invalid-tooltip">
                        <?= $validation->getError('nik'); ?>
                    </div>
                </div>
                <div class=" mb-3">
                    <label for="nomor_bpjs" class="form-label">Nomor BPJS</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nomor_bpjs')) ? 'is-invalid' : ''; ?>" name="nomor_bpjs" value="<?= (old('nomor_bpjs')) ? old('nomor_bpjs') : $dataa['nomor_bpjs']; ?>">
                    <div class=" invalid-tooltip">
                        <?= $validation->getError('nomor_bpjs'); ?>
                    </div>
                </div>
                <div class=" mb-3">
                    <label for="nama_pasien" class="form-label">Nama Pasien</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama_pasien')) ? 'is-invalid' : ''; ?>" name="nama_pasien" value="<?= (old('nama_pasien')) ? old('nama_pasien') : $dataa['nama_pasien']; ?>">
                    <div class=" invalid-tooltip">
                        <?= $validation->getError('nama_pasien'); ?>
                    </div>
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
                    <div class=" invalid-tooltip">
                        <?= $validation->getError('tanggal_lahir'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nomor_telepon')) ? 'is-invalid' : ''; ?>" name="nomor_telepon" value="<?= (old('nomor_telepon')) ? old('nomor_telepon') : $dataa['nomor_telepon']; ?>">
                    <div class=" invalid-tooltip">
                        <?= $validation->getError('nomor_telepon'); ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="spesialis" class="form-label">Poli</label>
                    <select class="form-control " name=" spesialis" value="<?= (old('spesialis')) ? old('spesialis') : $dataa['spesialis']; ?>">
                        <?php foreach ($poli as $p) { ?>
                            <option value="<?= $p['spesialis']; ?>"><?= $p['spesialis']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-success">Ubah</button>
                <a href="/bpjs" class="btn btn-outline-danger">Kembali</a>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>