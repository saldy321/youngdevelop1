@extends('layouts.app')

@section('title', 'Solusi Pengembangan Web Profesional - YoungDevelop')

@section('content')

    {{-- Title --}}
    <section
        class="min-h-screen flex flex-col items-center justify-center text-center bg-gradient-to-b from-white via-emerald-50 to-white px-4 py-16 overflow-hidden">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-extrabold text-emerald-700 leading-tight mb-6" data-aos="fade-up"
                data-aos-duration="1000">
                Wujudkan Potensi Bisnis Anda dengan Website Profesional
            </h1>
            <p class="text-gray-700 text-lg md:text-2xl max-w-2xl mx-auto mb-8" data-aos="fade-up" data-aos-delay="200"
                data-aos-duration="1000">
                Kami adalah mitra digital Anda, menyediakan solusi pengembangan web berkualitas tinggi dan terjangkau untuk
                UMKM, startup, institusi pendidikan dan proyek akademis.
            </p>
            <a href="#konsultasi"
                class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-4 px-8 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105"
                data-aos="zoom-in" data-aos-delay="400" data-aos-duration="800">
                Mulai Proyek Anda Sekarang
            </a>
        </div>
    </section>


    {{-- <section class="py-12 bg-gray-50 overflow-hidden">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-2xl font-semibold text-gray-700 mb-8" data-aos="fade-up">Dipercaya oleh Berbagai Industri</h2>
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-12">
            <img src="{{ asset('images/logo-client-placeholder-1.png') }}" alt="Client Logo 1" class="h-10 opacity-75 hover:opacity-100 transition-opacity" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{ asset('images/logo-client-placeholder-2.png') }}" alt="Client Logo 2" class="h-10 opacity-75 hover:opacity-100 transition-opacity" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{ asset('images/logo-client-placeholder-3.png') }}" alt="Client Logo 3" class="h-10 opacity-75 hover:opacity-100 transition-opacity" data-aos="zoom-in" data-aos-delay="300">
            <img src="{{ asset('images/logo-client-placeholder-4.png') }}" alt="Client Logo 4" class="h-10 opacity-75 hover:opacity-100 transition-opacity" data-aos="zoom-in" data-aos-delay="400">
        </div>
    </div>
</section> --}}

    {{-- Hero Section --}}
    <section class="py-20 bg-emerald-50 overflow-hidden">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-12 px-6">
            <div class="md:w-1/2 order-2 md:order-1" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="text-3xl md:text-4xl font-bold text-emerald-700 leading-tight">
                    Transformasi Ide Bisnis Anda Menjadi Kehadiran Digital yang Berdampak
                </h2>
                <p class="mt-6 text-gray-700 text-lg">
                    Dengan tim ahli kami, setiap ide Anda kami olah menjadi solusi digital yang elegan, fungsional, dan
                    dioptimalkan untuk pertumbuhan. Kami fokus pada desain intuitif dan kinerja terbaik untuk mendukung
                    tujuan bisnis Anda.
                </p>
                <ul class="mt-6 space-y-3 text-gray-600">
                    <li class="flex items-center" data-aos="fade-right" data-aos-delay="200"><svg
                            class="w-5 h-5 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>Desain Kustom yang Menarik</li>
                    <li class="flex items-center" data-aos="fade-right" data-aos-delay="300"><svg
                            class="w-5 h-5 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>Performa Cepat & Responsif</li>
                    <li class="flex items-center" data-aos="fade-right" data-aos-delay="400"><svg
                            class="w-5 h-5 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>Optimasi untuk Konversi</li>
                </ul>
            </div>
            <div class="md:w-1/2 order-1 md:order-2" data-aos="fade-left" data-aos-duration="1000">
                <dotlottie-wc src="https://lottie.host/ee27b426-f1b1-454e-b8f2-174e1a8c3a04/P04s6YRg4D.lottie"
                    class="w-full h-auto" speed="1" autoplay loop></dotlottie-wc>
            </div>
        </div>
    </section>

    {{-- Solusi --}}
    <section class="py-20 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-emerald-700 mb-12" data-aos="fade-up">Solusi Digital yang Kami
                Tawarkan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-emerald-100 p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="100" data-aos-easing="ease-in-out">
                    <h3 class="text-xl font-bold mb-3 text-emerald-700">Pengembangan Website Bisnis & UMKM</h3>
                    <p class="text-gray-600 text-base">
                        Ciptakan kehadiran online yang kuat dengan website profesional yang dirancang khusus untuk
                        meningkatkan visibilitas, penjualan, dan brand awareness UMKM Anda.
                    </p>
                </div>
                <div class="bg-emerald-100 p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="200" data-aos-easing="ease-in-out">
                    <h3 class="text-xl font-bold mb-3 text-emerald-700">Desain & Pengembangan Website Startup</h3>
                    <p class="text-gray-600 text-base">
                        Luncurkan startup Anda dengan website yang inovatif, skalabel, dan menarik investor. Kami fokus pada
                        fungsionalitas inti dan pengalaman pengguna yang superior.
                    </p>
                </div>
                <div class="bg-emerald-100 p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-out">
                    <h3 class="text-xl font-bold mb-3 text-emerald-700">Pengembangan Website Resmi Institusi Pendidikan</h3>
                    <p class="text-gray-600 text-base">
                        Mengembangkan website profesional yang merepresentasikan citra, informasi, dan
                        keunggulan institusi pendidikan Anda secara optimal. Hadirkan platform digital yang informatif,
                        mudah diakses, dan meningkatkan kredibilitas di mata calon siswa, orang tua, dan masyarakat luas.
                    </p>
                </div>
                <div class="bg-emerald-100 p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 md:col-start-2"
                    data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-out">
                    <h3 class="text-xl font-bold mb-3 text-emerald-700">Asistensi Proyek Digital Mahasiswa</h3>
                    <p class="text-gray-600 text-base">
                        Dapatkan dukungan ahli untuk proyek kuliah terkait pengembangan web, aplikasi, dan tugas digital
                        lainnya. Kami bantu Anda mencapai hasil terbaik dengan bimbingan profesional.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Kenapa pilih YoungDevelop --}}
    <section class="py-20 bg-emerald-50 overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-emerald-700 mb-12" data-aos="fade-up">
                Mengapa Memilih YoungDevelop?
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">

                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-4 text-emerald-600" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="700">
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
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">Desain Inovatif & UI/UX Terbaik</h3>
                    <p class="text-gray-600 text-base">
                        Kami menciptakan website dengan tampilan modern, estetis, dan pengalaman pengguna (UI/UX) yang
                        intuitif, memastikan pengunjung betah dan mudah berinteraksi.
                    </p>
                </div>

                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-4 text-emerald-600" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="700">
                        <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">Performa Unggul & Responsif</h3>
                    <p class="text-gray-600 text-base">
                        Website yang kami bangun ringan, cepat diakses, dan responsif sempurna di semua perangkat (desktop,
                        tablet, mobile), meningkatkan kepuasan pengguna dan SEO.
                    </p>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="mb-4 text-emerald-600" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="700">
                        <svg class="w-16 h-16 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M14 7.14614C13.5 7.00383 12.6851 6.99859 12 7.00383C11.7709 7.00558 11.9094 6.9944 11.6 7.00383C10.7926 7.03273 10.0016 7.41781 10 8.50882C9.99825 9.67108 11 10.015 12 10.015C13 10.015 14 10.2803 14 11.5211C14 12.4536 13.1925 12.8621 12.1861 12.9974C11.3861 12.9974 11 13.0272 10 12.8838M12 13V14M12 6V7M21 17V17.8C21 18.9201 21 19.4802 20.782 19.908C20.5903 20.2843 20.2843 20.5903 19.908 20.782C19.4802 21 18.9201 21 17.8 21H6.2C5.0799 21 4.51984 21 4.09202 20.782C3.71569 20.5903 3.40973 20.2843 3.21799 19.908C3 19.4802 3 18.9201 3 17.8V17M19 10C19 13.866 15.866 17 12 17C8.13401 17 5 13.866 5 10C5 6.13401 8.13401 3 12 3C15.866 3 19 6.13401 19 10Z"
                                    stroke="#059669" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">Investasi Optimal & Transparan</h3>
                    <p class="text-gray-600 text-base">
                        Dapatkan solusi berkualitas tinggi dengan harga yang kompetitif dan transparan. Kami berkomitmen
                        memberikan nilai terbaik yang sesuai dengan anggaran dan tujuan Anda.
                    </p>
                </div>

                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-4 text-emerald-600" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="700">
                        <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">Tim yang Responsif dan Proaktif</h3>
                    <p class="text-gray-600 text-base">
                        Kami berkomunikasi dengan cepat dan solusi tanggap terhadap setiap kebutuhan klien.
                    </p>
                </div>

                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-4 text-emerald-600" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="700">
                        <svg class="w-16 h-16 mx-auto" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M4 21C4 17.4735 6.60771 14.5561 10 14.0709M16.4976 16.2119C15.7978 15.4328 14.6309 15.2232 13.7541 15.9367C12.8774 16.6501 12.7539 17.843 13.4425 18.6868C13.8312 19.1632 14.7548 19.9983 15.4854 20.6353C15.8319 20.9374 16.0051 21.0885 16.2147 21.1503C16.3934 21.203 16.6018 21.203 16.7805 21.1503C16.9901 21.0885 17.1633 20.9374 17.5098 20.6353C18.2404 19.9983 19.164 19.1632 19.5527 18.6868C20.2413 17.843 20.1329 16.6426 19.2411 15.9367C18.3492 15.2307 17.1974 15.4328 16.4976 16.2119ZM15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z"
                                    stroke="#059669" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">Proses Kerja Transparan dan Kolaboratif</h3>
                    <p class="text-gray-600 text-base">
                        Klien dilibatkan dalam setiap tahapan pengembangan, memastikan visi klien terwujud dengan akurat.
                    </p>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="mb-4 text-emerald-600" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="700">
                        <svg class="w-16 h-16 mx-auto" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M4 14L9 19L20 8M6 8.88889L9.07692 12L16 5" stroke="#059669" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">Dukungan Purna Jual yang Andal</h3>
                    <p class="text-gray-600 text-base">
                        Memberikan dukungan teknis dan pemeliharaan setelah proyek selesai untuk memastikan kelancaran
                        operasional.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Jejak Karya --}}
    <section class="py-20 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-emerald-700 mb-12" data-aos="fade-up">
                Jejak Karya Kami
            </h2>

            <div class="grid md:grid-cols-2 gap-10">
                <div class="bg-gray-100 p-6 rounded-lg shadow-xl border border-emerald-100" data-aos="fade-right"
                    data-aos-offset="200" data-aos-duration="800">
                    <img src="{{ asset('images/portofolio/YoungDevelop_SS.png') }}"
                        alt="Portofolio Proyek Company Profile Startup"
                        class="rounded-lg mb-4 w-full h-auto object-cover">
                    <h3 class="text-2xl font-bold text-emerald-700 mb-2">Website Profil Korporasi Startup</h3>
                    <p class="text-gray-700 text-base mb-3">
                        Pengembangan website profil perusahaan yang inovatif dan responsif untuk sebuah startup di
                        sektor teknologi. Dirancang khusus untuk menarik perhatian investor, mengkomunikasikan nilai inti,
                        dan menampilkan layanan dengan presentasi visual yang memukau.
                    </p>
                    <a href="{{ route('portofolio') }}"
                        class="text-emerald-600 hover:text-emerald-800 font-semibold flex items-center group">
                        Pelajari Lebih Lanjut
                        <svg class="ml-2 w-4 h-4 transition-transform duration-200 group-hover:translate-x-1"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <div class="bg-gray-100 p-6 rounded-lg shadow-xl border border-emerald-100" data-aos="fade-left"
                    data-aos-offset="200" data-aos-duration="800">
                    <img src="{{ asset('images/portofolio/CoGuide_SS.png') }}" alt="Portofolio Aplikasi Resep Kuliner"
                        class="rounded-lg mb-4 w-full h-auto object-cover">
                    <h3 class="text-2xl font-bold text-emerald-700 mb-2">Platform Resep Kuliner Interaktif</h3>
                    <p class="text-gray-700 text-base mb-3">
                        Penciptaan platform panduan memasak yang intuitif dan menarik, dirancang khusus untuk memandu
                        para pemula dalam menemukan dan mempraktikkan beragam resep kuliner dengan mudah dan menyenangkan.
                    </p>
                    <a href="{{ route('portofolio') }}"
                        class="text-emerald-600 hover:text-emerald-800 font-semibold flex items-center group">
                        Pelajari Lebih Lanjut
                        <svg class="ml-2 w-4 h-4 transition-transform duration-200 group-hover:translate-x-1"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <div class="bg-gray-100 p-6 rounded-lg shadow-xl border border-emerald-100" data-aos="fade-right"
                    data-aos-offset="200" data-aos-duration="800">
                    <img src="{{ asset('images/portofolio/EasyGreen_SS.png') }}"
                        alt="Portofolio Aplikasi Pengelolaan Pertanian Digital"
                        class="rounded-lg mb-4 w-full h-auto object-cover">
                    <h3 class="text-2xl font-bold text-emerald-700 mb-2">Aplikasi Manajemen Pertanian Digital</h3>
                    <p class="text-gray-700 text-base mb-3">
                        Inovasi platform digital untuk mendata dan memantau pertumbuhan tanaman, serta mencatat hasil
                        panen secara efisien. Memudahkan petani dan penghobi dalam mengelola proses budidaya secara
                        terstruktur.
                    </p>
                    <a href="{{ route('portofolio') }}"
                        class="text-emerald-600 hover:text-emerald-800 font-semibold flex items-center group">
                        Pelajari Lebih Lanjut
                        <svg class="ml-2 w-4 h-4 transition-transform duration-200 group-hover:translate-x-1"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('portofolio') }}"
                    class="inline-block bg-white border border-emerald-600 text-emerald-600 hover:bg-emerald-600 hover:text-white font-bold py-3 px-7 rounded-full transition-all duration-300 shadow-md hover:shadow-lg">
                    Lihat Semua Portofolio Kami
                </a>
            </div>
        </div>
    </section>

    {{-- Testimoni --}}
    <section class="py-20 bg-emerald-50 overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-emerald-700 mb-12" data-aos="fade-up">Apa Kata Klien Kami?</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg border-t-4 border-emerald-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                    data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                    <p class="italic text-gray-700 text-lg mb-4 leading-relaxed">
                        "Kolaborasi dengan YoungDevelop sungguh memuaskan. Timnya sangat responsif dan komunikatif,
                        menghasilkan website daftar resep yang melampaui ekspektasi. Kini, platform website saya tampil
                        profesional dan sangat user-friendly."
                    </p>
                    <div class="flex flex-col items-center justify-center mt-6">
                        <img src="{{ asset('images/testimoni/Siti.png') }}" alt="Foto Siti"
                            class="w-16 h-16 rounded-full object-cover mb-3 border-2 border-emerald-400 shadow-md">
                        <p class="font-bold text-emerald-700">- Siti</p>
                        <p class="text-gray-500 text-sm">Mahasiswa Teknik Informatika</p>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg border-t-4 border-emerald-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                    data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                    <p class="italic text-gray-700 text-lg mb-4 leading-relaxed">
                        "Sebagai seorang mahasiswa, dukungan dari YoungDevelop sangatlah krusial. Mereka membantu proyek
                        tugas akhir saya menjadi terstruktur, fungsional, dan berhasil meraih nilai yang memuaskan. Timnya
                        menunjukkan kesabaran dan dedikasi luar biasa!"
                    </p>
                    <div class="flex flex-col items-center justify-center mt-6">
                        <img src="{{ asset('images/testimoni/Dimas.png') }}" alt="Foto Dimas"
                            class="w-16 h-16 rounded-full object-cover mb-3 border-2 border-emerald-400 shadow-md">
                        <p class="font-bold text-emerald-700">- Dimas</p>
                        <p class="text-gray-500 text-sm">Mahasiswa Teknik Informatika</p>
                    </div>
                </div>

                {{-- <div class="bg-white p-8 rounded-lg shadow-lg border-t-4 border-emerald-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                    data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                    <p class="italic text-gray-700 text-lg mb-4 leading-relaxed">
                        "Website startup kami dikembangkan dengan kualitas superior oleh YoungDevelop. Desainnya
                        modern, performanya cepat, dan mereka memiliki pemahaman mendalam tentang visi bisnis kami.
                        Sangat direkomendasikan bagi siapa pun yang mencari solusi digital andal!"
                    </p>
                    <div class="flex flex-col items-center justify-center mt-6">
                        <img src="{{ asset('images/testimoni/Andre.png') }}" alt="Foto Andre"
                            class="w-16 h-16 rounded-full object-cover mb-3 border-2 border-emerald-400 shadow-md">
                        <p class="font-bold text-emerald-700">- Andre</p>
                        <p class="text-gray-500 text-sm">Founder "Inovatech Solutions"</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section id="konsultasi" class="py-20 bg-white text-center overflow-hidden">
        <div class="max-w-xl mx-auto px-6" data-aos="zoom-in" data-aos-duration="1000">
            <h2 class="text-3xl md:text-4xl font-bold text-emerald-700 mb-6">Siap Mengembangkan Kehadiran Digital Anda?
            </h2>
            <p class="text-gray-700 text-lg mb-8">
                Jangan tunda lagi potensi bisnis Anda. Mari diskusikan kebutuhan website Anda bersama tim ahli kami.
            </p>
            <a href="{{ route('kontak') }}"
                class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-4 px-9 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                Dapatkan Konsultasi Gratis Sekarang
            </a>
        </div>
    </section>

@endsection
