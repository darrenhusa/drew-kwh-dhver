<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>All Customers</title>
</head>
<body>
  <h1>All Customers</h1>
  <table>
    <tr>
      <td><a href="/">Home</a></td>
    </tr>
    <tr>
      <td><a href="/customers/create">Create Customer</a></td>
    </tr>
  </table>

  <table border="1">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
    @foreach ($customers as $customer)
      <tr>
        <td>{{ $customer->first_name }}</td>
        <td>{{ $customer->last_name }}</td>
        <td>
          <a href="/customers/{{ $customer->id }}/edit">
            <button type="submit">Edit</button>
          </a>
        </td>
        <td>
          <form method="POST" action="/customers/{{ $customer->id }}">
            @method('DELETE')
            @csrf
            <p>
              <button type="submit">Delete</button>
            </p>
          </form>
        </td>
        <td>
          <a href="/reservations/create/{{ $customer->id }}">
            <button type="submit">Create Reservation</button>
          </a>
        </td>
      </tr>
    @endforeach
    </table>
  </body>
</html>
