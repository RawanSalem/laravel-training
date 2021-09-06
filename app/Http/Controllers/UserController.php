<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Http\Requests\StoreUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Image;
use App\Traits\ImgaeUpload;


class UserController extends Controller
{
  // register user view
  public function userRegistration()
    {           
            return view('auth.registration');
        
    }

    use ImgaeUpload;
    // create new user request
    public function registration(StoreUser $request)
    {      
      $data = $request->all();

      if (request()->hasFile('avatar')) {
        $image = request()->file('avatar');

        $filePath= $this->UserImageUpload($data['avatar']);
      }

      $user = User::create([
             'name' => $data['name'],
             'email' => $data['email'],
             'phone' => $data['phone'],
             'password' => Hash::make($data['password']),
             'avatar' => $filePath,
      ]); 
      $user->assignRole($data['role']);

      return back()->with('success', 'User created successfully.');
      
    }
   
    
}