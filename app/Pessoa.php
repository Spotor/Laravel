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

    public function pagamento ()
    {
        return $this->hasMany(Pagamento::class, 'pessoa_id');
    }

}
