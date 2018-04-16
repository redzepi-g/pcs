<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class BaseController extends Controller
{
    

    public function index(){

        $test = Carbon::now();

        $timestamp = '2014-02-06 14:00:00';
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $test, 'Europe/Belgrade');
        $date->setTimezone('Asia/Singapore');

        echo $date." This is Belgrade to Singapore Conversion ";
        echo "<br/>";
        echo $test;
        echo "<br/>";
        $newTime = Carbon::createFromFormat('Y-m-d H:i:s', $test, 'Europe/Belgrade');
        $newTime->setTimezone('Australia/Sydney');

        echo $newTime." This is Belgrade to Sydney Conversion";

        
    }
}
