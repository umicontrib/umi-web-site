@extends('./templates/master-template')

@section('titre')
  Connexion
@endsection

@section('contenu')
  <div class="login">
    <div class="ui three column doubling stackable grid">
      <div class="column"></div>
      <div class="column">

        <div class="text-center bottom-30">
          <i class="ui huge blue sign-in icon"></i>
        </div>

        <div class="text-center bottom-30">
          <div class="header">
            Connexion à <span class="application-name">Hotel-List</span>
          </div>
          <p>
            Remplissez le formulaire pour vous connecter ou <a href="/register">créez un compte</a> si vous ne l'avez pas.
          </p>
        </div>
        <form class="ui form attached fluid segment" method="post" action="/login">
          {{ csrf_field() }}

          @include('partials.information')
          @include('partials.warning')
          @include('partials.error')

          <div class="field">
            <label>Login</label>
            <input type="text" name="login" placeholder="Adresse mail ou nom d'utilisateur" required>
          </div>
          <div class="field">
            <label>Mot de passe</label>
            <input type="password" name="password" placeholder="Mot de passe" required>
          </div>
          <div class="inline field">
            <div class="ui checkbox">
              <input type="checkbox" name="remember_me">
              <label for="terms">Se souvenir de moi</label>
            </div>
          </div>
          <button class="ui fluid blue button" type="submit">Connexion</button>
        </form>
        <div class="ui warning message text-center bottom-100">
          <p>
            <i class="question circle icon"></i>
            Avez-vous oublié votre mot de passe ? <a href="/forgot-password">Réinitialisez</a> le.
          </p>
        </div>
      </div>
      <div class="column"></div>
    </div>
  </div>
@endsection
