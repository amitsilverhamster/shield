<div class="bg-gray-100 py-4">
    <div class="max-w-7xl mx-auto px-4">
        @if(Request::is('privacy-policy', 'refund-and-return-policy', 'disclaimer', 'about'))
        <h1 class="text-xl font-semibold text-gray-700">
            {{ $title }}
        </h1>
        @endif
        <div class="flex items-center text-sm">
            <a href="/" class="text-gray-500 hover:text-[var(--main-color)]">Home</a>
            <span class="mx-2 text-gray-500">></span>
            @if(isset($route))
                <a href="{{ $route }}" class="text-gray-700 font-medium hover:text-[var(--main-color)]">{{ $title }}</a>
            @else
                <span class="text-gray-700 font-medium">{{ $title }}</span>
            @endif
        </div>
    </div>
</div>