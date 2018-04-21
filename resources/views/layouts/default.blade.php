<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}" />
    @yield('customcss')
    <!-- utility -->
    <link rel="stylesheet" href="{{asset('css/utility.css')}}" />

    <!-- custom style -->
    <link rel="stylesheet" href="{{asset('css/mainStyle.css')}}" />
    
    
    <title>TBD</title>

    
  </head>
  <body>


    <div class="fixedNavbar">
      <div class="leftSide">
        <a href="#" class="leftMargin" >My Schedule</a>
        <a href="#" class="hasBorder" >My Teams</a>    
      </div>
      <div class="rightSide">
        <a href="#">Logout</a>    
        <a href="#" class="hasBorder" >Settings</a>
      </div>
    </div>

    <div class="container-fluid mainContainer">
        @yield('maincontent')
    </div>



    
    
    <!-- jquery -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <!-- popper-->
    <script src="{{asset('js/popper.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  
    <!-- custom scripts -->
    @yield('customscripts')
    
</body>
</html>