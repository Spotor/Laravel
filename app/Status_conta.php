<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status_conta extends Model
{
    protected $fillable = [
        'id',
        'conta_id',
        'status'
    ];

    protected $table = 'conta_status';

    public function conta ()
    {
        return $this->belongsTo(conta::class, 'conta_id');
    }
}
