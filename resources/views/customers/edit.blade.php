<!doctype html>

<html lang="en">

<head>

  <meta charset="UTF-8" />

  <title>Document</title>



<body>

  <h1>Edit Customer</h1>

  <form method="post" action="">

    @method('Edit')

    @csrf

    <div>

      <p>First Name:</p>

      <input class="input" type="text" name="first_name"  value="" /><br />

      <p>Last Name:</p>

      <input class="input" type="text" name="last_name" value="" /><br />

      <p><button type="show">Edit Customer</button></p>

    </form>



    <form method="Delete" action="/customers">

        @method('DELETE')


        @csrf

      <p><button type="GET">Delete Customer</button></p>
</form>

    </div>

  </form>

</body>

</html>
