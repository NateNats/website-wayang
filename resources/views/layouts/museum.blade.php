<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>@yield('title', 'Museum Wayang USD')</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/museum.css') }}">
<script>
tailwind.config = {
  theme: { extend: {
    colors: { ink:'#0B0B0B', panel:'#141414', panel2:'#1B1B1B', gold:'#C9A35A', goldsoft:'#A88846', maroon:'#5B0E0E', maroondeep:'#3D0808', cream:'#EDE7DA' },
    fontFamily: { display: ['"Playfair Display"','serif'], sans: ['Poppins','sans-serif'], mono: ['Poppins','sans-serif'] }
  }}
}
</script>
</head>
<body class="bg-ink text-cream">

@include('partials.museum-nav')

<main class="pt-16">
  @yield('content')
</main>

<script src="{{ asset('assets/shared.js') }}"></script>
@stack('scripts')
</body>
</html>
