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

      <table class=" table table-bordered">
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
          <?php foreach ($penduduk as $p) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $p['nama']; ?></td>
              <td><?= $p['jumlah']; ?></td>
              <td><?= $p['kepala']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- cdn Higchart -->
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
        text: 'Data Penduduk'
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
        name: 'Banyaknya Penduduk',
        colorByPoint: true,
        data: [
          <?php foreach ($penduduk as $p) : ?>{
            name: '<?= $p['nama']; ?>',
            y: <?= $p['jumlah']; ?>,
          },<?php endforeach; ?>
        ]
      }]
    });
</script>
<!-- script mengatur highchart-->

<?= $this->endSection(); ?>