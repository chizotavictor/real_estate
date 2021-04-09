<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['user_id', 'deposit_id', 'withdrawal_id', 'type'];

    public function deposit() {
        return $this->belongsTo(\App\Deposit::class, 'deposit_id');
    }
}
