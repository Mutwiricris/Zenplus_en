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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />   
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/tailwind.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10ir14Co3ll5tQvnWxbPHJx6dMslvV7mz7utgsJiAgLKv2uT9cEA7jZBw4MaR1/9kLiqjf6TpgQ" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
{{-- //charts --}}
    <style>
        #chartdiv {
          width: 100%;
          height: 500px;
        }
        </style>


    <style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
}
</style>
<style>

        .lexend {
            font-family: "Lexend", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
    </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- @vite(['resources/css/Style.css', 'resources/js/main.js']) --}}
        {{-- @vite(['resources/css/Style.css', 'resources/js/apexmain.js']) --}}
        {{-- @vite(['resources/css/Style.css', 'resources/js/drag.js'])
        @vite(['resources/css/Style.css', 'resources/js/main.js'])
        @vite(['resources/css/Style.css', 'resources/js/main.js'])
        @vite(['resources/css/Style.css', 'resources/js/main.js'])
        @vite(['resources/css/Style.css', 'resources/js/main.js'])
        @vite(['resources/css/Style.css', 'resources/js/main.js'])
        @vite(['resources/css/Style.css', 'resources/js/main.js']) --}}


    </head>
    <body class="font-sans antialiased">

        <div>
        <nav class="flex   items-center w-full  z-50 border-b shadow-slate-300 shadow-sm justify-between px-10 bg-white">
            <div class="p-4">
                <a href="/admin">
                <h1 class="text-xl font-bold text-gray-800">Zenplus</h1>
            </a>
            </div>
        <div class="flex items-center">
            <div class="relative mr-4">
                <input type="text" placeholder="Search" class="bg-white rounded-full py-2 px-4 pl-10 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 w-64">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
            <button class="text-gray-500 mr-4">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                </svg>
            </button>
            <div class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center text-sm font-medium text-white">
                CM
            </div>
        </div>

    </nav>
</div>

    <div class=" w-100 h-screen">
        <!-- Sidebar -->
        <div class="flex h-full relative">
        <aside class="  h-screen hidden md:flex md:flex-col md:w-64 bg-white border-r">
    
            <nav class="mt-4 flex-grow">
                <a href="#" class="flex items-center px-4 py-2 text-purple-600 ">
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    Dashboard
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:">
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                        <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path>
                    </svg>
                    Bank Accounts
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:">
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
                    </svg>
                    Insights
                </a>
                <div class="mt-4 px-4">
                    <h2 class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Administration</h2>
                </div>
                <a href="/Event" class="flex justify-between items-center px-6 py-4 text-gray-600 hover:">
                    <span class="flex items-center">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        Events
                    </span>
                    <span class="bg-purple-100 text-purple-600 text-xs font-semibold px-2 py-1 rounded-full">142</span>
                </a>
                <a href="#" class="flex justify-between items-center px-4 py-2 text-gray-600 hover:">
                    <span class="flex items-center">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        Event payments
                    </span>
                    <span class="bg-purple-100 text-purple-600 text-xs font-semibold px-2 py-1 rounded-full">142</span>
                </a>
                <a href="#" class="flex justify-between items-center px-4 py-2 text-gray-600 hover:">
                    <span class="flex items-center">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        Event Tickets
                    </span>
                    <span class="bg-purple-100 text-purple-600 text-xs font-semibold px-2 py-1 rounded-full">142</span>
                </a>
                
                <!-- Add other sidebar items here -->
            </nav>
        </aside>
    
        <!-- Main content -->
        <main class="flex-1 relative overflow-x-hidden overflow-y-auto ">
            <div class="container mx-auto px-6 py-8">
                <!-- Desktop header -->

    
                <!-- Mobile header -->
                <div class="flex md:hidden justify-between items-center mb-6">
                    <button id="mobileNavToggle" class="text-gray-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <div class="relative flex-1 mx-4">
                        <input type="text" placeholder="Search" class="bg-white rounded-full py-2 px-4 pl-10 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 w-full">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <button class="text-gray-500 mr-4">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                        </button>
                        <div class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center text-sm font-medium text-white">
                            CM
                        </div>
                    </div>
                </div>
    
                <!-- Mobile Navigation (new) -->
                                <!-- Mobile Navigation (new) -->
                        <nav id="mobileNav" class=" bg-white fixed inset-0 z-100 transform transition-transform duration-300 ease-in-out translate-x-full">
                            <div class="flex justify-between items-center p-4 border-b">
                                <h1 class="text-xl font-bold text-gray-800">SOMAPLUS MASTER</h1>
                                <button id="mobileNavClose" class="text-gray-500">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-4">
                                <a href="#" class="block py-2 text-purple-600">Dashboard</a>
                                <a href="#" class="block py-2 text-gray-600">Bank Accounts</a>
                                <a href="#" class="block py-2 text-gray-600">Insights</a>
                                <a href="#" class="block py-2 text-gray-600">Event Applications</a>
                                <!-- Add other navigation items here -->
                            </div>
                        </nav>
    
                
                @yield('content')

            </div>
        </main>
    </div>
    
    <!-- Mobile sidebar (hidden by default) -->
    <div class="fixed inset-0 z-40 hidden" id="mobileSidebar">
        <div class="fixed inset-0 bg-gray-600 opacity-75" id="sidebarOverlay"></div>
        <div class="relative flex-1 flex flex-col max-w-xs w-full bg-white">
            <div class="absolute top-0 right-0 -mr-12 pt-2">
                <button class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" id="sidebarClose">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                <div class="flex-shrink-0 flex items-center px-4">
                    <h1 class="text-xl font-bold text-gray-800">Zenplus MASTER</h1>
                </div>
                <nav class="mt-5 px-2 space-y-1">
                    <!-- Add your mobile sidebar items here -->
                </nav>
            </div>
        </div>
    </div>
    </div>
    <script>
        const mobileSidebar = document.getElementById('mobileSidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const sidebarOpen = document.getElementById('sidebarOpen');
        const sidebarClose = document.getElementById('sidebarClose');
        const mobileNavToggle = document.getElementById('mobileNavToggle');
        const mobileNavClose = document.getElementById('mobileNavClose');
        const mobileNav = document.getElementById('mobileNav');
    
        function openSidebar() {
            mobileSidebar.classList.remove('hidden');
        }
    
        function closeSidebar() {
            mobileSidebar.classList.add('hidden');
        }
    
        function toggleMobileNav() {
            mobileNav.classList.toggle('-translate-x-full');
        }
    
        if (sidebarOpen) sidebarOpen.addEventListener('click', openSidebar);
        if (sidebarClose) sidebarClose.addEventListener('click', closeSidebar);
        if (sidebarOverlay) sidebarOverlay.addEventListener('click', closeSidebar);
        if (mobileNavToggle) mobileNavToggle.addEventListener('click', toggleMobileNav);
        if (mobileNavClose) mobileNavClose.addEventListener('click', toggleMobileNav);
    </script>
    

            <!-- Scripts -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            <
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

        


            !-- Styles -->


<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Chart code -->
<script>
am5.ready(function() {


// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv");


// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);


// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(am5xy.XYChart.new(root, {
  panX: true,
  panY: true,
  wheelX: "panX",
  wheelY: "zoomX",
  pinchZoomX: true,
  paddingLeft: 0
}));

