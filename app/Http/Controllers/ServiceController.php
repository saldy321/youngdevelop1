<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            [
                'title' => 'Pengembangan Website Bisnis & UMKM',
                'desc' => 'Ciptakan kehadiran online yang kuat dengan website profesional. Tingkatkan visibilitas, penjualan, dan brand awareness bisnis Anda.',
                'icon' => '<svg class="w-full h-full" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12.0009 21.3201H8.43094C7.33237 21.2923 6.27951 20.8746 5.4606 20.1418C4.64169 19.409 4.11011 18.4088 3.96094 17.3201L2.96094 9.32007" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M20.9992 9.32007L20.6992 11.8201" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3 9.32004C8.81444 7.20973 15.1856 7.20973 21 9.32004" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6.42969 8.34006L9.07969 3.32007" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17.5699 8.34006L14.9199 3.32007" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M19 22.8201V14.8201" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15 18.8201H23" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>',
                'points' => [
                    'Desain Responsif Kustom',
                    'Integrasi E-commerce (Opsional)',
                    'Sistem Manajemen Konten (CMS)',
                    'Optimasi SEO Dasar',
                ]
            ],
            [
                'title' => 'Desain & Pengembangan Website Startup',
                'desc' => 'Luncurkan startup Anda dengan website inovatif dan skalabel. Fokus pada fungsionalitas inti dan pengalaman pengguna superior.',
                'icon' => '<svg class="w-full h-full" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19.0006 9.03002C19.0007 8.10058 18.8158 7.18037 18.4565 6.32317C18.0972 5.46598 17.5709 4.68895 16.9081 4.03734C16.2453 3.38574 15.4594 2.87265 14.5962 2.52801C13.7331 2.18336 12.8099 2.01409 11.8806 2.03002C10.0966 2.08307 8.39798 2.80604 7.12302 4.05504C5.84807 5.30405 5.0903 6.98746 5.00059 8.77001C4.95795 9.9595 5.21931 11.1402 5.75999 12.2006C6.30067 13.2609 7.10281 14.1659 8.09058 14.83C8.36897 15.011 8.59791 15.2584 8.75678 15.5499C8.91565 15.8415 8.99945 16.168 9.00059 16.5V18.03H15.0006V16.5C15.0006 16.1689 15.0829 15.843 15.24 15.5515C15.3971 15.26 15.6241 15.0121 15.9006 14.83C16.8528 14.1911 17.6336 13.328 18.1741 12.3167C18.7147 11.3054 18.9985 10.1767 19.0006 9.03002V9.03002Z" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15 21.04C14.1345 21.6891 13.0819 22.04 12 22.04C10.9181 22.04 9.86548 21.6891 9 21.04" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>', 
                'points' => [
                    'Pengembangan MVP Cepat',
                    'Arsitektur Skalabel',
                    'UI/UX Inovatif',
                    'Integrasi API Pihak Ketiga',
                ]
            ],
            [
                'title' => 'Asistensi Proyek Digital Akademis',
                'desc' => 'Dapatkan dukungan ahli untuk proyek kuliah terkait pengembangan web/aplikasi. Raih hasil terbaik dengan bimbingan profesional.',
                'icon' => '<svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 3.99995C12.8839 2.91716 14.9355 2.15669 17.07 1.74995C17.551 1.63467 18.0523 1.63283 18.5341 1.74458C19.016 1.85632 19.4652 2.07852 19.8464 2.39375C20.2276 2.70897 20.5303 3.10856 20.7305 3.56086C20.9307 4.01316 21.0229 4.50585 21 4.99995V13.9999C20.9699 15.117 20.5666 16.1917 19.8542 17.0527C19.1419 17.9136 18.1617 18.5112 17.07 18.7499C14.9355 19.1567 12.8839 19.9172 11 20.9999" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M10.9995 3.99995C9.1156 2.91716 7.06409 2.15669 4.92957 1.74995C4.44856 1.63467 3.94731 1.63283 3.46546 1.74458C2.98362 1.85632 2.53439 2.07852 2.15321 2.39375C1.77203 2.70897 1.46933 3.10856 1.26911 3.56086C1.0689 4.01316 0.976598 4.50585 0.999521 4.99995V13.9999C1.0296 15.117 1.433 16.1917 2.14533 17.0527C2.85767 17.9136 3.83793 18.5112 4.92957 18.7499C7.06409 19.1567 9.1156 19.9172 10.9995 20.9999" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11 21V4" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>',
                'points' => [
                    'Bimbingan Teknis & Kode',
                    'Pembuatan Aplikasi Web (Parsial)',
                    'Desain UI/UX Tugas Akhir',
                    'Debugging & Optimasi',
                ]
            ],
            [
                'title' => 'Pengembangan Website Institusi Pendidikan',
                'desc' => 'Bangun portal informasi resmi yang profesional dan mudah diakses untuk sekolah, universitas, atau lembaga pendidikan Anda.',
                'icon' => '<svg viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10.58 3.96997H6C4.93913 3.96997 3.92172 4.39146 3.17157 5.1416C2.42142 5.89175 2 6.9091 2 7.96997V17.97C2 19.0308 2.42142 20.0482 3.17157 20.7983C3.92172 21.5485 4.93913 21.97 6 21.97H18C19.0609 21.97 20.0783 21.5485 20.8284 20.7983C21.5786 20.0482 22 19.0308 22 17.97V13.8999" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M10.58 9.96997H2" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M5 18.9199H11" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 6.73995L16.76 9.73995L22 4.44995" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>',
                'points' => [
                    'Desain Informasi Institusi',
                    'Modul Berita & Pengumuman',
                    'Galeri Aktivitas & Fasilitas',
                    'Integrasi Kalender Akademik',
                    'Halaman Kontak & Lokasi',
                ]
            ],
        ];

        $caseStudies = [
            [
                'title' => 'Website Company Profile: "YoungDevelop"',
                'image' => 'LogoYD_Dark_HD.svg',
                'challenge' => 'Startup teknologi YoungDevelop membutuhkan representasi online yang modern untuk menarik investor dan klien potensial.',
                'solution' => 'Kami merancang dan mengembangkan website company profile responsif dengan desain minimalis, informasi layanan terperinci, dan formulir kontak interaktif.',
                'result' => 'Peningkatan kredibilitas digital, menarik 15% lebih banyak prospek, dan berhasil mendapatkan pendanaan awal setelah peluncuran.'
            ],
        ];

        return view('services', compact('services', 'caseStudies'));
    }
}
