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
                    <h4>Periksa Form Ubah Admin</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="/Spesialis/update/<?= $dataa['id_spesialis']; ?>">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_spesialis" value="<?= $dataa['id_spesialis']; ?>">
                <div class="mb-3">
                    <label for="spesialis" class="form-label">Spesialis</label>
                    <input type="text" class="form-control" name="spesialis" value="<?= (old('spesialis')) ? old('spesialis') : $dataa['spesialis'] ?>">

                </div>

                <button type="submit" class="btn btn-outline-info mdi mdi-update">Ubah</button>
                <a href="/poli" class="btn btn-outline-danger mdi mdi-exit-to-app">Kembali</a>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>