@extends('layouts.app') @section('external-css')
<link href="{{ asset('css/userdashboard.css') }}" rel="stylesheet"> @endsection @include('layouts.user-dashboard-nav') @section('content')

<body class="bg-light">

    <main role="main" class="container">

        <div class="container">

            <div class="card">
                <div class="card-header" style="background:#2737A6;color:white">Add New admin</div>
                <div class="card-body">
                    <div class="container">
                        @include('includes.flash')

                        <form method="POST" action="{{ url('/admin/users') }}">
                            @csrf

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <label for="name">Full Name</label>

                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                        required autofocus> @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-8">
                                    <label for="email">E-Mail Address</label>

                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                        required> @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-4">
                                    <label for="telephone">Telephone</label>

                                    <input id="telephone" type="number" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone"
                                        value="{{ old('telephone') }}" required> @if ($errors->has('telephone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <br>

                            <div class="form-row">

                                <div class="col-md-6">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                        placeholder="Must be 8-20 characters long" required> @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <br>

                            <div>
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
        <br>


        <div class="container">

            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <table class="table table-responsive">
                            <thead style="background:#2737A6;color:white">
                                <tr>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $admin)
                                <tr>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->telephone }}</td>
                                    <td>{{ $admin->created_at}}</td>
                                    <td>
                                        <form action="{{ url('admin/users/' . $admin->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </main>

    @endsection