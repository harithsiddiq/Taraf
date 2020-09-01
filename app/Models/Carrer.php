<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrer extends Model
{
    protected $guarded = [];

    protected $with = ['country'];

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
}
