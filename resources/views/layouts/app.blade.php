<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HVAC Warehouse - Buy Low Profile Flat PVC Ducting, Inline Fans</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/x-icon" href="{{ asset('img/cropped-hvac_logo-192x192.webp') }}">


</head>
<body x-data="{ cartOpen: false }">
    @include('components.navbar.header-top')
    @include('components.navbar.navbar')
    @if (!\Request::is('/','dynamic'))
        @include('components.breadcrumb', [
        'title' => View::yieldContent('title'),
        'route' => View::yieldContent('route'),
        ])
        @if (!\Request::is('products', 'products/*', 'contact', 'blog/*', 'privacy-policy', 'refund-and-return-policy', 'disclaimer', 'about', 'events', 'compare','carts', 'check-out', 'account', 'your-orders', 'user-update'))
        @include('components.banner', [
        'title' => View::yieldContent('title', 'HVAC Warehouse'),
        'content' => View::yieldContent('banner_content', 'Explore our projects and services'),
        'image' => View::yieldContent('banner_image', asset('img/Inline_fan_banner.png')),
        ])
        @endif
        @endif
    <main>
        @if (\Request::is('/','dynamic'))
        {{-- Slider Section --}}
        @include('sections.home-slider', ['sliders' => $sliders])
        @endif
        <div>
            @yield('content')
        </div>
    </main>
    <x-cart-slider />
    @include('components.footer.footer')
</body>
</html>