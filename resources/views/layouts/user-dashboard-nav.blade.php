    <nav class="navbar navbar-expand-md navbar-dark text-white" style="background-color:#0054a6">
        <a class="navbar-brand" href="#"><img class="img-responsive2" src="{{ asset('img/cmp.png') }}" style="width:70px;"></a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">

            </ul>
            <span>Hello, {{ Auth::user()->name }}</span> &nbsp

             <form id="logout-form" method="POST" action="{{ route('logout') }}" class="form-inline my-2 my-lg-0">
                 @csrf
                <button type="submit" class="btn btn-outline-primary text-white">Log out</button>
            </form>
        </div>
    </nav>
        <div class="nav-scroller bg-white box-shadow">
        <nav class="nav nav-underline">
            <a class="nav-link active" href="{{ url('/home') }}">Dashboard</a>
            <a class="nav-link" href="{{ url('/mytickets') }}">My Tickets</a>
            <a class="nav-link" href="{{ url('/tickets') }}">Open Ticket</a>
            <a class="nav-link" href="{{ url('/settings') }}">Settings</a>
        </nav>
    </div>