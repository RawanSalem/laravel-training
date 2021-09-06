<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthUser;
use Hash;
use Session;
use App\Models\User;
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
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return redirect("login")->withErrors('Login details are not valid');
    }

    // logout request 
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

}
