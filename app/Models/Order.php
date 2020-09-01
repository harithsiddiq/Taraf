<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    protected $with = ['job'];

    public function job()
    {
        return $this->hasOne('App\Models\Carrer','id', 'job_id');
    }
}
