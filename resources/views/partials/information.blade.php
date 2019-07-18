@if(session('information'))
    <div class="ui info message">
        <i class="close icon"></i>
        <div class="header">
            <i class="icon info circle"></i> Information
        </div>
        <p>
            {{ session('information') }}
        </p>
    </div>
@endif