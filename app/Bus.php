<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = 'bus';
    protected $fillable = [
        'id','tipo','marca','placa','capacidad',
    ];
}