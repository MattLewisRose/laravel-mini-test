<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Newsletter Subscription</title>
    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
</html>
