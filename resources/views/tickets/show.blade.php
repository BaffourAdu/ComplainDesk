@extends('layouts.app')

@section('title', $ticket->title)

@section('external-css')
<link href="{{ asset('css/userdashboard.css') }}" rel="stylesheet">
@endsection

@include('layouts.user-dashboard-nav')

@section('content')
<div class="col-md-8" style="margin:auto">
        <div class="card">
            <div class="card-header" style="background:#2737A6;color:white">ID No.: {{ $ticket->ticket_id }}</div>
            <div class="container">
                <div class="card-body">
                    <div class="container">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" value="{{ $ticket->title }}" readonly>
                        </div>
                        <div class="form-group">
                            <div class="form-group" readonly>
                                <label for="category">Status</label>
                                <input type="text" class="form-control" id="category" value="{{ $ticket->status }}" readonly>
                            </div>
                        </div>
                        <div class="form-group" readonly>
                            <label for="comment">Message</label>
                            <textarea class="form-control" rows="2" id="message" readonly>{{ $ticket->message }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
         </div>
            <br><hr>
            @foreach ($comments as $comment)
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <blockquote class="blockquote mb-0">
                                <p>{{ $comment->comment }}  </p>
                                <footer class="blockquote-footer">By {{ $comment->user->name }} on {{ $comment->created_at->format('Y-m-d') }}</footer>
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
                                <textarea rows="5" id="comment" class="form-control" name="comment"></textarea>

                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection