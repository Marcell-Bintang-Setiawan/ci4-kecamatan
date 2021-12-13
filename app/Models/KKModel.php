<?php

namespace App\Models;

use CodeIgniter\Model;

class KKModel extends Model
{
  protected $table = 'lyn_kk';
  protected $allowedFields = ['nama', 'alamat', 'tanggal', 'slug'];

  public function getKK($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}