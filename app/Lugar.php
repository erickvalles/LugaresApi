<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $fillable=[
        'nombre',
        'foto',
        'descripcion',
    ];
}
