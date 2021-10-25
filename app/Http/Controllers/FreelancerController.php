<?php

namespace App\Http\Controllers;

// use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFreelancerRequest;
use App\Services\FreelancerService;
use App\Repositories\ServiceRepository;
use Image;
use App\Traits\ImgaeUpload;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Log;
// use Illuminate\Support\Facades\DB;



class FreelancerController extends Controller
{
        /**
     * @var FreelancerService
     */
    private $freelancerService;
    
    
    /**
     * @var ServiceRepository
     */
    private $serviceRepository;


    public function __construct(FreelancerService $freelancerService, ServiceRepository $serviceRepository)
    {
        $this->freelancerService = $freelancerService;
        $this->serviceRepository = $serviceRepository;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $services= Service::select('name', 'id')->get();
        $services = $this->serviceRepository->all();
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
          
        $this->freelancerService->create($data, $filePath);

        return back()->with('success', 'User created successfully.');
    }

}
