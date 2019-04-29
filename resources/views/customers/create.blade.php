<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Document</title>

</head>

<body>

  <h1>Enter New Customer</h1>

  <form method="POST" action="/customers">

    @csrf



    <div>

  		<p>First Name:</p>

  		<input class="input" type="text" name="first_name" value="" /><br />

  		<p>Last Name:</p>

  		<input class="input" type="text" name="last_name" value="" /><br />

  		<p><button type="submit">Create Customer</button></p>

    </div>

  </form>

</body>

</html>
