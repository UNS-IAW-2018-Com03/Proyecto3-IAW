<?php

namespace MisReclamos;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class ReclamoTipo extends Eloquent
{
    protected $collection = 'reclamotipos';
    protected $fillable = ['titulo','imagen'];
}
