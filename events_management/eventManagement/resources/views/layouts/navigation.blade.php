
            <nav id="navbar" class="absolute w-full transition-all duration-300 z-50">
                <div class="bg-teal-600 text-white p-4" id="topBar">
                  <div class="container mx-auto flex justify-between items-center">
                    <!-- Phone number and right-side options -->
                    <div>0045 043204434</div>
                    <div class="flex space-x-4">
                      <a  class="hover:text-teal-200">                                <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form></a>
                      <a href="#" class="hover:text-teal-200">Wishlist</a>
                      <div class="hidden sm:flex sm:items-center sm:ms-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>
        
                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
        
                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
        
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
        
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
        
        
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
              