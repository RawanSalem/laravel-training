<?php


namespace App\Repositories;

use App\Models\Freelancer;

class FreelancerRepository extends BaseRepository
{
    public function model()
    {
        return Freelancer::class;
    }
}
