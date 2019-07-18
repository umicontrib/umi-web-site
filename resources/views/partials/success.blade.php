@if(session('success'))
    <div class="ui green message">
        <i class="close icon"></i>
        <div class="header">
            <i class="icon check"></i> Succès
        </div>
        <p>
            {{ session('success') }}
        </p>
    </div>
@endif