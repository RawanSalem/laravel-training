<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{

    /**
     * @var UserRepository
     */
    private $UserRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function destroy($id)
    {
        return $this->userRepository->delete($id);
    }

}
