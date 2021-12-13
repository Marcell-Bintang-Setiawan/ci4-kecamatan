<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <h1 class="mb-3 mt-3">Hubungi Kami</h1>
    <div class="col-md-6">
      <form>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
          <label for="pesan" class="form-label">Pesan</label>
          <textarea class="form-control" id="pesan" name="pesan" style="height: 100px"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>
    </div>
    <div class="col-md-6 mt-4">
      <h4> <i class="bi bi-phone"></i> Telepon</h4>
      <p class="ms-4">0861234567891011</p>
      <br>
      <h4> <i class="bi bi-envelope"></i> Email</h4>
      <p class="ms-4">email@tarikkec.com</p>
      <br>
      <h4> <i class="bi bi-house"></i> Alamat</h4>
      <p class="ms-4">Jalan Raya Tarik, Tarik, Sidoarjo, Jawa Tmur, Indonesia, 61265</p>

    </div>
  </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#000b76" fill-opacity="1" d="M0,128L24,160C48,192,96,256,144,266.7C192,277,240,235,288,197.3C336,160,384,128,432,122.7C480,117,528,139,576,128C624,117,672,75,720,90.7C768,107,816,181,864,213.3C912,245,960,235,1008,192C1056,149,1104,75,1152,69.3C1200,64,1248,128,1296,149.3C1344,171,1392,149,1416,138.7L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path>
</svg>
<?= $this->endSection(); ?>