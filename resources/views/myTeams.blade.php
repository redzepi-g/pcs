@extends ('layouts.default')

@section('customcss')
<link rel="stylesheet" href="{{asset('css/myTeams.css')}}">
@stop

@section('maincontent')
<div class="teamsContainer">
    <ul>
        @foreach($teams as $team)
        <li><a href="{{route('teamcalendar', ['id' => $team->id ] )}}">{{$team->name}}</a></li>
        @endforeach
    </ul>
</div>
@stop