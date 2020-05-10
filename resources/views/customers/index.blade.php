<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>All Customers</h1>
  <p>
    <a href="/customers/create">Enter Customer</a>
  </p>
  <table>
    @foreach ($customers as $customer)
      <li>{{$customer->first_name}} {{$customer->last_name}}</li>
      <p>
      <a href="/customers/{{$customer->id}}/edit">Edit Customer</a>
      <a href="/reservations/create/{{ $customer->id }}">Make Reservation</a>
    </p>
      @endforeach
  </table>
</body>
</html>
