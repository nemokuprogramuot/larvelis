<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Center</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header class="navbar">

        <a href="#" class="btn btn-link">LogOut</a>
        <a href="{{ route('home.create') }}" class="btn btn-link">Create</a>

</header>

<main class="container">
    @yield('content')
</main>
</body>
</html>
