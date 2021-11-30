<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>



<div class="fix-header fix-sidebar card-no-border">

    <div class="row">
        <!-- column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">

                    <!-- Begin page content -->

                    <h1 class="mt-5">Register Admin</h1>
                    Silahkan Mengisikan Data Berikut
                    <hr />
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <h4>Periksa Form Register Admin</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url(); ?>/Register/process">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">Nomor HP</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= old('no_hp'); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= old('alamat'); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= old('username'); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="password_conf" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_conf" name="password_conf">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Register</button>
                            <a href="/dashboard" class="btn btn-danger  mdi mdi-exit-to-app">Kembali</a>
                        </div>
                    </form>
                    <hr />







                    </body>

                    </html>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>


<?= $this->endSection(); ?>