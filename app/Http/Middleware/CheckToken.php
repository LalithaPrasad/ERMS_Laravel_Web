<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

use Closure;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $admin=$request->session()->get('admin', null);
        if(is_null($admin) || !$admin->validateToken()){
            $messageBag=new \Illuminate\Support\MessageBag;
            $messageBag->add('error','Invalid user');
            return redirect()->route('login')->withErrors($messageBag);
        }
        return $next($request);
    }
}
