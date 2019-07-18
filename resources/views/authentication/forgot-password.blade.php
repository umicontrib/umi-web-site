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
            Réinitialisation du mot de passe
          </div>
          <p>
            Entrez votre adresse mail pour reinitialiser le mot de passe.
          </p>
        </div>

        <form class="ui form attached fluid segment" method="post" action="/forgot-password">
          {{ csrf_field() }}

          @if(session('success'))
            <div class="ui positive message">
              <i class="close icon"></i>
              <div class="header">
                <i class="check"></i> Envoi de mail avec succès
              </div>
              <p>
                {{ session('success') }}
              </p>
            </div>
          @endif

          <div class="field">
            <label>Adresse mail</label>
            <input type="email" name="email" placeholder="Entrez l'adresse mail" required>
          </div>

          <button class="ui fluid blue button" type="submit">Envoyer lien d'activation</button>
        </form>

        <div class="ui info message text-center bottom-100">
          <p>
            <i class="info circle icon"></i>
            Un message de réinitialisation de mot de passe vous sera envoyé à cette adresse mail.
          </p>
        </div>
      </div>
      <div class="column"></div>
    </div>
  </div>

@endsection
