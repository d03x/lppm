<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
    @yield('head')
    @stack('head')
    <title>
        @yield('title')
    </title>
</head>
<body>
    @include('frontend.layouts.navbar.top-nav')
    @include('frontend.layouts.navbar.main-nav')

    @yield('content')
    @include('frontend.layouts.footer.footer')
    @stack('footer')
    @yield('footer')
</body>
</html>