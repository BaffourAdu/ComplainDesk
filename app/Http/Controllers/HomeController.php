<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if(Auth::user()->is_admin) {
            $tickets = Ticket::orderBy('id', 'desc')->paginate(10);
            $categories = Category::all();

            $totalTicketsClosed = Ticket::all()->where('status', 'Closed');
            $totalTicketsClosed = count($totalTicketsClosed);

            $totalTicketsOpen = Ticket::all()->where('status', 'Open');
            $totalTicketsOpen = count($totalTicketsOpen);

            $totalTickets = Ticket::all();
            $totalTickets = count($totalTickets);

        }else{
            $tickets = Ticket::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
            $categories = Category::all();

            $totalTicketsClosed = Ticket::all()->where('user_id', Auth::user()->id)->where('status', 'Closed');
            $totalTicketsClosed = count($totalTicketsClosed);

            $totalTicketsOpen = Ticket::all()->where('user_id', Auth::user()->id)->where('status', 'Open');
            $totalTicketsOpen = count($totalTicketsOpen);

            $totalTickets = Ticket::where('user_id', Auth::user()->id)->paginate(10);
            $totalTickets = count($totalTickets);
        }

        return view('home', compact('tickets', 'categories', 'totalTicketsClosed' , 'totalTicketsOpen', 'totalTickets'));
=======
        return view('home');
>>>>>>> parent of 7da05be... Completed User Dashboard View and Tickets View
=======
        return view('home');
>>>>>>> parent of 7da05be... Completed User Dashboard View and Tickets View
    }
}
