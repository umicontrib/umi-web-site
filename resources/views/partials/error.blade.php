@if(session('error'))
    <div class="ui negative message">
        <i class="close icon"></i>
        <div class="header">
            <i class="exclamation circle icon"></i> Une Erreur est survenue !!!
        </div>
        <p>
            {{ session('error') }}
        </p>
    </div>
@endif
