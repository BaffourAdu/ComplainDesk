@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('status') }}
    </div>
@endif