// Add cursor
// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
  behavior: "none"
}));
cursor.lineY.set("visible", false);


// Generate random data
var date = new Date();
date.setHours(0, 0, 0, 0);
var value = 100;

function generateData() {
  value = Math.round((Math.random() * 10 - 5) + value);
  am5.time.add(date, "day", 1);
  return {
    date: date.getTime(),
    value: value
  };
}

function generateDatas(count) {
  var data = [];
  for (var i = 0; i < count; ++i) {
    data.push(generateData());
  }
  return data;
}


// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
  maxDeviation: 0.5,
  baseInterval: {
    timeUnit: "day",
    count: 1
  },
  renderer: am5xy.AxisRendererX.new(root, {
    minGridDistance: 80,
    minorGridEnabled: true,
    pan: "zoom"
  }),
  tooltip: am5.Tooltip.new(root, {})
}));

var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
  maxDeviation: 1,
  renderer: am5xy.AxisRendererY.new(root, {
    pan: "zoom"
  })
}));


// Add series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
var series = chart.series.push(am5xy.SmoothedXLineSeries.new(root, {
  name: "Series",
  xAxis: xAxis,
  yAxis: yAxis,
  valueYField: "value",
  valueXField: "date",
  tooltip: am5.Tooltip.new(root, {
    labelText: "{valueY}"
  })
}));

series.fills.template.setAll({
  visible: true,
  fillOpacity: 0.2
});

series.bullets.push(function () {
  return am5.Bullet.new(root, {
    locationY: 0,
    sprite: am5.Circle.new(root, {
      radius: 4,
      stroke: root.interfaceColors.get("background"),
      strokeWidth: 2,
      fill: series.get("fill")
    })
  });
});


// // Add scrollbar
// // https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
// chart.set("scrollbarX", am5.Scrollbar.new(root, {
//   orientation: "horizontal"
// }));


var data = generateDatas(14);
series.data.setAll(data);


// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
series.appear(1000);
chart.appear(1000, 100);

}); // end am5.ready()
</script>

    </body>
</html>
