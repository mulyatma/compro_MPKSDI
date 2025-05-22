@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative h-[300px] bg-fixed bg-cover bg-center text-white flex items-center justify-center" style="background-image: url('{{ asset('storage/' . $news->image) }}');">
    <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
    <div class="relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold">{{ $news->title }}</h1>
    </div>
</section>

<!-- Detail Section -->
<section class="py-16 bg-gray-50 text-gray-800">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full h-[300px] object-cover rounded mb-6">

            <div class="prose prose-lg max-w-none">
                {!! $news->content !!}
            </div>

            <a href="{{ route('news') }}" class="mt-8 inline-block text-blue-600 hover:text-blue-800 transition font-medium">
                ← Kembali ke Berita
            </a>
        </div>
    </div>
</section>
@endsection