<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/tailwind.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10ir14Co3ll5tQvnWxbPHJx6dMslvV7mz7utgsJiAgLKv2uT9cEA7jZBw4MaR1/9kLiqjf6TpgQ" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .lexend {
            font-family: "Lexend", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
    </style>
</head>
<body class="">
    @yield('content')

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
    <script>
        window.addEventListener('scroll', function() {
            // Your existing scroll script
        });

        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                smartSpeed: 1000,
                animateOut: 'fadeOut'
            });
        });
    </script>
</body>
</html>