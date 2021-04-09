<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $fillable = ['user_id', 'referral_id', 'has_injected'];

    public function user() {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

    public function referral() {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
}
