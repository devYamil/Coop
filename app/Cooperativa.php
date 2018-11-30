<?php

namespace Coop;

use Illuminate\Database\Eloquent\Model;

class Cooperativa extends Model
{
    protected $fillable = ['nombre',
                          'telefono',
                          'direccion'];
}
