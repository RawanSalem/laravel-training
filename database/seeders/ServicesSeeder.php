<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $services = [
            'Development &amp; IT',
            'Design &amp; Creative',
            'Sales &amp; Marketing',
            'Writing &amp; Translation',
            'Admin &amp; Customer Support',
            'Finance &amp; Accounting',

        ];

        foreach ($services as $service) {
            
            Service::updateOrCreate([
                'name' => $service,
                'detail' => $service
            ]);
        }
    }
}
