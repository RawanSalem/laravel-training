<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Validator;
use DataTables;

class UserController extends Controller
{   

    // View all services
    public function index(Request $request)
    {
        if($request->ajax()) {
            $services = DB::table('users')->orderBy('id', 'desc')->get();
            return Datatables::of($services)
            ->removeColumn('password')
            ->removeColumn('profile_id')
            ->removeColumn('email_verified_at')
            ->removeColumn('remember_token')
            ->addColumn('action', 'admin.users.users_action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('admin.users.users');
    }

    // create new service -POST- request 
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:15',
            'detail' => 'required|min:20',
        ]);
        

        if ($validator->passes()) {
            User::updateOrCreate(['id' => $request->service_id],
            ['name' => $request->name, 'detail' => $request->detail]);        

            return response()->json(['success'=>'Service saved successfully.']);
        }
     
        return response()->json(['error'=>$validator->errors()->all()]);
    }

    // update service -PUT- request
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:15',
            'detail' => 'required|min:20',
        ]);
        

        if ($validator->passes()) {
          User::updateOrCreate(['id' => $request->service_id],
            ['name' => $request->name, 'detail' => $request->detail]);        

            return response()->json(['success'=>'Service saved successfully.']);
        }
     
        return response()->json(['error'=>$validator->errors()->all()]);
    }

    // edit view form, return the row ID
    public function edit($id)
    {
        $service = DB::table('users')->find($id);
        return response()->json($service);
    }

    // create new service form
    public function create()
    {
        return response()->json([]);
    }

    // delete service -DELETE- request
    public function destroy($id)
    {
        User::find($id)->delete();
     
        return response()->json(['success'=>'Service deleted successfully.']);
    }
}
