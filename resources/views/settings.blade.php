@extends('layouts.app') @section('title', 'My Tickets') @section('external-css')
<link href="{{ asset('css/userdashboard.css') }}" rel="stylesheet"> @endsection @include('layouts.user-dashboard-nav') @section('content')
<div class="container col-md-6">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header" style="background:#2737A6;color:white">Update Phone Number</div>
            <div class="card-body">
                @include('includes.flash')
                <form action="{{ url('/settings') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="current">Current Phone Number</label>
                        <input class="form-control" id="current" value="{{ $oldTelephone }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="new">New Phone Number:</label>
                        <input type="number" class="form-control" id="new" name="telephone">
                    </div>
                    <button type="submit" class="btn" style="background:#2737A6;color:white">Update Telephone</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection