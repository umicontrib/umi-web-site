@extends('./templates/master-template')

@section('titre') 
  Coming soon
@endsection

@push('othersCss')
@endpush

@push('othersJs')
@endpush
 
@section('contenu')

        <div class="coming-soon window-height">
            <!--style="background-image: url(assets/img/404-bg.png)"-->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="coming-soon-logo">
                            <img src="assets/img/logo-404.png" alt="">
                        </div>
                        <div class="coming-soon-box bg1">
                            <h2>Coming Soon</h2>
                            <p>We are come back soon</p>

                            <div class="counter-box clearfix" data-date="'2020/09/09">
                                <div class="single-counter">
                                    <div class="inner">
                                        <span class="counter-days">454</span>
                                        <span class="text">Days</span>
                                    </div>
                                </div>
                                <div class="single-counter">
                                    <div class="inner">
                                        <span class="counter-hours">454</span>
                                        <span class="text">Hours</span>
                                    </div>
                                </div>
                                <div class="single-counter">
                                    <div class="inner">
                                        <span class="counter-minutes">454</span>
                                        <span class="text">Minutes</span>
                                    </div>
                                </div>
                                <div class="single-counter">
                                    <div class="inner">
                                        <span class="counter-seconds">454</span>
                                        <span class="text">Secondes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
@endsection