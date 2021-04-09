<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $fillable = [ 'amount', 'package_id', 'user_id', 'start_date', 'due_date', 'due_amount', 'method'];

    public function user() {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

    public function trx() {
        return $this->hasOne(\App\Transaction::class);
    }

    public function plan() {
        return $this->belongsTo(\App\Package::class, 'package_id');
    }

    public function proofs() {
        return $this->hasMany(\App\DepositProof::class);
    }

    public function income() {
        return $this->hasMany(\App\TradeIncome::class);
    }
}
