<?php

namespace App\Http\Controllers;

use App\Models\EventRegistrations;
use App\Models\NextEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EventController extends Controller
{
    public function viewEventDetails($id){
        $eventId = Crypt::decryptString($id);
        $event = NextEvent::findOrFail($eventId);
        return view('website.event-details',compact('event','id'));
    }
    public function viewEventForm($encryptedEventId){
        return view('website.event_register',compact('encryptedEventId'));
    }

    public function registerForEvent(Request $request)
    {
        // Decrypt the event ID
        $eventId = Crypt::decryptString($request->event_id);

        // Create a new registration entry
        $registration = new EventRegistrations;
        $registration->event_id = $eventId;  // Store the unencrypted event ID
        $registration->name = $request->name;
        $registration->age = $request->age;
        $registration->country = $request->country;
        $registration->gender = $request->gender;
        $registration->mail = $request->email;
        $registration->phone = $request->phone;
        $registration->how_did_you_know = $request->referral;
        $registration->participation_type = $request->participation_type;

        $registration->save();

        // Redirect or return response
        return redirect()->route('event-details', ['id' => Crypt::encryptString($eventId)])
            ->with('success', 'Registration successful!');
    }




}
