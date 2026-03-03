<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'pertanyaan' => 'Layanan apa saja yang disediakan?',
                'jawaban' => 'Kami menyediakan layanan Konstruksi, Security Service (Tenaga Keamanan), dan Cleaning Service (Tenaga Kebersihan) untuk berbagai jenis instansi baik pemerintah maupun swasta.',
                'created_by' => 1,
            ],
            [
                'pertanyaan' => 'Di mana saja area layanan PT. Charlyn Jaya?',
                'jawaban' => 'Fokus utama layanan kami berada di wilayah Provinsi Maluku dan sekitarnya. Kami bangga menjadi mitra lokal terpercaya dengan jaringan yang kuat.',
                'created_by' => 1,
            ],
            [
                'pertanyaan' => 'Bagaimana cara bekerja sama dengan kami?',
                'jawaban' => 'Anda dapat menghubungi kami melalui formulir kontak di website ini, mengirimkan email ke info@charlynjaya.co.id, atau langsung menelepon nomor layanan klien kami untuk mengatur jadwal diskusi kebutuhan.',
                'created_by' => 1,
            ],
        ];

        foreach ($items as $item) {
            Faq::query()->updateOrCreate(
                ['pertanyaan' => $item['pertanyaan']],
                $item
            );
        }
    }
}
