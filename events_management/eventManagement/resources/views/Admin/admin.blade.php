@extends('Admin.layouts.app')
@section('content')
<h1 class="text-2xl font-bold mb-6 md:hidden">Dashboard</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Wallet Balance -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-500 text-sm font-medium mb-2">Wallet Balance</h3>
        <p class="text-3xl font-bold text-gray-800">1,228,411</p>
    </div>
    
    <!-- Students -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-500 text-sm font-medium mb-2">available clients</h3>
        <p class="text-3xl font-bold text-gray-800">8,385</p>
    </div>
    
    <!-- Guardians -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-500 text-sm font-medium mb-2">Active customers</h3>
        <p class="text-3xl font-bold text-gray-800">6,774</p>
    </div>
    
    <!-- Teachers -->
    <div class="bg-white p-6 rounded-lg shadow">
      <h3 class="text-gray-500 text-sm font-medium mb-2">Total events</h3>
      <p class="text-3xl font-bold text-gray-800">{{ $events->count() }}</p>
      
      {{-- @foreach ($events as $event)
          <!-- Display individual event details here -->
      @endforeach --}}
  </div>
    
    <!-- Advance Applications -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-500 text-sm font-medium mb-2">Event Applications</h3>
        <p class="text-3xl font-bold text-gray-800">166</p>
    </div>
</div>

<div>
    <div class="bg-white mt-8 p-6 rounded-lg shadow">
        <h3 class="text-gray-600 text-lg font-medium mb-2">Tickets Revenue
            <a href="#" class="text-blue-500 hover:text-blue-600 ml-2">
                View All
                </a>
                </h3>
        <div id="chartdiv"></div>
    </div>   
</div>



<div>
    <div class="bg-white mt-8 p-6 rounded-lg shadow">
        <h3 class="text-gray-500 text-lg font-bold  mb-2">Recent Events
            </h3>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table
                    class="min-w-full text-left text-sm font-light text-surface dark:text-white">
                    <thead
                      class="border-b border-neutral-200 bg-slate-100 font-medium dark:border-white/10">
                      <tr>
                        <th scope="col" class="px-6 py-4">#</th>
                        <th scope="col" class="px-6 py-4">First</th>
                        <th scope="col" class="px-6 py-4">Last</th>
                        <th scope="col" class="px-6 py-4">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="border-b border-neutral-200 dark:border-white/10">
                        <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                        <td class="whitespace-nowrap px-6 py-4">Mark</td>
                        <td class="whitespace-nowrap px-6 py-4">Otto</td>
                        <td class="whitespace-nowrap px-6 py-4">@mdo</td>
                      </tr>
                      <tr class="border-b border-neutral-200 dark:border-white/10">
                        <td class="whitespace-nowrap px-6 py-4 font-medium">2</td>
                        <td class="whitespace-nowrap px-6 py-4">Jacob</td>
                        <td class="whitespace-nowrap px-6 py-4">Thornton</td>
                        <td class="whitespace-nowrap px-6 py-4">@fat</td>
                      </tr>
                      <tr class="border-b border-neutral-200 dark:border-white/10">
                        <td class="whitespace-nowrap px-6 py-4 font-medium">3</td>
                        <td class="whitespace-nowrap px-6 py-4">Larry</td>
                        <td class="whitespace-nowrap px-6 py-4">Wild</td>
                        <td class="whitespace-nowrap px-6 py-4">@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>



@endsection