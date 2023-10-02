<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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