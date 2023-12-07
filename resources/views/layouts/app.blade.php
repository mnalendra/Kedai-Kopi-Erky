<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Tambahan tag head lainnya jika diperlukan -->
</head>
<body>
    <header>
        <!-- Header content -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>
