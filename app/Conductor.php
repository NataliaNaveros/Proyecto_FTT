<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $table = 'conductor';
    protected $fillable = [
        'id','nombre','apellido','cedula','telefono','email',
    ];
}