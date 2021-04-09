<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TradeIncome extends Model
{
    protected $fillable = [
        'user_id', 'deposit_id', 'amount', 'description'
    ];

    public function user() {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

    public function deposit() {
        return $this->belongsTo(\App\Deposit::class, 'deposit_id');
    }
}
