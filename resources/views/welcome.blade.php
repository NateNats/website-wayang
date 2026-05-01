<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Museum Wayang Universitas Sanata Dharma - Koleksi wayang kulit terlengkap dengan lebih dari 10.000 koleksi wayang.">
    <title>Museum Wayang | Universitas Sanata Dharma</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- ===== NAVBAR ===== --}}
    <nav class="navbar" id="navbar">
        <a href="#" class="navbar-logo">wayang</a>

        <button class="menu-toggle" id="menuToggle" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <ul class="navbar-links" id="navLinks">
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="{{ route('kegiatan.index') }}">Kegiatan</a></li>
            <li><a href="{{ route('koleksi.index') }}">Koleksi</a></li>
            <li><a href="{{ route('about.index') }}">Tentang kami</a></li>
            <li><a href="#lokasi">Kontak</a></li>
        </ul>
    </nav>

    {{-- ===== HERO SECTION ===== --}}
    <section class="hero" id="beranda">
        <div class="hero-bg" style="background-image: url('{{ asset('images/museum-wayang.jpg') }}');"></div>
        <div class="hero-content">
            <h1 class="hero-title">Museum Wayang</h1>
            <p class="hero-subtitle">Universitas Sanata Dharma</p>
        </div>

        <div class="scroll-indicator">
            <div class="scroll-mouse"></div>
            <span class="scroll-text">Scroll</span>
        </div>
    </section>

    {{-- ===== TENTANG KOLEKSI WAYANG ===== --}}
    <section class="tentang" id="tentang">
        <div class="tentang-inner reveal">
            <div class="tentang-text">
                <h2>Tentang Koleksi Wayang</h2>
                <p>
                    Seni pewayangan adalah harmoni antara cahaya, bayangan,
                    dan cerita. Melalui siluet yang diproyeksikan ke atas kelir, wayang
                    kulit menceritakan epik kehidupan kuno yang sarat akan makna
                    spiritual dan etika. Mahakarya budaya ini tidak hanya bertahan
                    menembus zaman, tetapi juga mendapat penghormatan global saat
                    UNESCO menetapkannya sebagai Warisan Budaya Takbenda.
                    Koleksi ini merayakan detail pahatan dan kekayaan cerita dari setiap
                    tokoh pewayangan.
                </p>
                <a href="#" class="tentang-link">
                    Lihat selengkapnya
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
            <div class="tentang-images">
                <img src="{{ asset('images/wayang-show-1.jpg') }}" alt="Pertunjukan Wayang Kulit" loading="lazy">
                <img src="{{ asset('images/wayang-show-2.jpg') }}" alt="Koleksi Wayang Kulit" loading="lazy">
            </div>
        </div>
    </section>

    {{-- ===== JUMLAH WAYANG COUNTER ===== --}}
    <section class="counter-section" style="background-image: url('{{ asset('images/hero-bg.jpg') }}');">
        <div class="counter-inner reveal">
            <div>
                <div class="counter-number" data-target="10000">0</div>
                <div class="counter-label">Jumlah Wayang</div>
            </div>
        </div>
    </section>

    {{-- ===== KOLEKSI WAYANG ===== --}}
    <section class="koleksi" id="koleksi">
        <div class="koleksi-header reveal">
            <h2>Koleksi Wayang</h2>
            <a href="{{ route('koleksi.index') }}" class="koleksi-more">
                Lihat selengkapnya
                <span class="koleksi-more-arrow">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 18l6-6-6-6"/>
                    </svg>
                </span>
            </a>
        </div>
        <div class="koleksi-wayang">

        </div>
    </section>

    {{-- ===== LOKASI ===== --}}
    <section class="lokasi" id="lokasi">
        <div class="lokasi-inner reveal">
            <h2>Lokasi ke Rumah Koleksi</h2>
            <div class="lokasi-map">
                {{-- Replace with actual Google Maps embed when ready --}}
                <div class="lokasi-placeholder">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                    <p>Peta lokasi akan segera tersedia</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== FOOTER ===== --}}
    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-left">Universitas Sanata Dharma</div>
            <div class="footer-right">Museum Koleksi wayang</div>
        </div>
    </footer>

</body>
</html>
