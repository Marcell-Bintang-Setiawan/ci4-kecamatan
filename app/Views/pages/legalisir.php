<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <h2 class="my-4">Layanan Legalisir Dokumen</h2>


    <div class="col">
      <div class="card text-light bg-info" style="border: 0; border-radius: 10px;">
        <div class="card-body">
          <p>Persyaratan yang harus dipenuhi dalam pegurusan Kartu Tanda Penduduk : </p> 
          <ul>
            <li>Membawa serta dokumen asli yang ingin dilegalisir serta fotokopi dokumen tersebut untuk disahkan</li>
            <li>Membawa Materai</li>
            <li>Membawa Map Merah</li>
            
          </ul>
          <p>Silahkan isi form di bawah ini, sesuai data pribadi dan pilih tanggal kedatangan</p>
        </div>
      </div>

      <!-- alert tambah data -->
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success mt-3" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>
      <!-- alert tambah data -->

      <div class="row d-flex justify-content-center my-3">
        <div class="col-md-6">

          <form action="/layanan/saveLegalisir" method="POST">

            <div class="mb-3">
              <label for="nama" class="form-label">Nama Pemohon</label>
              <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?> nama" id="nama" name="nama">
              <div class="invalid-feedback">
                <?= $validation->getError('nama'); ?>
              </div>
            </div>

            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat Pemohon</label>
              <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?> alamat" id="alamat" name="alamat">
              <div class="invalid-feedback">
                <?= $validation->getError('alamat'); ?>
              </div>
            </div>

            <div class="mb-3">
              <label for="tanggal" class="form-label">Tanggal Kedatangan</label>
              <input type="date" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?> tanggal" id="tanggal" name="tanggal">
              <div class="invalid-feedback">
                <?= $validation->getError('tanggal'); ?>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->endSection(); ?>