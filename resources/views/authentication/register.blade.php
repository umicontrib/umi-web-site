@extends('./templates/master-template')

@section('titre')
Création de compte
@endsection

@section('contenu')
  <div class="register">
    <div class="ui three column doubling stackable grid">
      <div class="column"></div>
      <div class="column">

        <div class="text-center bottom-30">
          <i class="ui huge blue user icon"></i>
        </div>

        <div class="text-center bottom-30">
          <div class="header">
            Création de compte sur <span class="application-name">Hotel-List</span>
          </div>
          <p>
            Remplissez le formulaire pour créer le compte ou <a href="/login">connectez-vous</a> si vous avez déjà un compte.
          </p>
        </div>
        <form class="ui form attached fluid segment" method="post" action="/register">
          {{ csrf_field() }}

          <div class="field">
            <label>Nom *</label>
            <input type="text" name="nom" placeholder="Entrez votre nom"
                   {{ $errors->has('nom') ? 'is-invalid' : '' }} value="{{ old('nom') }}">
            @if ($errors->first('nom'))
              <div>
                {{ $errors->first('nom') }}
              </div>
            @endif
          </div>
          <div class="field">
            <label>Prénom</label>
            <input type="text" name="prenom" placeholder="Entrez votre prénom"
                   {{ $errors->has('prenom') ? 'is-invalid' : '' }} value="{{ old('prenom') }}">
            @if ($errors->first('prenom'))
              <div>
                {{ $errors->first('prenom') }}
              </div>
            @endif
          </div>
          <div class="field">
            <label>Email *</label>
            <input type="email" name="email" placeholder="Entrez votre adresse mail"
                   {{ $errors->has('email') ? 'is-invalid' : '' }} value="{{ old('email') }}">
            @if ($errors->first('email'))
              <div>
                {{ $errors->first('email') }}
              </div>
            @endif
          </div>

          <div class="field">
            <label>Numéro de téléphone *</label>
            <input type="text" name="telephone_1" placeholder="Entrez votre numéro de téléphone"
                   {{ $errors->has('telephone_1') ? 'is-invalid' : '' }} value="{{ old('telephone_1') }}">
            @if ($errors->first('telephone_1'))
              <div>
                {{ $errors->first('telephone_1') }}
              </div>
            @endif
          </div>
          <div class="field">
            <label>Nom d'utilisateur *</label>
            <input type="text" name="username" placeholder="Entrez votre nom d'utilisateur"
                   {{ $errors->has('username') ? 'is-invalid' : '' }} value="{{ old('username') }}">
            @if ($errors->first('username'))
              <div>
                {{ $errors->first('username') }}
              </div>
            @endif
          </div>
          <div class="field">
            <label>Mot de passe *</label>
            <input type="password" name="password" placeholder="Entrez votre mot de passe"
                   {{ $errors->has('password') ? 'is-invalid' : '' }} value="{{ old('password') }}">
            @if ($errors->first('password'))
              <div>
                {{ $errors->first('password') }}
              </div>
            @endif
          </div>
          <div class="field">
            <label>Confirmation *</label>
            <input type="password" name="password_confirmation" placeholder="Confirmez votre mot de passe"
                   {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }} value="{{ old('password_confirmation') }}">
            @if ($errors->first('password_confirmation'))
              <div>
                {{ $errors->first('configuration_confirmation') }}
              </div>
            @endif
          </div>

          <button class="ui fluid blue button" type="submit">Créer le compte</button>
        </form>
        <div class="ui info message text-center bottom-100">
          <p>
            <i class="info circle icon"></i>
            En soumetant ce formulaire, vous avez lu et acceptez les <a href="#">termes et conditions d'utilisation </a> de <span class="application-name">Hotel-List</span>.
          </p>
        </div>
      </div>
      <div class="column"></div>
    </div>
  </div>
@endsection
