<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'shop_name', 'logo', 'logo_path', 'link', 'country_id'
    ];

    public function country()
    {
        $this->belongsTo(Country::class);
    }
}
