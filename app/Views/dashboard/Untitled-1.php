<div class="container">
  <div class="row">
    <h1>Dashboard</h1>

    <div class="col">
      <div class="col-md-8 p-3 ms-4">
        <canvas id="myChart"></canvas>
      </div>
      <table class="table table-bordered display nowrap" id="example">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Desa</th>
            <th scope="col">Jumlah Penduduk</th>
            <th scope="col">Kepala Desa</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($desa as $d) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $d['nama']; ?></td>
              <td class="text-center"><?= $d['jumlah']; ?></td>
              <td class="text-center"><?= $d['kepala']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>

<script>
  const labels = [
    <?php foreach ($desa as $d) : ?> '<?= $d['nama']; ?>',
    <?php endforeach; ?>
  ];
  const data = {
    labels: labels,
    datasets: [{
      label: 'Banyaknya penduduk dalam satu desa',
      borderWidth: 1,
      backgroundColor: [
        'rgba(255, 99, 142, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 142, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)'
      ],
      data: [
        <?php foreach ($desa as $d) : ?>
          <?= $d['jumlah'] . ","; ?>
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