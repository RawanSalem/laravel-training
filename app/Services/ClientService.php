<?php

namespace App\Services;

use App\Repositories\ClientRepository;
use App\Repositories\UserRepository;
use Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Arr;

class ClientService
{

    /**
     * @var ClientRepository
     */
    private $clientRepository;

            /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(ClientRepository $clientRepository, UserRepository $userRepository)
    {
        $this->clientRepository = $clientRepository;
        $this->userRepository = $userRepository;
    }

    public function create($data)
    {
        $data['password'] = Hash::make($data['password']);

        $user =  $this->userRepository->create( Arr::only($data, ['email', 'phone', 'password']));
 
     $user->assignRole('client');

     $profile = $this->clientRepository->create(['company_name'=> $data['company_name']]);
     $profile->user()->save($user);
    }
}
