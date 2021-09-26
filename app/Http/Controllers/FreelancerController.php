<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use App\Models\Service;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Http\Requests\StoreFreelancerRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Image;
use App\Traits\ImgaeUpload;


class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $services= Service::select('name', 'id')->get();

        return view('auth.freelancer.registration', compact('services'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    use ImgaeUpload;

    public function store(StoreFreelancerRequest $request)
    {
        $data = $request->all();
        
        if (request()->hasFile('photo')) {    
            $filePath= $this->UserImageUpload($data['photo']);
          }
        $user = User::create([
               'email' => $data['email'],
               'phone' => $data['phone'],
               'password' => Hash::make($data['password']),
        ]); 
        $user->assignRole('freelancer');

        $profile = Freelancer::create([
            'name'=> $data['name'],
            'country'=>$data['country'],
            'work_title'=>$data['work_title'],
            'service_id' => $data['work_type'],
            'education'=>$data['education'],
            'languages'=> implode(',', $data['languages']),
            'bio'=>$data['bio'],
            'photo'=>$filePath,
        
        ]);
        $profile->user()->save($user);

        return back()->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function show(freelancer $freelancer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function edit(freelancer $freelancer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, freelancer $freelancer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function destroy(freelancer $freelancer)
    {
        //
    }
}
