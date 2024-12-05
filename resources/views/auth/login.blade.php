<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prisijungimas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<h1>Prisijungimas</h1>
<form method="POST" action="{{ route('login') }}">
    @csrf
<div class="form-group">
    <div>
        <label for="email">El. paštas:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-input" required>

    </div>
    <div>
        <label for="password">Slaptažodis:</label>
        <input type="password" id="password" name="password" class="form-input" required>
    </div>

    <div>
        <button type="submit" class="btn" >Prisijungti</button>
    </div>
</div>
</form>
</body>
</html>
