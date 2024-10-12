<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon icon-->
        <link rel="shortcut icon" type="image/png" href={{asset("assets/images/logos/favicon.png")}} />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
            rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
        <!-- Core Css -->
        <link rel="stylesheet" href={{asset("assets/css/theme.css")}} />
        <title>Modernize TailwindCSS HTML Admin Template</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="DEFAULT_THEME bg-white">
        <main>
                {{ $slot }}
        </main>
    </body>
</html>
