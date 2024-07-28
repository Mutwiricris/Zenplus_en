<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

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


    <style>
        .lexend {
            font-family: "Lexend", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
    </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="preloader">
            <span><i class="lnr lnr-sun"></i></span>
        </div>
        <x-nav></x-nav>
     
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

<script>
    const pricePerPerson = 52;
    
    function changeQuantity(type, change) {
        const input = document.getElementById(type);
        let value = parseInt(input.value) + change;
        value = Math.max(type === 'adults' ? 1 : 0, value); // Ensure at least 1 adult
        input.value = value;
        updateTotals();
    }
    
    function updateTotals() {
        const adults = parseInt(document.getElementById('adults').value);
        const children = parseInt(document.getElementById('children').value);
        const total = adults + children;
        
        document.getElementById('adultsCount').textContent = adults;
        document.getElementById('childrenCount').textContent = children;
        document.getElementById('totalAmount').textContent = `${total}x $${pricePerPerson}`;
        document.getElementById('totalCost').textContent = `$${total * pricePerPerson}`;
    }
    
    // Initialize totals on page load
    document.addEventListener('DOMContentLoaded', updateTotals);
    </script>
            <!-- Page Content -->

        
    </body>
</html>
