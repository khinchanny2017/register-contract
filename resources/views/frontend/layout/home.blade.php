<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
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
    <br>

    <section class="footer4 cid-qv5AL7fBTQ well" id="footer4-3i" data-rv-view="4081">

    

    

    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-md-3 col-sm-4">
                <div class="mb-3 img-logo">
                    <a href="https://mobirise.com/">
                        <img class="img-responsive" src="{{ asset('img/logo_ceoins.png') }}" alt="Mobirise" media-simple="true">
                    </a>
                </div>
                <p class="mb-3 mbr-fonts-style foot-title display-7">
                    Footer Template
                </p>
                <p class="mbr-text mbr-fonts-style mbr-links-column display-7">
                    <a href="#" class="text-white">About Us</a>
                    <br><a href="#" class="text-white">Services</a>
                    <br><a href="#" class="text-white">Selected Work</a>
                    <br><a href="#" class="text-white">Get In Touch</a>
                </p>
            </div>
            <div class="col-md-4 col-sm-8">
                <p class="mb-4 foot-title mbr-fonts-style display-7">
                    RECENT NEWS
                </p>
                <p class="mbr-text mbr-fonts-style foot-text display-7">
                    Footer with solid color background and a contact form, Easily add subscribe and contact forms without any server-side integration.
                    <br>
                    <br>Mobirise helps you cut down development time by providing you with a flexible website editor with a drag and drop interface.
                </p>
            </div>
            <div class="col-md-4 offset-md-1 col-sm-12">
                <p class="mb-4 foot-title mbr-fonts-style display-7">
                    SUBSCRIBE
                </p>
                <p class="mbr-text mbr-fonts-style form-text display-7">
                    Get monthly updates and free resources.
                </p>
                <div class="media-container-column" data-form-type="formoid">
                    <div data-form-alert="" hidden="" class="align-center">
                        Thanks for filling out the form!
                    </div>

                    <form class="form-inline" action="https://mobirise.com/" method="post" data-form-title="Mobirise Form">
                        <input type="hidden" value="vRET/u8MWXj5HqdICe0O/AFuT7jk5+CPZHPdks+8krul0VR5T/fUTi9vNpZ9D+BVgbsDZCi6hMSTiwPatzuxrHke1aYzINF2rNPEI9wgq7yf06YnT0cZAtGMMDz/OODi" data-form-email="true">
                        <div class="form-group">
                            <input type="email" class="form-control input-sm input-inverse my-2" name="email" required="" data-form-field="Email" placeholder="Email" id="email-footer4-3i">
                        </div>
                        <div class="input-group-btn m-2">
                            <button href="" class="btn btn-primary display-4" type="submit" role="button">Subscribe</button>
                        </div>
                    </form>
                </div>
                <p class="mb-4 mbr-fonts-style foot-title display-7">
                    CONNECT WITH US
                </p>
                <div class="social-list pl-0 mb-0">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                </div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-12 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2017 Footer Template - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
