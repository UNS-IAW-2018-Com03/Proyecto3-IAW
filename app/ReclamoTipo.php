<?php

namespace MisReclamos;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class ReclamoTipo extends Eloquent
{
    protected $collection = 'reclamotipos';
    protected $fillable = ['titulo','imagen'];

    /**
 * Get the route key for the model.
 *
 * @return string
  */
  public function getRouteKeyName()
  {
      return 'id';
  }
}
