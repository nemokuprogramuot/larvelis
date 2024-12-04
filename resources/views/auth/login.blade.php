<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prisijungimas</title>
</head>
<body>
<h1>Prisijungimas</h1>
<form method="POST" action="{{ route('login') }}">
    @csrf <!-- Laravel CSRF apsauga -->

    <!-- El. pašto laukas -->
    <div>
        <label for="email">El. paštas:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        <!-- Klaidos pranešimas -->
        @error('email')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <!-- Slaptažodžio laukas -->
    <div>
        <label for="password">Slaptažodis:</label>
        <input type="password" id="password" name="password" required>
        <!-- Klaidos pranešimas -->
        @error('password')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <!-- "Prisiminti mane" checkbox -->
    <div>
        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">Prisiminti mane</label>
    </div>

    <!-- Prisijungimo mygtukas -->
    <div>
        <button type="submit">Prisijungti</button>
    </div>
</form>
</body>
</html>
