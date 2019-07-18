@extends('./templates/master-template')

@push('othersCss')

    <link rel="stylesheet" href="{{ asset('assets/css/detailsService.css') }}">

    <link rel='stylesheet' href='https://jeffry.in/old-jeffry-in/css/jeffry.in.css'>
    <link rel='stylesheet' href='https://jeffry.in/old-jeffry-in/css/jeffry.in.slider.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lobster|Raleway:300,500,700'>
@endpush

@push('othersJs')
    <script src='https://cdn.jsdelivr.net/jquery.glide/1.0.6/jquery.glide.min.js'></script>
@endpush

@section('titre')
    Detail Service
@endsection

@section('contenu')
    <div class="ui segment">
        <p><i class="blue phone icon"></i>Contact: {{$h->telephone_1}} / {{$h->telephone_2}} &nbsp; &nbsp; <i class="red envelope icon"></i>Email:
            {{$h->email}}</p>
    </div>

    <div class="ui placeholder segment">
        <div class="ui two column very relaxed stackable grid">
            <div class="ui vertical divider"><i class="tag icon"></i> </div>

            <div class="column">
                <div class="slider slider1">
                    <div class="slides">
                        <div class="slide-item">
                            @if($h->image_1 != '')
                                <img src="{{ asset('/assets/img/images_hs/'.$h->image_1)}}" style="width: 100%; height: 100%;">
                            @else
                                <img src="{{ asset('/assets/img/images_hs/default_h.jpg')}}" style="width: 100%; height: 100%;">
                            @endif
                        </div>
                        <div class="slide-item">
                            @if($h->image_2 != '')
                                <img src="{{ asset('/assets/img/images_hs/'.$h->image_2)}}" style="width: 100%; height: 100%;">
                            @else
                                <img src="{{ asset('/assets/img/images_hs/default_h.jpg')}}" style="width: 100%; height: 100%;">
                            @endif
                        </div>
                        <div class="slide-item">
                            @if($h->image_3 != '')
                                <img src="{{ asset('/assets/img/images_hs/'.$h->image_3)}}" style="width: 100%; height: 100%;">
                            @else
                                <img src="{{ asset('/assets/img/images_hs/default_h.jpg')}}" style="width: 100%; height: 100%;">
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <h1 style="background-color: #000; color: #fff; padding: 10px;">{{$h->nom}} </h1>
                <div class="ui list">
                    <div class="item h-item">
                        <i class="marker icon"></i>
                        <div class="content">
                            {{ $h->ville }}
                        </div>
                    </div>
                    <div class="item h-item">
                        <i class="phone icon"></i>
                        <div class="content">
                            {{ $h->telephone_1 }}
                        </div>
                    </div>
                    <div class="item h-item">
                        <i class="mobile icon"></i>
                        <div class="content">
                            {{ $h->telephone_2 }}
                        </div>
                    </div>
                    <div class="item h-item">
                        <i class="mail icon"></i>
                        <div class="content">
                            <a>{{ $h->email }}</a>
                        </div>
                    </div>
                    <div class="item h-item">
                        <i class="globe icon"></i>
                        <div class="content">
                            <a>{{ $h->site_web }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <h2 class="ui horizontal divider header"><i class="circular blue cogs icon"></i>Nos services disponibles</h2>
    <div class="ui stackable three column grid container">
        <div class="column div-service-dispo">
            @if(count($chambres) > 0)
                @foreach($chambres as $chambre)
                    <h2 class="ui icon header">
                        @if($chambre->image_1 != '')
                            <img class="ui medium circular image" src="{{ asset('/assets/img/images_chambres/'.$chambre->image_1)}}" style="width: 50%; height: 50%;">
                        @else
                            <img class="ui medium circular image" src="{{ asset('/assets/img/images_chambres/default_chambre.jpg')}}" style="width: 50%; height: 50%;">
                        @endif
                        <div class="content"> {{$chambre->nom}} </div>
                        <div class="sub header">{{$chambre->prix}} F. CFA</div>
                    </h2>
                    <a class="ui right labeled primary icon button" href="#"><i class="right eye icon"></i> Voir le détail</a>
                @endforeach
            @endif
            @if(count($appartements) > 0)
                @foreach($appartements as $appartement)
                    <h2 class="ui icon header">
                        @if($appartement->image_1 != '')
                            <img class="ui medium circular image" src="{{ asset('/assets/img/images_appartements/'.$appartement->image_1)}}" style="width: 50%; height: 50%;">
                        @else
                            <img class="ui medium circular image" src="{{ asset('/assets/img/images_appartements/default_appartement.jpg')}}" style="width: 50%; height: 50%;">
                        @endif
                        <div class="content"> {{$appartement->nom}} ({{$appartement->nbre_chambres}} chambres)</div>
                        <div class="sub header">{{$appartement->prix}} F. CFA</div>
                    </h2>
                    <a class="ui right labeled primary icon button" href="#"><i class="right eye icon"></i> Voir le détail</a>
                @endforeach
            @endif
            @if(count($salles) > 0)
                @foreach($salles as $salle)
                    <h2 class="ui icon header">
                        @if($salle->image_1 != '')
                            <img class="ui medium circular image" src="{{ asset('/assets/img/images_salles/'.$salle->image_1)}}" style="width: 50%; height: 50%;">
                        @else
                            <img class="ui medium circular image" src="{{ asset('/assets/img/images_salles/default_salle.jpg')}}" style="width: 50%; height: 50%;">
                        @endif
                        <div class="content"> {{$salle->nom}} ({{$salle->nbre_places}}) </div>
                        <div class="sub header">{{$salle->prix}} F. CFA</div>
                    </h2>
                    <a class="ui right labeled primary icon button" href="#"><i class="right eye icon"></i> Voir le détail</a>
                @endforeach
            @endif
        </div>


    </div>
    <br><br>
@endsection