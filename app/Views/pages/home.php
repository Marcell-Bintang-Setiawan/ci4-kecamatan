<?php
$feed_url = "https://radarsurabaya.jawapos.com/feed/";
$object = new DOMDocument();
$object->load($feed_url);
$content = $object->getElementsByTagName("item");
?>

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/1-unsplash.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Welcome to Official Website Kecamatan Tarik, Sidoarjo</h1>
        <p>Bersama Membangun Bangsa</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/2-unsplash.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Selamat Datang di Website Resmi Kecamatan Tarik, Sidoarjo</h1>
        <p>Mari Jelajahi Luasnya Hutan Tarik</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/3-unsplash (1).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Kota Kecil Sejuta Cerita</h1>
        <p>Cintaku di Tarik</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#000b76" fill-opacity="1" d="M0,256L30,240C60,224,120,192,180,197.3C240,203,300,245,360,229.3C420,213,480,139,540,112C600,85,660,107,720,144C780,181,840,235,900,240C960,245,1020,203,1080,181.3C1140,160,1200,160,1260,186.7C1320,213,1380,267,1410,293.3L1440,320L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
  </svg>
</div>
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="text-center mb-3">Selamat Datang di Website Resmi <br> Kecamatan Tarik, Sidoarjo</h1>
    </div>
  </div>
</div>


<!-- menu -->
<section>
  <div class="container">
    <div class="row">
      <br>
      <hr>
      <h2>Informasi Sebaran Corona Secara Global</h2>
      <div class="alert" style="background-color: #ffff00;" role="alert">
        <div class="text-dark" style="font-weight: bold;"><i class="bi bi-exclamation-triangle"></i> Waspada Penyebaran COVID-19, Tetap Memakai Masker, dan Jaga Jarak</div>
      </div>
      <div class="col-md-4">
        <div class="bg-danger box" style="border-radius: 10px; padding: 30px 40px;">
          <div class="row text-light">
            <div class="col-md-6">
              <h5>Positif</h5>
              <h2 id="data-kasus">12345</h2>
              <h5>Orang</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="bg-dark box" style="border-radius: 10px; padding: 30px 40px; ">
          <div class="row text-light">
            <div class="col-md-6">
              <h5>Meninggal</h5>
              <h2 id="data-mati">12345</h2>
              <h5>Orang</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box" style="border-radius: 10px; padding: 30px 40px; background-color:#66ff66;">
          <div class="row text-light">
            <div class="col-md-6">
              <h5>Sembuh</h5>
              <h2 id="data-sembuh">12345</h2>
              <h5>Orang</h5>
            </div>
          </div>
        </div>
      </div>

      <br><br>
      <h2 class="mt-3">Menu</h2>
      <hr>
      <div class="col-md-4 text-center mb-3">
        <div class="card menu">
          <div class="card-body">
            <a href="/pages/sekilas_tarik" class="card-link"><img src="img/house.png" width="100px" alt=""></a><br>
            <h5 class="card-text">Sekilas Tarik</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="card menu">
          <div class="card-body">
            <a href="/pages/sekapur_sirih" class="card-link"><img src="img/feather.png" width="100px" alt=""></a><br>
            <h5 class="card-text">Sekapur Sirih</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="card menu">
          <div class="card-body">
            <a href="/pages/peta_kecamatan_tarik" class="card-link"><img src="img/map.png" width="100px" alt=""></a><br>
            <h5 class="card-text">Peta Kecamatan Tarik</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="card menu">
          <div class="card-body">
            <a href="#" class="card-link"><img src="img/air-freight.png" width="100px" alt=""></a><br>
            <h5 class="card-text">Info Wisata</h5>
          </div>
        </div>
      </div>

    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#000b76" fill-opacity="1" d="M0,32L30,32C60,32,120,32,180,74.7C240,117,300,203,360,208C420,213,480,139,540,96C600,53,660,43,720,48C780,53,840,75,900,112C960,149,1020,203,1080,192C1140,181,1200,107,1260,64C1320,21,1380,11,1410,5.3L1440,0L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
  </svg>
</section>
<!-- akhir menu -->

