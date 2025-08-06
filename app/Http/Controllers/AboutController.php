<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $team = [
            [
                'nama' => 'Agung',
                'position' => 'Project Manager | Front-End Developer',
                'bio' => 'Memimpin proyek dengan strategi yang matang dan memastikan setiap detail front-end diimplementasikan dengan presisi, menghasilkan pengalaman pengguna yang luar biasa.',
                'photo' => 'Agung.jpg',
            ],
            [
                'nama' => 'Alif',
                'position' => 'Back-End Developer',
                'bio' => 'Merancang dan mengembangkan arsitektur sistem yang kokoh serta mengoptimalkan kinerja server untuk mendukung fungsionalitas aplikasi yang kompleks.',
                'photo' => 'Alif.jpg',
            ],
            [
                'nama' => 'Anandhita',
                'position' => 'Marketing Specialist',
                'bio' => 'Bertanggung jawab dalam merumuskan strategi pemasaran digital dan komunikasi brand, memastikan pesan YoungDevelop sampai kepada audiens yang tepat.',
                'photo' => 'Anandhita.jpg',
            ],
            [
                'nama' => 'Nazwa',
                'position' => 'UI / UX Designer',
                'bio' => 'Berfokus pada estetika visual dan fungsionalitas, merancang interaksi yang mengoptimalkan kepuasan pengguna dan efektivitas desain.',
                'photo' => 'Nazwa.jpg',
            ],
            [
                'nama' => 'Zalva',
                'position' => 'UI / IX Designer',
                'bio' => 'Menciptakan antarmuka pengguna yang intuitif dan menarik, serta merancang pengalaman pengguna yang mulus dan berkesan bagi setiap produk digital.',
                'photo' => 'Zalva.jpg',
            ]
        ];

        return view('about', [
            'team' => $team
        ]);
    }
}
