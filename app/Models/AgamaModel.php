<?php

namespace App\Models;

use CodeIgniter\Model;

class AgamaModel extends Model
{
  protected $table = 'agama';
  protected $allowedFields = ['agama', 'jumlah','slug'];

  public function getAgama($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}