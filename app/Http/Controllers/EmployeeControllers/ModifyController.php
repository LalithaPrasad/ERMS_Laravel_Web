<?php

namespace App\Http\Controllers\EmployeeControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Employee;

class ModifyController extends Controller
{
    public function showForm(){
        return view('modifyEmployeeForm');
    }

    public function modifyEmployee(Request $request){
        $validatedData=$request->validate([
            'id'=>'required'
        ]);
        $id=(int)$validatedData['id'];
        $employee=\App\Employee::find($id);
        $ed=$request->input('ed');
        $role=$request->input('role');
        if(!empty($ed))$employee->ed=$ed;
        if(!empty($role))$employee->role=$role;
        $employee->save();
        $request->session()->flash('message','Employee modified');
        return redirect()->route('menu');
    }
}
