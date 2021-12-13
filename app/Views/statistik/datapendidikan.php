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
        <div class="col-md-5 mb-3 mt-3">
          <div class="myChart" id="myChart"></div>
        </div>
      </div>
      
      <div class="row d-flex justify-content-center">
      <div class="col-md-8">
      <table class="table table-bordered" style="border: 5px;">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Jenjang Pendidikan</th>
            <th scope="col">Jumlah Siswa</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($pendidikan as $edu) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $edu['jenjang']; ?></td>
              <td><?= $edu['jumlah']; ?></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- cdn highchart -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<!-- script mengatur highchart -->
<script>
  Highcharts.chart('myChart', {
      chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
      },
      title: {
        text: 'Data Pendidikan'
      },
      tooltip: {
        pointFormat: '{series.name}: <b>{point.y}</b>'
      },
      accessibility: {
        point: {
          valueSuffix: '%d'
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
        name: 'Banyaknya Siswa',
        colorByPoint: true,
        data: [
          <?php foreach ($pendidikan as $edu) : ?>{
            name: '<?= $edu['jenjang']; ?>',
            y: <?= $edu['jumlah']; ?>,
          },<?php endforeach; ?>
        ]
      }]
    });
</script>
<!-- script mengatur highchart-->

<?= $this->endSection(); ?>