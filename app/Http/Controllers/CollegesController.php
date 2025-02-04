<?php

namespace App\Http\Controllers;
use App\Models\College;
use App\Models\CollegeDean;
use App\Models\CollegeDepartment;
use Illuminate\Http\Request;


class CollegesController extends Controller
{
    public function index(){
        $colleges = College::all();
        return view('website.Colleage',compact('colleges'));
    }
    public function college_info($id){
        $college = College::findOrFail($id);

        return view('website.Collegae_Faculty',compact('college'));
    }
    public function college_dean($id){
        $dean = CollegeDean::findOrFail($id);

        return view('website.dean_speech',compact('dean'));
    }
}
