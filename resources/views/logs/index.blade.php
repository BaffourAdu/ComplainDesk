@extends('layouts.app') @section('title', 'My Tickets') @section('external-css')
<link href="{{ asset('css/userdashboard.css') }}" rel="stylesheet"> @endsection @include('layouts.user-dashboard-nav') @section('content')
<div class="container">
    <br>
    <br> @if ($logs->isEmpty())
    <p>No Event has been Captured yet</p>
    @else
    <table class="table table-responsive-md table-hover">
        <thead style="background:#2737A6;color:white; font-size:17px; font-weight:bold;">
            <tr>
                <th>Event ID</th>
                <th>Event By</th>
                <th>Event Action</th>
                <th>Event Description</th>
                <th>Event Date/Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
            <tr>
                <td>
                    {{ $log->id }}
                </td>
                <td>
                    {{ $log->user->name }}
                </td>
                <td>
                    {{ $log->action }}
                </td>
                <td>{{ $log->description }}</td>
                <td>
                    {{ $log->created_at }}
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{ $logs->render() }} @endif

</div>
@endsection