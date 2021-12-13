<?php

namespace App\Controllers;

use App\Models\AgamaModel;
use App\Models\DesaModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;

class Dashboard extends BaseController
{
  protected $desamodel;
  protected $pekerjaanmodel;
  protected $pendidikanmodel;
  protected $agamamodel;

  public function __construct()
  {
    $this->desamodel = new DesaModel();
    $this->pekerjaanmodel = new PekerjaanModel();
    $this->pendidikanmodel = new PendidikanModel();
    $this->agamamodel = new AgamaModel();
  }


  //untuk tampilan dari halaman dashboard admin
  public function index()
  {
    // $desa = $this->desamodel->findAll();

    $data = [
      'title' => 'Dashboard Admin',
      'validation' => \Config\Services::validation(),
      // 'desa' => $desa
    ];

    // $desamodel = new DesaModel();

    return view('dashboard/dashboard', $data);
  }

  //untuk Data Statistik Desa
  public function chartNamachart()
  {
    $desa = $this->desamodel->findAll();

    $data = [
      'title' => 'Data Statistik Jumlah Penduduk Desa',
      'validation' => \Config\Services::validation(),
      'desa' => $desa
    ];
    // $desamodel = new DesaModel();

    return view('chart/Namachart', $data);
  }

  // tambah data statistik desa
  public function save()
  {
    // validasi
    if (!$this->validate([
      'nama' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} desa harus diisi'
        ]
      ],

      'jumlah' => [
        'rules' => 'required|integer',
        'errors' => [
          'required' => '{field} penduduk desa harus diisi',
          'integer' => '{field} harus berupa angka'
        ]
      ]

    ])) {

      $val = \Config\Services::validation();
      return redirect()->to('/dashboard/chartNamachart')->withInput()->with('validation', $val);
    }

    $slug = url_title($this->request->getVar('nama'), '-', true);
    $this->desamodel->save([
      'nama' => $this->request->getVar('nama'),
      'slug' => $slug,
      'jumlah' => $this->request->getVar('jumlah'),
      'kepala' => $this->request->getVar('kepala')
    ]);
    session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

    return redirect()->to('/dashboard/chartNamachart');
  }





  // hapus data statistik desa
  public function deletedesa($id)
  {
    $this->desamodel->delete($id);
    session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
    return redirect()->to('/dashboard/chartNamaChart');
  }


  //untuk ubah data statistik desa
  public function editdesa($slug)
  {
    $data = [
      'title' => 'Ubah Data',
      'validation' => \Config\Services::validation(),
      'desa' => $this->desamodel->getDesa($slug)
    ];

    return view('/dashboard/editdesa', $data);
  }


  public function updatedesa($id)
  {
    if (!$this->validate([
      'nama' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} desa harus diisi'
        ]
      ],

      'jumlah' => [
        'rules' => 'required|integer',
        'errors' => [
          'required' => '{field} penduduk desa harus diisi',
          'integer' => '{field} harus berupa angka'
        ]
      ]

    ])) {

      $val = \Config\Services::validation();
      return redirect()->to('/dashboard/editdesa/' . $this->request->getVar('slug'))->withInput()->with('validation', $val);
    }
    $slug = url_title($this->request->getVar('nama'), '-', true);
    $this->desamodel->save([
      'id' => $id,
      'nama' => $this->request->getVar('nama'),
      'slug' => $slug,
      'jumlah' => $this->request->getVar('jumlah'),
      'kepala' => $this->request->getVar('kepala')
    ]);
    session()->setFlashdata('pesan', 'Data Berhasil Diubah');

    return redirect()->to('/dashboard/chartNamachart');
  }

  //==================================================================

  //Halaman Pekerjaan
  public function job()
  {
    $pekerjaan = $this->pekerjaanmodel->findAll();

    $data = [
      'title' => 'Data Statistik Pekerjaan',
      'validation' => \Config\Services::validation(),
      'pekerjaan' => $pekerjaan
    ];

    return view('chart/job.php', $data);
  }

  //menambah data pekerjaan
  public function saveJob()
  {
    // validasi
    if (!$this->validate([
      'pekerjaan' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi'
        ]
      ],

      'jumlah' => [
        'rules' => 'required|integer',
        'errors' => [
          'required' => '{field} desa harus diisi',
          'integer' => '{field} harus berupa angka'
        ]
      ]

    ])) {

      $val = \Config\Services::validation();
      return redirect()->to('/dashboard/job')->withInput()->with('validation', $val);
    }

    $slug = url_title($this->request->getVar('pekerjaan'), '-', true);
    $this->pekerjaanmodel->save([
      'jenis' => $this->request->getVar('pekerjaan'),
      'slug' => $slug,
      'jumlah' => $this->request->getVar('jumlah'),
    ]);
    session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

    return redirect()->to('/dashboard/job');
  }

  //delete pekerjaan
  public function deleteJob($id)
  {
    $this->pekerjaanmodel->delete($id);
    session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
    return redirect()->to('/dashboard/job');
  }



  //untuk ubah data statistik pekerjaan

  public function editJob($slug)
  {
    $data = [
      'title' => 'Ubah Data',
      'validation' => \Config\Services::validation(),
      'pekerjaan' => $this->pekerjaanmodel->getPekerjaan($slug)
    ];

    return view('/dashboard/editJob', $data);
  }


  public function updateJob($id)
  {
    if (!$this->validate([
      'pekerjaan' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} desa harus diisi'
        ]
      ],

      'jumlah' => [
        'rules' => 'required|integer',
        'errors' => [
          'required' => '{field} penduduk desa harus diisi',
          'integer' => '{field} harus berupa angka'
        ]
      ]

    ])) {

      $val = \Config\Services::validation();
      return redirect()->to('/dashboard/editJob/' . $this->request->getVar('slug'))->withInput()->with('validation', $val);
    }
    $slug = url_title($this->request->getVar('pekerjaan'), '-', true);
    $this->pekerjaanmodel->save([
      'id' => $id,
      'jenis' => $this->request->getVar('pekerjaan'),
      'slug' => $slug,
      'jumlah' => $this->request->getVar('jumlah'),
    ]);
    session()->setFlashdata('pesan', 'Data Berhasil Diubah');

    return redirect()->to('/dashboard/job');
  }

  //=======================================================================
  // untuk data pendidikan 
  // dari tabel pendidikan

  //untuk tampilan halaman pendidikan
  public function edu()
  {
    $educ = $this->pendidikanmodel->findAll();

    $data = [
      'title' => 'Data Statistik Jumlah Siswa Per Jenjang',
      'validation' => \Config\Services::validation(),
      'pend' => $educ
    ];
    // $desamodel = new DesaModel();

    return view('chart/education', $data);
  }

  //untuk menambah data pendidikan
  public function saveEdu()
  {
    // validasi
    if (!$this->validate([
      'jenjang' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi'
        ]
      ],

      'jumlah' => [
        'rules' => 'required|integer',
        'errors' => [
          'required' => '{field} desa harus diisi',
          'integer' => '{field} harus berupa angka'
        ]
      ]

    ])) {

      $val = \Config\Services::validation();
      return redirect()->to('/dashboard/edu')->withInput()->with('validation', $val);
    }

    $slug = url_title($this->request->getVar('jenjang'), '-', true);
    $this->pendidikanmodel->save([
      'jenjang' => $this->request->getVar('jenjang'),
      'slug' => $slug,
      'jumlah' => $this->request->getVar('jumlah'),
    ]);
    session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

    return redirect()->to('/dashboard/edu');
  }

  //untuk menghapus data pendidikan
  public function deleteEdu($id)
  {
    $this->pendidikanmodel->delete($id);
    session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
    return redirect()->to('/dashboard/edu');
  }

  //untuk mengedit dan update data pendidikan
  public function editEdu($slug)
  {
    $data = [
      'title' => 'Ubah Data',
      'validation' => \Config\Services::validation(),
      'pendidikan' => $this->pendidikanmodel->getPendidikan($slug)
    ];

    return view('/dashboard/editEdu', $data);
  }


  public function updateEdu($id)
  {
    if (!$this->validate([
      'jenjang' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} pendidikan harus diisi'
        ]
      ],

      'jumlah' => [
        'rules' => 'required|integer',
        'errors' => [
          'required' => '{field} siswa harus diisi',
          'integer' => '{field} harus berupa angka'
        ]
      ]

    ])) {

      $val = \Config\Services::validation();
      return redirect()->to('/dashboard/editEdu/' . $this->request->getVar('slug'))->withInput()->with('validation', $val);
    }
    $slug = url_title($this->request->getVar('jenjang'), '-', true);
    $this->pendidikanmodel->save([
      'id' => $id,
      'jenjang' => $this->request->getVar('jenjang'),
      'slug' => $slug,
      'jumlah' => $this->request->getVar('jumlah'),
    ]);
    session()->setFlashdata('pesan', 'Data Berhasil Diubah');

    return redirect()->to('/dashboard/edu/');
  }

