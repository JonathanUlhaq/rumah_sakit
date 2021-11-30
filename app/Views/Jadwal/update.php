<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>

<div class="col-12">
    <div class="card">
        <div class="card-block">
            <h1 class="mt-5">Ubah Data Jadwal Dokter Jaga</h1>
            Silahkan Mengisikan Data Berikut
            <hr />
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Form Ubah Data Jadwal Dokter Jaga</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>

            <form method="post" action="/Jadwal/update/<?= $dataa['id_jadwal']; ?>">


                <?= csrf_field(); ?>
                <input type="hidden" name="id_jadwal" value="<?= $dataa['id_jadwal']; ?>">
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
                    <input type="text" class="form-control " name="hari" autofocus value="<?= (old('hari')) ? old('hari') : $dataa['hari'] ?>">

                </div>
                <div class="mb-3">
                    <label for="jam" class="form-label">Pukul</label>
                    <input type="text" class="form-control " name="jam" autofocus value="<?= (old('jam')) ? old('jam') : $dataa['jam'] ?>">

                </div>

                <button type="submit" class="btn btn-outline-info mdi mdi-update">Ubah</button>
                <a href="/jadwal" class="btn btn-outline-danger mdi mdi-exit-to-app">Kembali</a>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>