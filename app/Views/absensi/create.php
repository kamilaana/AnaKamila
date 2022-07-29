<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="<?= base_url('absensi/save'); ?>" method="post">
                <?= csrf_field(); ?>
                <h2>Absen Diri</h2>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jam_masuk" class="col-sm-2 col-form-label">Jam Masuk</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" id="jam_masuk" name="jam_masuk">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jam_keluar" class="col-sm-2 col-form-label">Jam Keluar</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" id="jam_keluar" name="jam_keluar">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="keterangan" name="keterangan">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Show</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>