@extends('layouts.app')

@section('content')
<header class="relative bg-cover bg-center bg-fixed min-h-[60vh] pt-40 pb-16 text-white" style="background-image: url('images/bg2.webp');">
    <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
    <div class="container mx-auto relative z-10 text-center animate-fadeInUp">
        <h1 class="text-4xl font-bold mb-2" data-aos="fade-down">Profil MPKSDI PDM Banyumas</h1>
        <p class="text-lg" data-aos="fade-up" data-aos-delay="200">Membina Kader, Menguatkan Peradaban</p>
    </div>
</header>

<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-10" data-aos="fade-up">Tentang Majelis</h2>
        <p class="text-center max-w-3xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="100">
            Majelis Pembinaan Kader dan Sumber Daya Insani (MPKSDI) PDM Banyumas adalah lembaga strategis di lingkungan Persyarikatan Muhammadiyah Banyumas yang berfokus pada pengkaderan dan pengembangan potensi sumber daya manusia guna mewujudkan kader-kader unggul dan profesional.
        </p>

        <div class="grid md:grid-cols-3 gap-6 text-center">
            <div class="bg-white rounded shadow p-6" data-aos="zoom-in" data-aos-delay="200">
                <h5 class="text-xl font-semibold mb-4">Visi</h5>
                @foreach ($visions as $vision)
                <p>{{ $vision->value }}</p>
                @endforeach
            </div>
            <div class="bg-white rounded shadow p-6" data-aos="zoom-in" data-aos-delay="300">
                <h5 class="text-xl font-semibold mb-4">Misi</h5>
                <ul class="space-y-2 text-left">
                    @foreach ($missions as $mission)
                    <li>✔️ {{ $mission->content }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="bg-white rounded shadow p-6" data-aos="zoom-in" data-aos-delay="400">
                <h5 class="text-xl font-semibold mb-4">Tujuan</h5>
                @foreach ($goals as $goal)
                <p>{{ $goal->value }}</p>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-xl font-semibold text-center leading-relaxed mb-10" data-aos="fade-up">
            ANGGOTA PIMPINAN<br>
            MAJELIS PEMBINAAN KADER DAN SUMBER DAYA INSANI<br>
            PIMPINAN DAERAH MUHAMMADIYAH BANYUMAS<br>
            MASA JABATAN 2022-2027
        </h2>

        <div class="flex justify-center">
            <div class="w-full max-w-md text-center">
                <div class="gallery-item">
                    <img
                        src="{{ asset('storage/' . $structures->value) }}"
                        class="mx-auto max-w-[450px] w-full"
                        data-aos="fade-up"
                        data-aos-delay="150"
                        alt="Struktural" />
                </div>
            </div>
        </div>

    </div>
</section>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        offset: 100,
        once: true
    });
</script>
@endsection