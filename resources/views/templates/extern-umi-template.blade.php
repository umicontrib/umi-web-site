<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Webox - Home page |  @yield('titre') </title>
  <link href="{{asset('assets/ressources/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/ressources/css/animate.min.css')}}" rel="stylesheet"> 
  <link href="{{asset('assets/ressources/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/ressources/css/lightbox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/ressources/css/main.css')}}" rel="stylesheet">
  <link id="css-preset" href="{{asset('assets/ressources/css/presets/preset1.css')}}" rel="stylesheet">
  <link href="{{asset('assets/ressources/css/responsive.css')}}" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="{{asset('assets/ressources/images/umi.ico')}}">
  @stack('othersCss')
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(assets/ressources/images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to <span>Webox</span></h1>
            <p class="animated fadeInRightBig">Materialize - Support  System - Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(assets/ressources/images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Say Hello to <span>Angel</span></h1>
            <p class="animated fadeInRightBig">AI  - Intelligence Artificial- API Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(assets/ressources/images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are on <span>AIM</span></h1>
            <p class="animated fadeInRightBig">Android - Operating System - Now Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"  href="{{url('/')}}" > <!-- href="index.html" -->
            <h1><img class="img-responsive" src="{{asset('assets/ressources/images/logo.png')}}"  alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a  href="{{ url('/')}}#home">Home</a></li>
            <li class="scroll"><a href="{{ url('/')}}#services">Service</a></li> 
            <li class="scroll"><a  href="{{ url('/')}}#about-us">About Us</a></li>                     
            <li class="scroll"><a  href="{{ url('/')}}#portfolio">Portfolio</a></li>
            <li class="scroll"><a  href="{{ url('/')}}#team">Team</a></li>
            <li class="scroll"><a  href="{{ url('/')}}#blog">Blog</a></li>
            <li class="scroll"><a href="{{ url('/')}}#contact">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home--> 
  
  @yield('content')

<!-- Begin footer ------------------------------------------>
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="{{asset('assets/ressources/images/logo.png')}}" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2019 Webox web site.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Integated by <a href="#">UMI Team </a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="{{asset('assets/ressources/js/jquery.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/ressources/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="{{asset('assets/ressources/js/jquery.inview.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/ressources/js/wow.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/ressources/js/mousescroll.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/ressources/js/smoothscroll.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/ressources/js/jquery.countTo.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/ressources/js/lightbox.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/ressources/js/main.js')}}"></script>
  @yield('extra-js')

  @stack('othersJs')

</body>
</html>