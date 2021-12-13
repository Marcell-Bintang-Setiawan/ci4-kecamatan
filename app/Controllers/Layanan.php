<?php

namespace App\Controllers;

use App\Models\KIAModel;
use App\Models\KKModel;
use App\Models\KTPModel;
use App\Models\LegalisirModel;
use App\Models\SKTMModel;

class Layanan extends BaseController
{
    protected $kkmodel;
    protected $ktpmodel;
    protected $sktmmodel;
    protected $legalisirmodel; 
    protected $kiamodel;

    public function __construct()
    {
      $this->kkmodel = new KKModel();
      $this->ktpmodel = new KTPModel();
      $this->sktmmodel = new SKTMModel();
      $this->legalisirmodel = new LegalisirModel();
      $this->kiamodel = new KIAModel();
    }

    public function lyn_kk()
    {
        $kk = $this->kkmodel->findAll();

        $data = [
          'title' => 'layanan Kartu Keluarga',
          'validation' => \Config\Services::validation(),
          'kk' => $kk
        ];
        return view('layanan/layanan_kk', $data);
    }

    public function saveKK()
    {
      // validasi
      if (!$this->validate([
        'nama' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi'
          ]
        ],

        'alamat' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi'
          ]
        ],

        'tanggal' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi',
          ]
        ]

      ])) {

        $validation = \Config\Services::validation();
        return redirect()->to('/pages/kk')->withInput()->with('validation', $validation);
      }

      $slug = url_title($this->request->getVar('nama'), '-', true);
      $this->kkmodel->save([
        'nama' => $this->request->getVar('nama'),
        'slug' => $slug,
        'alamat' => $this->request->getVar('alamat'),
        'tanggal' => $this->request->getVar('tanggal'),
      ]);
      session()->setFlashdata('pesan', 'Data berhasil dikirim, silahkan datang sesuai dengan tanggal kedatangan beserta dokumen yang diperlukan');

      return redirect()->to('/pages/kk');
    }

    public function deletekk($id)
    {
      $this->kkmodel->delete($id);
      session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
      return redirect()->to('/layanan/lyn_kk');
    }
    //=====================================================================================
    
    public function lyn_ktp()
    {
        $ktp = $this->ktpmodel->findAll();

        $data = [
          'title' => 'Layanan Kartu Tanda Penduduk',
          'validation' => \Config\Services::validation(),
          'ktp' => $ktp
        ];
        return view('layanan/layanan_ktp', $data);
    }

    public function deletektp($id)
    {
      $this->ktpmodel->delete($id);
      session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
      return redirect()->to('/layanan/lyn_ktp');
    }

    public function saveKTP()
    {
      // validasi
      if (!$this->validate([
        'nama' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi'
          ]
        ],

        'alamat' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi'
          ]
        ],

        'tanggal' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi',
          ]
        ]

      ])) {

        $validation = \Config\Services::validation();
        return redirect()->to('/pages/ktp')->withInput()->with('validation', $validation);
      }

      $slug = url_title($this->request->getVar('nama'), '-', true);
      $this->ktpmodel->save([
        'nama' => $this->request->getVar('nama'),
        'slug' => $slug,
        'alamat' => $this->request->getVar('alamat'),
        'tanggal' => $this->request->getVar('tanggal'),
      ]);
      session()->setFlashdata('pesan', 'Data berhasil dikirim, silahkan datang sesuai dengan tanggal kedatangan beserta dokumen yang diperlukan');

      return redirect()->to('/pages/ktp');
    }
//======================================================================================
    public function lyn_sktm()
    {
        $sktm = $this->sktmmodel->findAll();

        $data = [
          'title' => 'Layanan Kartu Tanda Penduduk',
          'validation' => \Config\Services::validation(),
          'sktm' => $sktm,
        ];
        return view('layanan/layanan_sktm', $data);
    }

    public function deletesktm($id)
    {
      $this->sktmmodel->delete($id);
      session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
      return redirect()->to('/layanan/lyn_sktm');
    }

    public function saveSKTM()
    {
      // validasi
      if (!$this->validate([
        'nama' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi'
          ]
        ],

        'alamat' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi'
          ]
        ],

        'tanggal' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi',
          ]
        ]

      ])) {

        $validation = \Config\Services::validation();
        return redirect()->to('/pages/sktm')->withInput()->with('validation', $validation);
      }

      $slug = url_title($this->request->getVar('nama'), '-', true);
      $this->sktmmodel->save([
        'nama' => $this->request->getVar('nama'),
        'slug' => $slug,
        'alamat' => $this->request->getVar('alamat'),
        'tanggal' => $this->request->getVar('tanggal'),
      ]);
      session()->setFlashdata('pesan', 'Data berhasil dikirim, silahkan datang sesuai dengan tanggal kedatangan beserta dokumen yang diperlukan');

      return redirect()->to('/pages/sktm');
    }
    //==================================================================================

    public function lyn_legalisir()
    {
        $legalisir = $this->legalisirmodel->findAll();

        $data = [
          'title' => 'Layanan Legalisir Dokumen',
          'validation' => \Config\Services::validation(),
          'legalisir' => $legalisir,
        ];
        return view('layanan/layanan_legalisir', $data);
    }

    public function deleteslegalisir($id)
    {
      $this->legalisirmodel->delete($id);
      session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
      return redirect()->to('/layanan/lyn_legalisir');
    }

    public function saveLegalisir()
    {
      // validasi
      if (!$this->validate([
        'nama' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi'
          ]
        ],

        'alamat' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi'
          ]
        ],

        'tanggal' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi',
          ]
        ]

      ])) {

        $validation = \Config\Services::validation();
        return redirect()->to('/pages/legalisir')->withInput()->with('validation', $validation);
      }

      $slug = url_title($this->request->getVar('nama'), '-', true);
      $this->legalisirmodel->save([
        'nama' => $this->request->getVar('nama'),
        'slug' => $slug,
        'alamat' => $this->request->getVar('alamat'),
        'tanggal' => $this->request->getVar('tanggal'),
      ]);
      session()->setFlashdata('pesan', 'Data berhasil dikirim, silahkan datang sesuai dengan tanggal kedatangan beserta dokumen yang diperlukan');

      return redirect()->to('/pages/legalisir');
    }

//==========================================================================================================================
    public function lyn_kia()
    {
        $kia = $this->kiamodel->findAll();

        $data = [
          'title' => 'Layanan Kartu Identitas Anak',
          'validation' => \Config\Services::validation(),
          'kia' => $kia,
        ];
        return view('layanan/layanan_kia', $data);
    }

    public function deletekia($id)
    {
      $this->kiamodel->delete($id);
      session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
      return redirect()->to('/layanan/lyn_kia');
    }

    public function saveKIA()
    {
      // validasi
      if (!$this->validate([
        'nama_anak' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi'
          ]
        ],
        'nama_orangtua' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi'
          ]
        ],

        'alamat' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi'
          ]
        ],

        'tanggal' => [
          'rules' => 'required',
          'errors' => [
            'required' => '{field} harus diisi',
          ]
        ]

      ])) {

        $validation = \Config\Services::validation();
        return redirect()->to('/pages/kia')->withInput()->with('validation', $validation);
      }

      $slug = url_title($this->request->getVar('nama_anak'), '-', true);
      $this->kiamodel->save([
        'nama_anak' => $this->request->getVar('nama_anak'),
        'nama_orangtua' => $this->request->getVar('nama_orangtua'),
        'slug' => $slug,
        'alamat' => $this->request->getVar('alamat'),
        'tanggal' => $this->request->getVar('tanggal'),
      ]);
      session()->setFlashdata('pesan', 'Data berhasil dikirim, silahkan datang sesuai dengan tanggal kedatangan beserta dokumen yang diperlukan');

      return redirect()->to('/pages/kia');
    }






}