@extends('layouts.app')

@section('content')
<div>
    <header class="relative h-screen bg-center bg-cover flex items-center justify-center text-center text-white" style="background-image: url('images/bg.jpg');">
        <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
        <div class="relative z-10 animate-fadeInUp px-4">
            <h1 class="text-4xl md:text-5xl font-bold">Selamat Datang di MPK-SDI PDM Banyumas</h1>
            <p class="mt-4 text-lg md:text-xl">Membina Kader, Membangun Peradaban</p>
        </div>
    </header>

    <!-- Tentang Kami -->
    <section id="tentang" class="py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-center text-3xl font-semibold mb-6">Tentang Kami</h2>
            <p class="text-center mb-10 max-w-3xl mx-auto">
                Majelis Pembinaan Kader dan Sumber Daya Insani (MPKSDI) PDM Banyumas adalah lembaga di bawah Persyarikatan Muhammadiyah yang bertugas untuk membina, mengembangkan, dan memperkuat kualitas kader serta sumber daya manusia, demi terwujudnya masyarakat Islam yang sebenar-benarnya.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                @foreach ($aboutUs as $item)
                <div class="bg-white shadow-sm rounded-lg p-6 transition transform hover:scale-105 hover:shadow-xl">
                    <h5 class="font-semibold text-lg mb-2">{{ $item->title }}</h5>
                    <p>{{ $item->description }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Kontak & Sosial Media -->
    <section class="bg-[#1d2c44] text-white py-12 text-center px-4">
        <div class="container mx-auto">
            <h5 class="text-xl font-semibold mb-4">Hubungi Kami</h5>
            <p class="mb-6">Email: {{ $contacts['contact_email']->value ?? '-' }} | Telp: {{ $contacts['contact_phone']->value ?? '-' }}</p>

            <button class="bg-white text-black font-semibold px-5 py-2 rounded hover:bg-gray-300 transition">Sosial Media</button>

            <div class="mt-6 flex justify-center gap-6 text-white">
                @if (!empty($contacts['contact_facebook']->value))
                <a href="{{ $contacts['contact_facebook']->value }}" target="_blank" class="transform transition hover:scale-110 text-white text-2xl">
                    <i class="fab fa-facebook-square"></i>
                </a>
                @endif
                @if (!empty($contacts['contact_instagram']->value))
                <a href="{{ $contacts['contact_instagram']->value }}" target="_blank" class="transform transition hover:scale-110 text-white text-2xl">
                    <i class="fab fa-instagram"></i>
                </a>
                @endif

                @if (!empty($contacts['contact_youtube']->value))
                <a href="{{ $contacts['contact_youtube']->value }}" target="_blank" class="transform transition hover:scale-110 text-white text-2xl">
                    <i class="fab fa-youtube"></i>
                </a>
                @endif

                @if (!empty($contacts['contact_whatsapp']->value))
                <a href="{{ $contacts['contact_whatsapp']->value }}" target="_blank" class="transform transition hover:scale-110 text-white text-2xl">
                    <i class="fab fa-whatsapp"></i>
                </a>
                @endif
            </div>
        </div>
    </section>

</div>
@endsection