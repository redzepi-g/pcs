@extends('layouts.default')

@section('maincontent')

<div class="row"> <!-- main row start -->


    <!-- basic user info -->
    <div class="col-md-12"> <!-- col start -->
        <h2>Welcome {{Auth::user()->name}}</h2>
        <h5>You belong to Team: </h5>
        <!-- log out button -->
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
     </a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
     </form>

    </div> <!-- col end -->


</div><!-- main row end -->

<div class="row"><!-- functions row -->

    <div class="col-md-12"><!-- sub col -->
        <div class="row"> <!-- sub row -->
        <h3>{{$time}}</h3>
            <div class="col-md-6">
                <button class="btn btn-primary">Create a team</button>
                <button class="btn btn-primary">Join a team</button>
            </div>

        </div><!-- sub row end -->
    </div><!-- sub col end -->
</div> <!-- functions row end -->

@stop
