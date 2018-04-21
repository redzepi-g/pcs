@extends ('layouts.default')

@section('customcss')
<link rel="stylesheet" href="{{asset('css/myTeams.css')}}">
@stop
@section('maincontent')
<div class="teamsContainer">
    <ul>
        <li>Development Team Alpha</li>
        <li>Design Team Beta</li>        
    </ul>
</div>
@stop