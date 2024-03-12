<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}} | @yield('title') </title>

    <!-- cdns -->
    @yield('cdns')

    @vite('resources/js/app.js')
</head>
<body>
    <!-- header -->
    @include('includes.header')
    <!-- main -->
    @yield('main-content')
    <!-- Footer -->

    <!-- scripts -->
    @yield('scripts')
</body>
</html>