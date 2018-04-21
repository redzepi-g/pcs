<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\User;


class BaseController extends Controller
{
    

    public function index(){

        
        // $meetings = User::find(1)->meetings;

        // foreach($meetings as $meeting){

        //     echo $meeting->team;
        //     echo "<br/>";
        //     echo $meeting->basetime;
        // }

        // echo "<br/>";
        // echo "-------------------------------";
        // echo "<br/>";

        // $time = Carbon::now();
        // $date = Carbon::createFromFormat('Y-m-d H:i:s', $time, $timezone);

        
        
        // return view('welcome')->with('id',$id);

        return view('auth.register');
        

        
    }
    public function myTeams(){
        return view('myTeams');
    }

    public function teamCalendar(){
        return view('teamCalendar');
    }
}
