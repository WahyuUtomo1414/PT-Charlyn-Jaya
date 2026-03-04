<?php

namespace Database\Seeders;

use App\Models\Sertifikat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SertifikatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Penghargaan Pencegahan dan Penanggulangan HIV/AIDS Tempat Kerja',
                'foto' => 'uploads/sertifikat/sertifikat_pemprov_maluku.png',
                'jenis' => 'Penghargaan Pemerintah Provinsi',
                'created_by' => 1,
            ],
            [
                'nama' => 'Penghargaan Kecelakaan Nihil',
                'foto' => 'uploads/sertifikat/penghargaan_kecelakaan_nihil.png',
                'jenis' => 'Kementerian Ketenagakerjaan',
                'created_by' => 1,
            ],
            [
                'nama' => 'Sertifikat Kepesertaan BPJS Ketenagakerjaan',
                'foto' => 'uploads/sertifikat/bpjs_ketenagakerjaan.png',
                'jenis' => 'BPJS Ketenagakerjaan',
                'created_by' => 1,
            ],
            [
                'nama' => 'Sertifikat Kepesertaan BPJS Kesehatan',
                'foto' => 'uploads/sertifikat/bpjs_kesehatan.png',
                'jenis' => 'BPJS Kesehatan',
                'created_by' => 1,
            ],
        ];

        foreach ($data as $item) {
            Sertifikat::create($item);
        }
    }
}
