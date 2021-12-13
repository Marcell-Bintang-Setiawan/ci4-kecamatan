<?= $this->extend('dashboard/index'); ?>
<?= $this->section('content'); ?>

<div class="row">
  <div class="col-md-12">
    <h1>Halaman Dashboard</h1>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h4 class="mx-3">Data Statistik</h4>

    <div class="splide">
      <div class="splide__track">
        <ul class="splide__list">

          <li class="splide__slide">
          <div class="card" style="width: 17rem;">
            <div class="card-body" style="background-color: rgb(255, 173, 173);">
              <h5 class="card-title">Data Pendidikan</h5>
              <br><br>
              <a href="/dashboard/edu" class="card-link">Link</a>
            </div>
          </div>
          </li>
          <li class="splide__slide">
          <div class="card" style="width: 17rem;">
            <div class="card-body " style="background-color: #ffd6a5;">
              <h5 class="card-title">Data Pekerjaan</h5>
              <br><br>
              <a href="/dashboard/job" class="card-link">Link</a>
            </div>
          </div>
          </li>
          <li class="splide__slide">
          <div class="card" style="width: 17rem;">
            <div class="card-body" style="background-color: #fdffb6;">
              <h5 class="card-title">Data Agama</h5>
              <br><br>
              <a href="/dashboard/agama" class="card-link">Link</a>
            </div>
          </div>
        </li>
        <li class="splide__slide">
          <div class="card" style="width: 17rem;">
            <div class="card-body" style="background-color: #caffbf;">
              <h5 class="card-title">Data Penduduk</h5>
              <br><br>
              <a href="/dashboard/chartNamachart" class="card-link">Link</a>
            </div>
          </div>
          </li>
        </ul>
      </div>
    </div>

  </div>
</div>




<div class="row mb-5">
  <div class="col-md-12">
    <h4 class="mx-3">Layanan</h5>

    <div class="splide" id="plide">
      <div class="splide__track">
        <ul class="splide__list">

          <li class="splide__slide">
          <div class="card" style="width: 17rem;">
            <div class="card-body" style="background-color: #9BF6FF;">
              <h5 class="card-title">Layanan Kartu Keluarga</h5>
              <br><br><br><br>
              <a href="/layanan/lyn_kk" class="card-link">Link</a>
            </div>
          </div>
          </li>
          <li class="splide__slide">
          <div class="card" style="width: 17rem;">
            <div class="card-body " style="background-color: #A0C4FF;">
              <h5 class="card-title">Layanan Kartu Tanda Penduduk</h5>
              <br><br><br>
              <a href="/layanan/lyn_ktp" class="card-link">Link</a>
            </div>
          </div>
          </li>
          <li class="splide__slide">
          <div class="card" style="width: 17rem;">
            <div class="card-body" style="background-color: #BDB2FF;">
              <h5 class="card-title">Layanan Surat Keterangan Tidak Mampu</h5>
              <br><br>
              <a href="/layanan/lyn_sktm" class="card-link">Link</a>
            </div>
          </div>
          </li>

        <li class="splide__slide">
          <div class="card" style="width: 17rem;">
            <div class="card-body" style="background-color: #FFC6FF;">
              <h5 class="card-title">Layanan legalisir Dokumen</h5>
              <br><br><br>
              <a href="/layanan/lyn_legalisir" class="card-link">Link</a>
            </div>
          </div>
          </li>
        
          <li class="splide__slide">
          <div class="card" style="width: 17rem;">
            <div class="card-body" style="background-color: #FFFFFC;">
              <h5 class="card-title">Layanan Kartu Identitas Anak</h5>
              <br><br><br>
              <a href="/layanan/lyn_kia" class="card-link">Link</a>
            </div>
          </div>
          </li>

        </ul>

      </div>
    </div>
  
  </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/js/splide.min.js"></script>

  <script>
      var splide = new Splide( '.splide', {
          type   : 'loop',
          drag   : 'free',
          perPage: 3,
        } 
      );
      splide.mount();

      var splide = new Splide( '#plide', {
          type   : 'loop',
          drag   : 'free',
          perPage: 3,
        } 
      );
      splide.mount();

  </script>

<?php $this->endSection(); ?>