<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            GeneralSettingSeeder::class,
            HeadlineSeeder::class,
            CompanyOverviewSeeder::class,
            OurValueSeeder::class,
            OurClientSeeder::class,
            ScopeOfWorkSeeder::class,
            ProjectSeeder::class,
            LegalDocumentSeeder::class,
            BlogSeeder::class,
            FaqSeeder::class,
            SiteCounterSeeder::class,
        ]);
    }
}
