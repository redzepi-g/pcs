<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\User;
use App\Team;
use App\Task;


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
    public function myTeams($id){

        $user = User::find($id);

        $teams = $user->teams;

        return view('myTeams')->with('teams',$teams);
    }

    public function teamCalendar($id){

        $team = Team::find($id);

        return view('teamCalendar')->with('team',$team);
    }

    public function getCalendarDay(Request $request,$id,$month,$day){

        $team = Team::find($id);


        $tasks = $team->tasks;

        //array to store found tasks
        $arrTasks = array();

        foreach($tasks as $task){

            //get the users clicked day and month
            $time = $task->basetime;
            $time_month = $month;
            $time_day = $day;

            //get the basetime of tasks
            $basetime = Carbon::createFromFormat('Y-m-d H:i:s', $time, 'UTC');
            $basetime_month = $basetime->month;
            $basetime_day = $basetime->day;

            
            
            if( ($basetime_month == $time_month) && ($basetime_day == $time_day)){

                array_push($arrTasks, $task);
            }
        }

        if($arrTasks != NULL){
            $request->session()->flash('tasksExist','we have found some tasks');
            return redirect()->route('get-calendar-day-redirect', ['id' => $id, 'month' => $month, 'day' => $day]);
        }else{

            $request->session()->forget('tasksExist');
            return redirect()->route('get-calendar-day-redirect', ['id' => $id, 'month' => $month, 'day' => $day]);
        }
        
    }

    //dummy get calendar day
    public function getCalendarDayRedirect(Request $request,$id,$month,$day){

        $team = Team::find($id);


        $tasks = $team->tasks;

        //array to store found tasks
        $arrTasks = array();
        $arrHour = array();
        $arrMinute = array();

        foreach($tasks as $task){

            //get the users clicked day and month
            $time = $task->basetime;
            $time_month = $month;
            $time_day = $day;

            //get the basetime of tasks
            $basetime = Carbon::createFromFormat('Y-m-d H:i:s', $time, 'Europe/Skopje');
            $basetime_month = $basetime->month;
            $basetime_day = $basetime->day;


            
            
            if( ($basetime_month == $time_month) && ($basetime_day == $time_day)){

                array_push($arrTasks, $task);

                
            }
        }

        if($arrTasks != NULL){
            $request->session()->flash('tasksExist','we have found some tasks');
            
        }else{

            $request->session()->forget('tasksExist');

        }

     
        return view('teamCalendar')->with('team',$team)
                                   ->with('month',$month)
                                   ->with('day', $day)
                                   ->with('tasks',$arrTasks);
                                   
    }

    public function createTask(Request $request){
        
        $title = $request->title;
        $teamId = $request->teamId;
        $userId = $request->userId;
        $month = $request->month;
        $day = $request->day;
        $hour = $request->hoursSelect;
        $minute = $request->minutesSelect;

        //find the user
        $user = User::find($userId);
        $userTimezone = $user->timezone;

        //find the team
        $team = Team::find($teamId);

        //parse datetime
        $time = "2018-".$month."-".$day." ".$hour.":".$minute.":00";

        //normalize date time on user timezone
        $userTime = Carbon::createFromFormat("Y-m-d H:i:s", $time, $userTimezone);

       //create new task
        $task = new Task();
        $task->title = $title;
        $task->basetime = $userTime;
        $task->timezone = $userTimezone;
        $task->save();

        //update the m2m table
        DB::table('task_team')->insert([
            'task_id' => $task->id,
            'team_id' => $teamId
        ]);
       
        return redirect()->back();

    }
}
