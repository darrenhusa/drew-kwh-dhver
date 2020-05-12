<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>All Reservations</title>
</head>
<body>
  <h1>All Reservations</h1>
  <p><a href="/">Home</a></p>

  <table border="1">
    <tr>
      <th>ID</th>
      <th>Room Number</th>
      <th>Start Date</th>
      <th>End Date</th>
      <th>Amount</th>
      <th></th>
      <th></th>
    </tr>

    @foreach ($reservations as $reservation)
      <tr>
        <td>{{ $reservation->customer_id }}</td>
        <td>{{ $reservation->room_no }}</td>
        <td>{{ $reservation->start_date->toDateString() }}</td>
        <td>{{ $reservation->end_date->toDateString() }}</td>
        <td>{{ $reservation->amount }}</td>
        <td>
          <a href="reservations/{reservation}/edit"><button type="submit">Edit</button></a>
        </td>
        <td>
          <form method="POST" action="reservations/{reservation}">
            @method('DELETE')
            @csrf
            <p><button type="submit">Delete</button></p>
          </form>
        </td>
      </tr>
      @endforeach
    </tr>
  <table>
</body>
</html>
