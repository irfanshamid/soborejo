<?php

namespace Database\Seeders;

use App\Models\OurValue;
use Database\Seeders\Concerns\SeedsPlaceholderImage;
use Illuminate\Database\Seeder;

class OurValueSeeder extends Seeder
{
    use SeedsPlaceholderImage;

    public function run(): void
    {
        $image = $this->placeholderImage('our-values');

        $values = [
            [
                'title' => 'Integritas',
                'description' => 'Kami menjaga transparansi dan kejujuran di setiap tahapan proyek, dari perencanaan hingga serah terima.',
            ],
            [
                'title' => 'Kualitas',
                'description' => 'Standar mutu konstruksi diterapkan secara konsisten agar hasil pekerjaan aman, rapi, dan tahan lama.',
            ],
            [
                'title' => 'Keselamatan Kerja',
                'description' => 'Keselamatan pekerja dan lingkungan proyek menjadi prioritas utama dalam setiap aktivitas lapangan.',
            ],
            [
                'title' => 'Ketepatan Waktu',
                'description' => 'Manajemen jadwal yang disiplin membantu kami menyelesaikan proyek sesuai target tanpa mengorbankan kualitas.',
            ],
            [
                'title' => 'Kolaborasi',
                'description' => 'Kami bekerja erat dengan pemilik proyek, konsultan, dan pemasok untuk mencapai hasil terbaik bersama.',
            ],
        ];

        foreach ($values as $value) {
            OurValue::updateOrCreate(
                ['title' => $value['title']],
                [
                    'description' => $value['description'],
                    'image' => $image,
                ]
            );
        }
    }
}
