@extends('layouts.app')

@section('external-css')
<link href="{{ asset('css/userdashboard.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@include('layouts.user-dashboard-nav')


@section('content')
<body class="bg-light">

    <main role="main" class="container">
        <div id="page-wrapper" class="col-sm-12">
            <div class="row">
                <div class="col-sm-3">
                    <h1 class="page-header"></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="width: 16rem;">
                        <div class="card-body ">
                            <div>
                                <div style="float:left">
                                   <i class="fa fa-list-ul" style="font-size:40px; color:#2737A6"></i>
                                </div>
                                <div class=" " style="float:right ">
                                    <div class="huge"><h1><strong>124</strong></h1></div>
                                    <div>Tickets</div>
                                </div>
                            </div>
                            <div style="clear:both "> <a href="{{ url('/mytickets') }}" class="btn btn-outline-primary btn-sm">View details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 ">
                    <div class="card" style="width: 16rem; ">
                        <div class="card-body ">
                            <div>
                                <div style="float:left ">
                                    <i class="fa fa-envelope-open-o" style="font-size:40px; color:#2737A6"></i>
                                </div>
                                <div class=" " style="float:right">
                                    <div class="huge"><h1><strong>124</strong></h1></div>
                                    <div>Open Tickets</div>
                                </div>
                            </div>
                            <div style="clear:both "> <a href="# " class="btn btn-outline-primary btn-sm ">View details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 ">
                    <div class="card " style="width: 16rem; ">
                        <div class="card-body ">
                            <div>
                                <div style="float:left ">
                                   <i class="fa fa-close" style="font-size:40px; color:#2737A6"></i>
                                </div>
                                <div class=" " style="float:right ">
                                    <div class="huge"><h1><strong>124</strong></h1></div>
                                    <div>Closed Tickets</div>
                                </div>
                            </div>
                            <div style="clear:both "> <a href="# " class="btn btn-outline-primary btn-sm">View details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>

<<<<<<< HEAD
<<<<<<< HEAD
                            <th>Ticket ID</th>
                            <th> Title</th>
                            <th> Category</th>
                            <th> Status</th>
                            <th> Last Updated</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                            <tr>
                                <td >
                                    <a href="{{ url('tickets/'. $ticket->ticket_id) }}">
                                        {{ $ticket->ticket_id }}
                                    </a>
                                </td>
                                <td>
                                    {{ $ticket->title }}
                                </td>
                                <td>
                                @foreach ($categories as $category)
                                    @if ($category->id === $ticket->category_id)
                                        {{ $category->name }}
                                    @endif
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
=======
>>>>>>> parent of 7da05be... Completed User Dashboard View and Tickets View
            <table class="table">
                <thead style="background:#2737A6;color:white">
                    <tr>
                        <th>Ticket ID</th>
                        <th> Title</th>
                        <th> Category</th>
                        <th> Status</th>
                        <th> Last Updated</th>
                        <th> Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row ">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row ">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
<<<<<<< HEAD
>>>>>>> parent of 7da05be... Completed User Dashboard View and Tickets View
=======
>>>>>>> parent of 7da05be... Completed User Dashboard View and Tickets View

                </tbody>
            </table>
            <nav aria-label="... ">
                <ul class="pagination ">
                    <li class="page-item disabled ">
                        <a class="page-link " href="# " tabindex="-1 ">Previous</a>
                    </li>
                    <li class="page-item "><a class="page-link " href="# ">1</a></li>
                    <li class="page-item active ">
                        <a class="page-link " href="# ">2 <span class="sr-only ">(current)</span></a>
                    </li>
                    <li class="page-item "><a class="page-link " href="# ">3</a></li>
                    <li class="page-item ">
                        <a class="page-link " href="# ">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>

@endsection