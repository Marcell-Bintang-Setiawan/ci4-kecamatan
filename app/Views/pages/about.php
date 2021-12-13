<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <h1 class="mb-3">Tentang Kami</h1>
    <div class="col-md-6 text-center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63298.53024098203!2d112.4758577!3d-7.44775!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780c0e8eb19677%3A0x4027a76e3531c70!2sTarik%2C%20Sidoarjo%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1633846847986!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="col-md-6">
      <p>Kecamatan Tarik merupakan salah satu kecamatan yang termasuk dalam wilayah administrasi Kabupaten Sidoarjo. Secara georafis, kecamatan tarik berbatasan dengan Kota Mojokerto di sebelah barat dan Kabupaten Mojokerto di sebelah selatan. Berdasarkan posisinya, sebagian besar desa / kelurahan di Kecamatan Tarik berada dalam kawasan ladang dan persawahan</p>

      <table class="table table-bordered">
        <tbody>
          <tr>
            <td>Nama</td>
            <td>Kecamatan Tarik</td>
          </tr>
          <tr>
            <td>Luas Wilayah</td>
            <td>3600 Ha</td>
          </tr>
          <tr>
            <th colspan="2">Perbatasan</th>
          </tr>
          <tr>
            <td>Utara</td>
            <td>Kecamatan Balongbendo</td>
          </tr>
          <tr>
            <td>Timur</td>
            <td>Kecamatan Prambon</td>
          </tr>
          <tr>
            <td>Selatan</td>
            <td>Kabupaten Mojokerto</td>
          </tr>
          <tr>
            <td>Barat</td>
            <td>Kota Mojokerto</td>
          </tr>
        </tbody>
      </table>
      <!-- <div id="poll">
        <h3>Apakah anda menyukai Website ini ?</h3>
        <form>
          Yes: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
          No: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
        </form>
      </div> -->
    </div>
  </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#000b76" fill-opacity="1" d="M0,128L24,160C48,192,96,256,144,266.7C192,277,240,235,288,197.3C336,160,384,128,432,122.7C480,117,528,139,576,128C624,117,672,75,720,90.7C768,107,816,181,864,213.3C912,245,960,235,1008,192C1056,149,1104,75,1152,69.3C1200,64,1248,128,1296,149.3C1344,171,1392,149,1416,138.7L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path>
</svg>


<?= $this->endSection(); ?>