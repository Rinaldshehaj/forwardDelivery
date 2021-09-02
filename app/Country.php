<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name'
    ];

    public function address() {
        return $this->hasOne(Address::class);
    }

    public function shops() {
        $this->hasMany(Shop::class);
    }
}
