<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/home.png') }}" type="image/x-icon">

    <title>Brian Pine</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f6ef;
        }
        footer {
            background-color: #0c1023;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 60px;
        }
    </style>

    <!-- Vite (if using Laravel Mix or Vite) -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
