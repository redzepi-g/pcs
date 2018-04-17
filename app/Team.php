<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name','creator','members','meetings','invitecode','created_at','updated_at'
    ];

    public function members(){

        return $this->belongsToMany('App\User','users_teams','team_id','user_id');
    }
}
