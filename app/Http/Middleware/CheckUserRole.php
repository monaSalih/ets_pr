<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use App\Models\User;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
//Check if user id in user table == user_id in role table
// User Role
// Admin    = Head JobCoach
// JobCoach = Sub JobCoach
// Company  = Employer
//        if (Auth::check()) {
//            $role = Auth::user()->role->role;
//            //dd($role);
//            if ($role) {
//                if ($role === 'Employer') {
//                    return $next($request);

//                } elseif ($role === 'Admin') {
//                    return redirect('/HeadCoachPage');

//                } elseif ($role === 'JobCoach') {
//                    return redirect('/SubCoachPage');
//                }
//            }
//        } else {
//            return redirect('/login')->with('status', "Please login");
//        }
   } 
}

