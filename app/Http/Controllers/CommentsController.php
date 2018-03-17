<?php

namespace ComplainDesk\Http\Controllers;

use Illuminate\Http\Request;
use ComplainDesk\User;
use ComplainDesk\Ticket;
use ComplainDesk\Comment;
use ComplainDesk\Mailers\AppMailer;
use Illuminate\Support\Facades\Auth;
use ComplainDesk\Http\Controllers\SMSController;


class CommentsController extends Controller
{

    public function postComment(Request $request, AppMailer $mailer, SMSController $sms)
    {
            $this->validate($request, [
                'comment'   => 'required'
            ]);

            $comment = Comment::create([
                'ticket_id' => $request->input('ticket_id'),
                'user_id'   => Auth::user()->id,
                'comment'   => $request->input('comment'),
            ]); 

           $ticketId =  $request->input('ticket_id');
            // send mail if the user commenting is not the ticket owner
            if ($comment->ticket->user->id !== Auth::user()->id) {
                $smsMessage = "A comment was made on your ticket with ID:$ticketId click the link to view => ". url('/tickets/') ."/" .$ticketId ;
                $userTelephone = $comment->ticket->user->telephone;
                
                if (substr($userTelephone, 0, 1) == '0') {
                    $userTelephone= substr($userTelephone, 1);
                    $telephone = '+233' . $userTelephone;
                }
                
                $smsResponse = $sms->sendSMS($smsMessage, $telephone);

                $mailer->sendTicketComments($comment->ticket->user, Auth::user(), $comment->ticket, $comment);
            }

            return redirect()->back()->with("status", "Your comment has been submitted.");
    }

    public function show($ticket_id)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        $comments = $ticket->comments;

        $category = $ticket->category;

        return view('tickets.show', compact('ticket', 'category', 'comments'));
    }
}
