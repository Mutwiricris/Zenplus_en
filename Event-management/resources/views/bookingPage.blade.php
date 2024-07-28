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
      <div class="w-full lg:w-2/3 lg:pr-8">
        <!-- Order items -->
        <table class="w-full mb-8">
          <thead>
            <tr class="text-left text-sm text-gray-600 border-b">
              <th class="pb-2">ITEM</th>
              <th class="pb-2">QUANTITY</th>
              <th class="pb-2">DISCOUNT</th>
              <th class="pb-2">TOTAL</th>
              <th class="pb-2">ACTIONS</th>
            </tr>
          </thead>
          <tbody>
            <!-- Repeat this row for each item -->
            <tr class="border-b">
              <td class="py-4 flex items-center">
                <img src="path_to_louvre_image.jpg" alt="Louvre Museum" class="w-16 h-12 object-cover mr-4">
                <span>Louvre Museum tickets</span>
              </td>
              <td>
                <div class="flex items-center">
                  <button class="border rounded-l px-2 py-1">-</button>
                  <input type="text" value="1" class="border-t border-b w-8 text-center">
                  <button class="border rounded-r px-2 py-1">+</button>
                </div>
              </td>
              <td>0%</td>
              <td>€24.71</td>
              <td class="flex">
                <button class="text-red-500 mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                  </svg>
                </button>
                <button class="text-blue-500">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                  </svg>
                </button>
              </td>
            </tr>
            <!-- Repeat for Eiffel tour and Senna river Tour items -->
          </tbody>
        </table>
  
        <!-- Additional options -->
        <h3 class="text-lg font-semibold mb-4">ADD OPTIONS / SERVICES</h3>
        <div class="space-y-4">
          <!-- Repeat this div for each option -->
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <svg class="h-6 w-6 mr-2" /* Add SVG path for each icon */ ></svg>
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
          <p class="text-teal-500 text-xl font-semibold">+45 423 445 99</p>
          <p class="text-sm text-gray-600">Monday to Friday 9:00am - 7:30pm</p>
        </div>
      </div>
    </div>
  </div>

   @endsection