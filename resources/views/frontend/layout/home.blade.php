<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('../css/bootstrap.css') }}" rel="stylesheet"> -->

</head>
<body>
    
          <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <ul class="nav navbar-nav pull-left">
              <li><a href="#">Email: info@ceoinstitute.com</a></li>
              <li><a href="#">Tell: 023 23 23 23</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ route('student.create') }}"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
                </div>
            </div>
        </div>
    <!-- end header -->
    <!-- start menu -->
    <div class="container-fluid well readcolor">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <img class="img-responsive" src="{{ asset('img/logo_ceoins.png') }}" alt="">
                        </div>
                        <div class="col-md-10 pull-right">
                            <ul class="nav navbar-nav pull-right styles-nav">
                              <li><a href="#">HOME</a></li>
                              <li><a href="#">ABOUT</a></li>
                              <li><a href="#">ACADEMICS </a></li>
                              <li><a href="#">FACULTY </a></li>
                              <li><a href="#">ADMISSION</a></li>
                              <li><a href="#">STUDEND SERVICES </a></li>
                              <li><a href="#">BUSSINESS LIBRANRY </a></li>
                              <!-- <li><a href="#">CONTACT </a></li> -->
                            </ul>
                        </div>
                    </div>
               </div>
            </div>
    </div>
</div>
    
    <!-- end MENU --> 
    <div id="app"> 
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
