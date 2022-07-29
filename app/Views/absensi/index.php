<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Absensi</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>
            <a href="/absensi/create" class="btn btn-primary mb-3">Silahkan Absen</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam Masuk</th>
                        <th scope="col">Jam Keluar</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($absensi as $a) : ?>
                        <tr>
                            <td><?= $a['nik']; ?></td>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['tanggal']; ?></td>
                            <td><?= $a['jam_masuk']; ?></td>
                            <td><?= $a['jam_keluar']; ?></td>
                            <td><?= $a['keterangan']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>