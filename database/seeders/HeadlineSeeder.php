<?php

namespace Database\Seeders;

use App\Models\Headline;
use Database\Seeders\Concerns\SeedsPlaceholderImage;
use Illuminate\Database\Seeder;

class HeadlineSeeder extends Seeder
{
    use SeedsPlaceholderImage;

    public function run(): void
    {
        $image = $this->placeholderImage('headlines');

        $headline = Headline::query()->first() ?? new Headline();
        $headline->fill([
            'banner_img' => $image,
            'title' => 'Membangun dengan Integritas',
            'description' => 'PT Soborejo adalah general contractor Indonesia yang fokus pada jasa konstruksi gedung, bangunan, dan proyek industri dengan standar mutu tinggi.',
            'tagline' => 'General Contractor Indonesia',
            'service' => 'Konstruksi Gedung & Industri',
            'order' => 1,
        ])->save();
    }
}
