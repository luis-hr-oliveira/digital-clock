<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Digital Clock- Laravel</title>

        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    </head>
    <body>
        <div class="clock" id="digitalClock">00:00:00</div>
        <script src="{{ asset('assets/js/app.js') }}"></script>
    </body>
</html>
