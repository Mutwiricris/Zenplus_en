@extends('Admin.layouts.app')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Create Event</h1>
    <form method="POST" action="{{ route('events.create') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label class="block mb-2 text-gray-700 font-medium">Poster <span class="text-red-600">*</span></label>
            <input type="file" name="image" accept="image/*" class="w-full border rounded-lg p-2 border-gray-300">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="name" class="block mb-2 text-gray-700 font-medium">Name <span class="text-red-600">*</span></label>
                <input type="text" id="name" name="name" class="w-full border rounded-lg p-2 border-gray-300" required>
            </div>
            <div>
                <label for="price" class="block mb-2 text-gray-700 font-medium">Price <span class="text-red-600">*</span></label>
                <input type="number" id="price" name="price" step="0.01" class="w-full border rounded-lg p-2 border-gray-300" required>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="location" class="block mb-2 text-gray-700 font-medium">Location<span class="text-red-600">*</span></label>
                <input type="text" id="location" name="location" class="w-full border rounded-lg p-2 border-gray-300" required>
            </div>
            <div>
                <label for="date" class="block mb-2 text-gray-700 font-medium">Date/schedule<span class="text-red-600">*</span></label>
                <input name="date" type="datetime-local" class="w-full border rounded-lg p-2 border-gray-300" required>
            </div>
        </div>
        <div class="mb-6">
            <label for="event_type_id" class="block mb-2 text-gray-700 font-medium">Event Type<span class="text-red-600">*</span></label>
            <select id="event_type_id" name="event_type_id" class="w-full border rounded-lg p-2 border-gray-300" required>
                <option value="">Select an event type</option>
                @foreach($eventTypes as $eventType)
                    <option value="{{ $eventType->id }}">{{ $eventType->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="description_title" class="block mb-2 text-gray-700 font-medium">Description Title <span class="text-red-600">*</span></label>
            <input type="text" name="description_title" class="w-full border rounded-lg p-2 border-gray-300" required>
        </div>
        <div class="mb-6">
            <label for="description" class="block mb-2 text-gray-700 font-medium">Description<span class="text-red-600">*</span></label>
            <textarea name="description" rows="3" class="w-full border rounded-lg p-2 border-gray-300" required></textarea>
        </div>
        <div class="flex gap-4">
            <button type="submit" class="bg-purple-600 text-white px-4 py-2 rounded-lg">Create</button>
            <button type="submit" name="create_another" value="1" class="bg-gray-200 px-4 py-2 rounded-lg">Create & create another</button>
            <a href="{{ route('events.index') }}" class="bg-gray-200 px-4 py-2 rounded-lg">Cancel</a>
        </div>
    </form>
</div>
@endsection