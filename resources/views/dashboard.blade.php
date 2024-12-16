<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat Datang, {{ $user_nama }}</h1>
    <p>Anda berhasil login.</p>
    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>
