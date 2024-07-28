@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 min-h-screen flex flex-col">
        <!-- Header with progress bar -->
        <div class="bg-cover bg-center h-48" style="background-image: url('path_to_your_background_image.jpg');">
            <div class="container mx-auto px-4 pt-8">
                <h1 class="text-white text-3xl font-bold mb-4">PLACE YOUR ORDER</h1>
                <div class="flex justify-between text-white text-sm">
                    <span>Your cart</span>
                    <span>Your details</span>
                    <span>Finish!</span>
                </div>
                <div class="mt-2 bg-gray-300 h-1 rounded-full">
                    <div class="bg-red-500 h-1 w-1/3 rounded-full"></div>
                </div>
            </div>
        </div>

        <!-- Breadcrumb -->
        <div class="container mx-auto px-4 py-2 text-sm text-gray-500">
            Home > Category > Page active
        </div>

        <!-- Main content -->
        <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row">
            <!-- Left column -->
            <h1 class="text-3xl mb-14 font-bold uppercase">continue booking Rie de claro </h1>
            <div class="w-full lg:w-2/3 lg:pr-8">
                <!-- Order items -->
            <form action=""   >
                <div class="" >
                    <div class=" pl-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">enter number of attendees</label>
                        <div class="flex border rounded">
                           <input type="select">
                        </div>
                    </div>
                    <div class=" pl-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Choose ticket type</label>
                        <div class="flex border rounded">

                        </div>
                    </div>
                </div>
            </form>
                <div class="flex justify-between text-sm mb-2">
                    <span>Adults</span>
                    <span id="adultsCount">1</span>
                </div>
                <div class="flex justify-between text-sm mb-2">
                    <span>Children</span>
                    <span id="childrenCount">0</span>
                </div>
                <div class="flex justify-between text-sm mb-2">
                    <span>Total amount</span>
                    <span id="totalAmount">1x $52</span>
                </div>
                <div class="flex justify-between font-bold mb-4">
                    <span>TOTAL COST</span>
                    <span id="totalCost">$52</span>
                </div>

                <!-- Additional options -->
                <h3 class="text-lg font-semibold mb-4">ADD OPTIONS / SERVICES</h3>
                <div class="space-y-4">
                    <!-- Repeat this div for each option -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="h-6 w-6 mr-2">
                                <!-- Add SVG path for each icon -->
                            </svg>
                            <span>Dedicated Tour guide +$34</span>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2 text-green-500">Yes</span>
                            <div class="w-10 h-6 bg-green-500 rounded-full p-1 flex items-center">
                                <div class="w-4 h-4 bg-white rounded-full shadow-md transform translate-x-4"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat for other options -->
                </div>
            </div>

            <!-- Right column -->
            <div class="w-full lg:w-1/3 mt-8 lg:mt-0">
                <div class="bg-gray-700 text-white p-6 rounded-t-lg">
                    <h3 class="text-xl font-semibold mb-4">- Summary -</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span>Adults</span>
                            <span>2</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Children</span>
                            <span>0</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Dedicated tour guide</span>
                            <span>$34</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Insurance</span>
                            <span>$34</span>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-200 p-6 rounded-b-lg">
                    <div class="flex justify-between font-semibold mb-4">
                        <span>TOTAL COST</span>
                        <span>$154</span>
                    </div>
                    <button class="w-full bg-teal-500 text-white py-2 rounded mb-2">CHECK OUT</button>
                    <button class="w-full border border-teal-500 text-teal-500 py-2 rounded">← CONTINUE SHOPPING</button>
                </div>
                <div class="mt-8 text-center">
                    <h4 class="font-semibold mb-2">Need Help?</h4>
                    <p class="text-teal-500 text-xl font-semibold">+254110407501</p>
                    <p class="text-sm text-gray-600">Monday to Friday 9:00am - 7:30pm</p>
                </div>
            </div>
        </div>
    </div>
@endsection
