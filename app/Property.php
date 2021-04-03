<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        "name", 
        "description",
        "purpose",
        "amount",
        "yearly_tax_rate",
        "address",
        "city",
        "country",
        "rooms",
        "bedrooms",
        "bathrooms",
        "available_from",
        "floors",
        "year_built",
        "image_1",
        "image_2",
        "image_3",
        "image_4",
        "image_5",
        "user_id",
    ];
}
