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
    // DASHBOARD view
    public function dashboard()
    {
            return view('dashboard');
  
    }

}
