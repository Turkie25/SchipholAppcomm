<!DOCTYPE html>
<html>
<head>
    <title>Reservation Confirmation</title>
</head>
<body>
<h1>Reservation Confirmation</h1>
<p>Dear {{ $userName }},</p>
<p>Thank you for your reservation.</p>
<p><strong>Event Details:</strong></p>
<ul>
    <li>Event Name: {{ $eventName }}</li>
    <li>Location: {{ $eventLocation }}</li>
    <li>Duration: {{ $eventDuration }} minutes</li>
    <li>Start Time: {{ $eventStartTime->format('H:i:s') }}</li>
    <li>End Time: {{ $eventEndTime->format('H:i:s') }}</li>
</ul>
<p><strong>Reservation Details:</strong></p>
<ul>
    <li>Name: {{ $userName }}</li>
    <li>Number of People: {{ $numberOfPeople }}</li>
    <li>Reservation Time: {{ $reservationTime->format('H:i:s') }}</li>
</ul>
<p>We look forward to seeing you at the event.</p>
</body>
</html>