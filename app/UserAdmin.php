<?php

namespace MisReclamos;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class UserAdmin extends Eloquent
{
  protected $collection = 'admins';
  protected $fillable = ['name','password'];
}
