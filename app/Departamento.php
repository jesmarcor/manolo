<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
  public function dispositivo()
  {
    return $this->hasMany(Dispositivo::class);
  }

}
