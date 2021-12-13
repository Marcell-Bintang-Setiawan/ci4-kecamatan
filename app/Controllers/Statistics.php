<?php

namespace App\Controllers;

use App\Models\AgamaModel;
use App\Models\DesaModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;

class Statistics extends BaseController
{
  public function penduduk()
  {
    $penduduks = new DesaModel();
    $penduduk = $penduduks->findAll();

    $data = [
      'title' => 'Data Statistik Penduduk per Desa',
      'penduduk' => $penduduk
    ];

    return view('statistik/datapenduduk', $data);
  }

  public function pekerjaan()
  {
    $job = new PekerjaanModel();
    $pekerjaan = $job->findAll();

    $data = [
      'title' => 'Data Statistik Pekejaan',
      'pekerjaan' => $pekerjaan,
    ];

    return view('statistik/datapekerjaan', $data);
  }

  public function pendidikan()
  {
    $edu = new PendidikanModel();
    $pendidikan = $edu->findAll();

    $data = [
      'title' => 'Data Statistik Pekejaan',
      'pendidikan' => $pendidikan,
    ];

    return view('statistik/datapendidikan', $data);
  }

  public function agama()
  {
    $agama = new AgamaModel();
    $religion = $agama->findAll();

    $data = [
      'title' => 'Data Statistik Agama',
      'agama' => $religion,
    ];

    return view('statistik/dataagama', $data);
  }
}
