<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Azuar Portfolio' }}</title>
    <meta name="description" content="Lazuardhi Imani Ahfar — Software Engineer & Mobile Programmer. Portfolio built with Laravel.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header" id="site-header">
        <div class="container nav-shell">
            <a href="{{ route('portfolio.index') }}" class="brand">Azuar.</a>
            <nav class="site-nav" aria-label="Primary">
                <a href="{{ route('portfolio.about') }}">About</a>
                <a href="{{ route('portfolio.work') }}">Work</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="site-footer">
        <div class="container">
            <p>Crafted with ❤️ by <a href="{{ route('portfolio.about') }}">Lazuardhi Imani Ahfar</a> &mdash; Built with Laravel</p>
        </div>
    </footer>

    <script>
        // Add scrolled class to header for enhanced shadow
        const header = document.getElementById('site-header');
        window.addEventListener('scroll', () => {
            header.classList.toggle('scrolled', window.scrollY > 10);
        }, { passive: true });
    </script>
</body>
</html>
