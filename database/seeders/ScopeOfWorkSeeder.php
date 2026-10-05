<?php

namespace Database\Seeders;

use App\Models\ScopeOfWork;
use Database\Seeders\Concerns\SeedsPlaceholderImage;
use Illuminate\Database\Seeder;

class ScopeOfWorkSeeder extends Seeder
{
    use SeedsPlaceholderImage;

    public function run(): void
    {
        $icon = $this->placeholderImage('scope-icons');

        $scopes = [
            ['title' => 'Konstruksi Gedung', 'description' => '<p>Pembangunan gedung perkantoran, komersial, dan fasilitas umum dengan manajemen proyek terintegrasi.</p>'],
            ['title' => 'Bangunan Industri', 'description' => '<p>Pekerjaan konstruksi pabrik, gudang, dan fasilitas produksi sesuai kebutuhan operasional klien.</p>'],
            ['title' => 'Renovasi & Fit-Out', 'description' => '<p>Renovasi struktural maupun interior untuk meningkatkan fungsi dan nilai bangunan existing.</p>'],
            ['title' => 'Pekerjaan Sipil', 'description' => '<p>Pekerjaan tanah, pondasi, dan infrastruktur pendukung yang menunjang kelancaran proyek utama.</p>'],
            ['title' => 'Manajemen Proyek', 'description' => '<p>Perencanaan, pengawasan mutu, pengendalian biaya, dan koordinasi seluruh pihak terkait proyek.</p>'],
            ['title' => 'Maintenance Bangunan', 'description' => '<p>Layanan perawatan dan perbaikan berkala agar bangunan tetap aman dan berfungsi optimal.</p>'],
        ];

        foreach ($scopes as $scope) {
            ScopeOfWork::updateOrCreate(
                ['title' => $scope['title']],
                [
                    'icon' => $icon,
                    'description' => $scope['description'],
                ]
            );
        }
    }
}
