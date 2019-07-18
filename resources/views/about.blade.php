@extends('./templates/master-template')

@section('titre') 
  Apropos
@endsection

@push('othersCss')
@endpush

@push('othersJs')
@endpush
 
@section('contenu')
        <div class="page-title sp">
          <!--  style="background-image: url(assets/res/img/page-title.jpg) -->
            <div class="container text-center">
                <h2>About Us</h2>
                <p>Malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
            </div>
        </div>
        <div class="about-area sp">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-content">
                            <h3>USA’s most trusted 3D and graphic designing studio, a very passionate team inside.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip. </p>
                            <p>Exa commodo consequat.Pellentesque habitant morbi tristique senectus et netus et
                                malesuada fames ac turpis egestas.</p>
                            <a href="#" class="button">More about</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{asset('assets/res/img/about.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="skill-area spb">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="skill-title">
                            <h2>Our skills</h2>
                            <p>Lorem ipsum dolor sit amet conse</p>
                            <a href="#" class="button">See our work</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-sm-6 single-skill">
                                <h4>HTML</h4>
                                <div class="barfiller">
                                    <span class="tip"></span>
                                    <span class="fill" data-percentage="50"></span>
                                </div>
                            </div>
                            <div class="col-sm-6 single-skill">
                                <h4>PHP</h4>
                                <div class="barfiller">
                                    <span class="tip"></span>
                                    <span class="fill" data-percentage="50"></span>
                                </div>
                            </div>
                            <div class="col-sm-6 single-skill">
                                <h4>JavaScript</h4>
                                <div class="barfiller">
                                    <span class="tip"></span>
                                    <span class="fill" data-percentage="50"></span>
                                </div>
                            </div>
                            <div class="col-sm-6 single-skill">
                                <h4>CSS</h4>
                                <div class="barfiller">
                                    <span class="tip"></span>
                                    <span class="fill" data-percentage="50"></span>
                                </div>
                            </div>
                            <div class="col-sm-6 single-skill">
                                <h4>AJAX</h4>
                                <div class="barfiller">
                                    <span class="tip"></span>
                                    <span class="fill" data-percentage="50"></span>
                                </div>
                            </div>
                            <div class="col-sm-6 single-skill">
                                <h4>Database</h4>
                                <div class="barfiller">
                                    <span class="tip"></span>
                                    <span class="fill" data-percentage="50"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs-area spb">
            <div class="container">
                <ul class="nav tabs-nav" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#mission">
                            <i class="fa fa-puzzle-piece"></i>
                            <span>Our Missioin</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#vision">
                            <i class="fa fa-binoculars"></i>
                            <span>Our Vision</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#funds">
                            <i class="fa fa-pie-chart"></i>
                            <span>Investments & Fundings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#history">
                            <i class="fa fa-qrcode"></i>
                            <span>Our History</span>
                        </a>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="mission" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="http://lorempicsum.com/simpsons/490/200/2" alt="">
                            </div>
                            <div class="col-md-6">
                                <p>When I was just starting 6th grade I got my first job. Paperboy! Boy, was I excited.
                                    At that time I had spent a lot of time actually playing the video official game
                                    Paperboy disked.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip. You would need to research online,
                                    for newspapers that are in your area.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="vision" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>When I was just starting 6th grade I got my first job. Paperboy! Boy, was I
                                        excited. At that time I had spent a lot of time actually playing the video
                                        official game Paperboy disked.</strong></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip.</p>
                            </div>
                            <div class="col-md-6">
                                <p>When I was just starting 6th grade I got my first job. Paperboy! Boy, was I excited.
                                    At that time I had spent a lot of time actually playing the video official game
                                    Paperboy disked.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip. You would need to research online,
                                    for newspapers that are in your area.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="funds" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>When I was just starting 6th grade I got my first job. Paperboy! Boy, was I
                                        excited. At that time I had spent a lot of time actually playing the video
                                        official game Paperboy disked.</strong></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="http://lorempicsum.com/simpsons/490/200/3" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="history" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="http://lorempicsum.com/simpsons/490/100/3" alt="">
                                <br>
                                <br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi utad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip.</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>When I was just starting 6th grade I got my first job. Paperboy! Boy, was I
                                        excited. At that time I had spent a lot of time actually playing the video
                                        official game Paperboy disked.</strong></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip. You would need to research online,
                                    for newspapers that are in your area.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="spb">
            <div class="brand-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-6 single-brand">
                            <div class="inner">
                                <a href="#">
                                    <img src="{{asset('assets/res/img/brand1.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 single-brand">
                            <div class="inner">
                                <a href="#">
                                    <img src="{{asset('assets/res/img/brand2.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 single-brand">
                            <div class="inner">
                                <a href="#">
                                    <img src="{{asset('assets/res/img/brand3.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 single-brand">
                            <div class="inner">
                                <a href="#">
                                    <img src="{{asset('assets/res/img/brand4.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection