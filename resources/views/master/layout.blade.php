<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        @yield('font')
        @yield('style')
        
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
    @yield('script')
</html>