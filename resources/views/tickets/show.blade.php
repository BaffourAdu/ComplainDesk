@extends('layouts.app') @section('title', $ticket->title) @section('external-css')
<link href="{{ asset('css/userdashboard.css') }}" rel="stylesheet"> @endsection @include('layouts.user-dashboard-nav') @section('content')
<div class="col-md-8 col-lg-6" style="margin:auto">
    <div class="card">
        <div class="card-header" style="background:#2737A6;color:white; font-size:17px; font-weight:bold;">Ticket ID : {{ $ticket->ticket_id }}</div>
        <div class="container">
            <div class="card-body">
                <div class="container">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" value="{{ $ticket->title }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="comment">Message</label>
                        <textarea class="form-control" rows="2" id="message" readonly>{{ $ticket->message }}</textarea>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <label for="category">Status</label>
                            <input type="text" class="form-control" id="status" value="{{ $ticket->status }}" readonly>
                        </div>

                        <div class="col-md-4">
                            <label for="category">Date Opened</label>
                            <input type="text" class="form-control" id="opened" value="{{ $ticket->created_at->format('F d, Y H:i') }}" readonly>
                        </div>

                        <div class="col-md-4">
                            <label for="category">Date Closed</label>
                            <input type="text" class="form-control" id="closed" value="{{ $ticket->updated_at->format('F d, Y H:i') }}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="category">TIcket Duration</label>
                            <input type="text" class="form-control" id="closed" value="{{ $ticket->created_at->diffInHours($ticket->updated_at) }} hour(s)"
                                readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr> @foreach ($comments as $comment)
    <div class="card">
        <div class="card-body">
            <div class="container">
                <blockquote class="blockquote mb-0">
                    <p>{{ $comment->comment }} </p>
                    <footer class="blockquote-footer">By {{ $comment->user->name }} on {{ $comment->created_at->diffForHumans() }}</footer>
                </blockquote>
            </div>
        </div>
    </div>
    @endforeach

    <hr>

    <div class="comment-form">
        <form action="{{ url('comment') }}" method="POST" class="form">
            @csrf

            <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">

            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                <textarea rows="5" id="comment" class="form-control" name="comment"></textarea> @if ($errors->has('comment'))
                <span class="help-block">
                    <strong>{{ $errors->first('comment') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" style="font-weight:bold">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection