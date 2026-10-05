<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Database\Seeders\Concerns\SeedsPlaceholderImage;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    use SeedsPlaceholderImage;

    public function run(): void
    {
        $image = $this->placeholderImage('general');

        $setting = GeneralSetting::query()->first() ?? new GeneralSetting();
        $setting->fill([
            'title' => 'PT Soborejo',
            'description' => 'General contractor Indonesia untuk jasa konstruksi gedung, bangunan, dan proyek industri.',
            'phone' => '+62 812-3456-7890',
            'email' => 'info@soborejo.com',
            'address' => 'Tangerang, Banten, Indonesia',
            'favicon' => $image,
            'logo' => $image,
        ])->save();
    }
}
