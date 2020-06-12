<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;

use \App\Admin;

class SignupController extends Controller
{
    public function showForm(){
        return view('signupForm');
    }

    public function signup(Request $request, MessageBag $messageBag){
        $validatedData=$request->validate([
            'username'=>'required',
            'password'=>'required',
            'password_repeat'=>'required'
        ]);
        $un=$validatedData['username'];
        $pw=$validatedData['password'];
        $pwr=$validatedData['password_repeat'];
        if($pw!=$pwr){
            $messageBag->add('error',"Passwords don't match");
            return redirect()->route('signup')->withErrors($messageBag);
        }
        else{
            $admin=new \App\Admin;
            $admin->username=$un;
            $admin->password_hash=Hash::make($pw);
            $admin->save();
            $request->session()->flash('message','Admin created');
            return redirect()->route('login');
        }
    }
}
