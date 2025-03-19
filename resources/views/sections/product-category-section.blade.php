<div class="pb-5 max-w-7xl mx-auto px-2 sm:px-4">
    <div class="flex flex-col sm:flex-row mb-4 sm:mb-8 w-full justify-between gap-4 mt-16">
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-4 sm:gap-6 text-center w-full">
            @php
            $categories = [
            ['name' => 'Inline Fans', 'count' => 395, 'image' => 'img/95-367x367.webp'],
            ['name' => 'Duct & Damper', 'count' => 449, 'image' => 'img/Channel-Duct-e1662964282865-300x300.webp'],
            ['name' => 'Header Box', 'count' => 451, 'image' => 'img/Headerbox-fan-Square-face.webp'],
            ['name' => 'V-Box', 'count' => 270, 'image' => 'img/vvb.png'],
            ['name' => 'Louvre & Grille', 'count' => 53, 'image' => 'img/LinearBarGrille.webp'],
            ['name' => 'Fastener & Screw', 'count' => 33, 'image' => 'img/Drop_in_Anchor.png'],
            ['name' => 'Accessories ', 'count' => 7, 'image' => 'img/118_thumbnail.png'],
            ['name' => 'Run On Timer ', 'count' => 1, 'image' => 'img/rot.png'],
            ];
            @endphp

            @foreach ($categories as $category)
            <div class="flex flex-col items-center">
                <div class="relative">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-[var(--main-color)] absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    </div>
                    <img src="{{ asset($category['image']) }}" alt="{{ $category['name'] }}"
                        class="w-16 h-16 md:w-20 md:h-20 object-contain relative z-10">
                </div>
                <h3 class="mt-2 font-semibold text-sm md:text-base">{{ $category['name'] }}</h3>
                <p class="text-gray-500 text-xs md:text-sm">{{ $category['count'] }} products</p>
            </div>
            @endforeach
        </div>
    </div>
</div>