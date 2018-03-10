<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Ticket;
use Illuminate\Support\Facades\Auth;
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
        if(Auth::user()->is_admin) {
            $tickets = Ticket::all()->paginate(10);
            $categories = Category::all();

            $totalTicketsClosed = Ticket::where('status', 'Closed')->paginate(10);
            $totalTicketsClosed = count($totalTicketsClosed);

            $totalTicketsOpen = Ticket::where('status', 'Open')->paginate(10);
            $totalTicketsOpen = count($totalTicketsOpen);

            $totalTickets = Ticket::all()->paginate(10);
            $totalTickets = count($totalTickets);

        }else{
            $tickets = Ticket::where('user_id', Auth::user()->id)->paginate(10);
            $categories = Category::all();

            $totalTicketsClosed = Ticket::where('user_id', Auth::user()->id)->where('status', 'Closed')->paginate(10);
            $totalTicketsClosed = count($totalTicketsClosed);

            $totalTicketsOpen = Ticket::where('user_id', Auth::user()->id)->where('status', 'Open')->paginate(10);
            $totalTicketsOpen = count($totalTicketsOpen);

            $totalTickets = Ticket::where('user_id', Auth::user()->id)->paginate(10);
            $totalTickets = count($totalTickets);
        }

        return view('home', compact('tickets', 'categories', 'totalTicketsClosed' , 'totalTicketsOpen', 'totalTickets'));
    }
}
