<?php

namespace Database\Seeders;

use App\Models\SiteCounter;
use Illuminate\Database\Seeder;

class SiteCounterSeeder extends Seeder
{
    public function run(): void
    {
        $counter = SiteCounter::query()->first() ?? new SiteCounter();
        $counter->fill([
            'content' => '<p>Dengan pengalaman di berbagai proyek konstruksi, PT Soborejo berkomitmen menghadirkan hasil kerja yang berkualitas dan tepat waktu.</p>',
            'title_counter_1' => 'Proyek Selesai',
            'total_counter_1' => '120+',
            'title_counter_2' => 'Tahun Pengalaman',
            'total_counter_2' => '10+',
            'title_counter_3' => 'Klien Mitra',
            'total_counter_3' => '80+',
        ])->save();
    }
}
