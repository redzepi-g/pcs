<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = [
        'team','user_id','confirmed','declined','basetime','created_at','updated_at'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
