<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <div class="card">
                    <div class="card-header padding-left: 10px;">
                        Detail Pasien : <?= $dataa['nama_pasien']; ?>
                        <hr>
                    </div>
                    <div class="card-body" style="padding-left: 25px;">
                        <h5 class="card-title">NIK : <?= $dataa['nik']; ?></h5>
                        <h4 class="card-title">Nomor BPJS : <?= $dataa['nomor_bpjs']; ?></h4>
                        <p class="card-text">Jenis Kelamin : <?= $dataa['jenis_kelamin']; ?></p>
                        <p class="card-text">Tanggal Lahir : <?= $dataa['tanggal_lahir']; ?></p>
                        <p class="card-text">Nomor telepon : <?= $dataa['nomor_telepon']; ?></p>
                        <a href="/bpjs" class="btn btn-warning mb-3">Kembali</a>
                        <a href="/bpjs/edit/<?= $dataa['id_pasienbpjs']; ?>" class="btn btn-info mb-3">Ubah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>