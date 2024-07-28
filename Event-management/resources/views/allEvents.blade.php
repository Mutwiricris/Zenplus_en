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
            <div class="space-y-4">
                <!-- Tour item template -->
                <div class="border rounded-lg overflow-hidden flex">
                    <div class="w-1/3 relative">
                        <img src="https://media.istockphoto.com/id/1499670337/photo/diverse-audience-listening-closely-to-lively-panel-discussion-at-tech-conference.webp?b=1&s=170667a&w=0&k=20&c=RS1y4Yn3ko5SwWokmLDoMxXUuSiD53t3CluUI-2p4n8=" alt="Tour" class="w-full h-full object-cover">
                        <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 text-xs rounded">Hot</span>
                    </div>
                    <div class="w-2/3 p-4 flex justify-between">
                        <div>
                            <div class="flex items-center mb-2">
                                <!-- Add star rating here -->
                            </div>
                            <h3 class="font-bold text-xl mb-2">ARCH TRIOMPHE TOUR</h3>
                            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, quam convenire interesset ut vis, ad dicat sanctus detracto vis. Eos id tempor impetus probatus...</p>
                            <div class="flex space-x-4">
                                <!-- Add tour icons here -->
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold text-red-500">$39<sup>*</sup></p>
                            <p class="text-gray-500 line-through">$99</p>
                            <button class="bg-teal-500 text-white px-4 py-2 mt-4 rounded">Details</button>
                        </div>
                    </div>
                </div>


                <div class="border rounded-lg overflow-hidden flex">
                    <div class="w-1/3 relative">
                        <img src="https://media.istockphoto.com/id/1483272796/photo/seminar-coding-talking.webp?b=1&s=170667a&w=0&k=20&c=q9iyF7cWEfJZlCQdzlbszhchyVnpkhi8t_hy65wAPPg=" alt="Tour" class="w-full h-full object-cover">
                        <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 text-xs rounded">Hot</span>
                    </div>
                    <div class="w-2/3 p-4 flex justify-between">
                        <div>
                            <div class="flex items-center mb-2">
                                <!-- Add star rating here -->
                            </div>
                            <h3 class="font-bold text-xl mb-2">ARCH TRIOMPHE TOUR</h3>
                            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, quam convenire interesset ut vis, ad dicat sanctus detracto vis. Eos id tempor impetus probatus...</p>
                            <div class="flex space-x-4">
                                <!-- Add tour icons here -->
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold text-red-500">$39<sup>*</sup></p>
                            <p class="text-gray-500 line-through">$99</p>
                            <button class="bg-teal-500 text-white px-4 py-2 mt-4 rounded">Details</button>
                        </div>
                    </div>
                </div>

                <div class="border rounded-lg overflow-hidden flex">
                    <div class="w-1/3 relative">
                        <img src="https://media.istockphoto.com/id/1483272796/photo/seminar-coding-talking.webp?b=1&s=170667a&w=0&k=20&c=q9iyF7cWEfJZlCQdzlbszhchyVnpkhi8t_hy65wAPPg=" alt="Tour" class="w-full h-full object-cover">
                        <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 text-xs rounded">Hot</span>
                    </div>
                    <div class="w-2/3 p-4 flex justify-between">
                        <div>
                            <div class="flex items-center mb-2">
                                <!-- Add star rating here -->
                            </div>
                            <h3 class="font-bold text-xl mb-2">ARCH TRIOMPHE TOUR</h3>
                            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, quam convenire interesset ut vis, ad dicat sanctus detracto vis. Eos id tempor impetus probatus...</p>
                            <div class="flex space-x-4">
                                <!-- Add tour icons here -->
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold text-red-500">$39<sup>*</sup></p>
                            <p class="text-gray-500 line-through">$99</p>
                            <button class="bg-teal-500 text-white px-4 py-2 mt-4 rounded">Details</button>
                        </div>
                    </div>
                </div>

                <div class="border rounded-lg overflow-hidden flex">
                    <div class="w-1/3 relative">
                        <img src="https://media.istockphoto.com/id/1483272796/photo/seminar-coding-talking.webp?b=1&s=170667a&w=0&k=20&c=q9iyF7cWEfJZlCQdzlbszhchyVnpkhi8t_hy65wAPPg=" alt="Tour" class="w-full h-full object-cover">
                        <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 text-xs rounded">Hot</span>
                    </div>
                    <div class="w-2/3 p-4 flex justify-between">
                        <div>
                            <div class="flex items-center mb-2">
                                <!-- Add star rating here -->
                            </div>
                            <h3 class="font-bold text-xl mb-2">ARCH TRIOMPHE TOUR</h3>
                            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, quam convenire interesset ut vis, ad dicat sanctus detracto vis. Eos id tempor impetus probatus...</p>
                            <div class="flex space-x-4">
                                <!-- Add tour icons here -->
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold text-red-500">$39<sup>*</sup></p>
                            <p class="text-gray-500 line-through">$99</p>
                            <button class="bg-teal-500 text-white px-4 py-2 mt-4 rounded">Details</button>
                        </div>
                    </div>
                </div>

                <div class="border rounded-lg overflow-hidden flex">
                    <div class="w-1/3 relative">
                        <img src="https://media.istockphoto.com/id/1483272796/photo/seminar-coding-talking.webp?b=1&s=170667a&w=0&k=20&c=q9iyF7cWEfJZlCQdzlbszhchyVnpkhi8t_hy65wAPPg=" alt="Tour" class="w-full h-full object-cover">
                        <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 text-xs rounded">Hot</span>
                    </div>
                    <div class="w-2/3 p-4 flex justify-between">
                        <div>
                            <div class="flex items-center mb-2">
                                <!-- Add star rating here -->
                            </div>
                            <h3 class="font-bold text-xl mb-2">ARCH TRIOMPHE TOUR</h3>
                            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, quam convenire interesset ut vis, ad dicat sanctus detracto vis. Eos id tempor impetus probatus...</p>
                            <div class="flex space-x-4">
                                <!-- Add tour icons here -->
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold text-red-500">$39<sup>*</sup></p>
                            <p class="text-gray-500 line-through">$99</p>
                            <button class="bg-teal-500 text-white px-4 py-2 mt-4 rounded">Details</button>
                        </div>
                    </div>
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