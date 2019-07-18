@extends('./templates/master-template')

@section('titre')
Création de compte
@endsection

@section('contenu')
  <div class="login">
    <div class="ui three column doubling stackable grid">
      <div class="column"></div>
      <div class="column">

        <div class="text-center bottom-30">
          <i class="ui huge blue sync icon"></i>
        </div>

        <div class="text-center bottom-30">
          <div class="header">
            Bienvenue sur <span class="application-name">Hotel-List</span>
          </div>
          <p>
            Entrez votre nouveau mot de passe et confirmez-le.
          </p>
        </div>

        <form class="ui form attached fluid segment" method="post" action="">
          @if(count($errors) > 0 )
            <div class="ui negative message">
              <i class="close icon"></i>
              <div class="header">
                <i class="check"></i> Données incorrectes
              </div>
              <ul>
                @foreach($errors->all() as $error)
                  <li> {{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          {{ csrf_field() }}

          <div class="field">
            <label>Nouveau mot de passe</label>
            <input type="password" name="password" placeholder="Entrez le nouveau mot de passe" required>
          </div>
          <div class="field">
            <label>Confirmation</label>
            <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
          </div>

          <button class="ui blue fluid button" type="submit">Reinitialiser</button>
        </form>


      </div>
      <div class="column"></div>
    </div>
  </div>


@endsection
