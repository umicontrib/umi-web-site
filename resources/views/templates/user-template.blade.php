<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    UMI | @yield('titre')
  </title>

  <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
  <!-- Loading the main application css file -->
  <link href="{{asset('assets/css/hotel_list.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/dash.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/tab.css')}}" rel="stylesheet">

  <!-- Loading semantic ui css file -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">

  <!-- Include fontAwesome icons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js" charset="utf-8"></script>

  <!-- Datables css -->
  <link href="{{asset('assets/css/dataTables.semanticui.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/responsive.semanticui.min.css')}}" rel="stylesheet">
</head>
<body>

<div class="ui column grid bottom-100">
  <div class="ui sixteen wide fluid column">

    <div class="topnav" id="myTopnav">
      <a href="{{url('/')}}" style="font-weight: bolder; color: #ffb300;" id="logo-item">Hotel-List</a>
      <a href="{{url('/')}}"><i class="fa fa-home"></i></a>
      <a href="{{url('/')}}#contact">Contact</a>

      <a href="#" class="menu right-menu">Langue</a>
      @if(Sentinel::check())
        <a href="{{url('/logout')}}" class="menu right-menu">Deconnexion</a>
        <a href="{{url('/user-home')}}" class="menu right-menu">Dashboad</a>
      @else
        <a href="{{url('/login')}}" class="menu right-menu">Connexion</a>
      @endif

      <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>

    </div>



    <div class="" style="background-color: #ffb300; padding: 10px; border-bottom: 2px #f8f8f8 solid; font-weight: bolder;">
      @if(Sentinel::check())
        <h5> <i class="ui large user icon"></i> Bienvenue {{ Sentinel::getUser()->prenom }}</h5>
      @endif
    </div>
    <div class="ui grid">
      <div class="sixteen wide column">
        <div class="" style="background-color: #f7f7f7; padding: 10px; margin-top: 5px; border-bottom: 5px #000 solid; margin-bottom: 10px; margin-top: 0px;">
          <h2>@yield('titre-operation')</h2>
        </div>
        <!-- Begin page content -->
      @yield('contenu')
      <!-- End page content -->
      </div>
    </div>
    <footer>
      &copy; 2019 tafoca <span class="application-name">Hotel-List</span> Tous droits réservés.
    </footer>

  </div>
</div>

<script src="{{asset('assets/js/dash.js')}}"></script>
<script src="{{asset('assets/js/hotel_list.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>

<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.semanticui.min.js')}}"></script>
<script src="{{asset('assets/js/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/responsive.semanticui.min.js')}}"></script>
<script type="text/javascript">
    // Fonction permettant d'activer le menu courrant
    $(function () {
        var url = window.location.pathname,
            urlRegExp = new RegExp(url.replace(/\/$/, '') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('#sidebar a').each(function () {
            // and test its normalized href against the url pathname regexp
            if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
                $(this).addClass('active');
            }
        });
    });
</script>

<script type="text/javascript">
    var monthNames = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin",
        "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Decembre"];
    var dayNames = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];

    var newDate = new Date();
    newDate.setDate(newDate.getDate());
    $('#date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.datatable').DataTable();
    });
</script>

<script type="text/javascript">
  jQuery(document).ready(function() {
    $('button.btn-warning').on('click', function(e) {
      e.preventDefault();
      $.ajax({
        type:'delete',
        url:'/delete_panier',
        data: {
          '_token' : $("#_token").val(),
          'id' : $(this).attr("value") ,
        },
        success:function(data) {
          console.log(data);
          //alert(data.success);
        }
      });
      $('#refresh').load('{{ route('panier.show') }}');
    });

  });
</script>

@yield('extra-js')
</body>
</html>
