<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elon extends Model
{
    protected $fillable = [
        'name',
        'shaxar_id',
        'mahalla_id',
        'user_id',
        'rasm',
        'malumoti',
        'phone',
        'talaba_soni',
        'narx',
        'mulk_turi',
        'xona_soni',
        'izoh',
        'kimga'
    ];
    public function shaxar()
    {
        return $this->belongsTo(\App\Shaxar::class,'shaxar_id','id');
    }
    public function mahalla()
    {
        return $this->belongsTo(\App\Mahalla::class,'mahalla_id','id');
    }
    public function qulaylik()
    {
        return $this->belongsToMany('App\Category', 'malumotlars','elon_id','categories_id');
    }
}
