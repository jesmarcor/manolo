<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
  public function departamento()
  {
    return $this->belongsTo(Departamento::class);
  }

}
