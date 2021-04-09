<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepositProof extends Model
{
    protected $fillable = ['deposit_id', 'user_id', 'transaction_code'];

    public function proof()
    {
        return $this->belongsTo(\App\Deposit::class, 'deposit_id');
    }
}