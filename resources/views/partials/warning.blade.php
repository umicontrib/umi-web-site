@if(session('warning'))
    <div class="ui yellow message">
        <i class="close icon"></i>
        <div class="header">
            <i class="exclamation triangle icon"></i> Avertissement
        </div>
        <p>
            {{ session('warning') }}
        </p>
    </div>
@endif