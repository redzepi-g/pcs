<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $userTz = Auth::user()->timezone;
        $time = Carbon::now();
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $time, 'Europe/Belgrade');
        $date->setTimezone('Asia/Singapore');
        return view('home');
    }
}
