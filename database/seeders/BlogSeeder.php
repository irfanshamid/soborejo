<?php

namespace Database\Seeders;

use App\Models\Blog;
use Database\Seeders\Concerns\SeedsPlaceholderImage;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    use SeedsPlaceholderImage;

    public function run(): void
    {
        $image = $this->placeholderImage('blogs');

        $blogs = [
            [
                'title' => 'Tips Memilih General Contractor untuk Proyek Gedung',
                'date' => now()->subDays(12)->toDateString(),
                'content' => '<p>Memilih general contractor yang tepat menentukan kualitas, jadwal, dan biaya proyek. Perhatikan track record, kemampuan manajemen, serta komitmen K3.</p><p>PT Soborejo menekankan perencanaan matang dan komunikasi transparan dengan pemilik proyek.</p>',
            ],
            [
                'title' => 'Standar Mutu pada Proyek Konstruksi Industri',
                'date' => now()->subDays(8)->toDateString(),
                'content' => '<p>Proyek industri membutuhkan koordinasi ketat antara struktur, utilitas, dan alur operasional. Standar mutu membantu mengurangi rework di lapangan.</p>',
            ],
            [
                'title' => 'Manajemen Jadwal Proyek yang Efektif',
                'date' => now()->subDays(5)->toDateString(),
                'content' => '<p>Penjadwalan yang realistis, monitoring progres, dan mitigasi risiko adalah kunci menyelesaikan proyek tepat waktu tanpa mengorbankan kualitas.</p>',
            ],
            [
                'title' => 'Keselamatan Kerja di Area Konstruksi',
                'date' => now()->subDays(2)->toDateString(),
                'content' => '<p>Budaya K3 yang kuat melindungi pekerja dan menjaga kelancaran proyek. Induksi, APD, dan inspeksi rutin harus menjadi kebiasaan harian.</p>',
            ],
            [
                'title' => 'Renovasi vs Bangun Baru: Mana yang Lebih Tepat?',
                'date' => now()->subDay()->toDateString(),
                'content' => '<p>Keputusan renovasi atau bangun baru bergantung pada kondisi struktur, kebutuhan fungsi, dan anggaran. Evaluasi teknis sejak awal sangat penting.</p>',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::updateOrCreate(
                ['title' => $blog['title']],
                [
                    'image' => $image,
                    'date' => $blog['date'],
                    'active' => true,
                    'content' => $blog['content'],
                ]
            );
        }
    }
}
