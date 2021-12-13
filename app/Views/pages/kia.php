<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <h2 class="my-4">Layanan Kartu Identitas Anak</h2>

    

    <div class="col">
      <div class="card text-light bg-info" style="border: 0; border-radius: 10px;">
        <div class="card-body">
          <p> Persyaratan yang harus dipenuhi dalam pengurusan Kartu Keluarga : </p> 
          <p>Syarat KIA anak usia 0-5 tahun</p>
          <ul>
            <li>Orangtua cukup mendaftarkan anak ke Dinas Dukcapil menggunakan KK orangtua saja</li>
            <li>KIA akan dibuatkan bersamaan dengan kata kelahiran anak</li>
          </ul>

          <p>Syarat KIA anak usia 5-17 tahun</p>
          <ul>
            <li>Fotokopi akta kelahiran anak</li>
            <li>KK asli orangtua/wali</li>
            <li>KTP asli orangtua/wali</li>
            <li>Pas foto anak berwarna ukuran 2x3 sebanyak 2 lembar</li>      
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

          <form action="/layanan/saveKIA" method="POST">

            <div class="mb-3">
              <label for="nama_anak" class="form-label">Nama Anak</label>
              <input type="text" class="form-control <?= ($validation->hasError('nama_anak')) ? 'is-invalid' : ''; ?> nama_anak" id="nama_anak" name="nama_anak">
              <div class="invalid-feedback">
                <?= $validation->getError('nama_anak'); ?>
              </div>
            </div>

            <div class="mb-3">
              <label for="nama_orangtua" class="form-label">Nama Orang Tua</label>
              <input type="text" class="form-control <?= ($validation->hasError('nama_orangtua')) ? 'is-invalid' : ''; ?> nama_orangtua" id="nama_orangtua" name="nama_orangtua">
              <div class="invalid-feedback">
                <?= $validation->getError('nama_orangtua'); ?>
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