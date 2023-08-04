<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="icon" href="{{ asset("logo/logo IM-09.png") }}">
    <title>Admin Page/title>
</head>
<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
</body>
</html>
