<?php

namespace App\Http\Controllers;

use App\Models\University;
use App\Models\Deanship;
use App\Models\Contact;

use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function deanship($id){
        $deanship = Deanship::findOrFail($id);
        return view('website.deanship_info',compact('deanship'));
    }

    public function contacts(){
        $contact = Contact::first();
        return view('website.contact_us',compact('contact'));
    }
}
