<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name','creator','members','meetings','invitecode','created_at','updated_at'
    ];

    public function tasks(){

        return $this->belongsToMany('App\Task');
    }
}
