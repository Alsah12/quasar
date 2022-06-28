<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    <title>@yield('title')</title>
</head>
<body>
    @include('navigasi.v_nav')
        @yield('content')
    @include('navigasi.v_footer')
</body>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</html>
