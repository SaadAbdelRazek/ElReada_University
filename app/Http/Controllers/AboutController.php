<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use App\Models\UniversityHeader;
use App\Models\UniversityHeaderAssistant;
use App\Models\UniversityGoal;
use App\Models\UniversityCouncilGoal;
use App\Models\UniversityCouncilPower;
use App\Models\UniversityMessage;
use App\Models\UniversityValue;
use App\Models\BranchHeader;
use App\Models\CollegeDean;

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

    public function President(){
        $c_goal = UniversityCouncilGoal::all();
        $c_power = UniversityCouncilPower::all();
        $university_header = UniversityHeader::first();
        return view('website.Presidents',compact('c_goal','c_power','university_header'));

    }

    public function President_speech(){
        $president = UniversityHeader::first();
        return view('website.president_speech',compact('president'));
    }
    public function study(){

        return view('website.study');
    }
}
