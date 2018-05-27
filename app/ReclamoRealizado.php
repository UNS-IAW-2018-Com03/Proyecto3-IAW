<?php

namespace MisReclamos;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ReclamoRealizado extends Eloquent
{
  protected $collection = 'reclamoRealizados';
  protected $fillable = ['titulo','imagen','descripcion','latitud','longitud','fecha','user'];
}
