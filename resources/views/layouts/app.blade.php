
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Antrian')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/search.png') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to bottom right, #000000, #1e293b);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="min-h-screen">
    @yield('content')

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
