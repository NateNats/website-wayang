@extends('layouts.museum')
@section('title', $koleksi->nama . ' · Koleksi Museum Wayang')

@section('content')

  <!-- BREADCRUMB -->
  <div class="px-8 md:px-20 pt-32 md:pt-36 pb-6 text-[11px] uppercase tracking-[0.3em] text-cream/45 flex gap-3 items-center flex-wrap">
    <a href="{{ route('koleksi.index') }}" class="hover:text-gold">Koleksi</a>
    <span class="text-gold/40">/</span>
    <a href="{{ route('koleksi.index', ['jenis' => $koleksi->jenis]) }}" class="hover:text-gold">{{ $koleksi->jenis }}</a>
    <span class="text-gold/40">/</span>
    <span class="text-gold">{{ $koleksi->nama }}</span>
  </div>

  <!-- HERO -->
  <section class="px-8 md:px-20 pb-20 md:pb-28">
    <div class="max-w-7xl mx-auto grid md:grid-cols-12 gap-12 md:gap-16">

      <!-- Gallery -->
      <div class="md:col-span-7 reveal">
        @if ($koleksi->gambar)
          <div class="aspect-[4/5] overflow-hidden">
            <img src="{{ Storage::url($koleksi->gambar) }}" alt="{{ $koleksi->nama }}" class="w-full h-full object-cover">
          </div>
        @else
          <div class="placeholder aspect-[4/5]">{{ Str::upper($koleksi->nama) }}</div>
        @endif
      </div>

      <!-- Info -->
      <div class="md:col-span-5 reveal" style="--rd:200ms">
        <div class="flex justify-between items-start">
          <span class="eyebrow">— Koleksi № {{ str_pad($koleksi->id, 3, '0', STR_PAD_LEFT) }}</span>
          <span class="font-mono text-[10px] text-cream/40">USD-WK-{{ str_pad($koleksi->id, 3, '0', STR_PAD_LEFT) }}</span>
        </div>

        <h1 class="font-display text-[clamp(56px,8vw,108px)] text-cream leading-[0.95] mt-6">
          {{ $koleksi->nama }}.
        </h1>
        <p class="font-display italic text-2xl text-gold mt-3">{{ $koleksi->jenis }}</p>

        <p class="mt-10 text-cream/70 leading-[1.85] text-[15px]">
          {{ $koleksi->deskripsi }}
        </p>

        <!-- Specs -->
        <dl class="mt-12 space-y-5">
          <div class="grid grid-cols-3 border-t hairline pt-4">
            <dt class="text-[10px] uppercase tracking-[0.3em] text-gold/70">Jenis</dt>
            <dd class="col-span-2 text-cream/85">{{ $koleksi->jenis }}</dd>
          </div>
          <div class="grid grid-cols-3 border-t hairline pt-4">
            <dt class="text-[10px] uppercase tracking-[0.3em] text-gold/70">Bahan</dt>
            <dd class="col-span-2 text-cream/85">{{ $koleksi->bahan }}</dd>
          </div>
          <div class="grid grid-cols-3 border-t hairline pt-4">
            <dt class="text-[10px] uppercase tracking-[0.3em] text-gold/70">Ditambahkan</dt>
            <dd class="col-span-2 text-cream/85">{{ $koleksi->created_at->translatedFormat('d F Y') }}</dd>
          </div>
        </dl>

        <div class="mt-12 flex gap-4 flex-wrap">
          <a href="{{ route('kontak.index') }}" class="btn-primary">Janji Kunjungan →</a>
          <a href="{{ route('koleksi.index') }}" class="btn-ghost">← Kembali</a>
        </div>
      </div>
    </div>
  </section>

  <!-- RELATED -->
  @if ($related->isNotEmpty())
  <section class="px-8 md:px-20 py-24 md:py-28 border-t hairline">
    <div class="max-w-7xl mx-auto">
      <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-12 reveal">
        <div>
          <span class="eyebrow">— Koleksi Terkait</span>
          <h2 class="font-display text-cream text-[clamp(32px,4vw,56px)] mt-3">
            {{ $koleksi->jenis }} <em class="text-gold">Lainnya</em>
          </h2>
        </div>
        <a href="{{ route('koleksi.index', ['jenis' => $koleksi->jenis]) }}" class="arrow-link">
          Lihat semua <span class="line"></span>→
        </a>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($related as $r)
        <a href="{{ route('koleksi.show', $r) }}" class="lift border hairline p-3 block group">
          @if ($r->gambar)
            <div class="aspect-[3/4] overflow-hidden">
              <img src="{{ Storage::url($r->gambar) }}" alt="{{ $r->nama }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            </div>
          @else
            <div class="placeholder aspect-[3/4]">{{ Str::upper(Str::limit($r->nama, 16)) }}</div>
          @endif
          <div class="flex justify-between items-baseline mt-4 px-1">
            <div>
              <h4 class="font-display text-xl group-hover:text-gold transition">{{ $r->nama }}</h4>
              <p class="text-[10px] uppercase tracking-[0.3em] text-cream/45 mt-1">{{ $r->jenis }}</p>
            </div>
            <span class="font-mono text-[10px] text-gold/60">№ {{ str_pad($r->id, 3, '0', STR_PAD_LEFT) }}</span>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </section>
  @endif

  <footer class="border-t hairline px-8 md:px-20 py-12">
    <div class="max-w-7xl mx-auto flex justify-between text-[10px] uppercase tracking-[0.3em] text-cream/40">
      <span>© MMXXVI · Museum Wayang USD</span>
      <a href="{{ route('kontak.index') }}" class="hover:text-gold">Hubungi Kami</a>
    </div>
  </footer>

@endsection
