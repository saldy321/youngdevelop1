@extends('layouts.app')

@section('title', 'Tentang Kami - YoungDevelop')

@section('description',
    'Pelajari lebih lanjut tentang YoungDevelop: visi, misi, nilai inti, dan tim profesional kami
    yang berdedikasi menciptakan solusi digital inovatif untuk UMKM, startup, dan proyek akademis di Bandung.')
@section('keywords',
    'tentang youngdevelop, perusahaan pengembangan web bandung, tim youngdevelop, visi misi
    youngdevelop, nilai perusahaan, agency digital bandung, kisah kami')

@section('content')

    <style>
        /* CSS untuk efek marquee/infinite scroll */
        @keyframes scroll-left {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .infinite-scroll-container {
            display: flex;
            overflow: hidden;
            width: 100%;
            position: relative;
            padding: 0 1.5rem;
        }

        .infinite-scroll-content {
            display: flex;
            animation: scroll-left 90s linear infinite;
            will-change: transform;
        }

        .infinite-scroll-content>div {
            flex-shrink: 0;
            width: 280px;
            margin-right: 2.5rem;
            perspective: 1000px;
        }

        .infinite-scroll-container:hover .infinite-scroll-content {
            animation-play-state: paused;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .infinite-scroll-content>div {
                width: 220px;
                margin-right: 1.5rem;
            }

            .infinite-scroll-content {
                animation-duration: 60s;
            }

            .infinite-scroll-container {
                padding: 0 1rem;
            }
        }

        .card-elegant-gradient-border {
            border-image-slice: 1;
            border-image-source: linear-gradient(to right, #6EE7B7, #10B981);
            border-width: 2px;
        }
    </style>

    <section class="max-w-7xl mx-auto px-4 py-16 md:py-20">

        {{-- Hero Section for About Page --}}
        <div class="text-center mb-16 md:mb-24 overflow-hidden">
            <h1 class="text-4xl md:text-6xl font-extrabold text-emerald-700 leading-tight mb-6" data-aos="fade-up"
                data-aos-duration="1000">
                Mengenal Young<span class="text-emerald-500">Develop</span> Lebih Dekat
            </h1>
            <p class="text-gray-700 text-lg md:text-xl max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200"
                data-aos-duration="1000">
                YoungDevelop adalah penyedia jasa pembuatan website yang berkomitmen untuk memberdayakan Usaha Mikro, Kecil,
                dan Menengah (UMKM), startup, Institusi Pendidikan, serta mahasiswa melalui solusi digital yang inovatif,
                efektif, dan terjangkau. Kami berdedikasi untuk menjadi mitra terpercaya dalam transformasi digital,
                membantu klien menavigasi lanskap ekonomi digital yang dinamis dan menciptakan dampak positif berkelanjutan.
            </p>
        </div>

        {{-- Who We Are: Visi, Misi, Nilai --}}
        <div class="space-y-12 text-center mb-16 md:mb-24">
            <h2 class="text-3xl md:text-4xl font-bold text-emerald-700" data-aos="fade-up">Filosofi Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="bg-white p-8 rounded-xl shadow-lg border border-emerald-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-4 text-emerald-600">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl md:text-2xl font-bold text-emerald-700 mb-2">Visi</h3>
                    <p class="text-gray-600">
                        Menjadi katalisator utama dalam transformasi digital di Indonesia, mewujudkan potensi tak terbatas
                        melalui solusi web yang inovatif dan mudah diakses.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg border border-emerald-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-4 text-emerald-600">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.942 3.313.842 2.376 2.376a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.942 1.543-.842 3.313-2.376 2.376a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.942-3.313-.842-2.376-2.376a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.942-1.543.842-3.313 2.376-2.376a1.724 1.724 0 002.572-1.065z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl md:text-2xl font-bold text-emerald-700 mb-2">Misi</h3>
                    <p class="text-gray-600">
                        Menyediakan solusi pengembangan web berkualitas tinggi dan terjangkau, berfokus pada inovasi,
                        pengalaman pengguna terbaik, dan dukungan komprehensif bagi klien.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg border border-emerald-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="mb-4 text-emerald-600">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 7h4M3 10h4M3 14h4M3 17h4M3 21h4M10 3h4M10 7h4M10 10h4M10 14h4M10 17h4M10 21h4M17 3h4M17 7h4M17 10h4M17 14h4M17 17h4M17 21h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl md:text-2xl font-bold text-emerald-700 mb-2">Nilai Inti</h3>
                    <ul class="list-disc list-inside text-gray-600 text-left mx-auto max-w-max">
                        <li><b>Inovasi</b>: Selalu mencari solusi kreatif dan teknologi terbaru.</li>
                        <li><b>Kolaborasi</b>: Bekerja sama erat dengan klien untuk hasil terbaik.</li>
                        <li><b>Integritas</b>: Mengedepankan kejujuran dan transparansi dalam setiap aspek.</li>
                        <li><b>Dampak</b>: Berkomitmen untuk menciptakan produk yang memberikan nilai nyata.</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Our Team --}}
        <div class="text-center mb-16 md:mb-24">
            <h2 class="text-3xl md:text-4xl font-bold text-emerald-700 mb-12" data-aos="fade-up">Tim Kami: Kekuatan di Balik
                Inovasi</h2>
            <p class="text-gray-700 text-lg max-w-3xl mx-auto mb-16" data-aos="fade-up" data-aos-delay="200">
                Kami adalah kolektif individu dengan beragam keahlian, bersatu dalam satu tujuan: menghadirkan solusi
                digital terbaik. Kenali wajah-wajah di balik YoungDevelop.
            </p>

            <div class="infinite-scroll-container">
                <div class="infinite-scroll-content">
                    {{-- Loop pertama untuk anggota tim --}}
                    @foreach ($team as $index => $member)
                        <div
                            class="bg-white p-8 rounded-2xl shadow-lg border border-emerald-50 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:border-emerald-200 cursor-pointer relative overflow-hidden group">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-transparent via-emerald-50 to-emerald-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl z-0">
                            </div>
                            <div class="relative z-10">
                                <img src="{{ asset('images/team/' . $member['photo']) }}" alt="{{ $member['nama'] }}"
                                    class="w-32 h-32 mx-auto rounded-full object-cover mb-5 border-4 border-emerald-300 shadow-lg group-hover:border-emerald-400 transition-colors duration-300">
                                <h3
                                    class="text-xl font-bold text-emerald-800 mb-2 group-hover:text-emerald-900 transition-colors duration-300">
                                    {{ $member['nama'] }}</h3>
                                <p class="text-emerald-600 text-base font-semibold mb-3">{{ $member['position'] }}</p>
                                <p class="text-gray-700 text-sm italic leading-relaxed">{{ $member['bio'] }}</p>
                            </div>
                        </div>
                    @endforeach

                    {{-- DUPLIKASI KONTEN --}}
                    @if (count($team) > 0)
                        @foreach ($team as $index => $member)
                            <div
                                class="bg-white p-8 rounded-2xl shadow-lg border border-emerald-50 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:border-emerald-200 cursor-pointer relative overflow-hidden group">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-transparent via-emerald-50 to-emerald-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl z-0">
                                </div>
                                <div class="relative z-10">
                                    <img src="{{ asset('images/team/' . $member['photo']) }}" alt="{{ $member['nama'] }}"
                                        class="w-32 h-32 mx-auto rounded-full object-cover mb-5 border-4 border-emerald-300 shadow-lg group-hover:border-emerald-400 transition-colors duration-300">
                                    <h3
                                        class="text-xl font-bold text-emerald-800 mb-2 group-hover:text-emerald-900 transition-colors duration-300">
                                        {{ $member['nama'] }}</h3>
                                    <p class="text-emerald-600 text-base font-semibold mb-3">{{ $member['position'] }}</p>
                                    <p class="text-gray-700 text-sm italic leading-relaxed">{{ $member['bio'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    @if (count($team) > 0)
                        @foreach ($team as $index => $member)
                            <div
                                class="bg-white p-8 rounded-2xl shadow-lg border border-emerald-50 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:border-emerald-200 cursor-pointer relative overflow-hidden group">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-transparent via-emerald-50 to-emerald-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl z-0">
                                </div>
                                <div class="relative z-10">
                                    <img src="{{ asset('images/team/' . $member['photo']) }}" alt="{{ $member['nama'] }}"
                                        class="w-32 h-32 mx-auto rounded-full object-cover mb-5 border-4 border-emerald-300 shadow-lg group-hover:border-emerald-400 transition-colors duration-300">
                                    <h3
                                        class="text-xl font-bold text-emerald-800 mb-2 group-hover:text-emerald-900 transition-colors duration-300">
                                        {{ $member['nama'] }}</h3>
                                    <p class="text-emerald-600 text-base font-semibold mb-3">{{ $member['position'] }}</p>
                                    <p class="text-gray-700 text-sm italic leading-relaxed">{{ $member['bio'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            @if (empty($team))
                <p class="text-gray-500 mt-8" data-aos="fade-up" data-aos-delay="400">Tim akan segera ditampilkan di sini!
                </p>
            @endif
        </div>


        {{-- What We Do (Re-emphasized) --}}
        <div class="text-center mb-16 md:mb-24">
            <h2 class="text-3xl md:text-4xl font-bold text-emerald-700 mb-12" data-aos="fade-up">Bagaimana Kami Membangun
                Solusi Anda</h2>
            <p class="text-gray-700 text-lg max-w-3xl mx-auto mb-10" data-aos="fade-up" data-aos-delay="200">
                Kami tidak hanya menyediakan layanan, kami membangun kemitraan. Berikut adalah prinsip dan area fokus utama
                kami:
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-8 rounded-xl bg-emerald-50 border border-emerald-200 shadow-md flex flex-col items-center text-center"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="text-emerald-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h10M7 16h10m-7-4l-3-3m3 3l3-3m-3 3v4M3 21h18M3 7l9-4 9 4M5 10v10a1 1 0 001 1h12a1 1 0 001-1V10" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">Pengembangan Berorientasi Solusi</h3>
                    <p class="text-gray-600 text-sm">
                        Setiap proyek dimulai dengan pemahaman mendalam tentang tantangan dan tujuan bisnis Anda. Kami
                        merancang solusi yang spesifik dan efektif.
                    </p>
                </div>
                <div class="p-8 rounded-xl bg-emerald-50 border border-emerald-200 shadow-md flex flex-col items-center text-center"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="text-emerald-600 mb-4">
                        <svg class="h-16 w-16 mx-auto" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M12 3V5M12 19V21M3 12H5M19 12H21M5.6374 5.63604L7.05161 7.05025M16.9511 16.9497L18.3653 18.364M5.6374 18.364L7.05161 16.9497M16.9511 7.05025L18.3653 5.63604M12 8L13.236 10.633L16 11.0578L14 13.1062L14.472 16L12 14.633L9.528 16L10 13.1062L8 11.0578L10.764 10.633L12 8Z"
                                    stroke="#059669" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">Desain Intuitif & Pengalaman Pengguna (UI/UX)</h3>
                    <p class="text-gray-600 text-sm">
                        Kami memprioritaskan antarmuka yang indah dan mudah digunakan, memastikan pengunjung Anda
                        mendapatkan pengalaman digital yang mulus dan menyenangkan.
                    </p>
                </div>
                <div class="p-8 rounded-xl bg-emerald-50 border border-emerald-200 shadow-md flex flex-col items-center text-center"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="text-emerald-600 mb-4">
                        <svg class="w-16 h-16 mx-auto" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M3 12H21M3 12C3 16.9706 7.02944 21 12 21M3 12C3 7.02944 7.02944 3 12 3M21 12C21 16.9706 16.9706 21 12 21M21 12C21 7.02944 16.9706 3 12 3M12 21C4.75561 13.08 8.98151 5.7 12 3M12 21C19.2444 13.08 15.0185 5.7 12 3"
                                    stroke="#059669" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">Teknologi Terdepan & Fleksibel</h3>
                    <p class="text-gray-600 text-sm">
                        Menggunakan stack teknologi modern dan praktik terbaik untuk membangun solusi yang kuat, aman, dan
                        mudah diskalakan seiring pertumbuhan kebutuhan Anda.
                    </p>
                </div>
            </div>
        </div>

        {{-- Why Choose Us (Redesigned & Re-phrased as "Komitmen Kami") --}}
        <div class="bg-gradient-to-br from-emerald-600 to-emerald-800 text-white rounded-xl p-10 md:p-16 mb-16 md:mb-24 shadow-2xl"
            data-aos="fade-up" data-aos-duration="1200">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Komitmen Kami untuk Keunggulan</h2>
                <p class="text-emerald-100 text-lg max-w-4xl mx-auto">
                    Di YoungDevelop, setiap proyek adalah investasi dalam keberhasilan Anda. Kami berkomitmen pada standar
                    tertinggi dalam setiap aspek layanan kami.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="flex items-start p-6 rounded-lg bg-emerald-700/50 backdrop-blur-sm border border-emerald-600 shadow-lg"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="flex-shrink-0 text-emerald-200 mr-4">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Kualitas Tanpa Kompromi</h3>
                        <p class="text-emerald-100 text-sm">
                            Kami menjamin setiap solusi dibangun dengan standar kualitas tertinggi, fungsional, aman, dan
                            dapat diandalkan.
                        </p>
                    </div>
                </div>
                <div class="flex items-start p-6 rounded-lg bg-emerald-700/50 backdrop-blur-sm border border-emerald-600 shadow-lg"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="flex-shrink-0 text-emerald-200 mr-4">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M4 21C4 17.4735 6.60771 14.5561 10 14.0709M16.4976 16.2119C15.7978 15.4328 14.6309 15.2232 13.7541 15.9367C12.8774 16.6501 12.7539 17.843 13.4425 18.6868C13.8312 19.1632 14.7548 19.9983 15.4854 20.6353C15.8319 20.9374 16.0051 21.0885 16.2147 21.1503C16.3934 21.203 16.6018 21.203 16.7805 21.1503C16.9901 21.0885 17.1633 20.9374 17.5098 20.6353C18.2404 19.9983 19.164 19.1632 19.5527 18.6868C20.2413 17.843 20.1329 16.6426 19.2411 15.9367C18.3492 15.2307 17.1974 15.4328 16.4976 16.2119ZM15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z"
                                    stroke="#a7f3d0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Transparansi Penuh</h3>
                        <p class="text-emerald-100 text-sm">
                            Dari awal hingga akhir, kami memastikan Anda selalu mendapatkan pembaruan dan memahami setiap
                            proses yang berjalan.
                        </p>
                    </div>
                </div>
                <div class="flex items-start p-6 rounded-lg bg-emerald-700/50 backdrop-blur-sm border border-emerald-600 shadow-lg"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="flex-shrink-0 text-emerald-200 mr-4">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C9.61061 4 7.46589 5.04751 6 6.70835C5.91595 6.80358 5.83413 6.90082 5.75463 7M12 8V12L14.5 14.5M5.75391 4.00391V7.00391H8.75391"
                                    stroke="#a7f3d0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Dukungan Berkelanjutan</h3>
                        <p class="text-emerald-100 text-sm">
                            Kemitraan kami tidak berhenti setelah peluncuran. Kami siap memberikan dukungan dan pemeliharaan
                            untuk jangka panjang.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Call to Action --}}
        <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-xl p-10 text-center border border-emerald-200 shadow-lg"
            data-aos="zoom-in" data-aos-duration="1000">
            <h2 class="text-3xl md:text-4xl font-bold text-emerald-700 mb-6">Mulai Transformasi Digital Anda Hari Ini</h2>
            <p class="text-gray-700 text-lg mb-8 max-w-3xl mx-auto">
                Kami siap mendengarkan ide-ide Anda dan mengubahnya menjadi kenyataan digital yang powerful. Jangan ragu
                untuk berdiskusi dengan tim ahli kami.
            </p>
            <a href="{{ route('kontak') }}"
                class="inline-block px-8 py-4 bg-emerald-600 text-white font-semibold rounded-full shadow-lg hover:bg-emerald-700 transition-all duration-300 transform hover:scale-105"
                data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800">
                Dapatkan Konsultasi Gratis
            </a>
        </div>

    </section>
@endsection
