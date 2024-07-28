<?php

namespace App\Http\Controllers;

use App\Models\Eventdata;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $events = Eventdata::with('eventType')->latest()->paginate(3);
        return view('allEvents', compact('events'));    }    
}
