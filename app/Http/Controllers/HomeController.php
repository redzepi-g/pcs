<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $timezone = $user->timezone;

        $time = Carbon::now();
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $time, 'Europe/Belgrade');
        $date->setTimezone($timezone);

        return view('home')->with('time',$date);
    }
}
