<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use App\Models\UniversityGoal;
use App\Models\UniversityMessage;
use App\Models\UniversityValue;

use Illuminate\Support\Facades\Storage;


class AboutController extends Controller
{
    public function index(){
        $goals=UniversityGoal::all();
        $university_info=University::all();
        $messages=UniversityMessage::all();
        $values=UniversityValue::all();
        return view('website.AboutUs',compact('goals','messages','values','university_info'));
    }

    public function slogan(){
        $logo = University::pluck('logo')->first();

        return view('website.Slogan',compact('logo'));
    }
}
