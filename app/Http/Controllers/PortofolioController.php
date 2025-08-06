<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'YoungDevelop',
                'short_description' => 'Desain website company profile modern dan responsif untuk startup teknologi, menonjolkan layanan dan portofolio.',
                'image' => 'YoungDevelop_SS.png',
                'category' => 'Startup', 
                'live_url' => '#', 
            ],
            [
                'title' => 'CoGuide',
                'short_description' => 'platform panduan memasak yang intuitif dan menarik, dirancang khusus untuk memandu para pemula.',
                'image' => 'CoGuide_SS.png',
                'category' => 'UMKM',
                'live_url' => 'https://coguide.kesug.com/',
            ],
            [
                'title' => 'EasyGreen',
                'short_description' => 'Inovasi platform digital untuk mendata dan memantau pertumbuhan tanaman, serta mencatat hasil panen secara efisien.',
                'image' => 'EasyGreen_SS.png',
                'category' => 'Akademis',
                'live_url' => 'https://easygreen.free.nf/',
            ],
            // [
            //     'title' => 'Aplikasi Manajemen Event "EventPro"',
            //     'short_description' => 'Aplikasi web kustom untuk pengelolaan event mulai dari registrasi, jadwal, hingga analisis peserta.',
            //     'image' => 'portofolio-eventpro.jpg',
            //     'category' => 'Website',
            //     'live_url' => 'https://example.com/eventpro',
            // ],
            // [
            //     'title' => 'Platform Kursus Online "LearnHub"',
            //     'short_description' => 'Platform e-learning interaktif dengan fitur manajemen kursus, kuis, dan sertifikat digital.',
            //     'image' => 'portofolio-learnhub.jpg',
            //     'category' => 'Website',
            //     'live_url' => 'https://example.com/learnhub',
            // ],
            // [
            //     'title' => 'Website Portofolio Desainer Grafis',
            //     'short_description' => 'Website personal portofolio yang elegan dan minimalis untuk desainer grafis profesional, menampilkan karya secara visual.',
            //     'image' => 'portofolio-desainer.jpg',
            //     'category' => 'Website',
            //     'live_url' => 'https://example.com/desainer-portofolio',
            // ],
        ];

        return view('portofolio', compact('projects'));
    }
}
