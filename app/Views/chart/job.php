<?= $this->extend('dashboard/index'); ?>
<?= $this->section('content'); ?>


<div class="row">
  <!-- header -->
  <h1>Data dan Statistik Pekerjaan</h1>

  <!-- alert tambah data -->
  <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
      <?= session()->getFlashdata('pesan'); ?>
    </div>
  <?php endif; ?>
  <!-- alert tambah data -->

  <!-- chartjs -->
  <div class="col-md-6 mb-3">
    <div class="card h-100">
      <div class="card-header">
        <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
        Statistik Data Pekerjaan
      </div>
      <div class="card-body text-center">
        <canvas class="myChart" id="myChart" height="200"></canvas>
      </div>
    </div>
  </div>
  <!-- chartjs -->

  <!-- form tambah data -->
  <div class="col-md-6 mb-3">
    <div class="card h-100">
      <div class="card-header">
        <span class="me-2"><i class="bi bi-plus-square-fill"></i></span>
        Form Tambah Data
      </div>
      <div class="card-body">
        <form action="/dashboard/saveJob" method="POST">
          <div class="form-group mb-2">
            <label for="pekerjaan">Jenis Pekerjaan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : ''; ?> pekerjaan" id="pekerjaan" name="pekerjaan" value="<?= old('pekerjaan'); ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('pekerjaan'); ?>
              </div>
            </div>
          </div>



          <div class="form-group mb-2">
            <label for="jumlah">Jumlah Pekerja</label>
            <div class="col-sm-10">
              <input type="text" class="form-control <?= ($validation->hasError('jumlah')) ? 'is-invalid' : ''; ?> jumlah" id="jumlah" name="jumlah" value="<?= old('jumlah'); ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('jumlah'); ?>
              </div>
            </div>
          </div>
          <div class="form-group mb-2">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- form tambah data -->


<!-- dataTables -->
<div class="row">
  <div class="col-md-12 mb-3">
    <div class="card">
      <div class="card-header">
        <span><i class="bi bi-table me-2"></i></span> Data Table
      </div>
      <div class="card-body">
        <!-- <div class="table-responsive"> -->
          <table id="example" class=" display nowrap" style="width: 100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Jenis Pekerjaan</th>
                <th>Jumlah </th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($pekerjaan as $p) : ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $p['jenis']; ?></td>
                  <td><?= $p['jumlah']; ?></td>
                  <td>
                    <a href="/dashboard/editJob/<?= $p['slug']; ?>" class="btn btn-warning"><i class="bi bi-pen-fill"></i></a>


                    <form action="/dashboard/deleteJob/<?= $p['id']; ?>" method="POST" class="d-inline">
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?'); "><i class="bi bi-trash"></i></button>
                    </form>

                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <!-- </div> -->
      </div>
    </div>
  </div>
</div>
<!-- dataTables -->

<!-- cdn chartjs -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- script mengatur charjs -->
<script>
  const labels = [
    <?php foreach ($pekerjaan as $p) : ?> "<?= $p['jenis']; ?>",
    <?php endforeach; ?>
  ];
  const data = {
    labels: labels,
    datasets: [{
      label: 'Banyaknya Pekerja',
      borderWidth: 1,
      backgroundColor: [
        'rgba(255, 99, 142, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(255, 0, 255, 0.3)'
      ],
      borderColor: [
        'rgba(255, 99, 142, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(255, 0, 255, 1)'
      ],

      data: [
        <?php foreach ($pekerjaan as $p) : ?>
          <?= $p['jumlah'] . ","; ?>
        <?php endforeach; ?>
      ],
    }]
  };
  const config = {
    type: 'bar',
    data: data,
    options: {}
  };

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
<!-- script mengatur chartjs -->




<?= $this->endSection(); ?>