<?php

namespace ComplainDesk\Http\Controllers;

use Illuminate\Http\Request;
use ComplainDesk\Ticket;
use ComplainDesk\Mailers\AppMailer;
use ComplainDesk\Http\Controllers\SMSController;
use Illuminate\Support\Facades\Auth;
use ComplainDesk\Http\Controllers\LogsController as Log;

class TicketsStatusController extends Controller
{
    //
    public function close(Log $log, $ticket_id, AppMailer $mailer)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        $ticket->status = 'Closed';

        $action = "Closed Ticket";
        $description = "Closed Ticket with ID: ". $ticket_id ;
        $userId = Auth::user()->id;

        $ticket->save();

        $log->store($action, $description, $userId);

        $ticketOwner = $ticket->user;

        $mailer->sendTicketStatusNotification($ticketOwner, $ticket);

        return redirect()->back()->with("status", "The ticket has been closed.");
    }
}
