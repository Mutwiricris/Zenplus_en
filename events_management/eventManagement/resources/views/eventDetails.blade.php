@extends('layouts.app')

@section('content')
<!-- Header -->
<div class="h-fit">
<div class="bg-gradient-to-b h-96 flex items-center justify-end flex-col from-gray-900 to-gray-700 text-white py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-2">ARC DE TRIOMPHE</h1>
        <p class="text-lg">Champ de Mars, 5 Avenue Anatole, 75007 Paris
            <span class="inline-flex items-center">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <span class="ml-1">(715)</span>
            </span>
        </p>
        <p class="text-right text-3xl font-bold text-blue-300">$52<span class="text-sm">from/per person</span></p>
    </div>
</div>

<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <div class="text-sm mb-4">
        <span class="text-gray-500">Home / Category / Page active</span>
    </div>

    <div class="flex flex-col md:flex-row">
        <!-- Left column -->
        <div class="w-full md:w-2/3 pr-8">
            <!-- Icons -->
            <div class="flex justify-between mb-8">
                <div class="text-center">
                    <svg class="w-8 h-8 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    <span>Museum</span>
                </div>
                <!-- Add more icons here -->
            </div>

            <!-- Description -->
            <h2 class="text-2xl font-bold mb-4">Description</h2>
            <h3 class="text-xl font-semibold mb-2">Paris in love</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet, et omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Ex impetus constituto efficiendi has, labitur lobortens ei qui. Mel liber ridens inermis ei, mei legendos vulputate an, labitu tibique te pro.</p>

            <h3 class="text-xl font-semibold mb-2">What's include</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet, et omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.</p>
            <ul class="list-none mb-8">
                <li class="flex items-center mb-2">
                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Lorem ipsum dolor sit amet
                </li>
                <!-- Add more list items -->
            </ul>

            <!-- Schedule -->
            <h2 class="text-2xl font-bold mb-4">Schedule</h2>
            <h3 class="text-xl font-semibold mb-2">1st March to 31st October</h3>
            <table class="w-full mb-8">
                <tr class="bg-gray-100">
                    <td class="py-2 px-4">Monday</td>
                    <td class="py-2 px-4">10:00 - 17:30</td>
                </tr>
                <!-- Add more rows -->
            </table>
            <!-- Add more schedule blocks -->
        </div>

        <!-- Right column -->
        <div class="w-full md:w-1/3">
            <button class="bg-pink-500 text-white py-2 px-4 w-full mb-4 rounded">VIEW ON MAP</button>

            <!-- Booking form -->
            <div class="bg-white border rounded shadow-sm">
                <h3 class="text-xl font-bold py-3 px-4 bg-gray-700 text-white text-center">- Booking -</h3>
                <div class="p-4">
                    <div class="flex justify-between mb-4">
                        <div class="w-1/2 pr-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                            <input type="text" value="07-14-2024" class="w-full border rounded px-2 py-1 text-gray-700" readonly>
                        </div>
                        <div class="w-1/2 pl-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Time</label>
                            <input type="text" value="12:00 AM" class="w-full border rounded px-2 py-1 text-gray-700" readonly>
                        </div>
                    </div>

{{--                    <div class="flex justify-between mb-4">--}}
{{--                        <div class="w-1/2 pr-2">--}}
{{--                            <label class="block text-sm font-medium text-gray-700 mb-1">Adults</label>--}}
{{--                            <div class="flex border rounded">--}}
{{--                                <button class="px-3 py-1 bg-gray-100 text-gray-600" onclick="changeQuantity('adults', -1)">-</button>--}}
{{--                                <input type="text" id="adults" value="1" class="w-full text-center" readonly>--}}
{{--                                <button class="px-3 py-1 bg-gray-100 text-gray-600" onclick="changeQuantity('adults', 1)">+</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="w-1/2 pl-2">--}}
{{--                            <label class="block text-sm font-medium text-gray-700 mb-1">Children</label>--}}
{{--                            <div class="flex border rounded">--}}
{{--                                <button class="px-3 py-1 bg-gray-100 text-gray-600" onclick="changeQuantity('children', -1)">-</button>--}}
{{--                                <input type="text" id="children" value="0" class="w-full text-center" readonly>--}}
{{--                                <button class="px-3 py-1 bg-gray-100 text-gray-600" onclick="changeQuantity('children', 1)">+</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    --}}
{{--                    <div class="flex justify-between text-sm mb-2">--}}
{{--                        <span>Adults</span>--}}
{{--                        <span id="adultsCount">1</span>--}}
{{--                    </div>--}}
{{--                    <div class="flex justify-between text-sm mb-2">--}}
{{--                        <span>Children</span>--}}
{{--                        <span id="childrenCount">0</span>--}}
{{--                    </div>--}}
{{--                    <div class="flex justify-between text-sm mb-2">--}}
{{--                        <span>Total amount</span>--}}
{{--                        <span id="totalAmount">1x $52</span>--}}
{{--                    </div>--}}
{{--                    <div class="flex justify-between font-bold mb-4">--}}
{{--                        <span>TOTAL COST</span>--}}
{{--                        <span id="totalCost">$52</span>--}}
{{--                    </div>--}}
{{--
{{--                </div>--}}


                    <button  class="bg-teal-500 text-white py-2 px-4 uppercase w-full rounded mb-2">Purchase Tickets</button>
                    <button class="border border-teal-500 text-teal-500 py-2 px-4 w-full rounded flex items-center justify-center">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                        ADD TO WISHLIST
                    </button>
            </div>

            <!-- Phone booking section -->
            <div class="mt-8 bg-gray-100 p-4 rounded">
                <h4 class="font-bold mb-2">Need help purchasing?</h4>
                <p class="text-sm mb-2">Call our customer service team at the number below to speak with one of our advisors who will help you with all of your holiday needs.</p>
                <a href="tel:+0110407501" class="text-blue-500 font-bold">+254110407501</a>
            </div>
        </div>
    </div>
</div>
</div>
