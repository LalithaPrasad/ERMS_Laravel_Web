<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request){
        $admin=$request->session()->get('admin');
        $admin->invalidateToken();
        $request->session()->flush();
        return redirect()->route('login');
    }
}
