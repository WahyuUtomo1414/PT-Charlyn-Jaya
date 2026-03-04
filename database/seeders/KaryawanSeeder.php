<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $direkturUtama = Karyawan::create([
            'nama' => 'Johanis Semiautty',
            'jabatan' => 'Direktur Utama',
            'parent_id' => null,
            'urutan' => 1,
            'created_by' => 1,
        ]);

        $direktur = Karyawan::create([
            'nama' => 'Siti Rahayu',
            'jabatan' => 'Direktur',
            'parent_id' => $direkturUtama->id,
            'urutan' => 1,
            'created_by' => 1,
        ]);

        $pengawas = Karyawan::create([
            'nama' => 'Clive Fendjalang',
            'jabatan' => 'Pengawas Lapangan',
            'parent_id' => $direktur->id,
            'urutan' => 1,
            'created_by' => 1,
        ]);

        $hsse = Karyawan::create([
            'nama' => 'M. Rafi Nusantara',
            'jabatan' => 'HSSE',
            'parent_id' => $direktur->id,
            'urutan' => 2,
            'created_by' => 1,
        ]);

        $hrd = Karyawan::create([
            'nama' => 'Aprilia Soffyani',
            'jabatan' => 'HRD / Personalia',
            'parent_id' => $direktur->id,
            'urutan' => 3,
            'created_by' => 1,
        ]);

        Karyawan::create([
            'nama' => 'La Onyong',
            'jabatan' => 'Logistik',
            'parent_id' => $pengawas->id,
            'urutan' => 1,
            'created_by' => 1,
        ]);

        Karyawan::create([
            'nama' => 'Erni Lesilolo',
            'jabatan' => 'Administrasi',
            'parent_id' => $hrd->id,
            'urutan' => 1,
            'created_by' => 1,
        ]);
    }
}
