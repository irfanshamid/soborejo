<?php

namespace Database\Seeders;

use App\Models\OurClient;
use Database\Seeders\Concerns\SeedsPlaceholderImage;
use Illuminate\Database\Seeder;

class OurClientSeeder extends Seeder
{
    use SeedsPlaceholderImage;

    public function run(): void
    {
        $image = $this->placeholderImage('our-clients');

        $clients = [
            ['title' => 'Mitra Industri Nusantara', 'url' => 'https://example.com', 'description' => 'Klien sektor industri manufaktur.', 'order' => 1],
            ['title' => 'Properti Mandiri Group', 'url' => 'https://example.com', 'description' => 'Pengembang properti komersial dan residensial.', 'order' => 2],
            ['title' => 'Logistik Prima Indonesia', 'url' => 'https://example.com', 'description' => 'Operator gudang dan fasilitas logistik.', 'order' => 3],
            ['title' => 'Energi Sejahtera', 'url' => 'https://example.com', 'description' => 'Perusahaan infrastruktur energi.', 'order' => 4],
            ['title' => 'Retail Nusantara', 'url' => 'https://example.com', 'description' => 'Jaringan ritel yang membutuhkan fit-out bangunan.', 'order' => 5],
            ['title' => 'Agro Build Partners', 'url' => 'https://example.com', 'description' => 'Klien proyek fasilitas agroindustri.', 'order' => 6],
        ];

        foreach ($clients as $client) {
            OurClient::updateOrCreate(
                ['title' => $client['title']],
                [
                    'image' => $image,
                    'url' => $client['url'],
                    'description' => $client['description'],
                    'order' => $client['order'],
                ]
            );
        }
    }
}
