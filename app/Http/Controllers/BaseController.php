<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\User;


class BaseController extends Controller
{
    

    public function index(){

        
        $meetings = User::find(1)->meetings;

        foreach($meetings as $meeting){

            echo $meeting->team;
            echo "<br/>";
            echo $meeting->basetime;
        }

        echo "<br/>";
        echo "-------------------------------";
        echo "<br/>";

        $user = User::find(1)->teams;

        echo $user;
        
    }
}
