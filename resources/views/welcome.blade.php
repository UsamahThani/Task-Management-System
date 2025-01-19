<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="antialiased">
    <div class="container">
        <h1>Welcome to My Application</h1>
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    </div>
</body>

</html>
