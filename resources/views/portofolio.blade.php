@extends('layouts.app')

@section('title', 'Portofolio Proyek - YoungDevelop')

@section('description', 'Jelajahi portofolio proyek digital YoungDevelop: website bisnis, e-commerce, aplikasi kustom, dan solusi inovatif lainnya untuk berbagai industri. Temukan inspirasi untuk proyek Anda.')
@section('keywords', 'portofolio web developer, contoh website, website bisnis, website startup, aplikasi kustom, desain ui ux, studi kasus, youngdevelop project')

@section('content')

<section class="max-w-7xl mx-auto px-4 py-16 md:py-20 overflow-hidden">

    {{-- Hero Section --}}
    <div class="text-center mb-16 md:mb-24">
        <h1 class="text-4xl md:text-6xl font-extrabold text-emerald-700 leading-tight mb-6" data-aos="fade-up" data-aos-duration="1000">
            Jejak Karya Kami: Inovasi yang Berbicara
        </h1>
        <p class="text-gray-700 text-lg md:text-xl max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            Setiap proyek dalam portofolio kami adalah bukti komitmen YoungDevelop untuk menghadirkan solusi digital yang tidak hanya fungsional, tetapi juga memberikan dampak nyata dan nilai strategis bagi klien kami di berbagai industri.
        </p>
    </div>

    {{-- Filter / Kategori --}}
    <div class="mb-16 md:mb-24">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-emerald-700 mb-8" data-aos="fade-up">Jelajahi Proyek Berdasarkan Kategori</h2>
        <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
            <button class="filter-btn bg-emerald-600 hover:bg-emerald-700 text-white py-2 px-6 rounded-full font-semibold transition-all shadow-md data-[active='true']:bg-emerald-700 data-[active='true']:ring-2 data-[active='true']:ring-emerald-500" data-category="all" data-active="true">Semua Proyek</button>
            <button class="filter-btn bg-gray-200 hover:bg-emerald-100 text-gray-800 py-2 px-6 rounded-full font-semibold transition-all data-[active='true']:bg-emerald-700 data-[active='true']:text-white data-[active='true']:ring-2 data-[active='true']:ring-emerald-500" data-category="Institusi Pendidikan">Institusi Pendidikan</button>
            <button class="filter-btn bg-gray-200 hover:bg-emerald-100 text-gray-800 py-2 px-6 rounded-full font-semibold transition-all data-[active='true']:bg-emerald-700 data-[active='true']:text-white data-[active='true']:ring-2 data-[active='true']:ring-emerald-500" data-category="Startup">Startup</button>
            <button class="filter-btn bg-gray-200 hover:bg-emerald-100 text-gray-800 py-2 px-6 rounded-full font-semibold transition-all data-[active='true']:bg-emerald-700 data-[active='true']:text-white data-[active='true']:ring-2 data-[active='true']:ring-emerald-500" data-category="UMKM">UMKM</button>
            <button class="filter-btn bg-gray-200 hover:bg-emerald-100 text-gray-800 py-2 px-6 rounded-full font-semibold transition-all data-[active='true']:bg-emerald-700 data-[active='true']:text-white data-[active='true']:ring-2 data-[active='true']:ring-emerald-500" data-category="Akademis">Akademis</button>
        </div>
    </div>

    {{-- Daftar Proyek --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10" id="portfolio-grid">
        @foreach($projects as $index => $project)
        <a href="{{ $project['live_url'] ?? '#' }}" target="_blank" rel="noopener noreferrer" 
           class="portfolio-item group bg-white shadow-lg rounded-xl overflow-hidden border border-emerald-100 transform hover:scale-[1.02] transition-all duration-300 block" 
           data-category="{{ $project['category'] }}" data-aos="fade-up" data-aos-delay="{{ 100 * ($index % 3) }}">
            
            <img src="{{ asset('images/portofolio/' . $project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-56 object-cover object-top border-b border-gray-200">
            <div class="p-6">
                <h3 class="text-xl font-bold text-emerald-700 mb-2">{{ $project['title'] }}</h3>
                <p class="text-sm text-emerald-500 font-medium mb-3">Kategori: {{ $project['category'] ?? 'Umum' }}</p>
                <p class="text-gray-600 leading-relaxed mb-4">{{ $project['short_description'] }}</p>
                <span class="text-emerald-600 group-hover:text-emerald-800 font-semibold inline-flex items-center">
                    Kunjungi Website
                    <svg class="ml-2 w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </span>
            </div>
        </a>
        @endforeach
    </div>

    @if(empty($projects))
        <p class="text-center text-gray-500 text-lg mt-12" data-aos="fade-up" data-aos-delay="400">Belum ada proyek dalam portofolio. Nantikan karya-karya kami!</p>
    @endif

    {{-- Call to Action --}}
    <div class="bg-gradient-to-br from-emerald-600 to-emerald-800 text-white rounded-xl p-10 md:p-16 text-center shadow-2xl mt-16 md:mt-24" data-aos="zoom-in" data-aos-duration="1000">
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

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioGrid = document.getElementById('portfolio-grid');
        const portfolioItems = portfolioGrid.querySelectorAll('.portfolio-item');

        const style = document.createElement('style');
        style.innerHTML = `
            .portfolio-item {
                opacity: 0;
                transform: translateY(20px);
                transition: opacity 0.3s ease-out, transform 0.3s ease-out;
            }
        `;
        document.head.appendChild(style);

        const filterPortfolio = (selectedCategory) => {
            portfolioItems.forEach(item => {
                const itemCategory = item.dataset.category;

                if (selectedCategory === 'all' || itemCategory === selectedCategory) {
                    item.style.display = 'block';
                    setTimeout(() => { 
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    setTimeout(() => { 
                        item.style.display = 'none';
                    }, 300);
                }
            });
            setTimeout(() => AOS.refresh(), 400); 
        };

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                filterButtons.forEach(btn => {
                    btn.classList.remove('bg-emerald-600', 'hover:bg-emerald-700', 'text-white');
                    btn.classList.add('bg-gray-200', 'hover:bg-emerald-100', 'text-gray-800');
                    btn.dataset.active = 'false';
                });

                this.classList.remove('bg-gray-200', 'hover:bg-emerald-100', 'text-gray-800');
                this.classList.add('bg-emerald-600', 'hover:bg-emerald-700', 'text-white');
                this.dataset.active = 'true';

                const category = this.dataset.category;
                filterPortfolio(category);
            });
        });

        AOS.init({
            duration: 800, 
            once: true,    
            offset: 100,   
        });

        document.querySelector('.filter-btn[data-category="all"]').click();
    });
</script>
@endsection