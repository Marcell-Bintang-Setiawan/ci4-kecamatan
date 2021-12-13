<?php

namespace App\Models;

use CodeIgniter\Model;

class KTPModel extends Model
{
  protected $table = 'lyn_ktp';
  protected $allowedFields = ['nama', 'alamat', 'tanggal', 'slug'];

  public function getKTP($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}