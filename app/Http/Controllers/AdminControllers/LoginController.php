<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use \App\Admin;

class LoginController extends Controller
{
    public function showForm(){
        return view('loginForm');
    }

    public function login(Request $request, MessageBag $messageBag){
        $validatedData=$request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $un=$validatedData['username'];
        $pw=$validatedData['password'];
        $admin=\App\Admin::find(1);
        if(!$admin){
            $messageBag->add('error','Admin does not exist');
            return redirect()->route('login')->withErrors($messageBag);
        }
        else{
            if(Hash::check($pw,$admin->password_hash)){
                $admin->setToken();
                $request->session()->put('admin',$admin);
                return redirect()->route('menu');
            }
            else{
                $messageBag->add('error','Invalid user');
                return redirect()->route('login')->withErrors($messageBag);
            }
        }
    }
}
