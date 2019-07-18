@extends('./templates/master-template')

@section('titre') 
  Details ser
@endsection

@push('othersCss')
  <link rel="stylesheet" href="{{ asset('assets/css/detailsService.css') }}">
@endpush

@push('othersJs')
@endpush
 
@section('contenu')
 
<br><br>
 <div class="ui one column grid container">

  <div class="column">
    <div class="ui fluid card">
      <div class="image">
        <img src="{{asset('assets/img/bad-1538768_1920.jpg')}}" style="height: 300px;">
      </div>
      <div class="content">
        <h1 class="">Nom du service</h1>

        <h2> Description du service </h2>
        <div>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto numquam asperiores eligendi repellat amet eaque provident.
           Quibusdam nisi, sit, ex magnam autem molestias tempora cum sunt assumenda, ab voluptas quam!
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto numquam asperiores eligendi repellat amet eaque provident.
           Quibusdam nisi, sit, ex magnam autem molestias tempora cum sunt assumenda, ab voluptas quam!
        </div>
      </div>
    </div>
  </div>
  
 </div>

 <br><br>
@endsection