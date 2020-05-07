<!doctype html>

<html lang="en">

<head>

  <meta charset="UTF-8" />

  <title>Document</title>

</head>

<body>

  <h1>Edit Customer</h1>

  <form method="POST" action="/customers/">

    @method('patch')

    @csrf

    <div>

      <p>First Name:</p>

      <input class="input" type="text" name="first_name" value="{[ $customer->first_name]}" /><br />

      <p>Last Name:</p>

      <input class="input" type="text" name="last_name" value="{[ $customer->last_name]}" /><br />

      <p><button type="show">Save Customer</button></p>

    </form>



      <form method="post" action="/customers/{[$customer]}">

        @method('DELETE')

        @csrf

      <p><button type="GET">Delete Customer</button></p>

    </form>

    </div>

  </form>

</body>

</html>
