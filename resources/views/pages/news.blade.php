@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen bg-fixed bg-cover bg-center text-white flex items-center justify-center" style="background-image: url('images/bg3.webp');">
    <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
    <div class="relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Berita Terkini MPKSDI</h1>
        <p class="text-lg md:text-xl">Menginspirasi, Mencerahkan, dan Meneguhkan Ideologi</p>
    </div>
</section>

<!-- Berita Section -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8">
            @foreach ($news as $item)
            <!-- Card 1 -->
            <div class="transform transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-xl animate-fadeInUp animate-duration-1000 rounded-lg outline outline-1 outline-gray-300">
                <a href="{{ route('news.show', $item->slug) }}" class=" bg-white rounded-lg shadow overflow-hidden h-full">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-5">
                        <h5 class="text-xl font-semibold mb-2 flex items-center"></i>{{ $item->title }}</h5>
                        <p class="text-gray-700">{{ Str::limit(strip_tags($item->content), 120) }}</p>
                        <a href="{{ route('news.show', $item->slug) }}" class="text-blue-600 font-semibold mt-3 inline-block">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection