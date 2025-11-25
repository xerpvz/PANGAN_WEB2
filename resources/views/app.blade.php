<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PANGAN' }}</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

    <div class="app-container">
        @yield('content')
    </div>

    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
