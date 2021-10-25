<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UserDataTable;
USE App\Services\UserService;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{   


            /**
     * @var UserService
     */
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }


    // View all users
    public function index(UserDataTable $userDataTable)
    {
        return $userDataTable->render('admin.users.users');
    }

    // delete user -DELETE- request 
    public function destroy($id)
    {
        $this->userService->destroy($id);
     
        return response()->json(['success'=>'User deleted successfully.']);
    }
}

