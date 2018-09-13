<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $fillable = [
        'id',
        'valor',
        'data_vencimento'
    ];

    protected $table = 'contas';

    public function statusConta ()
    {
        return $this->hasOne(Status_conta::class, 'conta_id');
    }
}
