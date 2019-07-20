<?php

namespace Coop;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['id_user', 'id_cooperativa', 'text', 'resource', 'status']; // PARA CAMPOS QUE QUIERO ACTUALIZAR
}
