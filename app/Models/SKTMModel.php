<?php

namespace App\Models;

use CodeIgniter\Model;

class SKTMModel extends Model
{
  protected $table = 'lyn_sktm';
  protected $allowedFields = ['nama', 'alamat', 'tanggal', 'slug'];

  public function getSKTM($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}