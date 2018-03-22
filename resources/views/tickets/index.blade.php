@extends('layouts.app') @section('title', 'All Tickets') @section('external-css')
<link href="{{ asset('css/userdashboard.css') }}" rel="stylesheet">
<link href="{{ asset('css/create.css') }}" rel="stylesheet"> @endsection @include('layouts.user-dashboard-nav') @section('navigation') @endsection @section('content')
<div class="container card">
    <div class="col-md-12 col-md-offset-1 card-body">
        <div class="panel panel-default">

            <div class="panel-body">
                @if ($tickets->isEmpty())
                <p>There are currently no tickets.</p>
                @else
                <table class="table table-responsive">
                    <thead style="background:#2737A6;color:white; font-size:17px; font-weight:bold;">
                        <tr>
                            <th>Ticket ID</th>
                            <th> Title</th>
                            <th> Category</th>
                            <th> Status</th>
                            <th> Date Opened</th>
                            <th>Ticket Duration</th>
                            <th style="text-align:center" colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                        <tr>
                            <td>
                                <a href="{{ url('tickets/'. $ticket->ticket_id) }}">
                                    {{ $ticket->ticket_id }}
                                </a>
                            </td>
                            <td>{{ $ticket->title }}</td>
                            <td>
                                @foreach ($categories as $category) @if ($category->id === $ticket->category_id) {{ $category->name }} @endif @endforeach
                            </td>
                            <td>
                                @if ($ticket->status === 'Open')
                                <span class="label label-success text-success">{{ $ticket->status }}</span>
                                @else
                                <span class="label label-danger text-danger">{{ $ticket->status }}</span>
                                @endif
                            </td>
                            <td>{{ $ticket->created_at->format('F d, Y H:i') }}</td>
                            <td>{{ $ticket->created_at->diffInHours($ticket->updated_at) }} hour (s)</td>
                            <td>
                                <a href="{{ url('tickets/' . $ticket->ticket_id) }}" class="btn btn-sm" style="background:#2737A6;color:white">Comment</a>
                            </td>
                            <td>
                                <form action="{{ url('admin/close_ticket/' . $ticket->ticket_id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" style="font-weight:bold">Close</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $tickets->render() }} @endif
            </div>
        </div>
    </div>
</div>
@endsection