@extends('layouts.app')

@section('content')

<div class="flex h-fit flex-col">
    <!-- Header with progress bar -->
    <div class="bg-cover bg-center h-48" style="background-image: url('path_to_your_background_image.jpg');">
      <div class="container mx-auto px-4 pt-8">
        <h1 class="text-white text-3xl font-bold mb-4 text-center">PLACE YOUR ORDER</h1>
        <div class="flex justify-between text-white text-sm">
          <span>Your cart</span>
          <span>Your details</span>
          <span>Finish!</span>
        </div>
        <div class="mt-2 bg-gray-300 h-1 rounded-full">
          <div class="bg-yellow-500 h-1 w-2/3 rounded-full"></div>
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
        <!-- Your Details -->
        <div class="mb-8">
          <h2 class="flex items-center text-xl font-semibold mb-2">
            <span class="bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center mr-2">1</span>
            Your Details
          </h2>
          <p class="text-gray-600 mb-4">Mussum ipsum cacilds, vidis litro abertis</p>
          <div class="grid grid-cols-2 gap-4">
            <input type="text" placeholder="First name" class="border p-2 rounded">
            <input type="text" placeholder="Last name" class="border p-2 rounded">
            <input type="email" placeholder="Email" class="border p-2 rounded">
            <input type="email" placeholder="Confirm email" class="border p-2 rounded">
            <input type="tel" placeholder="Telephone" class="border p-2 rounded col-span-2">
          </div>
        </div>
  
        <!-- Payment Information -->
        <div class="mb-8">
          <h2 class="flex items-center text-xl font-semibold mb-2">
            <span class="bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center mr-2">2</span>
            Payment Information
          </h2>
          <p class="text-gray-600 mb-4">Mussum ipsum cacilds, vidis litro abertis</p>
          <div class="space-y-4">
            <input type="text" placeholder="Name on card" class="border p-2 rounded w-full">
            <div class="flex items-center">
              <input type="text" placeholder="Card number" class="border p-2 rounded flex-grow">
              <div class="flex ml-2">
                <!-- Add credit card icons here -->
                <img src="path_to_visa_icon.png" alt="Visa" class="h-6 w-auto mx-1">
                <img src="path_to_mastercard_icon.png" alt="Mastercard" class="h-6 w-auto mx-1">
                <img src="path_to_discover_icon.png" alt="Discover" class="h-6 w-auto mx-1">
                <img src="path_to_amex_icon.png" alt="American Express" class="h-6 w-auto mx-1">
              </div>
            </div>
            <div class="grid grid-cols-3 gap-4">
              <input type="text" placeholder="MM" class="border p-2 rounded">
              <input type="text" placeholder="YY" class="border p-2 rounded">
              <input type="text" placeholder="CVV" class="border p-2 rounded">
            </div>
          </div>
          <div class="mt-4">
            <p class="font-semibold">Or checkout with Paypal</p>
            <p class="text-gray-600 text-sm mb-2">Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie.</p>
            <button class="bg-yellow-500 text-blue-800 px-4 py-2 rounded">Checkout with PayPal</button>
          </div>
        </div>
  
        <!-- Billing Address -->
        <div class="mb-8">
          <h2 class="flex items-center text-xl font-semibold mb-2">
            <span class="bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center mr-2">3</span>
            Billing Address
          </h2>
          <p class="text-gray-600 mb-4">Mussum ipsum cacilds, vidis litro abertis</p>
          <div class="space-y-4">
            <select class="border p-2 rounded w-full">
              <option>Select your country</option>
            </select>
            <div class="grid grid-cols-2 gap-4">
              <input type="text" placeholder="Street line 1" class="border p-2 rounded">
              <input type="text" placeholder="Street line 2" class="border p-2 rounded">
              <input type="text" placeholder="City" class="border p-2 rounded">
              <input type="text" placeholder="State" class="border p-2 rounded">
              <input type="text" placeholder="Postal code" class="border p-2 rounded">
            </div>
          </div>
        </div>
  
        <!-- Cancellation policy -->
        <div class="mb-8">
          <h3 class="font-semibold mb-2">Cancellation policy</h3>
          <label class="flex items-center">
            <input type="checkbox" class="mr-2">
            <span class="text-sm">I accept terms and conditions and general policy.</span>
          </label>
          <button class="mt-4 bg-green-500 text-white px-6 py-2 rounded">Book now</button>
        </div>
      </div>
  
      <!-- Right column -->
      <div class="w-full lg:w-1/3 mt-8 lg:mt-0">
        <div class="bg-gray-700 text-white p-6">
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
        <div class="bg-gray-200 p-6">
          <div class="flex justify-between font-semibold mb-4">
            <span>TOTAL COST</span>
            <span>$154</span>
          </div>
          <button class="w-full bg-teal-500 text-white py-2 rounded mb-2">BOOK NOW</button>
          <button class="w-full border border-teal-500 text-teal-500 py-2 rounded">← CONTINUE SHOPPING</button>
        </div>
        <div class="mt-8 text-center">
          <h4 class="font-semibold mb-2">Need Help?</h4>
          <p class="text-red-500 text-xl font-semibold">+45 423 445 99</p>
          <p class="text-sm text-gray-600">Monday to Friday 9:00am - 7:30pm</p>
        </div>
      </div>
    </div>
  </div>

@endsection