<?php

namespace App\Models;

use CodeIgniter\Model;

class PekerjaanModel extends Model
{
  protected $table = 'pekerjaan';
  protected $allowedFields = ['jenis', 'jumlah', 'slug'];

  public function getPekerjaan($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}
