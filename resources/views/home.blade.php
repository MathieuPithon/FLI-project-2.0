<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Open Campus FLI</title>

    </head>
    <body>
        <h1>FLI Project</h1>

        <p>il est actuellement {{date('H\hi')}}</p>

        <footer>&copy; Copyright {{date('Y')}} Mathieu Pithon all right reserved &middot; <a href="#"> About me </a></footer>
    </body>
</html>
