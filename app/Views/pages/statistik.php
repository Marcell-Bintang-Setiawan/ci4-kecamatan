<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row mb-5">
    <h1 class="mb-3">Data Statistik</h1>
    <p>Berikut ini adalah kumpulan dari data statistik yang berhasil dihimpun oleh lembaga pemerintahan yang bekerja sama dengan pihak kecamatan, sehingga data dapat dikumpulkan sebanyak - banyaknya, data ini masih akan kami perbaharui sehingga bisa didapatkan data yang akurat dan transparansi pengolahan data.</p>
    <!-- pendidikan -->
    <div class="col-md-3 text-center mb-3">
      <div class="card menu">
        <div class="card-body">
          <a href="/statistics/pendidikan" class="card-link"><img src="/img/education.png" width="90px" alt=""></a><br>
          <h5 class="card-text">Pendidikan</h5>
        </div>
      </div>
    </div>
    <!-- pendidikan -->

    <!-- agama -->
    <div class="col-md-3 text-center mb-3">
      <div class="card menu">
        <div class="card-body">
          <a href="/statistics/agama" class="card-link"><img src="/img/praying.png" width="90px" alt=""></a><br>
          <h5 class="card-text">Agama</h5>
        </div>
      </div>
    </div>
    <!-- agama -->

    <!-- status perkawinan -->
    <!-- <div class="col-md-3 text-center mb-3">
      <div class="card menu">
        <div class="card-body">
          <a href="#" class="card-link"><img src="/img/relationship.png" width="90px" alt=""></a><br>
          <h5 class="card-text">Status Perkawinan</h5>
        </div>
      </div>
    </div> -->
    <!-- status perkawinan -->

    <!-- Pekerjaan -->
    <div class="col-md-3 text-center mb-6">
      <div class="card menu">
        <div class="card-body">
          <a href="/statistics/pekerjaan" class="card-link"><img src="/img/job.png" width="90px" alt=""></a>
          <br>
          <h5 class="card-text">Pekerjaan</h5>
        </div>
      </div>
    </div>
    <!-- Pekerjaan -->

    <!-- Golongan Darah -->
    <!-- <div class="col-md-3 text-center mb-3">
      <div class="card menu">
        <div class="card-body">
          <a href="#" class="card-link"><img src="/img/blood.png" width="90px" alt=""></a><br>
          <h5 class="card-text">Golongan Darah</h5>
        </div>
      </div>
    </div> -->
    <!-- Golongan Darah -->

    <!-- Bantuan Siswa Miskin -->
    <!-- <div class="col-md-3 text-center mb-3">
      <div class="card menu">
        <div class="card-body">
          <a href="#" class="card-link"><img src="/img/edu.png" width="90px" alt=""></a><br>
          <h5 class="card-text">Bantuan Siswa Miskin</h5>
        </div>
      </div>
    </div> -->
    <!-- Bantuan Siswa Miskin -->

    <!-- penduduk per desa -->
    <div class="col-md-3 text-center mb-3">
      <div class="card menu">
        <div class="card-body">
          <a href="/statistics/penduduk" class="card-link"><img src="/img/demographic.png" width="90px" alt=""></a><br>
          <h5 class="card-text">Penduduk per Desa</h5>
        </div>
      </div>
    </div>
    <!-- penduduk per desa -->



  </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#000b76" fill-opacity="1" d="M0,128L24,160C48,192,96,256,144,266.7C192,277,240,235,288,197.3C336,160,384,128,432,122.7C480,117,528,139,576,128C624,117,672,75,720,90.7C768,107,816,181,864,213.3C912,245,960,235,1008,192C1056,149,1104,75,1152,69.3C1200,64,1248,128,1296,149.3C1344,171,1392,149,1416,138.7L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path>
</svg>
<?= $this->endSection(); ?>