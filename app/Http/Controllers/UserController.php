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


class UserController extends Controller
{
    
    public function index()
    {
        return view('auth.login');
    }  

      

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return redirect("login")->withErrors('Login details are not valid');
    }



    public function registration()
    {           
        if(Auth::check()){
            return view('auth.registration');
        }
        return redirect("login");
    }
      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|regex:/[0-9]{9}/',
            'password' => 'required|min:6',
        ]);

        if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

    	}

        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard");
    }


    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'password' => Hash::make($data['password']),
        'avatar' => $data['avatar'],
        
      ]);
    }    
    

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard' , array('user' => Auth::user()));
        }
  
        return redirect("login");
    }
    
    public function allUsers()
    {
        if(Auth::check()){
            return view('allUsers' , [
                'users' => DB::table('users')->simplePaginate(5)
            ]);
        }
  
        return redirect("login");
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}