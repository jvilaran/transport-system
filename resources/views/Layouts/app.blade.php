<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Transport-system')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
            <li>Servicios</li>
            <li>Cerrar sesión</li>
    <header>
        <nav>
            <a href="{{ route('dashboard', ['id' => $user['id']]) }}">Home</a>
            <a href="{{ route('profile', ['id' => $user['id']]) }}">Profile</a>
            <a href="{{ route('services', ['id' => $user['id']]) }}">Services</a>
            <a href="{{ route('log_out') }}">Log Out</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 - Transport</p>
    </footer>
</body>
</html>
