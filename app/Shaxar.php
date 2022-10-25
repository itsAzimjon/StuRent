<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shaxar extends Model
{
    protected $fillable = [
        'name'
    ];
    public function mahalla()
    {
        return $this->hasMany(Mahalla::class,'shaxar_id','id');
    } 
}
