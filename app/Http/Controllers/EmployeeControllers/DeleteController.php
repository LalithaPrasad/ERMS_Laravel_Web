<?php

namespace App\Http\Controllers\EmployeeControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Employee;

class DeleteController extends Controller
{
    public function showForm(){
        return view('deleteEmployeeForm');
    }

    public function deleteEmployee(Request $request){
        $validatedData=$request->validate([
            'id'=>'required'
        ]);
        $id=(int)$validatedData['id'];
        \App\Employee::destroy($id);
        $request->session()->flash('message','Employee deleted');
        return redirect()->route('menu');
    }
}
