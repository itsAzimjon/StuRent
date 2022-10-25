<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahalla extends Model
{
    protected $fillable = [
        'name','shaxar_id'
    ];
    public function shaxar()
    {
        return $this->belongsTo(\App\Shaxar::class,'shaxar_id','id');
    }
}
