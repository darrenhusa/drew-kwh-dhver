<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>All Reservations</h1>
  <table border="1">
    <tr>
      <th>ID</th><th>Room Number</th><th>Start Date</th><th>End Date</th><th>Amount</th></tr>
    @foreach ($reservations as $reservation)
      <tr><td>{{$reservation->customer_id}}</td><td>{{$reservation->room_no}}</td><td>{{$reservation->start_date}}</td><td>{{$reservation->end_date}}</td><td>{{$reservation->amount}}</td></tr>
      @endforeach
    </tr>
    <p>
    <a href=" reservations/{reservation}/edit">Edit Reservation</a>

  </p>
  <table>
</body>
</html>
