<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceValidation;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use Validator;
use DataTables;

class ServiceController extends Controller
{   

    // View all services
    public function index(Request $request)
    {
        if($request->ajax()) {
            $services = DB::table('services')->orderBy('id', 'desc')->get();
            return Datatables::of($services)
            ->addColumn('action', 'admin.services.services_action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('admin.services.services');
    }

    // create new service -POST- request 
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:15',
            'detail' => 'required|min:20',
        ]);
        // $validator = $request->validated();
        

        if ($validator->passes()) {
            Service::Create(
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
        // $validator = $request->all();


        if ($validator->passes()) {
            Service::updateOrCreate(['id' => $request->service_id],
            ['name' => $request->name, 'detail' => $request->detail]);        

            return response()->json(['success'=>'Service saved successfully.']);
        }
     
        return response()->json(['error'=>$validator->errors()->all()]);
    }

    // edit view form, return the row ID
    public function edit($id)
    {
        $service = DB::table('services')->find($id);
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
        Service::find($id)->delete();
     
        return response()->json(['success'=>'Service deleted successfully.']);
    }
}
