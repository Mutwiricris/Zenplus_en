@extends('Admin.layouts.app')

@section('content')

<div class="container border rounded-xl mx-auto p-4">
  <div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Events</h1>
    <a href="{{ route('events.create') }}" class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded">
      New Event
    </a>
  </div>

  <div class="overflow-x-auto">
    <table class="min-w-full bg-white">
      <thead>
        <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
          <th class="py-3 px-6 text-left">Event Name</th>
          <th class="py-3 px-6 text-left">Location</th>
          <th class="py-3 px-6 text-left">Price</th>
          <th class="py-3 px-6 text-left">Date</th>
          <th class="py-3 px-6 text-left">Event Type</th>
          <th class="py-3 px-6 text-left">Updated at</th>
          <th class="py-3 px-6 text-left">Actions</th>
        </tr>
      </thead>
      <tbody class="text-gray-600 text-sm font-light">
       
        @foreach ($events as $event)
        <tr class="border-b border-gray-200 hover:bg-gray-100">
          <a href="#">

          <td class="py-3 px-6 text-left whitespace-nowrap">{{ $event->name }}</td>
          <td class="py-3 px-6 text-left">{{ $event->location }}</td>
          <td class="py-3 px-6 text-left">${{ number_format($event->price, 2) }}</td>
          <td class="py-3 px-6 text-left">{{ $event->date->format('Y-m-d H:i') }}</td>
          <td class="py-3 px-6 text-left">{{ $event->eventType->name }}</td>
          <td class="py-3 px-6 text-left">{{ $event->updated_at->format('Y-m-d H:i') }}</td>
          <td class="py-3 px-6 text-left flex items-center">
            <a href={{route('events.view',$event->id)}} class="text-purple-500 hover:text-purple-600 hover:underline mr-3">
                   view
            </a>

            <a href="#" class="text-purple-500 hover:text-purple-600">
              <span class="text-lg material-symbols-outlined">edit</span> Edit
            </a>
          </td>
        </a>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="flex items-center justify-between mt-4">
    <span class="text-sm text-gray-700">
      Showing {{ $events->firstItem() }} to {{ $events->lastItem() }} of {{ $events->total() }} results
    </span>
    <div class="flex items-center">
      <span class="mr-2">Per page</span>
      <select class="border rounded w-20 px-2 py-1" onchange="this.form.submit()">
        <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
        <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
        <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
      </select>
    </div>
    {{ $events->links() }}
  </div>
</div>

@endsection