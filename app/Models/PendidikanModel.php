<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
  protected $table = 'pendidikan';
  protected $allowedFields = ['jenjang', 'jumlah', 'slug'];

  public function getPendidikan($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}
