<?php

namespace App\Http\Controllers;

use App\Models\NextEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NextEventController extends Controller
{
    public function index()
    {
        $events = NextEvent::all();
        return view('admin.next_events_index', compact('events'));
    }

    /**
     * Show the form for creating a new event.
     */
    public function create()
    {
        return view('admin.next_event_create');
    }

    /**
     * Store a newly created event in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4,avi,mov|max:10240',
            'end_date' => 'required|date',
            'form_link' => 'nullable|url',
        ]);

        $photoPath = $request->file('photo') ? $request->file('photo')->store('next_events_photos', 'public') : null;
        $videoPath = $request->file('video') ? $request->file('video')->store('next_events_videos', 'public') : null;

        NextEvent::create([
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $photoPath,
            'video' => $videoPath,
            'end_date' => $request->end_date,
            'form_link' => $request->form_link,
        ]);

        return redirect()->route('next_events.index')->with('success', 'Event created successfully.');
    }


    /**
     * Show the form for editing the specified event.
     */
    public function edit(NextEvent $next_event)
    {
        return view('admin.next_event_update', compact('next_event'));
    }

    /**
     * Update the specified event in the database.
     */
    public function update(Request $request, NextEvent $next_event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4,avi,mov|max:10240',
            'end_date' => 'required|date',
            'form_link' => 'nullable|url',
        ]);

        // Handle photo upload
        if ($request->hasFile('photo')) {
            if ($next_event->photo) {
                Storage::disk('public')->delete($next_event->photo);
            }
            $photoPath = $request->file('photo')->store('next_events_photos', 'public');
        } else {
            $photoPath = $next_event->photo;
        }

        // Handle video upload
        if ($request->hasFile('video')) {
            if ($next_event->video) {
                Storage::disk('public')->delete($next_event->video);
            }
            $videoPath = $request->file('video')->store('next_events_videos', 'public');
        } else {
            $videoPath = $next_event->video;
        }

        // Update event details
        $next_event->update([
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $photoPath,
            'video' => $videoPath,
            'end_date' => $request->end_date,
            'form_link' => $request->form_link,
        ]);

        return redirect()->route('next_events.index')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified event from the database.
     */
    public function destroy(NextEvent $next_event)
    {
        if ($next_event->photo) {
            Storage::disk('public')->delete($next_event->photo);
        }
        if ($next_event->video) {
            Storage::disk('public')->delete($next_event->video);
        }

        $next_event->delete();

        return redirect()->route('next_events.index')->with('success', 'Event deleted successfully.');
    }
}
