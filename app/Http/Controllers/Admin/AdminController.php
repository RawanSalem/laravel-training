<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthUser;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    
    // login view
    public function index()
    {
        return view('admin.login');
    }  
    

    // login request
    public function login(AuthUser $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('webadmin')->attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }

        return redirect('admin/login')->withErrors('Login details are not valid');
    }

    // logout request 
    public function logout()
    {
        Session::flush(); 
        Auth::guard('webadmin')->logout();

        return redirect('admin/login');

    } 
    
    public function dashboard()
    {
            return view('admin.dashboard');
  
    }

}
