<!DOCTYPE html>
<html>
<head>
    <title>Football Standings</title>
    <style>
        /* CSS styling */
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('clubs.index') }}">Home</a></li>
            <li><a href="{{ route('clubs.create') }}">Input Data</a></li>
            <li><a href="#">Input Skor</a></li>
            <li><a href="#">View Klasemen</a></li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
