<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'address_line_1', 'address_line_2', 'city', 'state', 'zip', 'country_id', 'phone'
    ];


    public function country() {
        return $this->belongsTo(Country::class);
    }
}
