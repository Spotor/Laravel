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

    public function pessoa ()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }
}
