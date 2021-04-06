<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'user_id', 'email', 'phone', 'message', 'property_id'
    ];

    public function user() {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
}
