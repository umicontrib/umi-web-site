
@extends('./templates/user-template')

@section('titre')
    Espace utilisateur
@endsection

@section('titre-operation')
    <div style="text-align: center;">
        {{ session('mon_')->nom }}
    </div>
@endsection

@section('contenu')
   


   
@endsection

@section('extra-js')
    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active-tab", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active-tab";
        }
        document.getElementById("defaultOpen").click();
    </script>
@endsection
