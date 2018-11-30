<?php

namespace Coop;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['text', 'resource', 'status']; // PARA CAMPOS QUE QUIERO ACTUALIZAR
}
