<!doctype html>

<html lang="en">

<head>

  <meta charset="UTF-8" />

  <title>Document</title>

</head>

<body>

  <h1>Enter New Customer</h1>

  <form method="POST" action="/customers/{{ $customer->id }}/edit">

    @method('patch')

    @csrf

    <div>

      <p>First Name:</p>

      <input class="input" type="text" name="first_name" value="{{ $customer->first_name}}" /><br />

      <p>Last Name:</p>

      <input class="input" type="text" name="last_name" value="{{ $customer->last_name}}" /><br />

      <p><button type="submit">Save Customer</button></p>

    </form>



      <form method="POST" action="/customers/{{ $customer->id }}/edit">

        @method('DELETE')

        @csrf

      <p><button type="submit">Delete Customer</button></p>

    </form>

    </div>

  </form>

</body>

</html>
