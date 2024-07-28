<nav id="navbar" class="absolute w-full transition-all duration-300 z-50">
    <div class="bg-teal-600 text-white p-4" id="topBar">
      <div class="container mx-auto flex justify-between items-center">
        <!-- Phone number and right-side options -->
        <div>0045 043204434</div>
        <div class="flex space-x-4">
          @auth
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{ route('logout') }}"
                 onclick="event.preventDefault(); this.closest('form').submit();"
                 class="hover:text-teal-200">
                  Sign Out
              </a>
          </form>
      @else
          <a href="{{ route('login') }}" class="hover:text-teal-200">Sign In</a>
      @endauth
           <a href="#" class="hover:text-teal-200">Wishlist</a>
        </div>
      </div>
    </div>
    <hr>
    <div id="mainNav" class="bg-transparent p-4 transition-all duration-300">
      <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center">
          <svg class="h-8 w-8 mr-2 text-pink-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 18a8 8 0 100-16 8 8 0 000 16z"/>
          </svg>
          <span class="font-bold text-xl text-white" id="brandName">Zenplus</span>
        </div>
        
        <ul class="flex space-x-4">
          <li><a href="#" class="text-white hover:text-teal-200">Home</a></li>
          <li><a href="#" class="text-white hover:text-teal-200">Tours</a></li>
          <li class="relative group">
            <a href="#" class="text-white hover:text-teal-200">Hotels</a>
            <ul class="absolute hidden group-hover:block bg-white text-gray-800 p-2 rounded-md shadow-lg">
              <li><a href="#" class="block py-1 hover:bg-gray-100">All hotels list</a></li>
              <li><a href="#" class="block py-1 hover:bg-gray-100">All hotels grid</a></li>
              <li><a href="#" class="block py-1 hover:bg-gray-100">All hotels Sort Masonry</a></li>
              <li><a href="#" class="block py-1 hover:bg-gray-100">All hotels map listing</a></li>
              <li><a href="#" class="block py-1 hover:bg-gray-100">Single hotel page</a></li>
              <li><a href="#" class="block py-1 hover:bg-gray-100">Single hotel working booking</a></li>
              <li><a href="#" class="block py-1 hover:bg-gray-100">Single hotel contact working</a></li>
              <li><a href="#" class="block py-1 hover:bg-gray-100">Cart hotel</a></li>
              <li><a href="#" class="block py-1 hover:bg-gray-100">Booking hotel</a></li>
              <li><a href="#" class="block py-1 hover:bg-gray-100">Confirmation hotel</a></li>
            </ul>
          </li>
          <li><a href="#" class="text-white hover:text-teal-200">Transfers</a></li>
          <li><a href="#" class="text-white hover:text-teal-200">Restaurants</a></li>
          <li><a href="#" class="text-white hover:text-teal-200">Bonus</a></li>
          <li><a href="#" class="text-white hover:text-teal-200">Pages</a></li>
        </ul>
      </div>
    </div>
  </nav>
  