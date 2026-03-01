<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(): View
    {
        return view('pages.project');
    }

    public function show($slug): View
    {
        // Dummy data for services
        $services = [
            'security-service' => [
                'title' => 'Security Service',
                'description' => 'Penyediaan tenaga satuan pengamanan yang tanggap, terlatih, dan bersertifikat untuk menjaga aset dan lingkungan Anda dengan standar operasional yang ketat.',
                'image' => 'https://images.unsplash.com/photo-1557555187-23d685287bc3?auto=format&fit=crop&q=80',
                'thumbnail' => 'https://images.unsplash.com/photo-1574169208507-84376144848b?auto=format&fit=crop&q=80',
                'list' => [
                    'Pengamanan Area Komersial & Industri',
                    'Pengamanan VIP & Event',
                    'Patroli Lingkungan 24 Jam',
                    'Konsultasi Sistem Keamanan Terpadu'
                ],
            ],
            'cleaning-service' => [
                'title' => 'Cleaning Service',
                'description' => 'Layanan kebersihan profesional dengan tenaga terdidik dan peralatan modern, menciptakan lingkungan yang bersih, sehat, dan nyaman untuk aktivitas Anda.',
                'image' => 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&q=80',
                'thumbnail' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&q=80',
                'list' => [
                    'Pembersihan Kaca Gedung Bertingkat',
                    'Perawatan Lantai Marmer & Granit',
                    'General Cleaning',
                    'Hygiene & Sanitation Service'
                ],
            ],
            'outsourcing-service' => [
                'title' => 'Outsourcing Service',
                'description' => 'Penyediaan tenaga kerja pendukung operasional yang handal dan profesional, disesuaikan dengan kebutuhan spesifik perusahaan Anda.',
                'image' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&q=80',
                'thumbnail' => 'https://images.unsplash.com/photo-1541888087525-2bf74d711c20?auto=format&fit=crop&q=80',
                'list' => [
                    'Tenaga Administrasi & Resepsionis',
                    'Driver & Kurir',
                    'Tenaga Kasir & Pramuniaga',
                    'Penyaluran Tenaga Teknis Khusus'
                ],
            ],
        ];

        $service = $services[$slug] ?? abort(404);

        return view('pages.service_detail', compact('service'));
    }
}
