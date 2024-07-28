<?php

namespace App\Http\Controllers;

use App\Models\Eventdata;
use App\Models\EventType;
use Illuminate\Http\Request;

class EventController extends Controller
{

    //paginationnd view
    
    public function index()
    {
        $events = Eventdata::with('eventType')->latest()->paginate(10);
        return view('Admin.events', compact('events'));
    }
    public function indexes() {
        $events = Eventdata::latest()->get();
        return view('Admin.admin', compact('events'));
    }
    
    public function create()
    {
        $eventTypes = EventType::all();
        return view('Admin.newEvent', compact('eventTypes'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'description_title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_type_id' => 'required|exists:event_types,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
            $validatedData['image'] = $imagePath;
        }

        Eventdata::create($validatedData);
        Eventdata::create($validatedData);

        if ($request->has('create_another')) {
            return redirect()->route('event.show')->with('success', 'Event created successfully! Create another one.');
        }

        return redirect()->route('event.show')->with('success', 'Event created successfully!');
    }

    // public function View($id)
    // {
    //     $event = Eventdata::findOrFail($id);
    //     return view('Admin.events', compact('event'));
    //     }

    public function edit($id)
    {
        $event = Eventdata::findOrFail($id);
        $eventTypes = EventType::all();
        return view('Admin.editEvent', compact('event', 'eventTypes'));
        }
        public function update(Request $request, $id)
        {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'price' => 'required|numeric',
                'location' => 'required|string|max:255',
                'date' => 'required|date',
                'description_title' => 'required|string|max',
                'description' => 'required|string',
                'event_type_id' => 'required|exists:event_types,id',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:204'
                ]);
                if ($request->hasFile('image')) {
                    $imagePath = $request->file('image')->store('events', 'public');
                    $validatedData['image'] = $imagePath;
                    }
                    Eventdata::whereId($id)->update($validatedData);
                    return redirect()->route('events.index')->with('success', 'Event updated successfully!');
                    }
                    public function destroy($id)
                    {
                        Eventdata::destroy($id);
                        return redirect()->route('events.index')->with('success', 'Event deleted successfully!');
                    }
                    public function show($id)
                    {
                        $event = Eventdata::findOrFail($id);
                        return view('Admin.eventView', compact('event'));
                        }
                        // public function index()
                        // {
                        //     $events = Eventdata::all();
                        //     return view('Admin.events', compact('events'));
                        //     }
                        //     public function create()


    // You might want to add other methods like edit, update, delete, etc.

}