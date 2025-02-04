<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;
use App\Models\CollegeDepartment;

class DepartmentController extends Controller
{
    public function index($id){
        $department = CollegeDepartment::findOrFail($id);
        $college = College::findOrFail($department->college_id);
        return view('website.college_department',compact('department','college'));
    }
}
