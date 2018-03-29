<?php

namespace ComplainDesk\Http\Controllers;

use Illuminate\Http\Request;
use ComplainDesk\Category;
use ComplainDesk\Ticket;

class FaqsController extends Controller
{
    //
    public function index()
    {
        $tickets = Ticket::where('visibility', 'public')->paginate(20);
        $categories = Category::all();

        return view('tickets.faq', compact('tickets', 'categories'));
    }
}
