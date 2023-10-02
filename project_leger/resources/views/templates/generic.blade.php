<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- linking favicons  -->

    <link rel="icon" type="image/png" sizes="32x32" href="./icons/favicon.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="./icons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./icons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href=".icons/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- linking stylesheets  -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- title of the page  -->
    <title>Fake Airbnb</title>
</head>

<body>
    <div class="container">
        @include('templates.header')

        @yield('contents')

        @include('templates.footer')

        @include('templates.aside')
    </div>
</body>

</html>