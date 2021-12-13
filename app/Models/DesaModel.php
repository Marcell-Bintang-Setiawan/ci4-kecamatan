<?php

namespace App\Models;

use CodeIgniter\Model;

class DesaModel extends Model
{
  protected $table = 'desa';
  protected $allowedFields = ['nama', 'jumlah', 'kepala', 'slug'];

  public function getDesa($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}
