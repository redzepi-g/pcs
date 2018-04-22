<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;

use App\Task;
use App\Team;
use App\User;

class OutlookController extends Controller
{

       public function calendar() 
{
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  $tokenCache = new \App\TokenStore\TokenCache;

  $graph = new Graph();
  $graph->setAccessToken($tokenCache->getAccessToken());

  $user = $graph->createRequest('GET', '/me')
                ->setReturnType(Model\User::class)
                ->execute();

  $eventsQueryParams = array (
    // // Only return Subject, Start, and End fields
    "\$select" => "subject,start,end",
    // Sort by Start, oldest first
    "\$orderby" => "Start/DateTime",
    // Return at most 10 results
    "\$top" => "10"
  );

  $getEventsUrl = '/me/events?'.http_build_query($eventsQueryParams);
  $events = $graph->createRequest('GET', $getEventsUrl)
                  ->setReturnType(Model\Event::class)
                  ->execute();
    
                  $id = Auth::id();


                  $user = User::find($id);
                  $teams = $user->teams;
  

    echo '<link rel="stylesheet" href="http://localhost/outlook/public/css/bootstrap.min.css">';
    echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">';
    echo '<link rel="stylesheet" href="http://localhost/outlook/public/css/fontawesome-all.css">';
    echo '<link rel="stylesheet" href="http://localhost/outlook/public/css/home.css">';
    echo '<link rel="stylesheet" href="http://localhost/outlook/public/css/utility.css">';
    echo '<link rel="stylesheet" href="http://localhost/outlook/public/css/mainStyle.css">';
    
    echo '<body>
    <div class="fixedNavbar">
    <div class="leftSide">
      <a href="#" class="leftMargin" >My Schedule</a>
      <a href="#" class="hasBorder" >My Teams</a>    
      <a class="hasBorder" href="#" role="button" id="connect-button">Connect to Outlook</a>
    </div>
    <div class="rightSide">
      <a href="#" onclick="event.preventDefault();">Logout</a>    

        <form id="logout-form" action="#" method="POST" style="display: none;">
            @csrf
        </form>

      <a href="#" class="hasBorder">Settings</a>
    </div>
  </div>
    </body>';
  echo "<div class='row'>
  <div class='col-md-6 mx-auto my-5 text-center'>";
  echo "<form action='http://localhost/pcs/public/home/storeEvents' method='post'>

    
    <input type='hidden' name='_token' value=";echo csrf_token(); echo ">
    <h3 class='my-5' style='color:white;'>Select the team where you want to import your Outlook Calendar events</h3>
    <br/>
    <hr/>
    <br/>
    <select style='margin-top:50px;' class='form-control ' name='teamId'>";
    

    foreach($teams as $team){
        
        echo "<option value='".$team->id."'>".$team->name."</option>";
    }

        
    echo"
        </select>
        <br/>
        <br/>";

        foreach($events as $event){
            ($oldTime = new DateTime($event->getStart()->getDateTime()))->format(DATE_RFC2822);
            echo "<div style='display:none;'>";
            echo "<input class='form-control' name='eventTitle[]' value='".$event->getSubject()."'>";
            echo "<br/>";
            echo "<input class='form-control' name='eventTime[]' value='".$oldTime->format('Y-m-d H:i:s')."'>";
            echo "</div>";
            
        }

        echo "<br/>";
        echo "<button class='btn btn-primary' type='submit'>Import your events to calendar</button>
    </form> " ;
  echo"
  </div>
  </div>";

//   return view('calendar', array(
//     'username' => $user->getDisplayName(),
//     'events' => $events
//   ));
}

public function storeEvents(Request $request){

    $teamId = $request->teamId;
    $eventTitle = $request->eventTitle;
    $eventTime = $request->eventTime;

    $count = count($eventTitle);

    
    //Adding tasks
    for($i = 0; $i < $count; $i++){

        $newTime = Carbon::createFromFormat('Y-m-d H:i:s', $eventTime[$i], 'UTC');

        $task = new Task;
        $task->title = $eventTitle[$i];
        $task->basetime = $newTime;
        $task->timezone = 'Europe/Skopje';
        $task->save();

        DB::table('task_team')->insert([
            'team_id' => $teamId,
            'task_id' => $task->id
        ]);
    }

    return redirect()->route('home');

    
    
}
}
