@extends('layouts.museum')
@section('title', 'Tentang Kami · Museum Wayang')

@section('content')

  <!-- HERO -->
  <section class="pt-32 md:pt-44 pb-20 md:pb-28 px-8 md:px-20 border-b hairline">
    <div class="max-w-7xl mx-auto">
      <h1 class="reveal font-display text-[clamp(56px,10vw,148px)] leading-[0.95] mt-6 text-cream" style="--rd:100ms">
        Sebuah rumah,<br/><em class="not-italic text-gold">untuk warisan.</em>
      </h1>
      <p class="reveal mt-12 max-w-2xl text-cream/65 leading-[1.85] text-lg" style="--rd:250ms">
        Museum Wayang Universitas Sanata Dharma berdiri sebagai upaya
        akademis untuk merawat, mendokumentasikan, dan menghidupkan
        kembali warisan pewayangan Nusantara di tengah generasi baru.
      </p>
    </div>
  </section>

  <!-- VISION -->
  <section class="px-8 md:px-20 py-24 md:py-32 border-b hairline">
    <div class="max-w-7xl mx-auto grid md:grid-cols-12 gap-10 md:gap-16">
      <div class="md:col-span-7 reveal">
        <div class="placeholder aspect-[4/3]">INTERIOR MUSEUM · GALERI UTAMA</div>
        <p class="mt-3 text-[10px] uppercase tracking-[0.3em] text-cream/45">Plate I — Galeri Utama</p>
      </div>
      <div class="md:col-span-5 reveal" style="--rd:200ms">
        <span class="eyebrow">— Visi</span>
        <h2 class="font-display text-gold text-[clamp(32px,4.5vw,56px)] leading-tight mt-4">
          Merawat warisan,<br/>melanjutkan cerita.
        </h2>
        <p class="mt-8 text-cream/70 leading-[1.85]">
          Kami percaya bahwa wayang bukan benda mati — ia adalah
          percakapan yang terus berlangsung antara masa lalu dan masa
          kini. Misi kami bukan hanya menyimpan, tetapi membuka ruang
          bagi cerita-cerita itu untuk ditemukan, dipahami, dan
          diteruskan.
        </p>
        <p class="mt-6 text-cream/60 leading-[1.85] text-[15px]">
          Setiap tokoh dalam koleksi kami memiliki nomor inventaris,
          catatan asal, dan riwayat perawatan — disusun dengan disiplin
          arsip akademik USD.
        </p>
      </div>
    </div>
  </section>

  <!-- TIMELINE -->
  <!-- <section class="px-8 md:px-20 py-24 md:py-32 border-b hairline">
    <div class="max-w-7xl mx-auto">
      <div class="reveal">
        <span class="eyebrow">— Sejarah</span>
        <h2 class="font-display text-cream text-[clamp(40px,6vw,88px)] mt-3 leading-[1.05]">
          Perjalanan, <em class="text-gold">tahun demi tahun.</em>
        </h2>
      </div>

      <ol class="mt-20 grid md:grid-cols-12 gap-y-2">
        <li class="md:col-span-12 grid md:grid-cols-12 gap-6 py-8 border-t hairline reveal">
          <span class="md:col-span-2 font-display text-gold text-5xl number-tabular leading-none">2008</span>
          <h3 class="md:col-span-3 font-display text-2xl text-cream self-center">Awal Mula</h3>
          <p class="md:col-span-7 text-cream/65 leading-[1.85] text-[15px] self-center">
            Koleksi pertama dimulai dari hibah keluarga seorang dalang
            Yogyakarta — sekitar 200 wayang kulit purwa. Disimpan di
            Perpustakaan Pusat USD sebagai arsip studi budaya.
          </p>
        </li>
        <li class="md:col-span-12 grid md:grid-cols-12 gap-6 py-8 border-t hairline reveal">
          <span class="md:col-span-2 font-display text-gold text-5xl number-tabular leading-none">2014</span>
          <h3 class="md:col-span-3 font-display text-2xl text-cream self-center">Galeri Pertama</h3>
          <p class="md:col-span-7 text-cream/65 leading-[1.85] text-[15px] self-center">
            Galeri permanen dibuka di Gedung Pusat Kampus II Mrican —
            menampilkan 1.500 koleksi terpilih, lengkap dengan ruang
            pertunjukan kelir tradisional.
          </p>
        </li>
        <li class="md:col-span-12 grid md:grid-cols-12 gap-6 py-8 border-t hairline reveal">
          <span class="md:col-span-2 font-display text-gold text-5xl number-tabular leading-none">2019</span>
          <h3 class="md:col-span-3 font-display text-2xl text-cream self-center">Ekspansi Nusantara</h3>
          <p class="md:col-span-7 text-cream/65 leading-[1.85] text-[15px] self-center">
            Penambahan koleksi wayang golek Sunda, wayang klitik
            Madiun, wayang Bali, dan wayang Lombok — membawa total
            koleksi melampaui 6.000 tokoh.
          </p>
        </li>
        <li class="md:col-span-12 grid md:grid-cols-12 gap-6 py-8 border-t hairline reveal">
          <span class="md:col-span-2 font-display text-gold text-5xl number-tabular leading-none">2024</span>
          <h3 class="md:col-span-3 font-display text-2xl text-cream self-center">Digitalisasi</h3>
          <p class="md:col-span-7 text-cream/65 leading-[1.85] text-[15px] self-center">
            Program digitalisasi katalog dimulai. Setiap koleksi difoto
            ulang, didokumentasikan, dan diberi metadata — membuka akses
            penelitian bagi mahasiswa dan publik.
          </p>
        </li>
        <li class="md:col-span-12 grid md:grid-cols-12 gap-6 py-8 border-t border-b hairline reveal">
          <span class="md:col-span-2 font-display text-gold text-5xl number-tabular leading-none">2026</span>
          <h3 class="md:col-span-3 font-display italic text-2xl text-gold self-center">Hari ini</h3>
          <p class="md:col-span-7 text-cream/65 leading-[1.85] text-[15px] self-center">
            Lebih dari 10.000 tokoh, 60+ kegiatan tahunan, dan rumah
            bagi pertunjukan-pertunjukan rutin yang dihadiri ribuan
            pengunjung.
          </p>
        </li>
      </ol>
    </div>
  </section> -->

  <!-- VALUES -->
  <!-- <section class="px-8 md:px-20 py-24 md:py-32 border-b hairline">
    <div class="max-w-7xl mx-auto">
      <div class="reveal max-w-2xl">
        <span class="eyebrow">— Prinsip Kerja</span>
        <h2 class="font-display text-cream text-[clamp(36px,5vw,64px)] mt-3 leading-tight">
          Empat hal yang kami<br/>pegang.
        </h2>
      </div>
      <div class="mt-16 grid md:grid-cols-2 gap-10">
        <div class="border-t hairline pt-8 reveal">
          <p class="text-[10px] text-gold/60 mb-4 font-sans">№ 01</p>
          <h3 class="font-display text-3xl text-cream">Kehormatan.</h3>
          <p class="mt-4 text-cream/65 leading-[1.85] text-[15px]">
            Setiap tokoh wayang adalah hasil tangan seorang pengrajin
            yang mungkin sudah tiada. Kami merawatnya dengan rasa hormat
            yang sama besar dengan rasa hormat kami pada penciptanya.
          </p>
        </div>
        <div class="border-t hairline pt-8 reveal" style="--rd:120ms">
          <p class="text-[10px] text-gold/60 mb-4 font-sans">№ 02</p>
          <h3 class="font-display text-3xl text-cream">Keterbukaan.</h3>
          <p class="mt-4 text-cream/65 leading-[1.85] text-[15px]">
            Museum bukan ruang yang dijaga jarak. Pintu kami terbuka
            untuk pelajar, peneliti, dalang, dan siapa pun yang ingin
            belajar atau sekadar bertanya.
          </p>
        </div>
        <div class="border-t hairline pt-8 reveal" style="--rd:240ms">
          <p class="text-[10px] text-gold/60 mb-4 font-sans">№ 03</p>
          <h3 class="font-display text-3xl text-cream">Kelangsungan.</h3>
          <p class="mt-4 text-cream/65 leading-[1.85] text-[15px]">
            Tradisi yang tidak diteruskan akan padam. Kami memelihara
            ekosistem dalang muda, pengrajin, dan pengiring agar
            pewayangan tetap hidup di generasi yang baru.
          </p>
        </div>
        <div class="border-t hairline pt-8 reveal" style="--rd:360ms">
          <p class="text-[10px] text-gold/60 mb-4 font-sans">№ 04</p>
          <h3 class="font-display text-3xl text-cream">Ketelitian.</h3>
          <p class="mt-4 text-cream/65 leading-[1.85] text-[15px]">
            Disiplin arsip akademik. Setiap koleksi diberi nomor,
            catatan, dan riwayat. Sebuah cerita yang baik dimulai dari
            data yang benar.
          </p>
        </div>
      </div>
    </div>
  </section> -->

  <!-- TEAM -->
  <section class="px-8 md:px-20 py-24 md:py-32">
    <div class="max-w-7xl mx-auto">
      <div class="reveal">
        <span class="eyebrow">— Tim</span>
        <h2 class="font-display text-cream text-[clamp(36px,5vw,64px)] mt-3">Orang-orang di balik layar.</h2>
      </div>
      <div class="mt-16 grid grid-cols-2 md:grid-cols-5 gap-6">
        <div class="reveal">
          <div class="placeholder aspect-[3/4]">FOTO</div>
          <h4 class="font-display text-xl text-cream mt-4">Pak Sutarwinarno</h4>
          <p class="text-[10px] uppercase tracking-[0.3em] text-cream/45 mt-1">Pemilik Wayang</p>
        </div>
        <div class="reveal" style="--rd:80ms">
          <div class="placeholder aspect-[3/4]">FOTO</div>
          <h4 class="font-display text-xl text-cream mt-4">Bu Paulina</h4>
          <p class="text-[10px] uppercase tracking-[0.3em] text-cream/45 mt-1">Koordinator PKM</p>
        </div>
        <div class="reveal" style="--rd:160ms">
          <div class="placeholder aspect-[3/4]">FOTO</div>
          <h4 class="font-display text-xl text-cream mt-4">Pak Kartono</h4>
          <p class="text-[10px] uppercase tracking-[0.3em] text-cream/45 mt-1">Koordinator PKM</p>
        </div>
        <div class="reveal" style="--rd:240ms">
          <div class="placeholder aspect-[3/4]">FOTO</div>
          <h4 class="font-display text-xl text-cream mt-4">Nicolaus Reva Sagraha</h4>
          <p class="text-[10px] uppercase tracking-[0.3em] text-cream/45 mt-1">Pengembang Aplikasi</p>
        </div>
        <div class="reveal" style="--rd:320ms">
          <div class="placeholder aspect-[3/4]">FOTO</div>
          <h4 class="font-display text-xl text-cream mt-4">Vincensius Damar Adyatma</h4>
          <p class="text-[10px] uppercase tracking-[0.3em] text-cream/45 mt-1">Pengembang Aplikasi</p>
        </div>
      </div>
    </div>
  </section>

  <footer class="border-t hairline px-8 md:px-20 py-12">
    <div class="max-w-7xl mx-auto flex justify-between text-[10px] uppercase tracking-[0.3em] text-cream/40">
      <span>Museum Wayang USD</span>
      <a href="{{ route('kontak.index') }}" class="hover:text-gold">Hubungi kami →</a>
    </div>
  </footer>

@endsection
