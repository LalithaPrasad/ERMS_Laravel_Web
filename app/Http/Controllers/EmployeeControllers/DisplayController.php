<?php

namespace App\Http\Controllers\EmployeeControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Employee;

class DisplayController extends Controller
{
    public function displayEmployees(Request $request){
        $employees=\App\Employee::all();
        return view('displayEmployees',['employees'=>$employees]);
    }
}
