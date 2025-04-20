{{-- Menggunakan layout utama 'frontend.blade.php' --}}
@extends('layouts.frontend')

{{-- Mengatur judul spesifik untuk halaman ini --}}
@section('title', 'Selamat Datang di Systema HIMSI')

{{-- Memulai bagian konten yang akan dimasukkan ke @yield('content') di layout --}}
@section('content')

    {{-- ================================== --}}
    {{--        AWAL BAGIAN HERO SECTION       --}}
    {{-- ================================== --}}
    <div class="hero-section text-white mb-4"
         style="background-image: url('{{ asset('images/Mockup Himsi.jpg') }}'); background-size: cover; background-position: center; min-height: 400px; display: flex; align-items: center; justify-content: center; position: relative;">
        {{-- Overlay Gelap --}}
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(49, 49, 49, 0.705);"></div>
        {{-- Konten di Tengah Hero --}}
        <div class="container text-center" style="position: relative; z-index: 1;">
            <img src="{{ asset('images/HIMSI LOGO.png') }}" alt="HIMSI Logo" style="max-height: 80px; margin-bottom: 1rem;">
            <h1 class="display-4 fw-bold">SYSTEMA HIMSI</h1>
            <p class="lead mt-3">Systema HIMSI adalah platform digital karya mahasiswa Sistem Informasi Telkom University Jakarta. Temukan produk menarik seperti merchandise, makanan, dan minuman. Dukung UMKM kampus dan gerakan ekonomi digital bersama kami!</p>
            <a href="#pilihan-produk" class="btn btn-primary btn-lg mt-3">Beli Sekarang</a>
        </div>
    </div>
    {{-- ================================== --}}
    {{--        AKHIR BAGIAN HERO SECTION      --}}
    {{-- ================================== --}}


    {{-- Container untuk sisa konten halaman --}}
    <div class="container mt-5">

        {{-- ================================== --}}
        {{--       AWAL BAGIAN TENTANG KAMI      --}}
        {{-- ================================== --}}
        <hr>
        <div class="container py-4 mt-5 mb-5" style="background-color: #C4E5FC; border-radius: 8px;">
            <h2 class="text-center mb-4">TENTANG KAMI</h2>
            <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <p>
                Selamat datang di Systema HIMSI! Kami adalah platform resmi dari Himpunan Mahasiswa Sistem Informasi untuk menyediakan berbagai kebutuhan mahasiswa, mulai dari merchandise khas HIMSI hingga pilihan makanan dan minuman untuk menemani aktivitas perkuliahan Anda. Kami berkomitmen untuk memberikan produk berkualitas dengan harga terjangkau bagi seluruh anggota HIMSI dan komunitas kampus.
                </p>
            </div>
            </div>
        </div>
        {{-- ================================== --}}
        {{--       AKHIR BAGIAN TENTANG KAMI     --}}
        {{-- ================================== --}}


        {{-- ================================== --}}
        {{--    AWAL BAGIAN PRODUK (FEATURED)   --}}
        {{-- ================================== --}}
        <div class="mt-5 mb-5">
            <hr>
            <div class="container py-4" style="background-color: #ffffff; border-radius: 8px; max-width: 900px;">
                <h2 class="text-center mb-4">PRODUK</h2>
                <div class="row justify-content-center">
                    {{-- Card 1: Lanyard (Contoh) --}}
                    <div class="col-md-5 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/Mockup Lanyard.jpg') }}" class="card-img-top" alt="Lanyard HIMSI" style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Lanyard HIMSI</h5>
                                <p class="card-text">Lanyard eksklusif multifungsi dengan kualitas terbaik.</p>
                                <p class="card-text mt-auto"><strong>Rp 14.000</strong></p>
                                <a href="#" class="btn btn-outline-primary mt-2">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    {{-- Card 2: Keychain (Contoh) --}}
                    <div class="col-md-5 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/Keychain.png') }}" class="card-img-top" alt="Keychain HIMSI" style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Keychain HIMSI</h5>
                                <p class="card-text">Gantungan kunci akrilik dengan logo HIMSI.</p>
                                <p class="card-text mt-auto"><strong>Rp 10.000</strong></p>
                                <a href="#" class="btn btn-outline-primary mt-2">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{-- ================================== --}}
        {{--     AKHIR BAGIAN PRODUK (FEATURED)  --}}
        {{-- ================================== --}}


        {{-- ================================== --}}
        {{--    AWAL BAGIAN PILIHAN PRODUK (GRID) --}}
        {{-- ================================== --}}
        <div id="pilihan-produk" class="mt-5">
            <hr>
            <div class="container py-4 mt-5" style="background-color: #F0EBE1; border-radius: 16px; max-width: 900px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <h2 class="text-center mb-3 fw-bold" style="font-size: 1.75rem;">PILIHAN PRODUK SYSTEMA HIMSI</h2>
                <p class="text-center mb-4" style="font-size: 1rem; color: #6c757d;">Silahkan dilihat dulu kalau cocok cus aja!</p>
                <div class="d-flex justify-content-center gap-3">
                    <button class="btn btn-primary px-4 py-2 active" style="border-radius: 20px;">ALL</button>
                    <button class="btn btn-outline-secondary px-4 py-2" style="border-radius: 20px;">MARCHANDISE</button>
                    <button class="btn btn-outline-secondary px-4 py-2" style="border-radius: 20px;">MAKANAN</button>
                    <button class="btn btn-outline-secondary px-4 py-2" style="border-radius: 20px;">MINUMAN</button>
                </div>
            </div>
            <div class="mt-4 row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                {{-- Produk 1: Lanyard --}}
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/Mockup Lanyard.jpg') }}" class="card-img-top" alt="..." style="height: 180px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Lanyard HIMSI</h5>
                            <p class="card-text"><strong>Rp 14.000</strong></pE>
                            <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                        </div>
                    </div>
                </div>
                {{-- Produk 2: Keychain --}}
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/Keychain.png') }}" class="card-img-top" alt="..." style="height: 180px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Keychain HIMSI</h5>
                            <p class="card-text"><strong>Rp 10.000</strong></p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                        </div>
                    </div>
                </div>
                {{-- Produk 3: Sticker --}}
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/Stiker.png') }}" class="card-img-top" alt="..." style="height: 180px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Sticker HIMSI</h5>
                            <p class="card-text"><strong>Rp 5.000</strong></p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                        </div>
                    </div>
                </div>
                {{-- Produk 4: Ayam Suwir --}}
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/Ayam Suwir.jpg') }}" class="card-img-top" alt="..." style="height: 180px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Ayam Suwir Pedas</h5>
                            <p class="card-text"><strong>Rp 15.000</strong></p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                        </div>
                    </div>
                </div>
                {{-- Produk 5: Ayam Katsu --}}
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/chicken-katsu.jpeg') }}" class="card-img-top" alt="..." style="height: 180px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Ayam Katsu Komplit</h5>
                            <p class="card-text"><strong>Rp 15.000</strong></p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                        </div>
                    </div>
                </div>
                {{-- Produk 6: Pop Ice --}}
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/Pop Ice.jpg') }}" class="card-img-top" alt="..." style="height: 180px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Pop Ice Aneka Rasa</h5>
                            <p class="card-text"><strong>Rp 7.000</strong></p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div> {{-- End row --}}
        </div>
        {{-- ================================== --}}
        {{--    AKHIR BAGIAN PILIHAN PRODUK (GRID) --}}
{{-- ================================== --}}


        {{-- ================================== --}}
        {{--     AWAL BAGIAN KELUARGA HIMSI     --}}
        {{-- ================================== --}}
        <div class="mt-5">
            <hr>
            <h2 class="text-center mb-4">KELUARGA HIMSI</h2>
            <div class="row align-items-center g-3"> {{-- g-3 for gutters --}}
                {{-- Kolom Kiri (Gambar Utama) --}}
                <div class="col-md-7">
                    {{-- Ganti dengan path gambar utama --}}
                    <img src="{{ asset('images/Sertijab.jpg') }}" class="img-fluid rounded shadow-sm" alt="Kegiatan HIMSI 1">
                </div>
                {{-- Kolom Kanan (Dua Gambar Kecil) --}}
                <div class="col-md-5">
                    <div class="row g-3">
                        <div class="col-12">
                             {{-- Ganti dengan path gambar kedua --}}
                            <img src="{{ asset('images/Hambali.jpg') }}" class="img-fluid rounded shadow-sm" alt="Kegiatan HIMSI 2">
                        </div>
                        <div class="col-12">
                             {{-- Ganti dengan path gambar ketiga --}}
                             <img src="{{ asset('images/Simfoni.jpeg') }}" class="img-fluid rounded shadow-sm" alt="Kegiatan HIMSI 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ================================== --}}
        {{--     AKHIR BAGIAN KELUARGA HIMSI    --}}
        {{-- ================================== --}}


        {{-- ================================== --}}
        {{--      AWAL BAGIAN REVIEW PRODUK     --}}
        {{-- ================================== --}}
        <div class="mt-5">
             <hr>
             <h2 class="text-center mb-4">REVIEW PRODUK</h2>
             <div class="row row-cols-1 row-cols-md-3 g-4">
                 {{-- Review 1 --}}
                 <div class="col">
                     <div class="card h-100 shadow-sm">
                         <div class="card-body">
                             <figure>
                                 <blockquote class="blockquote">
                                     <p>"Lanyardnya keren banget! Bahannya bagus dan desainnya oke punya. Pengiriman juga cepat."</p>
                                 </blockquote>
                                 <figcaption class="blockquote-footer">
                                     Andi S. <cite title="Source Title">(Mahasiswa Teknik Informatika)</cite>
                                 </figcaption>
                             </figure>
                         </div>
                     </div>
                 </div>
                 {{-- Review 2 --}}
                  <div class="col">
                     <div class="card h-100 shadow-sm">
                         <div class="card-body">
                             <figure>
                                 <blockquote class="blockquote">
                                     <p>"Ayam katsunya juara! Porsinya pas, rasanya enak, harganya juga ramah kantong mahasiswa. Recommended!"</p>
                                 </blockquote>
                                 <figcaption class="blockquote-footer">
                                     Citra W. <cite title="Source Title">(Mahasiswa Sistem Informasi)</cite>
                                 </figcaption>
                             </figure>
                         </div>
                     </div>
                 </div>
                 {{-- Review 3 --}}
                  <div class="col">
                     <div class="card h-100 shadow-sm">
                         <div class="card-body">
                             <figure>
                                 <blockquote class="blockquote">
                                     <p>"Stickernya lucu-lucu, kualitasnya juga bagus, nempel kuat di laptop. Beli banyak buat koleksi."</p>
                                 </blockquote>
                                 <figcaption class="blockquote-footer">
                                     Budi P. <cite title="Source Title">(Mahasiswa Desain Grafis)</cite>
                                 </figcaption>
                             </figure>
                         </div>
                     </div>
                 </div>
             </div>
        </div>
        {{-- ================================== --}}
        {{--      AKHIR BAGIAN REVIEW PRODUK    --}}
        {{-- ================================== --}}


        {{-- Beri sedikit spasi sebelum footer dari layout --}}
        <div style="height: 50px;"></div>

    </div> {{-- End container utama untuk sisa konten --}}

@endsection
{{-- Mengakhiri bagian konten --}}
