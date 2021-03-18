<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Pragma" content="no-cache" />
        <title>Screenshot</title>

    </head>
    <body class="antialiased">
        <div>
            <img src='screenshots/screenshot.jpg'>
            <form action="/" method="POST">
                @csrf

                <input type="text" name="url">
{{--                <input type="number" name="delay">--}}
            </form>
        </div>
    </body>
</html>
