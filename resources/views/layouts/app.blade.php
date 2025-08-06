<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    {{-- SEO Meta Tags (Crucial for discoverability) --}}
    <meta name="description" content="@yield('description', 'YoungDevelop menyediakan solusi pengembangan website profesional dan terjangkau untuk UMKM, startup, dan proyek mahasiswa di Bandung.')">
    <meta name="keywords" content="@yield('keywords', 'pengembangan website, jasa website, web design, startup website, umkm website, joki website, mahasiswa, bandung, web developer, youngdevelop')">
    <meta name="author" content="YoungDevelop">

    {{-- Open Graph Meta Tags (for social media sharing) --}}
    <meta property="og:title" content="@yield('title', 'YoungDevelop - Solusi Pengembangan Website Profesional')">
    <meta property="og:description" content="@yield('description', 'YoungDevelop menyediakan solusi pengembangan website profesional dan terjangkau untuk UMKM, startup, dan proyek mahasiswa di Bandung.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('images/LogoYD_Light-noBg.png'))">

    <title>@yield('title', 'YoungDevelop - Solusi Pengembangan Website Profesional')</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/LogoYD_Dark-noBg.png') }}">

    {{-- Tailwind CSS & Custom Styles --}}
    @vite('resources/css/app.css')

    {{-- AOS Library (for Animate On Scroll) --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Google font --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"> --}}

</head>

<body class="bg-gradient-to-br from-white via-emerald-50 to-white text-gray-800 font-sans overflow-x-hidden">

    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <a href="{{ route('beranda') }}" class="flex items-center gap-3"> {{-- Added link to home for logo --}}
                    <img src="{{ asset('images/LogoYD_Light-noBg.png') }}" alt="YoungDevelop Logo"
                        class="w-10 h-10 rounded-full border border-double" />
                    <h1 class="text-2xl font-bold text-black">
                        Young<span class="text-emerald-600">Develop</span>
                    </h1>
                </a>
            </div>
            <nav class="hidden md:flex gap-6 text-gray-700 text-sm md:text-base">
                <a href="{{ route('tentang') }}"
                    class="@if (request()->routeIs('tentang')) text-emerald-600 font-semibold @endif hover:text-emerald-500 transition-colors duration-200 relative group">
                    Tentang Kami
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-0.5 bg-emerald-500 transition-all group-hover:w-full @if (request()->routeIs('tentang')) w-full @endif"></span>
                </a>
                <a href="{{ route('layanan') }}"
                    class="@if (request()->routeIs('layanan')) text-emerald-600 font-semibold @endif hover:text-emerald-500 transition-colors duration-200 relative group">
                    Layanan
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-0.5 bg-emerald-500 transition-all group-hover:w-full @if (request()->routeIs('layanan')) w-full @endif"></span>
                </a>
                <a href="{{ route('portofolio') }}"
                    class="@if (request()->routeIs('portofolio')) text-emerald-600 font-semibold @endif hover:text-emerald-500 transition-colors duration-200 relative group">
                    Portofolio
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-0.5 bg-emerald-500 transition-all group-hover:w-full @if (request()->routeIs('portofolio')) w-full @endif"></span>
                </a>
                <a href="{{ route('kontak') }}"
                    class="@if (request()->routeIs('kontak')) text-emerald-600 font-semibold @endif hover:text-emerald-500 transition-colors duration-200 relative group">
                    Kontak
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-0.5 bg-emerald-500 transition-all group-hover:w-full @if (request()->routeIs('kontak')) w-full @endif"></span>
                </a>
            </nav>

            {{-- Mobile Menu Button (Hamburger Icon) --}}
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu (Hidden by default) --}}
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-inner pb-4">
            <nav class="flex flex-col items-center gap-4 text-gray-700 text-base">
                <a href="{{ route('tentang') }}"
                    class="@if (request()->routeIs('tentang')) text-emerald-600 font-semibold @endif hover:text-emerald-500 transition-colors duration-200 w-full text-center py-2">
                    Tentang Kami
                </a>
                <a href="{{ route('layanan') }}"
                    class="@if (request()->routeIs('layanan')) text-emerald-600 font-semibold @endif hover:text-emerald-500 transition-colors duration-200 w-full text-center py-2">
                    Layanan
                </a>
                <a href="{{ route('portofolio') }}"
                    class="@if (request()->routeIs('portofolio')) text-emerald-600 font-semibold @endif hover:text-emerald-500 transition-colors duration-200 w-full text-center py-2">
                    Portofolio
                </a>
                <a href="{{ route('kontak') }}"
                    class="@if (request()->routeIs('kontak')) text-emerald-600 font-semibold @endif hover:text-emerald-500 transition-colors duration-200 w-full text-center py-2">
                    Kontak
                </a>
            </nav>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-10">
        @yield('content')
    </main>

    <footer class="bg-gradient-to-t from-emerald-900 via-emerald-800 to-emerald-700 text-white py-10 mt-20">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h2 class="text-2xl font-bold mb-3">Young<span class="text-emerald-300">Develop</span></h2>
                <p class="text-sm text-white/80 leading-relaxed">Membantu UMKM, startup, dan mahasiswa membangun solusi
                    digital yang inovatif dan berdampak nyata untuk pertumbuhan bisnis dan akademik.</p>
            </div>
            <div>
                <h2 class="text-lg font-semibold mb-3">Navigasi</h2>
                <ul class="space-y-2 text-white/80 text-sm">
                    <li><a href="{{ route('beranda') }}"
                            class="hover:text-white transition-colors duration-200">Beranda</a></li>
                    <li><a href="{{ route('tentang') }}"
                            class="hover:text-white transition-colors duration-200">Tentang Kami</a></li>
                    <li><a href="{{ route('layanan') }}"
                            class="hover:text-white transition-colors duration-200">Layanan</a></li>
                    <li><a href="{{ route('portofolio') }}"
                            class="hover:text-white transition-colors duration-200">Portofolio</a></li>
                    <li><a href="{{ route('kontak') }}"
                            class="hover:text-white transition-colors duration-200">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-lg font-semibold mb-3">Kontak Kami</h2>
                <ul class="space-y-2 text-white/80 text-sm">
                    <li><i class="fas fa-envelope mr-2"></i> Email: <a href="mailto:younggdevelop@gmail.com"
                            class="hover:text-white transition-colors duration-200">younggdevelop@gmail.com</a></li>
                    <li><i class="fab fa-instagram mr-2"></i> Instagram: <a
                            href="https://www.instagram.com/young.gdevelop/" target="_blank" rel="noopener noreferrer"
                            class="hover:text-white transition-colors duration-200">@young.gdevelop</a></li>
                    <li><i class="fab fa-whatsapp mr-2"></i> WhatsApp: <a href="https://wa.me/6289676482037"
                            target="_blank" rel="noopener noreferrer"
                            class="hover:text-white transition-colors duration-200">+62 896-7648-2037</a></li>
                    <li><i class="fas fa-map-marker-alt mr-2"></i> Lokasi: Katapang, Bandung, Jawa Barat 40971, Indonesia.</li>
                </ul>
                {{-- Social Media Icons --}}
                <div class="flex items-center gap-4 mt-4">
                    <a href="https://www.instagram.com/young.gdevelop/" target="_blank" rel="noopener noreferrer"
                        class="text-white hover:text-emerald-300 transition-colors duration-200">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 0C8.74 0 8.333.014 7.042.072 5.751.13 4.733.376 3.65 1.096A5.04 5.04 0 001.096 3.65C.376 4.733.13 5.751.072 7.042.014 8.333 0 8.74 0 12s.014 3.667.072 4.958c.058 1.291.304 2.309 1.024 3.391A5.04 5.04 0 003.65 22.904c1.082.72 2.099.966 3.391 1.024 1.291.058 1.69.072 4.958.072s3.667-.014 4.958-.072c1.291-.058 2.309-.304 3.391-1.024a5.04 5.04 0 002.554-2.554c.72-1.082.966-2.099 1.024-3.391.058-1.291.072-1.69.072-4.958s-.014-3.667-.072-4.958c-.058-1.291-.304-2.309-1.024-3.391A5.04 5.04 0 0020.35 1.096c-1.082-.72-2.099-.966-3.391-1.024C15.667.014 15.26 0 12 0zm0 2.16c3.2 0 3.58.01 4.85.071 1.17.054 1.838.243 2.298.423.46.18.882.428 1.25.795a3.344 3.344 0 01.795 1.25c.18.46.369 1.128.423 2.298.06 1.27.071 1.65.071 4.85s-.01 3.58-.071 4.85c-.054 1.17-.243 1.838-.423 2.298a3.344 3.344 0 01-.795 1.25c-.368.367-.8.614-1.25.795-.46.18-1.128.369-2.298.423-1.27.06-1.65.071-4.85.071s-3.58-.01-4.85-.071c-1.17-.054-1.838-.243-2.298-.423a3.344 3.344 0 01-1.25-.795c-.367-.368-.614-.8-.795-1.25-.18-.46-.369-1.128-.423-2.298-.06-1.27-.071-1.65-.071-4.85s.01-3.58.071-4.85c.054-1.17.243-1.838.423-2.298a3.344 3.344 0 01.795-1.25c.368-.367.8-.614 1.25-.795.46-.18 1.128-.369 2.298-.423 1.27-.06 1.65-.071 4.85-.071zM12 7a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm6.5-.75a1.25 1.25 0 11-2.5 0 1.25 1.25 0 012.5 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-10 text-center text-white/50 text-sm border-t border-white/20 pt-4">
            &copy; {{ date('Y') }} YoungDevelop. All rights reserved.
            <p class="mt-1">Built with <span class="text-red-500">&hearts;</span> in Bandung.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
                once: true, 
                offset: 120, 
            });

            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>
    @yield('scripts')
</body>

</html>
