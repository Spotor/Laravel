<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'CPF'
    ];

    protected $table = 'pessoas';
}
