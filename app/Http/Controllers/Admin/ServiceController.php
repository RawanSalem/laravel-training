<?php

namespace App\Http\Controllers\Admin;


use App\DataTables\ServiceDataTable;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceValidation;
use App\Services\ServicesService;
use App\Repositories\ServiceRepository;
use DB;

class ServiceController extends Controller
{   


        /**
     * @var ServicesService
     */
    private $servicesService;

    public function __construct(ServicesService $servicesService, ServiceRepository $serviceRepository)
    {
        $this->servicesService = $servicesService;
        $this->serviceRepository = $serviceRepository;
    }


    // View all services
    public function index(ServiceDataTable $serviceDataTable)
    {
        return $serviceDataTable->render('admin.services.services');
    }

    
    // create new service -POST- request 
    public function store(ServiceValidation $request)
    {

        $this->servicesService->Create(
        ['name' => $request->name, 'detail' => $request->detail]);        
        return response()->json(['success'=>'Service saved successfully.']);

     
    }

    // update service -PUT- request
    public function update(ServiceValidation $request)
    {

        $this->servicesService->updateOrCreate(['id' => $request->service_id] , ['name' => $request->name, 'detail' => $request->detail]);        
        return response()->json(['success'=>'Service saved successfully.']);

        return response()->json(['error'=>$validator->errors()->all()]);
    }

    // edit view form, return the row ID
    public function edit($id)
    {
        $service = $this->serviceRepository->findorFail($id);
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
        $this->servicesService->destroy($id);
     
        return response()->json(['success'=>'Service deleted successfully.']);
    }
}

