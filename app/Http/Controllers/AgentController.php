<?php

namespace App\Http\Controllers;

use App\Models\University;
use App\Models\College;
use App\Models\CollegeAgent;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function agent($id){
        $agent = CollegeAgent::findOrFail($id);
        return view('website.agent_speech',compact('agent'));
    }
}
