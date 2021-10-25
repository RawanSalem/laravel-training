<?php


namespace App\Repositories;

use App\Models\Client;

class ClientRepository extends BaseRepository
{
    public function model()
    {
        return Client::class;
    }
}
