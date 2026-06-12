@extends('layouts.museum')
@section('title', 'Koleksi Wayang — Museum Wayang USD')

@section('content')

  <!-- PAGE HERO -->
  <section class="page-hero px-8 md:px-20">
    <div class="absolute top-32 right-20 ornament-cross hidden md:block"></div>
    <div class="max-w-7xl mx-auto grid md:grid-cols-12 gap-10 items-end">
      <div class="md:col-span-7 reveal">
        <h1 class="font-display text-gold text-[clamp(56px,8vw,120px)] leading-[0.95] mt-5">
          Koleksi <em class="not-italic text-cream">Wayang.</em>
        </h1>
        <p class="mt-8 max-w-xl text-cream/65 leading-[1.85]">
          Setiap tokoh dipahat dari kulit kerbau pilihan, diwarnai dengan
          tinta alam, dan disungging hingga tembus cahaya. Telusuri ribuan
          karakter yang membentuk semesta cerita pewayangan Nusantara.
        </p>
      </div>
      <div class="md:col-span-5 reveal" style="--rd:200ms">
        <div class="grid grid-cols-3 border-t border-b hairline divide-x divide-[rgba(201,163,90,0.18)]">
          <div class="px-5 py-6 text-center">
            <p class="font-display text-3xl text-gold number-tabular">10K+</p>
            <p class="text-[9px] uppercase tracking-[0.3em] text-cream/45 mt-2">Koleksi</p>
          </div>
          <div class="px-5 py-6 text-center">
            <p class="font-display text-3xl text-gold number-tabular">14</p>
            <p class="text-[9px] uppercase tracking-[0.3em] text-cream/45 mt-2">Daerah Asal</p>
          </div>
          <div class="px-5 py-6 text-center">
            <p class="font-display text-3xl text-gold number-tabular">VI</p>
            <p class="text-[9px] uppercase tracking-[0.3em] text-cream/45 mt-2">Kategori</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FILTER BAR -->
  <section class="px-8 md:px-20 py-12 border-b hairline">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-center justify-between gap-6">
      <!-- Jenis category chips -->
      <ul class="flex flex-wrap items-center gap-x-8 gap-y-3 text-[11px] uppercase tracking-[0.3em]">
        <li>
          <a href="{{ route('koleksi.index', request()->only('q')) }}"
             class="{{ !request('jenis') ? 'text-gold border-b border-gold pb-1' : 'text-cream/55 hover:text-gold transition' }}">
            Semua
          </a>
        </li>
        @foreach ($jenisList as $j)
        <li>
          <a href="{{ route('koleksi.index', array_merge(request()->only('q'), ['jenis' => $j])) }}"
             class="{{ request('jenis') == $j ? 'text-gold border-b border-gold pb-1' : 'text-cream/55 hover:text-gold transition' }}">
            {{ $j }}
          </a>
        </li>
        @endforeach
      </ul>
      <!-- Search -->
      <form method="GET" action="{{ route('koleksi.index') }}" class="flex items-center gap-3 border hairline px-4 py-2 min-w-[260px]">
        @if (request('jenis'))
          <input type="hidden" name="jenis" value="{{ request('jenis') }}">
        @endif
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" class="text-gold/70 shrink-0">
          <circle cx="6" cy="6" r="5" stroke="currentColor"/>
          <path d="M10 10l3 3" stroke="currentColor" stroke-linecap="round"/>
        </svg>
        <input class="bg-transparent text-sm outline-none flex-1 placeholder:text-cream/35 text-cream"
               name="q" value="{{ request('q') }}"
               placeholder="Cari nama tokoh — mis. Arjuna" />
      </form>
    </div>
  </section>

  <!-- COLLECTION GRID -->
  <section class="px-8 md:px-20 py-20">
    <div class="max-w-7xl mx-auto">
      <div class="flex items-baseline justify-between mb-10">
        <p class="eyebrow">Plate I — Tokoh Pilihan</p>
        <p class="font-mono text-[10px] text-cream/45 uppercase tracking-[0.3em]">
          Halaman {{ $koleksis->currentPage() }} / {{ $koleksis->lastPage() }}
        </p>
      </div>

      @if ($koleksis->isEmpty())
        <div class="text-center py-24">
          <p class="font-display text-2xl text-cream/40">Koleksi tidak ditemukan.</p>
          <a href="{{ route('koleksi.index') }}" class="mt-6 inline-block text-[11px] uppercase tracking-[0.3em] text-gold hover:underline">Lihat semua koleksi</a>
        </div>
      @else
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8">
        @foreach ($koleksis as $k)
        <a href="{{ route('koleksi.show', $k) }}" class="group block lift border hairline p-3 reveal" style="--rd: {{ $loop->index % 4 * 80 }}ms">
          @if ($k->gambar)
            <div class="aspect-[3/4] overflow-hidden">
              <img src="{{ Storage::url($k->gambar) }}" alt="{{ $k->nama }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            </div>
          @else
            <div class="placeholder aspect-[3/4]">{{ Str::upper(Str::limit($k->nama, 18)) }}</div>
          @endif
          <div class="flex justify-between items-baseline mt-4 px-1">
            <div>
              <h4 class="font-display text-xl text-cream group-hover:text-gold transition">{{ $k->nama }}</h4>
              <p class="text-[10px] uppercase tracking-[0.3em] text-cream/45 mt-1">{{ $k->jenis }}</p>
            </div>
            <span class="font-mono text-[10px] text-gold/60">№ {{ str_pad($k->id, 3, '0', STR_PAD_LEFT) }}</span>
          </div>
        </a>
        @endforeach
      </div>

      <!-- Pagination -->
      @if ($koleksis->hasPages())
      <div class="flex items-center justify-center gap-3 mt-20 flex-wrap">
        @if ($koleksis->onFirstPage())
          <span class="w-10 h-10 border hairline text-cream/25 flex items-center justify-center">‹</span>
        @else
          <a href="{{ $koleksis->previousPageUrl() }}" class="w-10 h-10 border hairline text-cream/55 hover:text-gold hover:border-gold transition flex items-center justify-center">‹</a>
        @endif

        @foreach ($koleksis->getUrlRange(1, $koleksis->lastPage()) as $page => $url)
          @if ($page == $koleksis->currentPage())
            <span class="w-10 h-10 border border-gold text-gold flex items-center justify-center">{{ $page }}</span>
          @else
            <a href="{{ $url }}" class="w-10 h-10 border hairline text-cream/55 hover:text-gold hover:border-gold transition flex items-center justify-center">{{ $page }}</a>
          @endif
        @endforeach

        @if ($koleksis->hasMorePages())
          <a href="{{ $koleksis->nextPageUrl() }}" class="w-10 h-10 border hairline text-cream/55 hover:text-gold hover:border-gold transition flex items-center justify-center">›</a>
        @else
          <span class="w-10 h-10 border hairline text-cream/25 flex items-center justify-center">›</span>
        @endif
      </div>
      @endif
      @endif

    </div>
  </section>

  <!-- FOOTER -->
  <footer class="border-t hairline px-8 md:px-20 py-16">
    <div class="max-w-7xl mx-auto grid md:grid-cols-12 gap-10">
      <div class="md:col-span-5">
        <p class="font-display text-3xl text-cream">Museum <em class="text-gold not-italic">Wayang</em></p>
        <p class="text-cream/50 text-sm mt-3 max-w-xs leading-relaxed">Universitas Sanata Dharma — merawat warisan, melanjutkan cerita.</p>
      </div>
      <div class="md:col-span-2">
        <p class="eyebrow mb-4">Jelajah</p>
        <ul class="space-y-2 text-sm text-cream/70">
          <li><a href="{{ route('kegiatan.index') }}" class="hover:text-gold">Kegiatan</a></li>
          <li><a href="{{ route('koleksi.index') }}" class="hover:text-gold">Koleksi</a></li>
          <li><a href="{{ route('about.index') }}" class="hover:text-gold">Tentang Kami</a></li>
          <li><a href="{{ route('kontak.index') }}" class="hover:text-gold">Kontak</a></li>
        </ul>
      </div>
      <div class="md:col-span-2">
        <p class="eyebrow mb-4">Sosial</p>
        <ul class="space-y-2 text-sm text-cream/70">
          <li><a href="#" class="hover:text-gold">Instagram</a></li>
          <li><a href="#" class="hover:text-gold">YouTube</a></li>
        </ul>
      </div>
      <div class="md:col-span-3">
        <p class="eyebrow mb-4">Kunjungi</p>
        <p class="text-sm text-cream/70 leading-relaxed">Kampus II USD, Mrican<br/>Yogyakarta · 55281</p>
      </div>
    </div>
    <div class="max-w-7xl mx-auto mt-12 pt-6 border-t hairline flex flex-col md:flex-row justify-between text-[10px] uppercase tracking-[0.3em] text-cream/40 gap-3">
      <span>© MMXXVI · Museum Wayang USD</span>
      <span>Dirancang untuk warisan, dengan kehormatan.</span>
    </div>
  </footer>

@endsection
