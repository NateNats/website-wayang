<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Koleksi Museum Wayang - Jelajahi koleksi artefak dan karya seni museum.">
    <title>Koleksi Museum | Museum Wayang</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- ===== NAVBAR ===== --}}
    <nav class="navbar scrolled" id="navbar">
        <a href="{{ url('/') }}" class="navbar-logo">wayang</a>

        <button class="menu-toggle" id="menuToggle" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <ul class="navbar-links" id="navLinks">
            <li><a href="{{ url('/') }}#beranda">Beranda</a></li>
            <li><a href="{{ url('/') }}#tentang">Kegiatan</a></li>
            <li><a href="{{ route('koleksi.index') }}" style="color: var(--color-gold);">Koleksi</a></li>
            <li><a href="{{ url('/') }}#tentang">Tentang kami</a></li>
            <li><a href="{{ url('/') }}#lokasi">Kontak</a></li>
        </ul>
    </nav>

    {{-- ===== KOLEKSI MUSEUM (BROWSING) ===== --}}
    <section class="koleksi-museum" id="koleksi-museum" style="padding-top: 7rem;">
        <div class="koleksi-museum-inner">
            <h2 class="koleksi-museum-title">Koleksi Museum</h2>

            {{-- Filter & Search --}}
            <form action="{{ route('koleksi.index') }}" method="GET" class="koleksi-museum-filters">
                <div class="koleksi-museum-dropdowns">
                    <select class="koleksi-filter-select" name="jenis" id="filterJenis" onchange="this.form.submit()">
                        <option value="">Semua Jenis</option>
                        @foreach($jenisList as $j)
                            <option value="{{ $j }}" {{ request('jenis') == $j ? 'selected' : '' }}>{{ $j }}</option>
                        @endforeach
                    </select>
                    <select class="koleksi-filter-select" name="bahan" id="filterBahan" onchange="this.form.submit()">
                        <option value="">Semua Bahan</option>
                        @foreach($bahanList as $b)
                            <option value="{{ $b }}" {{ request('bahan') == $b ? 'selected' : '' }}>{{ $b }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="koleksi-museum-search">
                    <input type="text" class="koleksi-search-input" name="q" id="koleksiSearch" placeholder="Pencarian" value="{{ request('q') }}">
                    <button type="submit" class="koleksi-search-btn" id="koleksiSearchBtn">Pencarian</button>
                </div>
            </form>

            {{-- Cards Grid --}}
            <div class="koleksi-museum-grid">
                @forelse($koleksis as $koleksi)
                    <div class="museum-card">
                        <div class="museum-card-img-wrap">
                            @if($koleksi->gambar)
                                <img src="{{ asset('storage/' . $koleksi->gambar) }}" alt="{{ $koleksi->nama }}" loading="lazy">
                            @else
                                <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:#a0aec0;font-size:0.85rem;">
                                    Tidak ada gambar
                                </div>
                            @endif
                        </div>
                        <div class="museum-card-body">
                            <h3><a href="#">{{ $koleksi->nama }}</a></h3>
                            <p>{{ $koleksi->deskripsi }}</p>
                            <a href="#" class="museum-card-link">Baca selengkapnya</a>
                        </div>
                    </div>
                @empty
                    <div style="grid-column: 1 / -1; text-align: center; padding: 3rem 1rem; color: #a0aec0;">
                        <p>Belum ada koleksi yang tersedia.</p>
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            @if($koleksis->hasPages())
                <div class="koleksi-museum-pagination">
                    {{ $koleksis->links('vendor.pagination.simple-tailwind') }}
                </div>
            @endif
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
