<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    protected $fillable = [
        'name','gender','address','phone','ward_id','lga_id','state_id'
    ];
}
