<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <h2><?= $title; ?></h2>

    <div class="col">
      <div class="col-md-2">
        <a href="/pages/statistik" class="btn btn-primary"> <i class="bi bi-box-arrow-left"></i> Kembali</a>
      </div>
      <div class="row" style="display: flex; justify-content:center; align-items:center;">
        <div class="col-md-6 mb-3 mt-3">
          <div class="myChart" id="myChart"></div>
        </div>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Agama</th>
            <th scope="col">Jumlah</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($agama as $rel) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $rel['agama']; ?></td>
              <td><?= $rel['jumlah']; ?></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- cdn highchart -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<!-- script mengatur Highchart -->
<script>
  Highcharts.chart('myChart', {
      chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
      },
      title: {
        text: 'Data Agama'
      },
      tooltip: {
        pointFormat: '{series.name}: <b>{point.y}</b>'
      },
      accessibility: {
        point: {
          // valueSuffix: '%d'
        }
      },
      plotOptions: {
        pie: {
          allowPointSelect: true,
          cursor: 'pointer',
          dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.y}'
          }
        }
      },
      series: [{
        name: 'Banyaknya Penganut',
        colorByPoint: true,
        data: [
          <?php foreach ($agama as $rel) : ?>{
            name: '<?= $rel['agama']; ?>',
            y: <?= $rel['jumlah']; ?>,
          },<?php endforeach; ?>
        ]
      }]
    });
</script>
<!-- script mengatur Highchart -->

<?= $this->endSection(); ?>