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

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- owl carousel --}}
    <link rel="stylesheet" href="{{ URL::asset('../../../node_modules/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('../../../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.theme.default.css') }}" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/style.css', 'resources/fontawesome/css/all.css', 'resources/fontawesome/js/all.js', 'resources/sass/donation.scss', 'resources/css/partners.css', 'resources/css/media.css', 'resources/css/app.css', 'resources/js/donation.js',])

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
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
    <script>
        function openNav() {
            document.getElementById("sideBar").style.width = "100%";
            document.getElementById("sideNav").style.width = "60%";
        }
        
        /*Close navigation*/
        function exitNav() {
            document.getElementById("sideBar").style.width = "0";
            document.getElementById("sideNav").style.width = "0";
        };

    $(function(){
        $('.owl-one').owlCarousel({
            loop: true,
            autoplay: true,
            item: 5,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            dots: false,
            nav: true,
            responsive:{
            0:{
                items: 1,
                nav: false,
            },
            600:{
                items: 3,
                nav: false,
            },
            1000:{
                items: 5,
            },
            }
        });

        $('#owl-two').owlCarousel({
            loop: true,
		    center: true,
		    items: 5,
		    margin: 0,
		    autoplay: true,
            autoplayHoverPause:true,
            dots: false ,
		    autoplayTimeout: 8500,
		    smartSpeed: 450,
		    responsive: {
		        0: {
		            items: 1
		        },
		        768: {
		            items: 2
		        },
		        1000: {
		            items: 3
		        }
		    }
        });
    });

    const stopalert = document.getElementById("myalert");

    setTimeout(() => {
        stopalert.removeAttribute("class", "sessionplay");
        stopalert.innerHTML = "";
        document.querySelector(".nevshw").innerHTML = "";
    }, 20000);

    stopalert.onclick = () => {
        clearTimeout();
        stopalert.removeAttribute("class", "sessionplay");
        stopalert.innerHTML = "";
        document.querySelector(".nevshw").innerHTML = "";
    };

    </script>

</body>
</html>
