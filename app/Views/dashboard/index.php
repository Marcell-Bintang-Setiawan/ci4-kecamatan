<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="/css/bootstrap.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="/css/sstyle.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/css/themes/splide-sea-green.min.css">
  <title><?= $title; ?></title>

</head>


<body>
  <!-- top navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
      </button>
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">Administrator</a>
    </div>
  </nav>
  <!-- top navigation bar -->

  <!-- offcanvas -->
  <div class="offcanvas offcanvas-start sidebar-nav sides" tabindex="-1" id="sidebar">
    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mt-3">
              Halaman Utama
            </div>
          </li>
          <li>
            <a href="/dashboard" class="nav-link px-3 mt-3">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard</span>
            </a>
          </li>

          <li class="my-2">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              Data dan Statistik
            </div>
          </li>
          <li>
            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
              <span class="me-2"><i class="bi bi-layout-split"></i></span>
              <span>Statistik</span>
              <span class="ms-auto">
                <span class="right-icon">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </span>
            </a>
            <div class="collapse" id="layouts">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="/dashboard/chartNamachart" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-graph-up"></i></span>
                    <span>Data Desa</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="collapse" id="layouts">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="/dashboard/job" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-graph-up"></i></span>
                    <span>Data Pekerjaan</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="collapse" id="layouts">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="/dashboard/edu" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-graph-up"></i></span>
                    <span>Data Pendidikan</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="collapse" id="layouts">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="/dashboard/agama" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-graph-up"></i></span>
                    <span>Data Agama</span>
                  </a>
                </li>
              </ul>
            </div>

          </li>


          <li class="my-2">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              Layanan
            </div>
          </li>


          <li>
            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layout">
              <span class="me-2"><i class="bi bi-layout-split"></i></span>
              <span>Layanan</span>
              <span class="ms-auto">
                <span class="right-icon">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </span>
            </a>
            <div class="collapse" id="layout">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="/layanan/lyn_kk" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-clipboard-plus"></i></i></span>
                    <span>Kartu keluarga</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="collapse" id="layout">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="/layanan/lyn_ktp" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-clipboard-plus"></i></i></span>
                    <span>Kartu Tanda Penduduk</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="collapse" id="layout">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="/layanan/lyn_sktm" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-clipboard-plus"></i></i></span>
                    <span>Surat Keterangan Tidak Mampu</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="collapse" id="layout">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="/layanan/lyn_legalisir" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-clipboard-plus"></i></i></span>
                    <span>Legalisir Dokumen</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="collapse" id="layout">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="/layanan/lyn_kia" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-clipboard-plus"></i></i></span>
                    <span>Kartu Identitas Anak</span>
                  </a>
                </li>
              </ul>
            </div>

          </li>


          <!-- <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-book-fill"></i></span>
              <span>Pages</span>
            </a>
          </li> -->

          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <a href="<?= base_url('/logout'); ?>" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-box-arrow-left"></i></span>
              <span>Logout</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>




  <!-- isi dari halaman -->

  <div class="mt-5 pt-3 main">
    <div class="container-fluid">

      <!-- bagian ini adalah isi dari konten yang berbeda - beda -->
      <?= $this->renderSection('content'); ?>

    </div>
  </div>
  <!-- isi dari halaman -->

  <script src="/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="/js/jquery-3.5.1.js"></script>
  <script src="/js/jquery.dataTables.min.js"></script>
  <script src="/js/dataTables.bootstrap5.min.js"></script>
  <script src="/js/script.js"></script>

  <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
  

  <!-- script button dataTables -->
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
    });
  </script>
</body>

</html>