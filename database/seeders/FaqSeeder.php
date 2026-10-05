<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'title' => 'Apa saja layanan utama PT Soborejo?',
                'content' => '<p>Kami menyediakan jasa general contractor meliputi konstruksi gedung, bangunan industri, renovasi/fit-out, pekerjaan sipil, serta manajemen proyek.</p>',
            ],
            [
                'title' => 'Apakah PT Soborejo melayani proyek di luar Tangerang?',
                'content' => '<p>Ya. Kami dapat menangani proyek di berbagai wilayah Indonesia sesuai ruang lingkup dan kesiapan operasional.</p>',
            ],
            [
                'title' => 'Bagaimana proses awal kerja sama proyek?',
                'content' => '<p>Biasanya dimulai dari diskusi kebutuhan, tinjauan dokumen/lokasi, penyusunan usulan teknis & anggaran, lalu tahap kontrak dan pelaksanaan.</p>',
            ],
            [
                'title' => 'Apakah tersedia dokumen legal perusahaan?',
                'content' => '<p>Ya. Dokumen legalitas seperti NIB, akta, dan izin terkait dapat dilihat pada bagian Legal Document di website.</p>',
            ],
            [
                'title' => 'Bagaimana cara menghubungi tim Soborejo?',
                'content' => '<p>Anda dapat menghubungi kami melalui halaman Contact, email info@soborejo.com, atau nomor telepon yang tertera di website.</p>',
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(
                ['title' => $faq['title']],
                ['content' => $faq['content']]
            );
        }
    }
}
