<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Create Customer</title>

</head>

<body>
    <p>
        <a href="/">Home</a>
    </p>

    <h1>Create Customer</h1>

    <form method="POST" action="/customers">
        @csrf

        <div>
            <label for="first_name">First Name:</label>
            <input class="input" type="text" id="first_name" name="first_name" value="" /><br />

            <label for="last_name">Last Name:</label>
            <input class="input" type="text" id="last_name" name="last_name" value="" /><br />

            <button type="submit">Save</button>
        </div>
    </form>

</body>

</html>
