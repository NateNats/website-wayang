@extends('layouts.museum')
@section('title', 'Kegiatan · Museum Wayang')

@section('content')

  <!-- HEADER -->
  <section class="relative pt-32 md:pt-44 pb-20 px-8 md:px-20 border-b hairline">
    <div class="absolute top-28 right-12 ornament-cross hidden md:block"></div>
    <div class="max-w-7xl mx-auto">
      <span class="eyebrow reveal">— II · Agenda &amp; Pertunjukan</span>
      <h1 class="reveal font-display text-[clamp(56px,10vw,148px)] leading-[0.95] mt-6 text-cream" style="--rd:100ms">
        Kegiatan<br/><em class="not-italic text-gold">Museum.</em>
      </h1>
      <p class="reveal mt-10 max-w-xl text-cream/65 leading-[1.85]" style="--rd:250ms">
        Setiap bulan, museum menjadi panggung — pertunjukan semalam suntuk,
        lokakarya tatah sungging, diskusi bersama dalang, hingga pameran
        keliling. Pintu kami terbuka bagi siapa saja yang ingin bertemu
        dengan tradisi yang masih hidup.
      </p>
    </div>
  </section>

  <!-- FILTER -->
  <section class="sticky top-0 z-20 bg-ink/85 backdrop-blur-md border-b hairline px-8 md:px-20 py-5">
    <div class="max-w-7xl mx-auto flex flex-wrap items-center gap-3">
      <span class="eyebrow !text-cream/40 mr-3 hidden md:inline">Kategori</span>
      <button class="chip is-active" data-filter="semua">Semua <span class="count">12</span></button>
      <button class="chip" data-filter="pertunjukan">Pertunjukan <span class="count">04</span></button>
      <button class="chip" data-filter="lokakarya">Lokakarya <span class="count">05</span></button>
      <button class="chip" data-filter="diskusi">Diskusi <span class="count">02</span></button>
      <button class="chip" data-filter="pameran">Pameran <span class="count">01</span></button>
      <div class="flex-1"></div>
      <div class="hidden md:flex items-center gap-3 text-[10px] uppercase tracking-[0.3em] text-cream/45">
        <span class="text-gold">Akan datang</span><span class="text-cream/20">·</span>
        <button class="hover:text-gold">Arsip</button>
      </div>
    </div>
  </section>

  <!-- FEATURED EVENT -->
  <section class="px-8 md:px-20 py-20 md:py-28 border-b hairline">
    <div class="max-w-7xl mx-auto reveal">
      <p class="eyebrow mb-8">— Unggulan</p>
      <div class="grid md:grid-cols-12 gap-10">
        <div class="md:col-span-7">
          <div class="placeholder aspect-[16/10]">PAGELARAN SEMALAM SUNTUK</div>
        </div>
        <div class="md:col-span-5 flex flex-col justify-between">
          <div>
            <div class="flex items-baseline gap-6 mb-6">
              <span class="font-display text-gold text-7xl leading-none number-tabular">12</span>
              <div>
                <p class="font-display text-cream text-2xl leading-tight">Maret</p>
                <p class="text-[10px] uppercase tracking-[0.3em] text-gold/70">2026 · 19.00 WIB</p>
              </div>
            </div>
            <span class="text-[10px] uppercase tracking-[0.3em]" style="color:#A33">● Pertunjukan</span>
            <h2 class="font-display text-[clamp(32px,4vw,56px)] leading-[1.05] text-cream mt-4">
              Pagelaran Wayang Kulit Semalam Suntuk
            </h2>
            <p class="mt-6 text-cream/65 leading-[1.85]">
              Dalang Ki Seno Nugroho membawakan lakon
              <em class="text-gold">"Banjaran Karna"</em> — kisah ksatria
              yang memilih jalannya sendiri. Diiringi gamelan lengkap
              dan sinden dari Yogyakarta.
            </p>
          </div>
          <div class="mt-8 flex justify-between items-center border-t hairline pt-5">
            <p class="text-[11px] uppercase tracking-[0.3em] text-cream/50">Kampus II USD · Aula Driyarkara</p>
            <span class="arrow-link">Detail <span class="line"></span>→</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- LIST -->
  <section class="px-8 md:px-20 py-20 md:py-28">
    <div class="max-w-7xl mx-auto">
      <div class="flex justify-between items-baseline mb-12">
        <span class="eyebrow">— Agenda Mendatang</span>
        <p class="font-mono text-[10px] text-cream/40">12 kegiatan</p>
      </div>

      <ul class="divide-y divide-[rgba(201,163,90,0.18)]">

        <li class="reveal">
          <div class="grid md:grid-cols-12 gap-6 py-10 items-center">
            <div class="md:col-span-2 flex md:flex-col items-baseline gap-3">
              <span class="font-display text-gold text-6xl number-tabular leading-none">04</span>
              <div>
                <p class="font-display text-cream text-xl leading-tight">April</p>
                <p class="text-[10px] uppercase tracking-[0.3em] text-cream/45">10.00 WIB</p>
              </div>
            </div>
            <div class="md:col-span-3">
              <div class="placeholder aspect-[4/3] text-[9px]">LOKAKARYA · TATAH SUNGGING</div>
            </div>
            <div class="md:col-span-5">
              <span class="text-[10px] uppercase tracking-[0.3em] text-gold/70">Lokakarya</span>
              <h3 class="font-display text-3xl text-cream mt-2">Lokakarya Tatah Sungging</h3>
              <p class="mt-3 text-cream/60 text-[14px] leading-relaxed line-clamp-2">
                Belajar membuat wayang kulit dari awal — memahat, mewarnai,
                hingga menyungging — bersama pengrajin senior dari Sukoharjo.
              </p>
            </div>
            <div class="md:col-span-2 text-right">
              <p class="text-[10px] uppercase tracking-[0.3em] text-cream/45">Kuota</p>
              <p class="font-display text-2xl text-cream mt-1">20 / 25</p>
              <p class="font-mono text-[10px] text-gold/60 mt-1">№ 02</p>
            </div>
          </div>
        </li>

        <li class="reveal">
          <div class="grid md:grid-cols-12 gap-6 py-10 items-center">
            <div class="md:col-span-2 flex md:flex-col items-baseline gap-3">
              <span class="font-display text-gold text-6xl number-tabular leading-none">22</span>
              <div>
                <p class="font-display text-cream text-xl leading-tight">April</p>
                <p class="text-[10px] uppercase tracking-[0.3em] text-cream/45">15.30 WIB</p>
              </div>
            </div>
            <div class="md:col-span-3">
              <div class="placeholder aspect-[4/3] text-[9px]">DISKUSI · DALANG MUDA</div>
            </div>
            <div class="md:col-span-5">
              <span class="text-[10px] uppercase tracking-[0.3em] text-gold/70">Diskusi</span>
              <h3 class="font-display text-3xl text-cream mt-2">Bincang Bersama Ki Dalang Muda</h3>
              <p class="mt-3 text-cream/60 text-[14px] leading-relaxed line-clamp-2">
                Diskusi terbuka tentang regenerasi seni pewayangan di tengah
                arus modernisasi. Bersama dalang-dalang muda dari Yogyakarta.
              </p>
            </div>
            <div class="md:col-span-2 text-right">
              <p class="text-[10px] uppercase tracking-[0.3em] text-cream/45">Kuota</p>
              <p class="font-display text-2xl text-cream mt-1">42 / 80</p>
              <p class="font-mono text-[10px] text-gold/60 mt-1">№ 03</p>
            </div>
          </div>
        </li>

        <li class="reveal">
          <div class="grid md:grid-cols-12 gap-6 py-10 items-center">
            <div class="md:col-span-2 flex md:flex-col items-baseline gap-3">
              <span class="font-display text-gold text-6xl number-tabular leading-none">07</span>
              <div>
                <p class="font-display text-cream text-xl leading-tight">Mei</p>
                <p class="text-[10px] uppercase tracking-[0.3em] text-cream/45">19.30 WIB</p>
              </div>
            </div>
            <div class="md:col-span-3">
              <div class="placeholder aspect-[4/3] text-[9px]">PAMERAN · WAYANG GOLEK</div>
            </div>
            <div class="md:col-span-5">
              <span class="text-[10px] uppercase tracking-[0.3em] text-gold/70">Pameran</span>
              <h3 class="font-display text-3xl text-cream mt-2">Pameran Khusus: Wayang Golek Sunda</h3>
              <p class="mt-3 text-cream/60 text-[14px] leading-relaxed line-clamp-2">
                Pameran selama dua minggu menampilkan 60 tokoh wayang golek
                terpilih dari Jawa Barat — beberapa untuk pertama kalinya.
              </p>
            </div>
            <div class="md:col-span-2 text-right">
              <p class="text-[10px] uppercase tracking-[0.3em] text-cream/45">Tiket</p>
              <p class="font-display text-2xl text-cream mt-1">Gratis</p>
              <p class="font-mono text-[10px] text-gold/60 mt-1">№ 04</p>
            </div>
          </div>
        </li>

        <li class="reveal">
          <div class="grid md:grid-cols-12 gap-6 py-10 items-center">
            <div class="md:col-span-2 flex md:flex-col items-baseline gap-3">
              <span class="font-display text-gold text-6xl number-tabular leading-none">21</span>
              <div>
                <p class="font-display text-cream text-xl leading-tight">Mei</p>
                <p class="text-[10px] uppercase tracking-[0.3em] text-cream/45">09.00 WIB</p>
              </div>
            </div>
            <div class="md:col-span-3">
              <div class="placeholder aspect-[4/3] text-[9px]">LOKAKARYA · GAMELAN</div>
            </div>
            <div class="md:col-span-5">
              <span class="text-[10px] uppercase tracking-[0.3em] text-gold/70">Lokakarya</span>
              <h3 class="font-display text-3xl text-cream mt-2">Lokakarya Pengantar Karawitan</h3>
              <p class="mt-3 text-cream/60 text-[14px] leading-relaxed line-clamp-2">
                Mengenal gending pengiring pertunjukan wayang — dari
                ladrang hingga sampak. Terbuka untuk pemula.
              </p>
            </div>
            <div class="md:col-span-2 text-right">
              <p class="text-[10px] uppercase tracking-[0.3em] text-cream/45">Kuota</p>
              <p class="font-display text-2xl text-cream mt-1">12 / 30</p>
              <p class="font-mono text-[10px] text-gold/60 mt-1">№ 05</p>
            </div>
          </div>
        </li>

      </ul>

      <div class="mt-16 flex justify-center">
        <button class="btn-ghost">Muat lebih banyak →</button>
      </div>
    </div>
  </section>

  <footer class="border-t hairline px-8 md:px-20 py-12">
    <div class="max-w-7xl mx-auto flex justify-between text-[10px] uppercase tracking-[0.3em] text-cream/40">
      <span>© MMXXVI · Museum Wayang USD</span>
      <a href="{{ route('kontak.index') }}" class="hover:text-gold">Daftar untuk kegiatan</a>
    </div>
  </footer>

@endsection

@push('scripts')
<script>
document.querySelectorAll('.chip[data-filter]').forEach(c => c.addEventListener('click', () => {
  document.querySelectorAll('.chip[data-filter]').forEach(x => x.classList.remove('is-active'));
  c.classList.add('is-active');
}));
</script>
@endpush
