<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UMI | @yield('titre')</title>

    <!-- Required CSS files -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/res/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/res/css/barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('assets/res/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/res/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/res/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/res/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/res/css/main.css')}}">
    @stack('othersCss')
</head>

<body>
    <div class="preloader">
        <span class="preloader-spin"></span>
    </div>
    <div class="site">

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-3 logo-column">
                        <a href="index.html" class="logo">
                            <img src="{{asset('assets/ressources/images/logo.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="col-6 col-sm-9 nav-column clearfix">
                        <div class="right-nav">
                            <span class="search-icon fa fa-search"></span>
                            <form action="#" class="search-form">
                                <input type="search" placeholder="search now">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            <div class="header-social">
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-github"></a>
                            </div>
                        </div>
                        <nav id="menu" class="d-none d-lg-block">
                            <ul>
                                <li class="current-menu-item has-child">
                                    <a href="{{url('/')}}">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{url('/')}}">Home - 01</a></li>
                                        <li><a href="{{url('/')}}">Home - 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('about')}}">About</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li class="has-child">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{url('about')}}">About</a></li>
                                        <li><a href="{{url('coming-Soon')}}">Coming Soon</a></li>
                                        <li><a href="{{url('contact')}}">Contact</a></li>
                                        <li><a href="{{url('faq')}}">Faq</a></li>
                                        <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                                        <li><a href="{{url('service')}}">Service</a></li>
                                        <li><a href="{{url('team')}}">Team</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--contenu de la page -->
        @yield('contenu')

        <!--pied de page hors connexion-->
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 footer_widget">
                            <div class="inner">
                                <h4>About</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas.</p>
                                <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, antesenectus
                                    et netus et malesuada fames ac turpis egestas.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 footer_widget">
                            <div class="inner">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href="#">Company Overview</a></li>
                                    <li><a href="#">Meet The Team</a></li>
                                    <li><a href="#">Our Awesome Partners</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Frequently Asked Questions</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 footer_widget">
                            <div class="inner">
                                <h4>Recent Posts</h4>
                                <div class="media">
                                    <a href="#">
                                        <img src="{{asset('assets/res/img/recent1.jpg')}}" class="d-flex mr-3" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h5>
                                            <a href="#">Curling irons are as individual as the women</a>
                                        </h5>
                                        <span>June 22, 2017</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#">
                                        <img src="{{asset('assets/res/img/recent2.jpg')}}" class="d-flex mr-3" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h5>
                                            <a href="#">Curling irons are as individual as the women</a>
                                        </h5>
                                        <span>June 22, 2017</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#">
                                        <img src="{{asset('assets/res/img/recent3.jpg')}}" class="d-flex mr-3" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h5>
                                            <a href="#">Curling irons are as individual as the women</a>
                                        </h5>
                                        <span>June 22, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 footer_widget">
                            <div class="inner">
                                <h4>Address</h4>
                                <h5>Team, Inc.</h5>
                                <p>649 Folsom Ave, Suite 400 <br>San Francisco, CA 63105 <br>P: (123) 456-7890</p>
                                <h4>Newsletter</h4>
                                <form action="#" class="nw_form">
                                    <input placeholder="Enter your email" type="email">
                                    <button><i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright-txt">
                                © 2019 Team. All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <div class="footer-nav">
                                <a href="#">Home</a>
                                <a href="#">Portfolio</a>
                                <a href="#">Pages</a>
                                <a href="#">Shortcode</a>
                                <a href="#">Blog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



    </div>

    <!--Required JS files-->
    <script src="{{asset('assets/res/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('assets/res/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/res/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/res/js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/res/js/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/res/js/vendor/jquery.barfiller.js')}}"></script>
    <script src="{{asset('assets/res/js/vendor/loopcounter.js')}}"></script>
    <script src="{{asset('assets/res/js/vendor/slicknav.min.js')}}"></script>
    <script src="{{asset('assets/res/js/active.js')}}"></script>
    @yield('extra-js')

    @stack('othersJs')
  
</body>

</html>