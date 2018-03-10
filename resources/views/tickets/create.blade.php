@extends('layouts.app')

@section('title', 'Open Ticket')

@section('external-css')
<link href="{{ asset('css/userdashboard.css') }}" rel="stylesheet">
@endsection

@section('navigation')
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
                <button type="button" class="btn btn-outline-primary text-white">Log out</button>
            </form>
        </div>
    </nav>
        <div class="nav-scroller bg-white box-shadow">
        <nav class="nav nav-underline">
            <a class="nav-link active" href="{{ url('/home') }}">Dashboard</a>
            <a class="nav-link" href="{{ url('/mytickets') }}">My Tickets</a>
            <a class="nav-link" href="{{ url('/tickets') }}">Open Ticket</a>
            <a class="nav-link" href="#">Settings</a>
            
        </nav>
    </div>
@endsection

@section('content')
    <!-- Container -->
    <div class="container">
        <!-- Boostrap Grid -->
        <div class="col-md-10 col-md-offset-1" > 
            <!-- Begining of Ticket Card/Panel -->
            <div class="panel panel-default">
                <!-- Heading -->
                <div class="panel-heading">Open New Ticket</div>
                
                <!-- Begining of Ticket Card/Panel Body -->
                <div class="panel-body">
                    
                    @include('includes.flash')
                    
                    <!-- Begining of New Ticket Form -->
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/tickets') }}" >
                        @csrf

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
                                <select id="category" type="category" class="form-control" name="category">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('priority') ? ' has-error' : '' }}">
                            <label for="priority" class="col-md-4 control-label">Priority</label>

                            <div class="col-md-6">
                                <select id="priority" type="" class="form-control" name="priority">
                                    <option value="">Select Priority</option>
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                </select>

                                @if ($errors->has('priority'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('priority') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="message" class="col-md-4 control-label">Message</label>

                            <div class="col-md-6">
                                <textarea rows="5" id="message" class="form-control" name="message"></textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-ticket"></i> Open Ticket
                                </button>
                            </div>
                        </div>

                    </form><!-- End of New Ticket Form -->

                </div><!-- End of Ticket Card/Panel Body -->

            </div><!-- End of Beging of Ticket Card/Panel -->
        </div><!-- End of Boostrap Grid -->
    </div><!-- End of Container -->
@endsection