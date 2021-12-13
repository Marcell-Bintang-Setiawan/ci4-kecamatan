<?php

namespace App\Models;

use CodeIgniter\Model;

class LegalisirModel extends Model
{
  protected $table = 'lyn_legalisir';
  protected $allowedFields = ['nama', 'alamat', 'tanggal', 'slug'];

  public function getLegalisir($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}