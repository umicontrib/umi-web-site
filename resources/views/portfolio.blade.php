@extends('./templates/master-template')

@section('titre') 
  Presentation
@endsection

@push('othersCss')
@endpush

@push('othersJs')
@endpush
 
@section('contenu')

        <div class="page-title sp" style="background-image: url(assets/img/page-title.jpg)">
            <div class="container text-center">
                <h2>Our Work</h2>
                <p>Malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
            </div>
        </div>
        <div class="portfolio-area sp">
            <div class="container">
                <div class="row">
                    <ul class="isotope-menu">
                        <li data-filter="*" class="active">Show All</li>
                        <li data-filter=".ceramics">Ceramics</li>
                        <li data-filter=".branding">Branding</li>
                        <li data-filter=".design">Design</li>
                        <li data-filter=".photography">Photography</li>
                    </ul>
                </div>
                <div class="row portfolio-isotope">
                    <div class="single-portfolio col-md-4 branding photography design">
                        <div class="inner">
                            <div class="portfolio-img">
                                <img src="{{asset('assets/res/img/portfolio1.jpg')}}" alt="portfolio-image">
                                <div class="hover-content">
                                    <div>
                                        <a href="#" class="button">View Case Study</a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <a href="#">
                                    <h3>The Back Chiropractor</h3>
                                </a>
                                <span>Ceramics, Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-portfolio col-md-4 ceramics design photography">
                        <div class="inner">
                            <div class="portfolio-img">
                                <img src="{{asset('assets/res/img/portfolio2.jpg')}}" alt="portfolio-image">
                                <div class="hover-content">
                                    <div>
                                        <a href="#" class="button">View Case Study</a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <a href="#">
                                    <h3>The Back Chiropractor</h3>
                                </a>
                                <span>Ceramics, Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-portfolio col-md-4 ceramics branding ceramics">
                        <div class="inner">
                            <div class="portfolio-img">
                                <img src="{{asset('assets/res/img/portfolio3.jpg')}}" alt="portfolio-image">
                                <div class="hover-content">
                                    <div>
                                        <a href="#" class="button">View Case Study</a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <a href="#">
                                    <h3>The Back Chiropractor</h3>
                                </a>
                                <span>Ceramics, Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-portfolio col-md-4 design photography">
                        <div class="inner">
                            <div class="portfolio-img">
                                <img src="{{asset('assets/res/img/portfolio4.jpg')}}" alt="portfolio-image">
                                <div class="hover-content">
                                    <div>
                                        <a href="#" class="button">View Case Study</a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <a href="#">
                                    <h3>The Back Chiropractor</h3>
                                </a>
                                <span>Ceramics, Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-portfolio col-md-4 ceramics photography branding">
                        <div class="inner">
                            <div class="portfolio-img">
                                <img src="{{asset('assets/res/img/portfolio5.jpg')}}" alt="portfolio-image">
                                <div class="hover-content">
                                    <div>
                                        <a href="#" class="button">View Case Study</a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <a href="#">
                                    <h3>The Back Chiropractor</h3>
                                </a>
                                <span>Ceramics, Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-portfolio col-md-4 branding design">
                        <div class="inner">
                            <div class="portfolio-img">
                                <img src="{{asset('assets/res/img/portfolio6.jpg')}}" alt="portfolio-image">
                                <div class="hover-content">
                                    <div>
                                        <a href="#" class="button">View Case Study</a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <a href="#">
                                    <h3>The Back Chiropractor</h3>
                                </a>
                                <span>Ceramics, Design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
@endsection