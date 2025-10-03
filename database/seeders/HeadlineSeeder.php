<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Headline;

class HeadlineSeeder extends Seeder
{
    public function run(): void
    {
        Headline::firstOrCreate(['title' => 'headline']);
    }
}