<!-- layanan -->
<section style="background-color: #000b76;">
  <div class="container text-light">
    <div class="row">
      <h2>Layanan</h2>
      <hr>

      <div class="col-md-4 text-center mb-3">
        <div class="card layanan">
          <div class="card-body">
            <a href="pages/kk" class="card-link"><img src="img/document.png" width="100px" alt=""></a><br>
            <h5 class="card-text">Kartu Keluarga</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="card layanan">
          <div class="card-body">
            <a href="pages/ktp" class="card-link"><img src="img/credit.png" width="100px" alt=""></a><br>
            <h5 class="card-text">Kartu Tanda Penduduk</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="card layanan">
          <div class="card-body">
            <a href="pages/sktm" class="card-link"><img src="img/paper.png" width="100px" alt=""></a><br>
            <h5 class="card-text">Surat keterangan Tidak Mampu</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="card layanan">
          <div class="card-body">
            <a href="pages/legalisir" class="card-link"><img src="img/sign.png" width="100px" alt=""></a><br>
            <h5 class="card-text">Legalisir Dokumen</h5>
          </div>
        </div>
      </div>

      <div class="col-md-4 text-center mb-3">
        <div class="card layanan">
          <div class="card-body">
            <a href="pages/kia" class="card-link"><img src="img/document (1).png" width="100px" alt=""></a><br>
            <h5 class="card-text">Kartu Identitas Anak</h5>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#000b76" fill-opacity="1" d="M0,128L30,154.7C60,181,120,235,180,240C240,245,300,203,360,170.7C420,139,480,117,540,133.3C600,149,660,203,720,234.7C780,267,840,277,900,277.3C960,277,1020,267,1080,234.7C1140,203,1200,149,1260,133.3C1320,117,1380,139,1410,149.3L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
</svg>
<!-- akhir layanan -->

<!-- beritA -->
<section>
  <div class="container">
    <div class="row">
      <h2 id="news">Berita</h2>
      <hr>
      <div class="col">
        <div class="rss">
          <?php
          foreach ($content as $row) {
            echo '<a href=' . $row->getElementsByTagName("link")->item(0)->nodeValue . '><h3 class="text-info">' . $row->getElementsByTagName("title")->item(0)->nodeValue . '</h3></a>';
            echo '<hr />';
            echo '
                    <div class="row">
                    <div class="col-md-3">
                    <p>' . $row->getElementsByTagName("pubDate")->item(0)->nodeValue . '</p>
                    <br />
                    <img src="' . $row->getElementsByTagName("image")->item(0)->nodeValue . '" class="img-responsive img-thumbnail" />
                    </div>
                    <div class="col-md-9">
                    <br />
                    <p>' . $row->getElementsByTagName("description")->item(0)->nodeValue . '</p>
                    </div>
                    </div>';
            echo '<br />';
            echo '<span class="label label-primary">' . $row->getElementsByTagName("category")->item(0)->nodeValue . '</span>';
            echo '<br />';
            echo '<hr />';
            echo '<br />';
          }
          ?>
        </div>


      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#000b76" fill-opacity="1" d="M0,128L24,160C48,192,96,256,144,266.7C192,277,240,235,288,197.3C336,160,384,128,432,122.7C480,117,528,139,576,128C624,117,672,75,720,90.7C768,107,816,181,864,213.3C912,245,960,235,1008,192C1056,149,1104,75,1152,69.3C1200,64,1248,128,1296,149.3C1344,171,1392,149,1416,138.7L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path>
  </svg>
</section>

<!-- Akhir Berita  -->
<script src="/js/activeClass.js"></script>
<script>
  $(document).ready(function() {

    semuaData();

    setInterval(function() {
      semuaData();
    }, 3000);

    function semuaData() {
      $.ajax({
        url: 'https://coronavirus-19-api.herokuapp.com/all',
        success: function(data) {
          try {

            var kasus = data.cases;
            var meninggal = data.deaths;
            var sembuh = data.recovered;

            $('#data-kasus').html(kasus);
            $('#data-mati').html(meninggal);
            $('#data-sembuh').html(sembuh);

          } catch {
            alert('Error');
          }
        }
      });
    }


  });
</script>

<?php $this->endSection(); ?>