<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Image;

class DashboardController extends Controller
{
    
    public function dashboard()
    {
            return view('dashboard' , array('user' => Auth::user()));
  
    }
    
    public function userList()
    {
        return view('all_users' , [
            'users' => DB::table('users')->simplePaginate(5)
        ]);
    }

}
