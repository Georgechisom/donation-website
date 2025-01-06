<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="resources/fontawesome/css/all">
    <link rel="stylesheet" href="resources/fontawesome/js/all">

    <!-- aos animation -->
    <link rel="stylesheet" href="aos-by-red.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js',  'resources/css/style.css', 'resources/fontawesome/css/all.css', 'resources/fontawesome/js/all.js', 'resources/sass/donation.scss', 'resources/css/partners.css', 'resources/css/media.css',])

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4E6YFP0RCK"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-4E6YFP0RCK');
    </script>

</head>
<body>
    <div id="app">
        @include("partials.nav")

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
        duration: 3000,

        once: true,
        });
    </script>

</body>
</html>
