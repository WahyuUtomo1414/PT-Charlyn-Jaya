<?php

namespace Database\Seeders;

use App\Models\Portofolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            // 1
            ['customer_id'=>1,'layanan_id'=>3,'uraian'=>'Pengadaan Penyedia Jasa Tenaga Ahli Daya (Keamanan, Kebersihan dan Pengemudi)','tahun_pekerjaan'=>'2015-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 2
            ['customer_id'=>1,'layanan_id'=>3,'uraian'=>'Pengadaan Penyedia Jasa Tenaga Ahli Daya (Keamanan, Kebersihan dan Pengemudi)','tahun_pekerjaan'=>'2019-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 3
            ['customer_id'=>1,'layanan_id'=>3,'uraian'=>'Pengadaan Penyedia Jasa Tenaga Ahli Daya (Keamanan, Kebersihan dan Pengemudi)','tahun_pekerjaan'=>'2019-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 4
            ['customer_id'=>2,'layanan_id'=>2,'uraian'=>'Pengadaan Jasa Tenaga Kerja Cleaning Service','tahun_pekerjaan'=>'2019-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 5
            ['customer_id'=>1,'layanan_id'=>3,'uraian'=>'Pengadaan Penyedia Jasa Tenaga Ahli Daya','tahun_pekerjaan'=>'2020-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 6
            ['customer_id'=>3,'layanan_id'=>1,'uraian'=>'Jasa Satuan Pengamanan (Satpam)','tahun_pekerjaan'=>'2021-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 7
            ['customer_id'=>2,'layanan_id'=>1,'uraian'=>'Pengadaan Jasa Tenaga Kerja Security','tahun_pekerjaan'=>'2021-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 8
            ['customer_id'=>2,'layanan_id'=>2,'uraian'=>'Pengadaan Jasa Tenaga Kerja Cleaning Service','tahun_pekerjaan'=>'2021-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 9
            ['customer_id'=>3,'layanan_id'=>1,'uraian'=>'Jasa Satuan Pengamanan (Satpam)','tahun_pekerjaan'=>'2021-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 10
            ['customer_id'=>4,'layanan_id'=>1,'uraian'=>'Penyedia Jasa Tenaga Keamanan','tahun_pekerjaan'=>'2022-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 11
            ['customer_id'=>2,'layanan_id'=>1,'uraian'=>'Pengadaan Jasa Tenaga Kerja Security','tahun_pekerjaan'=>'2022-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 12
            ['customer_id'=>2,'layanan_id'=>2,'uraian'=>'Pengadaan Jasa Tenaga Kerja Cleaning Service','tahun_pekerjaan'=>'2022-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 13
            ['customer_id'=>5,'layanan_id'=>3,'uraian'=>'Jasa Outsourcing Tenaga Security','tahun_pekerjaan'=>'2023-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 14
            ['customer_id'=>4,'layanan_id'=>1,'uraian'=>'Penyedia Jasa Tenaga Keamanan','tahun_pekerjaan'=>'2023-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 15
            ['customer_id'=>6,'layanan_id'=>1,'uraian'=>'Penyedia Jasa Tenaga Keamanan dan Tenaga Kebersihan','tahun_pekerjaan'=>'2023-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 16
            ['customer_id'=>2,'layanan_id'=>1,'uraian'=>'Pengadaan Jasa Tenaga Kerja Keamanan Security','tahun_pekerjaan'=>'2023-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 17
            ['customer_id'=>2,'layanan_id'=>3,'uraian'=>'Pengadaan Jasa Tenaga Kerja Public Area (PA)','tahun_pekerjaan'=>'2023-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 18
            ['customer_id'=>3,'layanan_id'=>1,'uraian'=>'Jasa Satuan Pengamanan (Satpam)','tahun_pekerjaan'=>'2023-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 19
            ['customer_id'=>2,'layanan_id'=>1,'uraian'=>'Pengadaan Jasa Tenaga Kerja Keamanan Security','tahun_pekerjaan'=>'2024-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 20
            ['customer_id'=>2,'layanan_id'=>3,'uraian'=>'Pengadaan Jasa Tenaga Kerja Public Area (PA)','tahun_pekerjaan'=>'2024-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 21
            ['customer_id'=>5,'layanan_id'=>3,'uraian'=>'Jasa Outsourcing Tenaga Housekeeping','tahun_pekerjaan'=>'2023-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 22
            ['customer_id'=>5,'layanan_id'=>3,'uraian'=>'Jasa Outsourcing Tenaga Security','tahun_pekerjaan'=>'2023-01-01','status_pekerjaan'=>'SELESAI','created_by'=>1],

            // 23
            ['customer_id'=>4,'layanan_id'=>1,'uraian'=>'Penyedia Jasa Tenaga Keamanan','tahun_pekerjaan'=>'2024-01-01','status_pekerjaan'=>'BERJALAN','created_by'=>1],

            // 24
            ['customer_id'=>6,'layanan_id'=>1,'uraian'=>'Penyedia Jasa Tenaga Keamanan dan Tenaga Kebersihan','tahun_pekerjaan'=>'2024-01-01','status_pekerjaan'=>'BERJALAN','created_by'=>1],

            // 25
            ['customer_id'=>3,'layanan_id'=>1,'uraian'=>'Jasa Satuan Pengamanan (Satpam)','tahun_pekerjaan'=>'2024-01-01','status_pekerjaan'=>'BERJALAN','created_by'=>1],

            // 26
            ['customer_id'=>7,'layanan_id'=>1,'uraian'=>'Jasa Satuan Pengamanan (Satpam)','tahun_pekerjaan'=>'2024-01-01','status_pekerjaan'=>'BERJALAN','created_by'=>1],

            // 27
            ['customer_id'=>5,'layanan_id'=>3,'uraian'=>'Jasa Outsourcing Tenaga Housekeeping','tahun_pekerjaan'=>'2024-01-01','status_pekerjaan'=>'BERJALAN','created_by'=>1],

            // 28
            ['customer_id'=>5,'layanan_id'=>3,'uraian'=>'Jasa Outsourcing Tenaga Security','tahun_pekerjaan'=>'2024-01-01','status_pekerjaan'=>'BERJALAN','created_by'=>1],
        ];

        foreach ($data as $item) {
            Portofolio::create($item);
        }
    }
}
