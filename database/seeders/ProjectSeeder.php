<?php

namespace Database\Seeders;

use App\Models\Project;
use Database\Seeders\Concerns\SeedsPlaceholderImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    use SeedsPlaceholderImage;

    public function run(): void
    {
        $image = $this->placeholderImage('projects');

        $projects = [
            [
                'title' => 'Gedung Perkantoran Tangerang',
                'description' => '<p>Pembangunan gedung perkantoran modern dengan fokus efisiensi ruang dan kualitas finishing.</p>',
                'content' => '<p>Proyek ini mencakup struktur utama, arsitektur, dan koordinasi MEP untuk mendukung operasional kantor.</p>',
                'url' => null,
                'order' => 1,
                'categories' => 'Construction,Building',
            ],
            [
                'title' => 'Fasilitas Pabrik Bojonegoro',
                'description' => '<p>Konstruksi fasilitas industri untuk mendukung kapasitas produksi klien manufaktur.</p>',
                'content' => '<p>Lingkup pekerjaan meliputi bangunan pabrik, area utilitas, dan infrastruktur pendukung di lapangan.</p>',
                'url' => null,
                'order' => 2,
                'categories' => 'Industrial,Construction',
            ],
            [
                'title' => 'Gudang Logistik Karanganyar',
                'description' => '<p>Pembangunan gudang logistik dengan desain sirkulasi barang yang efisien.</p>',
                'content' => '<p>Proyek menekankan kekuatan struktur, akses loading, dan kemudahan operasional harian.</p>',
                'url' => null,
                'order' => 3,
                'categories' => 'Industrial,Warehouse',
            ],
            [
                'title' => 'Renovation Retail Jakarta',
                'description' => '<p>Renovasi dan fit-out ruang retail untuk meningkatkan pengalaman pelanggan.</p>',
                'content' => '<p>Pekerjaan mencakup pembongkaran terbatas, finishing interior, dan penyesuaian instalasi utilitas.</p>',
                'url' => null,
                'order' => 4,
                'categories' => 'Renovation,Retail',
            ],
            [
                'title' => 'Kompleks Bangunan Komersial',
                'description' => '<p>Pengembangan kompleks bangunan komersial multi-fungsi untuk kebutuhan bisnis lokal.</p>',
                'content' => '<p>Tim proyek mengelola jadwal, mutu, dan keselamatan kerja hingga tahap serah terima.</p>',
                'url' => null,
                'order' => 5,
                'categories' => 'Commercial,Construction',
            ],
            [
                'title' => 'Proyek Infrastruktur Pendukung',
                'description' => '<p>Pekerjaan sipil pendukung untuk akses, drainase, dan area pendukung proyek utama.</p>',
                'content' => '<p>Fokus pada ketahanan infrastruktur dan kesesuaian spesifikasi teknis lapangan.</p>',
                'url' => null,
                'order' => 6,
                'categories' => 'Civil,Infrastructure',
            ],
        ];

        foreach ($projects as $item) {
            $categories = $item['categories'];
            unset($item['categories']);

            $project = Project::updateOrCreate(
                ['title' => $item['title']],
                array_merge($item, ['image' => $image])
            );

            DB::table('projects')
                ->where('id', $project->id)
                ->update(['categories' => $categories]);
        }
    }
}
