<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    protected $fillable = [
        'name','state_id'
    ];

    public function states()
    {
        return $this->belongsToMany('App\Models\State');
    }
}
