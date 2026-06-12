@extends('layouts.museum')
@section('title', 'Kontak · Museum Wayang')

@section('content')

  <!-- HEADER -->
  <section class="pt-32 md:pt-44 pb-16 px-8 md:px-20 border-b hairline">
    <div class="max-w-7xl mx-auto">
      <span class="eyebrow reveal">— V · Kontak</span>
      <h1 class="reveal font-display text-[clamp(56px,10vw,148px)] leading-[0.95] mt-6 text-cream" style="--rd:100ms">
        Mari, <em class="not-italic text-gold">berbicara.</em>
      </h1>
      <p class="reveal mt-10 max-w-xl text-cream/65 leading-[1.85]" style="--rd:250ms">
        Tertarik berkunjung, melakukan penelitian, atau mengundang
        kami untuk pertunjukan? Kirim pesan — kami biasanya membalas
        dalam dua hari kerja.
      </p>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="px-8 md:px-20 py-20 md:py-28">
    <div class="max-w-7xl mx-auto grid md:grid-cols-12 gap-12 md:gap-16">

      <!-- LEFT: form -->
      <form class="md:col-span-7 reveal" method="POST" action="#">
        @csrf
        <span class="eyebrow">— Kirim Pesan</span>
        <h2 class="font-display text-cream text-[clamp(32px,4vw,52px)] mt-3">Tulis kepada kami.</h2>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-8">
          <div>
            <label class="form-label">Nama Lengkap</label>
            <input class="input" name="nama" placeholder="Nama Anda" />
          </div>
          <div>
            <label class="form-label">Asal</label>
            <input class="input" name="asal" placeholder="Institusi atau —" />
          </div>
          <div>
            <label class="form-label">Email</label>
            <input class="input" type="email" name="email" placeholder="anda@email.com" />
          </div>
          <div>
            <label class="form-label">Telepon</label>
            <input class="input" name="telepon" placeholder="+62" />
          </div>

          <div class="md:col-span-2">
            <label class="form-label">Topik</label>
            <div class="flex flex-wrap gap-2 mt-2" id="topik-chips">
              <button type="button" class="chip is-active" data-topik="Kunjungan">Kunjungan</button>
              <button type="button" class="chip" data-topik="Penelitian">Penelitian</button>
              <button type="button" class="chip" data-topik="Kerja Sama">Kerja Sama</button>
              <button type="button" class="chip" data-topik="Donasi Koleksi">Donasi Koleksi</button>
              <button type="button" class="chip" data-topik="Lainnya">Lainnya</button>
            </div>
            <input type="hidden" name="topik" id="topik-value" value="Kunjungan" />
          </div>

          <div class="md:col-span-2">
            <label class="form-label">Pesan</label>
            <textarea class="input" name="pesan" rows="5" placeholder="Ceritakan kebutuhan Anda…"></textarea>
          </div>
          <div class="md:col-span-2 mt-4">
            <button type="submit" class="btn-primary">Kirim Pesan →</button>
          </div>
        </div>
      </form>

      <!-- RIGHT: contact info -->
      <aside class="md:col-span-5 reveal" style="--rd:200ms">
        <span class="eyebrow">— Pemilik Museum</span>

        <div class="mt-6 border hairline p-8">
          <div class="placeholder w-24 aspect-square text-[8px]">FOTO</div>
          <h3 class="font-display text-3xl text-cream mt-6">Drs. Sutarwinarno</h3>
          <p class="font-display italic text-gold mt-1">Pemilik Wayang</p>

          <dl class="mt-8 space-y-4 text-[14px]">
            <div class="border-t hairline pt-4">
              <dt class="text-[10px] uppercase tracking-[0.3em] text-gold/70">Surel Pribadi</dt>
              <dd class="text-cream/85 mt-2">Sutarwinarno@usd.ac.id</dd>
            </div>
            <div class="border-t hairline pt-4">
              <dt class="text-[10px] uppercase tracking-[0.3em] text-gold/70">WhatsApp</dt>
              <dd class="text-cream/85 mt-2">+62 812 2700 0001</dd>
            </div>
          </dl>
        </div>

        <div class="mt-12">
          <span class="eyebrow">— Saluran Resmi</span>
          <dl class="mt-6 space-y-5 text-[14px]">
            <div class="border-t hairline pt-4 grid grid-cols-3">
              <dt class="text-[10px] uppercase tracking-[0.3em] text-gold/70">Surel</dt>
              <dd class="col-span-2 text-cream/85">museum.wayang@usd.ac.id</dd>
            </div>
            <div class="border-t hairline pt-4 grid grid-cols-3">
              <dt class="text-[10px] uppercase tracking-[0.3em] text-gold/70">Telepon</dt>
              <dd class="col-span-2 text-cream/85">+62 274 513 301 (ext. 1408)</dd>
            </div>
            <div class="border-t hairline pt-4 grid grid-cols-3">
              <dt class="text-[10px] uppercase tracking-[0.3em] text-gold/70">Alamat</dt>
              <dd class="col-span-2 text-cream/85 leading-relaxed">Kampus II USD<br/>Jl. Affandi, Mrican,<br/>Caturtunggal, Yogyakarta 55281</dd>
            </div>
            <div class="border-t hairline pt-4 grid grid-cols-3">
              <dt class="text-[10px] uppercase tracking-[0.3em] text-gold/70">Jam Buka</dt>
              <dd class="col-span-2 text-cream/85 leading-relaxed">Senin — Jumat · 09.00 — 14.00<br/>Akhir pekan dengan janji temu</dd>
            </div>
          </dl>
        </div>

        <div class="mt-12 border-t hairline pt-8">
          <span class="eyebrow">— Sosial</span>
          <div class="mt-4 flex flex-col gap-2 text-cream/85">
            <a href="#" class="hover:text-gold transition flex justify-between border-b hairline pb-2">@museumwayang.usd <span class="text-cream/40 text-[10px]">Instagram</span></a>
            <a href="#" class="hover:text-gold transition flex justify-between border-b hairline pb-2">Museum Wayang USD <span class="text-cream/40 text-[10px]">YouTube</span></a>
            <a href="#" class="hover:text-gold transition flex justify-between border-b hairline pb-2">museumwayang_usd <span class="text-cream/40 text-[10px]">TikTok</span></a>
          </div>
        </div>
      </aside>
    </div>
  </section>

  <footer class="border-t hairline px-8 md:px-20 py-12">
    <div class="max-w-7xl mx-auto flex justify-between text-[10px] uppercase tracking-[0.3em] text-cream/40">
      <span>© MMXXVI · Museum Wayang USD</span>
      <a href="{{ route('welcome') }}" class="hover:text-gold">← Kembali ke beranda</a>
    </div>
  </footer>

@endsection

@push('scripts')
<script>
document.querySelectorAll('#topik-chips .chip').forEach(c => c.addEventListener('click', () => {
  document.querySelectorAll('#topik-chips .chip').forEach(x => x.classList.remove('is-active'));
  c.classList.add('is-active');
  document.getElementById('topik-value').value = c.dataset.topik;
}));
</script>
@endpush
