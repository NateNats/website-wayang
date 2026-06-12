<nav id="museum-nav" class="museum-nav fixed top-0 left-0 right-0 z-50">
  <div class="max-w-7xl mx-auto flex items-center justify-between">

    {{-- Logo --}}
    <a href="{{ route('welcome') }}" class="museum-nav-logo">wayang</a>

    {{-- Desktop links --}}
    <ul class="hidden md:flex items-center gap-10">
      <li><a href="{{ route('welcome') }}"
             class="museum-nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">Beranda</a></li>
      <li><a href="{{ route('kegiatan.index') }}"
             class="museum-nav-link {{ request()->routeIs('kegiatan.index') ? 'active' : '' }}">Kegiatan</a></li>
      <li><a href="{{ route('koleksi.index') }}"
             class="museum-nav-link {{ request()->routeIs('koleksi.*') ? 'active' : '' }}">Koleksi</a></li>
      <li><a href="{{ route('about.index') }}"
             class="museum-nav-link {{ request()->routeIs('about.index') ? 'active' : '' }}">Tentang Kami</a></li>
      <li><a href="{{ route('kontak.index') }}"
             class="museum-nav-link {{ request()->routeIs('kontak.index') ? 'active' : '' }}">Kontak</a></li>
    </ul>

    <!-- {{-- Mobile hamburger --}}
    <button id="museum-hamburger" class="museum-hamburger md:hidden" aria-label="Buka menu">
      <span></span>
      <span></span>
      <span></span>
    </button> -->
  </div>
</nav>

{{-- Mobile panel (slide dari kanan) --}}
<div id="museum-mobile-nav" class="museum-mobile-nav md:hidden">
  <ul class="flex flex-col items-center gap-8 text-[0.95rem]">
    <li><a href="{{ route('welcome') }}"
           class="museum-nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">Beranda</a></li>
    <li><a href="{{ route('kegiatan.index') }}"
           class="museum-nav-link {{ request()->routeIs('kegiatan.index') ? 'active' : '' }}">Kegiatan</a></li>
    <li><a href="{{ route('koleksi.index') }}"
           class="museum-nav-link {{ request()->routeIs('koleksi.*') ? 'active' : '' }}">Koleksi</a></li>
    <li><a href="{{ route('about.index') }}"
           class="museum-nav-link {{ request()->routeIs('about.index') ? 'active' : '' }}">Tentang Kami</a></li>
    <li><a href="{{ route('kontak.index') }}"
           class="museum-nav-link {{ request()->routeIs('kontak.index') ? 'active' : '' }}">Kontak</a></li>
  </ul>
</div>

<script>
(function () {
  /* Scroll effect */
  var nav = document.getElementById('museum-nav');
  window.addEventListener('scroll', function () {
    nav.classList.toggle('scrolled', window.scrollY > 50);
  });

  /* Mobile panel */
  var btn    = document.getElementById('museum-hamburger');
  var panel  = document.getElementById('museum-mobile-nav');
  btn.addEventListener('click', function () {
    btn.classList.toggle('active');
    panel.classList.toggle('open');
  });
  /* Tutup panel kalau klik link */
  panel.querySelectorAll('a').forEach(function (a) {
    a.addEventListener('click', function () {
      btn.classList.remove('active');
      panel.classList.remove('open');
    });
  });
})();
</script>
