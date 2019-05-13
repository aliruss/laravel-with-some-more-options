<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')

    <script src="{{ asset('dist/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.js') }}"></script>
</body>
</html>