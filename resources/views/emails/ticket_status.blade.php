<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Your Ticket Status</title>
</head>

<body>
    <p>
        Hello {{ ucfirst($ticketOwner->name) }},
    </p>
    <p>
        Your support ticket with ID #{{ $ticket->ticket_id }} has been marked as resolved and closed.
    </p>
</body>

</html>