//==========================================================================
//                              Data Agama
// Data agama berdasarkan AgamaModel() pada tabel agama database kecamatan
//==========================================================================

//                  Tampilan agama pada dashboard admin
  
  public function agama()
  {
    $agama = $this->agamamodel->findAll();

    $data = [
      'title' => 'Data Statistik Agama ',
      'validation' => \Config\Services::validation(),
      'agama' => $agama
    ];

    return view('chart/agama.php', $data);
  }
  //============================================================================
  //                    Function Tambah Data Agama
  //============================================================================

  public function saveAgama()
  {
    // validasi
    if (!$this->validate([
      'agama' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi'
        ]
      ],

      'jumlah' => [
        'rules' => 'required|integer',
        'errors' => [
          'required' => '{field} desa harus diisi',
          'integer' => '{field} harus berupa angka'
        ]
      ]

    ])) {

      $val = \Config\Services::validation();
      return redirect()->to('/dashboard/agama')->withInput()->with('validation', $val);
    }

    $slug = url_title($this->request->getVar('agama'), '-', true);
    $this->agamamodel->save([
      'agama' => $this->request->getVar('agama'),
      'slug' => $slug,
      'jumlah' => $this->request->getVar('jumlah'),
    ]);
    session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

    return redirect()->to('/dashboard/agama');
  }

  //============================================================================
  //                        Menghapus Data Agama
  //============================================================================
  public function deleteAgama($id)
  {
    $this->agamamodel->delete($id);
    session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
    return redirect()->to('/dashboard/agama');
  }
  
  //============================================================================
  //                        Mengubah Data Agama
  //============================================================================
  public function editAgama($slug)
  {
    $data = [
      'title' => 'Ubah Data Agama',
      'validation' => \Config\Services::validation(),
      'agama' => $this->agamamodel->getAgama($slug)
    ];

    return view('/dashboard/editAgama', $data);
  }


  public function updateAgama($id)
  {
    if (!$this->validate([
      'agama' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} pendidikan harus diisi'
        ]
      ],

      'jumlah' => [
        'rules' => 'required|integer',
        'errors' => [
          'required' => '{field} siswa harus diisi',
          'integer' => '{field} harus berupa angka'
        ]
      ]

    ])) {

      $val = \Config\Services::validation();
      return redirect()->to('/dashboard/editAgama/' . $this->request->getVar('slug'))->withInput()->with('validation', $val);
    }
    $slug = url_title($this->request->getVar('agama'), '-', true);
    $this->agamamodel->save([
      'id' => $id,
      'agama' => $this->request->getVar('agama'),
      'slug' => $slug,
      'jumlah' => $this->request->getVar('jumlah'),
    ]);
    session()->setFlashdata('pesan', 'Data Berhasil Diubah');

    return redirect()->to('/dashboard/agama/');
  }


}

