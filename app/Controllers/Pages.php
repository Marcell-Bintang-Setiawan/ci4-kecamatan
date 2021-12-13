<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home',
    ];
    return view('pages/home', $data);
  }

  public function statistik()
  {
    $data = [
      'title' => 'Statistik',
    ];
    return view('pages/statistik', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'About Us',
    ];
    return view('pages/about', $data);
  }

  public function contact()
  {
    $data = [
      'title' => 'Contact Us',
    ];
    return view('pages/contact', $data);
  }

  public function sekilas_tarik()
  {
    $data = [
      'title' => 'Sekilas Tarik',
    ];
    return view('pages/sekilas_tarik', $data);
  }

  public function sekapur_sirih()
  {
    $data = [
      'title' => 'Sekapur Sirih',
    ];
    return view('pages/sekapur_sirih', $data);
  }
  public function peta_kecamatan_tarik()
  {
    $data = [
      'title' => 'Peta kecamatan tarik',
    ];
    return view('pages/peta_tarik', $data);
  }

  public function kk()
  {
    $data = [
      'title' => 'Layanan Kartu Keluarga',
      'validation' => \Config\Services::validation(),
    ];
    return view('pages/kk.php', $data);
  }

  public function ktp()
  {
    $data = [
      'title' => 'Layanan Kartu Tanda Penduduk',
      'validation' => \Config\Services::validation(),
    ];
    return view('pages/ktp.php', $data);
  }
  public function sktm()
  {
    $data = [
      'title' => 'Layanan Surat Keterangan Tidak Mampu',
      'validation' => \Config\Services::validation(),
    ];
    return view('pages/sktm.php', $data);
  }

  public function legalisir()
  {
    $data = [
      'title' => 'Layanan Legalisir Dokumen',
      'validation' => \Config\Services::validation(),
    ];
    return view('pages/legalisir.php', $data);
  }
  public function kia()
  {
    $data = [
      'title' => 'Layanan Kartu Identitas Anak',
      'validation' => \Config\Services::validation(),
    ];
    return view('pages/kia.php', $data);
  }
  
}
