<?php

namespace App\Services;

use App\Repositories\ServiceRepository;


class ServicesService
{

    /**
     * @var ServiceRepository
     */
    private $ServiceRepository;

    public function __construct(ServiceRepository $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    public function updateOrCreate(array $attributes, array $values = [])
    {
        return $this->serviceRepository->updateOrCreate($attributes, $values);
    }

    public function create($data)
    {
         return $this->serviceRepository->create($data);
    }

    public function destroy($id)
    {
        return $this->serviceRepository->delete($id);
    }

}
