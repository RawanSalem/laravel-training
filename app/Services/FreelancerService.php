<?php

namespace App\Services;

use App\Repositories\FreelancerRepository;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Arr;
use Image;
use App\Traits\ImgaeUpload;

class FreelancerService

{
        /**
     * @var FreelancerRepository
     */
    private $freelancerRepository;

            /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(FreelancerRepository $freelancerRepository, UserRepository $userRepository)
    {
        $this->freelancerRepository = $freelancerRepository;
        $this->userRepository = $userRepository;
    }

    use ImgaeUpload;
    public function create($data, $filePath)
    {
        

        $data['password'] = Hash::make($data['password']);

        $user =  $this->userRepository->create( Arr::only($data, ['email', 'phone', 'password']));

        $user->assignRole('freelancer');
        
        $languages = implode(',', $data['languages']);
        $data['languages'] = $languages;
        $data['photo'] = $filePath;

        $profile =  $this->freelancerRepository->create(
            Arr::only($data, ['name' , 'country', 'work_title', 'service_id', 'education', 'languages', 'bio', 'photo']));

        $profile->user()->save($user);

    }
}
