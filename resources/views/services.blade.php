@extends('layouts.app')

@section('title', 'Layanan Profesional - YoungDevelop')

@section('description', 'Jelajahi layanan pengembangan web profesional YoungDevelop: website bisnis, startup, e-commerce, desain UI/UX, dan asistensi proyek digital. Wujudkan ide Anda bersama kami.')
@section('keywords', 'jasa pengembangan website, web developer bandung, website umkm, website startup, desain ui ux, jasa joki skripsi, aplikasi web kustom, youngdevelop layanan')

@section('content')

<section class="max-w-7xl mx-auto px-4 py-16 md:py-20 overflow-hidden">

    {{-- HERO SECTION --}}
    <div class="text-center mb-16 md:mb-24">
        <h1 class="text-4xl md:text-6xl font-extrabold text-emerald-700 leading-tight mb-6" data-aos="fade-up" data-aos-duration="1000">
            Solusi Digital untuk Pertumbuhan Anda
        </h1>
        <p class="text-gray-700 text-lg md:text-xl max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            Di YoungDevelop, kami tidak hanya membangun website; kami menciptakan pengalaman digital yang berdampak dan mendukung tujuan strategis Anda.
        </p>
    </div>

    {{-- LAYANAN UTAMA --}}
    <div class="mb-16 md:mb-24">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-emerald-700 mb-12" data-aos="fade-up">Layanan Unggulan Kami</h2>
        <div class="grid md:grid-cols-3 gap-10">
            @foreach ($services as $index => $service)
            <div class="bg-white p-8 rounded-xl shadow-lg border border-emerald-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}" data-aos-easing="ease-out-back">
                <div class="text-emerald-600 mb-6 text-5xl flex justify-center">
                    {!! $service['icon'] !!}
                </div>
                <h3 class="text-2xl font-bold text-emerald-700 mb-3">{{ $service['title'] }}</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">{{ $service['desc'] }}</p>
                <ul class="list-disc list-inside text-sm text-gray-500 space-y-2 pl-4"> 
                    @foreach ($service['points'] as $point)
                        <li>{{ $point }}</li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>

    {{-- PROSES KERJA --}}
    <div class="bg-emerald-50 rounded-xl py-16 md:py-20 px-6 mb-16 md:mb-24 shadow-inner">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-emerald-700 mb-12" data-aos="fade-up">Bagaimana Kami Mewujudkan Ide Anda</h2>
        <p class="text-gray-700 text-lg max-w-3xl mx-auto text-center mb-16" data-aos="fade-up" data-aos-delay="200">
            Setiap proyek dikerjakan dengan pendekatan terstruktur dan transparan, memastikan hasil yang optimal dan sesuai ekspektasi Anda.
        </p>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="text-emerald-600 mb-4 text-5xl">
                    <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <h4 class="font-bold text-xl text-emerald-700 mb-2">1. Konsultasi & Analisis</h4>
                <p class="text-gray-600 text-sm leading-relaxed">Kami selami visi Anda, menganalisis kebutuhan, dan merumuskan strategi digital yang tepat.</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="text-emerald-600 mb-4 text-5xl">
                    <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </div>
                <h4 class="font-bold text-xl text-emerald-700 mb-2">2. Desain & Prototyping</h4>
                <p class="text-gray-600 text-sm leading-relaxed">Konsep visual dan fungsionalitas diwujudkan melalui desain UI/UX, wireframe, dan prototipe interaktif.</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="text-emerald-600 mb-4 text-5xl">
                    <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                </div>
                <h4 class="font-bold text-xl text-emerald-700 mb-2">3. Pengembangan & Integrasi</h4>
                <p class="text-gray-600 text-sm leading-relaxed">Tim ahli kami membangun solusi dengan teknologi terbaru, memastikan kode bersih dan integrasi mulus.</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="text-emerald-600 mb-4 text-5xl">
                    <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"></path></svg>
                </div>
                <h4 class="font-bold text-xl text-emerald-700 mb-2">4. Pengujian & Peluncuran</h4>
                <p class="text-gray-600 text-sm leading-relaxed">Solusi diuji secara menyeluruh sebelum diluncurkan, diikuti dengan pemantauan pasca-peluncuran.</p>
            </div>
        </div>
    </div>

    {{-- STUDI KASUS / PORTOFOLIO --}}
    <div class="mb-16 md:mb-24">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-emerald-700 mb-12" data-aos="fade-up">Proyek Pilihan Kami</h2>
        <p class="text-gray-700 text-lg max-w-3xl mx-auto text-center mb-16" data-aos="fade-up" data-aos-delay="200">
            Lihat bagaimana kami telah membantu klien mewujudkan tujuan digital mereka melalui solusi yang inovatif dan berdampak nyata.
        </p>
        <div class="grid md:grid-cols-2 gap-10">
            @foreach ($caseStudies as $index => $case)
            <div class="bg-white p-8 rounded-xl shadow-lg border border-emerald-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-right" data-aos-delay="{{ 100 * ($index + 1) }}">
                <img src="{{ asset('images/' . $case['image']) }}" alt="{{ $case['title'] }}" class="rounded-lg mb-6 w-full h-64 object-cover shadow-md border border-gray-200">
                <h3 class="text-2xl font-bold text-emerald-700 mb-3">{{ $case['title'] }}</h3>
                <p class="text-gray-700 mb-2 leading-relaxed">
                    <strong class="text-emerald-600">Tantangan:</strong> {{ $case['challenge'] }}
                </p>
                <p class="text-gray-700 mb-2 leading-relaxed">
                    <strong class="text-emerald-600">Solusi:</strong> {{ $case['solution'] }}
                </p>
                <p class="text-gray-700 leading-relaxed">
                    <strong class="text-emerald-600">Hasil:</strong> {{ $case['result'] }}
                </p>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('portofolio') }}" class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-4 px-8 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                Lihat Semua Portofolio Kami
            </a>
        </div>
    </div>

    {{-- CTA --}}
    <div class="bg-gradient-to-br from-emerald-600 to-emerald-800 text-white rounded-xl p-10 md:p-16 text-center shadow-2xl" data-aos="zoom-in" data-aos-duration="1000">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap Mewujudkan Ide Digital Anda?</h2>
        <p class="text-emerald-100 text-lg mb-8 max-w-3xl mx-auto">
            Jangan biarkan potensi Anda terpendam. Mari berdiskusi dan temukan solusi digital yang paling sesuai dengan kebutuhan dan tujuan Anda.
        </p>
        <a href="{{ route('kontak') }}" class="inline-block bg-white text-emerald-700 px-8 py-4 rounded-full font-bold shadow-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800">
            Dapatkan Konsultasi Gratis
        </a>
    </div>

</section>
@endsection