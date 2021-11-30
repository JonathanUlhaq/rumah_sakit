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
                    <div class="card-body text-center" style="padding-left: 25px;">
                        <h3 class="card-title text-center">NIK : <?= $dataa['nik']; ?></h3>
                        <?php if ($dataa['nomor_bpjs'] == true) { ?>
                            <h4 class="card-title">Nomor BPJS : <?= $dataa['nomor_bpjs']; ?></h4>
                        <?php } ?>
                        <p class="card-title ">Nomor Rekam Medis : <?= $dataa['nomor_rm']; ?></p>
                        <p class="card-text ">Jenis Kelamin : <?= $dataa['jenis_kelamin']; ?></p>
                        <p class="card-text ">Tanggal Lahir : <?= $dataa['tanggal_lahir']; ?></p>
                        <p class="card-text ">Nomor telepon : <?= $dataa['nomor_telepon']; ?></p>
                        <p class="card-text ">Alamat : <?= $dataa['Alamat']; ?></p>
                        <a class="  btn btn-outline-info mb-3 mdi mdi-update " href="/umum/edit/<?= $dataa['id_pasien']; ?>"> Ubah</a>
                        <a href="/umum" class="btn btn-outline-danger mb-3 mdi mdi-exit-to-app "> Kembali</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>