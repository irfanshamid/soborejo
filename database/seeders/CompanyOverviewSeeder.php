<?php

namespace Database\Seeders;

use App\Models\CompanyOverview;
use Database\Seeders\Concerns\SeedsPlaceholderImage;
use Illuminate\Database\Seeder;

class CompanyOverviewSeeder extends Seeder
{
    use SeedsPlaceholderImage;

    public function run(): void
    {
        $image = $this->placeholderImage('company');

        $items = [
            [
                'title' => 'vision',
                'description' => '<p>Menjadi general contractor terpercaya di Indonesia yang unggul dalam kualitas, ketepatan waktu, dan keberlanjutan proyek konstruksi.</p>',
            ],
            [
                'title' => 'mission',
                'description' => '<p>Memberikan solusi konstruksi yang aman, efisien, dan sesuai kebutuhan klien melalui tenaga ahli, manajemen proyek yang solid, dan komitmen mutu.</p>',
            ],
            [
                'title' => 'our value',
                'description' => '<p>Integritas, profesionalisme, keselamatan kerja, dan fokus pada hasil adalah nilai inti yang kami terapkan di setiap proyek.</p>',
            ],
            [
                'title' => 'scope of work',
                'description' => '<p>Lingkup kerja PT Soborejo mencakup konstruksi gedung, bangunan komersial, fasilitas industri, serta pekerjaan sipil pendukung proyek.</p>',
            ],
        ];

        foreach ($items as $item) {
            CompanyOverview::updateOrCreate(
                ['title' => $item['title']],
                [
                    'image' => $image,
                    'description' => $item['description'],
                ]
            );
        }
    }
}
