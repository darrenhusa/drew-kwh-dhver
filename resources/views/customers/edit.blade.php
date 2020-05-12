<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Update Customer</title>
</head>
<body>
  <h1>Update Customer</h1>
  <div>
    <form method="POST" action="/customers/{{ $customer->id }}">
      @method('PATCH')
      @csrf

        <label for="first_name">First Name:</label>
        <input class="input"
               type="text"
               id="first_name"
               name="first_name"
               value="{{ $customer->first_name }}" /><br />

        <label for="last_name">Last Name:</label>
        <input class="input"
               type="text"
               id="last_name"
               name="last_name"
               value="{{ $customer->last_name }}" /><br />
        <p><button type="submit">Save</button></p>
      </form>
  </div>
</body>
</html>
