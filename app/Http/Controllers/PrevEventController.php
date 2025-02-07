<?php

namespace App\Http\Controllers;

use App\Models\PrevEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrevEventController extends Controller
{
    /**
     * Display a listing of the prev_events.
     */
    public function index()
    {
        $events = PrevEvent::latest()->paginate(10);
        return view('admin.prev_events_index', compact('events'));
    }

    /**
     * Show the form for creating a new event.
     */
    public function create()
    {
        return view('admin.prev_events_create');
    }

    /**
     * Store a newly created event in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|file|mimes:mp4,avi,mov,wmv|max:10240', // Max 10MB
            'date' => 'required|date',
        ]);

        $photoPath = $request->file('photo') ? $request->file('photo')->store('prev_events/photos', 'public') : null;
        $videoPath = $request->file('video') ? $request->file('video')->store('prev_events/videos', 'public') : null;

        PrevEvent::create([
            'title' => $request->title,
            'body' => $request->body,
            'photo' => $photoPath,
            'video' => $videoPath,
            'date' => $request->date,
        ]);

        return redirect()->route('prev_events.index')->with('success', 'Event created successfully.');
    }


    /**
     * Show the form for editing the specified event.
     */
    public function edit(PrevEvent $prevEvent)
    {
        return view('admin.prev_events_edit', compact('prevEvent'));
    }

    /**
     * Update the specified event in the database.
     */
    public function update(Request $request, PrevEvent $prevEvent)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|file|mimes:mp4,avi,mov,wmv|max:10240',
            'date' => 'required|date',
        ]);

        // Handle Photo Upload
        if ($request->hasFile('photo')) {
            if ($prevEvent->photo) {
                Storage::disk('public')->delete($prevEvent->photo);
            }
            $prevEvent->photo = $request->file('photo')->store('prev_events/photos', 'public');
        }

        // Handle Video Upload
        if ($request->hasFile('video')) {
            if ($prevEvent->video) {
                Storage::disk('public')->delete($prevEvent->video);
            }
            $prevEvent->video = $request->file('video')->store('prev_events/videos', 'public');
        }

        $prevEvent->update([
            'title' => $request->title,
            'body' => $request->body,
            'date' => $request->date,
        ]);

        return redirect()->route('prev_events.index')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified event from the database.
     */
    public function destroy(PrevEvent $prevEvent)
    {
        if ($prevEvent->photo) {
            Storage::disk('public')->delete($prevEvent->photo);
        }
        if ($prevEvent->video) {
            Storage::disk('public')->delete($prevEvent->video);
        }

        $prevEvent->delete();

        return redirect()->route('prev_events.index')->with('success', 'Event deleted successfully.');
    }
}
