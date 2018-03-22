<?php

namespace ComplainDesk\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ComplainDesk\Category;
use ComplainDesk\Ticket;
use ComplainDesk\User;
use ComplainDesk\Comment;

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
        if (Auth::user()->is_admin) {
            $tickets = Ticket::orderBy('id', 'desc')->paginate(10);
            $categories = Category::all();

            $totalTicketsClosed = Ticket::all()->where('status', 'Closed');
            $totalTicketsClosed = count($totalTicketsClosed);

            $totalTicketsOpen = Ticket::all()->where('status', 'Open');
            $totalTicketsOpen = count($totalTicketsOpen);
            
            $totalAdmins = User::all()->where('is_admin', 1);
            $totalAdmins = count($totalAdmins);

            $totalTickets = Ticket::all();
            $totalTickets = count($totalTickets);

            $totalComments = null;
        } else {
            $tickets = Ticket::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
            $categories = Category::all();

            $totalTicketsClosed = Ticket::all()->where('user_id', Auth::user()->id)->where('status', 'Closed');
            $totalTicketsClosed = count($totalTicketsClosed);

            $totalTicketsOpen = Ticket::all()->where('user_id', Auth::user()->id)->where('status', 'Open');
            $totalTicketsOpen = count($totalTicketsOpen);

            $totalTickets = Ticket::where('user_id', Auth::user()->id)->paginate(10);
            $totalTickets = count($totalTickets);

            $totalComments = Comment::where('user_id', Auth::user()->id)->paginate(10);
            $totalComments = count($totalComments);

            $totalAdmins = null;
        }

        return view('home', compact('tickets', 'categories', 'totalTicketsClosed', 'totalTicketsOpen', 'totalTickets', 'totalAdmins', 'totalComments'));
    }
}
