<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-2">Daftar Karyawan</h1>
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>
      <a href="/karyawan/create" class="btn btn-primary mb-3">Tambah Data Karyawan</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">No HP</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Aksi</th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($karyawan as $k) : ?>
            <tr>
              <td><?= $k['id']; ?></td>
              <td><?= $k['nama']; ?></td>
              <td><?= $k['jk']; ?></td>
              <td><?= $k['no_hp']; ?></td>
              <td><?= $k['alamat']; ?></td>
              <td><?= $k['jabatan']; ?></td>
              <td>
                <a href="/karyawan/edit/<?= $k['id']; ?>" class="btn btn-warning">EDIT</a>

                <form action="/karyawan/delete/<?= $k['id']; ?>" method="post" class="d-inline">
                  <?= csrf_field(); ?>
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                </form>

              </td>
            </tr>

          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endsection(); ?>