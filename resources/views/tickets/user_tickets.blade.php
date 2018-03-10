@extends('layouts.app')

@section('title', 'My Tickets')

@section('external-css')
<link href="{{ asset('css/userdashboard.css') }}" rel="stylesheet">
@endsection

@include('layouts.user-dashboard-nav')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-ticket"> My Tickets</i>
                </div>

                <div class="panel-body">
                    @if ($tickets->isEmpty())
                        <p>You have not created any tickets.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Last Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <td>
                                    @foreach ($categories as $category)
                                        @if ($category->id === $ticket->category_id)
                                            {{ $category->name }}
                                        @endif
                                    @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ url('tickets/'. $ticket->ticket_id) }}">
                                            #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                        </a>
                                    </td>
                                    <td>
                                    @if ($ticket->status === 'Open')
                                        <span class="label label-success">{{ $ticket->status }}</span>
                                    @else
                                        <span class="label label-danger">{{ $ticket->status }}</span>
                                    @endif
<<<<<<< HEAD
                                @endforeach
                                </td>
                                <td>
                                @if ($ticket->status === 'Open')
                                    <span class="label label-success text-success">{{ $ticket->status }}</span>
                                @else
                                    <span class="label label-danger text-danger">{{ $ticket->status }}</span>
                                @endif
                                </td>
                                <td>{{ $ticket->updated_at->diffForHumans() }}</td>
                                <td>  
                                    <form action="{{ url('tickets/'. $ticket->ticket_id) }}" method="GET">
                                         <button type="submit" class="btn btn-primary btn-sm">Comment</button>  
                                    </form>
                                </td>
                            </tr>
                        @endforeach
=======
                                    </td>
                                    <td>{{ $ticket->updated_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
>>>>>>> parent of 7da05be... Completed User Dashboard View and Tickets View

                        {{ $tickets->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection