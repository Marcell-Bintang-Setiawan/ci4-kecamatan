<?= $this->extend('dashboard/index'); ?>
<?= $this->section('content'); ?>


<!-- dataTables -->
<div class="row">
  <div class="col-md-12 mb-3">
    <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
      </div>
    <?php endif; ?>
    <div class="card">
      <div class="card-header">Data Pengajuan Kartu Keluarga</div>
      <div class="card-body">
          <table id="example" class=" table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Kedatangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($kk as $k) : ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $k['nama']; ?></td>
                  <td><?= $k['alamat']; ?></td>
                  <td><?= $k['tanggal']; ?></td>
                  <td>
                    <form action="/layanan/deletektp/<?= $k['id']; ?>" method="POST" class="d-inline">
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?'); "><i class="bi bi-trash"></i></button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        
      </div>
    </div>
  </div>
</div>
<!-- dataTables -->





<?= $this->endSection(); ?>