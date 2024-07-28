@extends('layouts.app')

@section('content')
<!-- Header -->
<div class="h-fit">
<div class="bg-gray-700 bg-center bg-cover text-white text-center py-16 h-96  flex items-center justify-center flex-col mb-8" style="background-image: url('https://images.unsplash.com/photo-1709090083073-d130ac28cc19?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
    <h1 class="text-5xl font-bold mb-2">UPCOMING EVENTS</h1>
    <p class="text-lg">Cursus neque cursus curae ante scelerisque vecuria</p>
</div>

<div class="container mx-auto px-4">
    <!-- Breadcrumb -->
    <div class="text-sm mb-4">
        <span class="text-gray-500">Home / Category / Page active</span>
    </div>

    <!-- Main content -->
    <div class="flex flex-col md:flex-row">
        <!-- Sidebar -->
        <div class="w-1/4 md:w-1/4 pr-8">
            <button class="bg-pink-500 text-white py-2 px-4 w-full mb-4 rounded">VIEW ON MAP</button>
            
            <!-- Tour types -->
            <div class="mb-6">
                <div class="flex items-center justify-between py-2 cursor-pointer">
                    <span>All Events (105)</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
                <!-- Add more tour types here -->
            </div>

            <!-- Filters -->
            <div>
                <h3 class="font-semibold mb-2">Filters</h3>
                <div class="mb-4">
                    <h4 class="font-medium mb-2">Price</h4>
                    <!-- Add price range slider here -->
                </div>
                <div class="mb-4">
                    <h4 class="font-medium mb-2">Rating</h4>
                    <!-- Add star rating filters here -->
                </div>
                <div>
                    <h4 class="font-medium mb-2">Facility</h4>
                    <!-- Add facility checkboxes here -->
                </div>
            </div>
        </div>

        <!-- Tour listings -->
        <div class="w-full md:w-1/4">
            <div class="flex justify-between items-center mb-4">
                <select class="border p-2 rounded">
                    <option>Sort by price</option>
                </select>
                <div>
                    <!-- Grid/List view toggles -->
                </div>
            </div>

            <!-- Tour items -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols
            -3 gap-4">
                <!-- Tour item template -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    @foreach ($events as $event )
                        
                    <div class="relative">
                      <img src="https://images.unsplash.com/photo-1510639322343-20cd2a815a0a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Arc Triomphe" class="w-full h-1/3 object-cover">
                      <span class="absolute top-0 left-0 bg-red-500 text-white text-xs font-bold px-2 py-1 m-2 rounded">{{$event->eventType->name}}</span>
                      <span class="absolute bottom-0 left-0 bg-gray-800 bg-opacity-75 text-white text-sm px-2 py-1 m-2 rounded flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        Historic Buildings
                      </span>
                    </div>
                    <div class="p-4">
                      <h3 class="font-bold text-lg mb-2">{{$event->name}}</h3>
                      <div class="flex items-center mb-2">
                        <div class="flex text-yellow-400">
                          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                          <!-- Repeat star SVG 4 more times -->
                        </div>
                        <span class="text-gray-600 text-sm ml-2">(75)</span>
                      </div>
                      <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold">${{$event->price}}</span>
                        <div class="flex items-center ">
                        <button class="text-gray-500 hover:text-red-500 mx-3 ">
                          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </button>
                        <button class="text-white hover:text-red-500 px-4 bg-pink-400 p-2 rounded-full font-semibold  ">
                          Buy Tickets
                        </button>
                      </div>
                      </div>
                    </div>
                    @endforeach
                              
                </div>


                <!-- Repeat the above tour item structure for each tour -->
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-8">
                <span class="px-3 py-2 bg-gray-200">1</span>
                <a href="#" class="px-3 py-2 hover:bg-gray-200">2</a>
                <a href="#" class="px-3 py-2 hover:bg-gray-200">3</a>
                <a href="#" class="px-3 py-2 hover:bg-gray-200">Next »</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection