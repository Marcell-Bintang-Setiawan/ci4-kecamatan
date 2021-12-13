<?php

namespace App\Models;

use CodeIgniter\Model;

class KIAModel extends Model
{
  protected $table = 'lyn_kia';
  protected $allowedFields = ['nama_anak','nama_orangtua', 'alamat', 'tanggal', 'slug'];

  public function getKIA($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}