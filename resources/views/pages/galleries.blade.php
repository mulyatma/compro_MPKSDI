@extends('layouts.app')

@section('content')
<header class="relative flex items-center justify-center text-center h-screen pb-[60px] text-white bg-cover bg-center bg-fixed" style="background-image: url('images/bg2.webp');">
    <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
    <div class="container mx-auto px-4 relative z-10">
        <h1 class="text-4xl font-bold animate__animated animate__fadeInDown" data-aos="fade-down">Galeri Program Kerja</h1>
        <p class="text-lg animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="200">Dokumentasi kegiatan MPKSDI PDM Banyumas berdasarkan kategori program</p>
    </div>
</header>

<!-- Filter Buttons -->
<div class="container mx-auto text-center my-8 px-4">
    <button class="filter-btn bg-[#137384] text-white px-4 py-2 rounded m-1" data-filter="*">Semua</button>
    @foreach($categories as $category)
    <button class="border border-[#137384] text-[#137384] hover:bg-[#137384] hover:text-white px-4 py-2 rounded m-1 filter-btn" data-filter=".{{ $category->name }}">{{ $category->name }}</button>
    @endforeach
</div>

<!-- Galeri Section -->
<section class="py-10 pb-20">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap gap-6 justify-center" id="gallery">
            @foreach ($galleries as $gallery)
            <div class="w-full sm:w-[calc(33.333%-1.5rem)] {{ $gallery->category->name }}">
                <div class="overflow-hidden rounded-lg shadow transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="Program 1" class="w-full h-[220px] object-cover">
                    <div class="bg-gray-100 p-4 h-[150px]">
                        <h5 class="font-semibold mb-2">{{ $gallery->title }}</h5>
                        <p class="text-sm">{{ $gallery->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Filter Script -->
<script>
    const buttons = document.querySelectorAll('.filter-btn');
    const items = document.querySelectorAll('#gallery > div');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');

            // Atur galeri item berdasarkan filter
            items.forEach(item => {
                if (filter === '*' || item.classList.contains(filter.substring(1))) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });

            // Reset semua tombol
            buttons.forEach(btn => {
                btn.classList.remove('bg-[#137384]', 'text-white');
                btn.classList.add('border', 'border-[#137384]', 'text-[#137384]');
            });

            // Aktifkan tombol saat ini
            this.classList.add('bg-[#137384]', 'text-white');
            this.classList.remove('border', 'border-[#137384]', 'text-[#137384]');
        });
    });
</script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        offset: 100,
        once: true
    });
</script>


@endsection