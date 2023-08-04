<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font style --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400&family=Poppins:,wght@1,300&display=swap" rel="stylesheet">
    {{-- css style --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="icon" href="{{ asset("logo/logo IM-09.png") }}">
    <title>Web | Profile</title>
</head>
<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
