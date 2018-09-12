<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $fillable = [
        'id',
        'pessoa_id',
        'salario'
    ];

    protected $table = 'pagamentos';
}
