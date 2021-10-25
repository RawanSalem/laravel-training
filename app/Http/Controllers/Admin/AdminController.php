<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthUser;
use App\Services\AdminService;
use Hash;
use Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Image;

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
