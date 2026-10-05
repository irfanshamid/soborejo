<?php

namespace Database\Seeders;

use App\Models\LegalDocument;
use Database\Seeders\Concerns\SeedsPlaceholderImage;
use Illuminate\Database\Seeder;

class LegalDocumentSeeder extends Seeder
{
    use SeedsPlaceholderImage;

    public function run(): void
    {
        $document = $this->placeholderImage('legal-documents');

        $docs = [
            ['title' => 'NIB Perusahaan', 'description' => 'Nomor Induk Berusaha PT Soborejo sebagai dasar legalitas kegiatan usaha.'],
            ['title' => 'Akta Pendirian', 'description' => 'Dokumen akta pendirian perusahaan yang menjadi landasan hukum entitas.'],
            ['title' => 'SIUP / Izin Usaha', 'description' => 'Izin usaha terkait kegiatan jasa konstruksi dan general contractor.'],
            ['title' => 'Sertifikat ISO Mutu', 'description' => 'Dokumen sertifikasi mutu sebagai komitmen standar kerja perusahaan.'],
            ['title' => 'Izin Operasional Proyek', 'description' => 'Contoh dokumen perizinan operasional yang relevan dengan pelaksanaan proyek.'],
            ['title' => 'Dokumen K3', 'description' => 'Dokumen kebijakan dan prosedur keselamatan dan kesehatan kerja.'],
        ];

        foreach ($docs as $doc) {
            LegalDocument::updateOrCreate(
                ['title' => $doc['title']],
                [
                    'description' => $doc['description'],
                    'document' => $document,
                ]
            );
        }
    }
}
