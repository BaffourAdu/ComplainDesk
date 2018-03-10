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
                                   <i class="fa fa-list-ul" style="font-size:40px; color:blue"></i>
                                </div>
                                <div class=" " style="float:right ">
                                    <div class="huge ">124</div>
                                    <div>All tickets</div>
                                </div>
                            </div>
                            <div style="clear:both "> <a href="# " class="btn btn-outline-primary btn-sm">View details</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 ">
                    <div class="card " style="width: 16rem; ">
                        <div class="card-body ">
                            <div>
                                <div style="float:left ">
                                    <i class="fa fa-envelope-open-o" style="font-size:40px; color:blue"></i>
                                </div>
                                <div class=" " style="float:right ">
                                    <div class="huge ">124</div>
                                    <div>All tickets</div>
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
                                   <i class="fa fa-close" style="font-size:40px; color:blue"></i>
                                </div>
                                <div class=" " style="float:right ">
                                    <div class="huge ">124</div>
                                    <div>All tickets</div>
                                </div>
                            </div>
                            <div style="clear:both "> <a href="# " class="btn btn-outline-primary btn-sm">View details</a>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <hr>
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col ">#</th>
                        <th scope="col ">First</th>
                        <th scope="col ">Last</th>
                        <th scope="col ">Handle</th>
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
                    <tr>
                        <th scope="row ">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row ">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row ">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
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