<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthUser;
use Hash;
use Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Image;

class AuthController extends Controller
{
    // login view
    public function index()
    {
        return view('auth.login');
    }  
    

    // login request
    public function login(Request $request)
    {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            if(Auth::user()->profile_type == 'App\Models\Freelancer'){
                return redirect()->intended('freelancer/profile');
            }
            else if(Auth::user()->profile_type == 'App\Models\Client')
                return redirect()->intended('client/profile');
        }

        return redirect('/login')->withErrors('Login details are not valid');
    }

    // logout request 
    public function logout()
    {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    } 
}
