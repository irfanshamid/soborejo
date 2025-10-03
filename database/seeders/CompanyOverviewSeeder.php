<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyOverview;

class CompanyOverviewSeeder extends Seeder
{
    public function run(): void
    {
        CompanyOverview::firstOrCreate(['title' => 'vision'], [
            'description' => '',
        ]);

        CompanyOverview::firstOrCreate(['title' => 'mission'], [
            'description' => '',
        ]);

        CompanyOverview::firstOrCreate(['title' => 'our value'], [
            'description' => '',
        ]);

        CompanyOverview::firstOrCreate(['title' => 'scope of work'], [
            'description' => '',
        ]);
    }
}
