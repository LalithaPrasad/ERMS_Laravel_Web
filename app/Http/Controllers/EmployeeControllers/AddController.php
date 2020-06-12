<?php

namespace App\Http\Controllers\EmployeeControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Employee;

class AddController extends Controller
{
    public function showForm(){
        return view('addEmployeeForm');
    }

    public function addEmployee(Request $request){
        $validatedData=$request->validate([
            'name'=>'required',
            'age'=>'required',
            'ed'=>'required',
            'role'=>'required'
        ]);
        $employee=new \App\Employee;
        $employee->name=$validatedData['name'];
        $employee->age=$validatedData['age'];
        $employee->ed=$validatedData['ed'];
        $employee->role=$validatedData['role'];
        $employee->save();
        $request->session()->flash('message','Employee added');
        return redirect()->route('menu');
    }
}
