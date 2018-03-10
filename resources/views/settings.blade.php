@extends('layouts.app')

@section('title', 'My Tickets')

@section('external-css')
<link href="{{ asset('css/userdashboard.css') }}" rel="stylesheet">
@endsection

@include('layouts.user-dashboard-nav')

@section('content')
    <div class="container col-md-8">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background:#2737A6;color:white">Update Phone Number</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="current">Current Phone Number</label>
                            <input type="tel" class="form-control" id="current" value="{{ $oldTelephone }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="new">New Phone Number:</label>
                            <input type="tel" class="form-control" id="new">
                        </div>
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
            <div style="margin-top:20px;"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background:#2737A6;color:white">Change Password</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="curr pwd">Current Password</label>
                            <input type="password" class="form-control" id="currpwd">
                        </div>
                        <div class="form-group">
                            <label for="newpwd">New Password:</label>
                            <input type="password" class="form-control" id="newpwd">
                        </div>
                        <div class="form-group">
                            <label for="conpwd">Confirm Password:</label>
                            <input type="password" class="form-control" id="conpwd">
                        </div>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
    </div>
@endsection