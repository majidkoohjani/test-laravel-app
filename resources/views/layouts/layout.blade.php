<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width= device-width, initial-scale=1.0" />
        <title>وبسایت تستی</title>
        @stack("styles")
        @vite("resources/css/app.css")
    </head>
    <body>
        <h2>Here is layout.blade.php</h2>
        @yield("content")
        @vite("resources/js/app.js")
        @stack("scripts")
    </body>
</html>
