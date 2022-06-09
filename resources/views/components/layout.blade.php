@props([
    'social' => true
])

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Mark Velmiskin</title>

  <meta name="description" content="{{setting('site.description')}}">
  <meta name='keywords' content='{{setting('site.keywords')}}' />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta property="og:site_name" content="{{setting('site.title')}}">
  <meta property="og:title" content="{{setting('site.title')}}">
  <meta property="og:url" content="{{setting('site.website')}}">
  <meta property="og:type" content="website">
  <meta property="og:description" content="{{setting('site.description')}}">

  <meta property="og:image:height" content="630">
  <meta property="og:image:width" content="1200">

  <link rel="canonical" href="{{setting('site.website')}}">

  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl-carousel.min.css') }}" rel="stylesheet">

  <link rel="dns-prefetch" href="//www.google.com">
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//s.w.org">

  @stack('css')
</head>
<body x-data class="bg-[#1F2225] font-sans subpixel-antialiased sm:subpixel-antialiased md:subpixel-antialiased">
  <div id="bg-line-set" class="bg-line-set -z-10">
		<div class="bg-line1"></div>
		<div class="bg-line2"></div>
		<div class="bg-line3"></div>
		<div class="bg-line4"></div>
		<div class="bg-line5"></div>
	</div>
  <div class="container px-[10px] mx-auto py-[71px] z-50 h-[100vh] relative flex flex-col {{ !empty($flex_class) == "standart" ? '': 'justify-between' }}">
    @include('layouts.header')
    {{ $slot }}
    @if($social)
    <div class="bottom-0 right-0 text-white transform rotate-90 social-items space-x-12 left-[95%] sm:left-[97%] md:left-[98%]">
        <a href="#" class="transform rotate-180 text-[#0A66C2]">Linkedin</a>
        <a href="#" class="transform rotate-180 text-[#EA4C89]">dribbble</a>
    </div>
    @endif
  </div>
    
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
  <script src="{{ asset('js/owl-carousel.min.js') }}"></script>
  @stack('js')
</body>
</html>