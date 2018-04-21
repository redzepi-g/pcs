<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}" />
    <!-- utility -->
    <link rel="stylesheet" href="{{asset('css/utility.css')}}" />

    <!-- custom style -->
    <link rel="stylesheet" href="{{asset('css/mainStyle.css')}}" />

    
    <title>TBD</title>

    
  </head>
  <body>



    <div class="container-fluid">
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