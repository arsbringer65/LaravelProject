<!-- app.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
    <style>
        .btn-create {
            background-color: #4C5989;
            opacity: 0.61;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <!-- Add any header content here -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Add any footer content here -->
    </footer>
</body>

</html>
