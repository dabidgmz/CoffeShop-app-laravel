<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <link href="{{ asset('styles.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar">
    <div class="navbar-brand">
        <!-- Enlace que envuelve la imagen y el texto -->
        <a href="{{ url('/home') }}" class="brand-link">
            <img src="{{ asset('logoCafe.png') }}" alt="logoCafe" class="logo">
            <span class="brand-name">El Grano Dorado</span>
        </a>
    </div>
</nav>
</body>
</html>
