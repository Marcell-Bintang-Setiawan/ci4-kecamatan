<?= $this->extend('dashboard/index'); ?>

<?= $this->section('content'); ?>

<div class="col-md-6 mb-3">
  <div class="card h-100">
    <div class="card-header">
      <span class="me-2"><i class="bi bi-pen-fill"></i></span>
      Form Ubah Data
    </div>

    <div class="card-body">

      <form action="/dashboard/updateEdu/<?= $pendidikan['id']; ?>" method="POST">

        <input type="hidden" name="slug" value="<?= $pendidikan['slug']; ?>">
        <div class="form-group mb-2">
          <label for="jenjang">Jenjang Pendidikan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('jenjang')) ? 'is-invalid' : ''; ?> jenjang" id="jenjang" name="jenjang" value="<?= $pendidikan['jenjang']; ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('jenjang'); ?>
            </div>
          </div>
        </div>
        <div class="form-group mb-2">
          <label for="jumlah">Jumlah Siswa</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('jumlah')) ? 'is-invalid' : ''; ?> jumlah" id="jumlah" name="jumlah" value="<?= $pendidikan['jumlah']; ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('jumlah'); ?>
            </div>
          </div>
        </div>

        <div class="form-group mb-2">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Ubah</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>