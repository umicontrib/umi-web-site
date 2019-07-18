@extends('./templates/master-template')

@section('titre') 
  Contact
@endsection

@push('othersCss')
@endpush

@push('othersJs')
@endpush
 
@section('contenu')

        <div class="page-title sp">
            <!-- style="background-image: url(assets/img/page-title.jpg)" -->
            <div class="container text-center">
                <h2>Contact Us</h2>
                <p>Malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
            </div>
        </div>
        <div class="contact-area sp">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 contact-info">
                        <div class="single-info">
                            <h5>Phone</h5>
                            <p>+(121) - 237 - 979 - 3580</p>
                        </div>
                        <div class="single-info">
                            <h5>Email</h5>
                            <p>esmeralda_walsh@lucy.name</p>
                        </div>
                        <div class="single-info">
                            <h5>Address</h5>
                            <p>30 Heathcote Vista, Cassinfort, LA</p>
                        </div>
                        <div class="single-info">
                            <h5>Social</h5>
                            <p>
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-linkedin"></a>
                                <a href="#" class="fa fa-pinterest"></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <form action="#" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Subject">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <input class="button" type="submit" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
@endsection