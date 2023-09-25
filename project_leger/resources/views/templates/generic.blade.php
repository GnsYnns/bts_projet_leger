<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
        <title>rB&B</title>
        
    </head>
    <body>

        @include('templates.header')

        @yield('contents')

        @include('templates.footer')

    </body>
</html>