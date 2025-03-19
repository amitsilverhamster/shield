<div class="pb-5 max-w-7xl mx-auto px-2 sm:px-4">
    <div class="flex flex-col sm:flex-row mb-4 sm:mb-8 w-full justify-between gap-4 mt-16">
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-4 sm:gap-6 text-center w-full">
            @foreach ($categories as $category)
            <div class="flex flex-col items-center">
                <div class="relative">
                    <div class="w-16 h-16 md:w-22 md:h-22 rounded-full bg-[var(--main-color)] absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    </div>
                    <img src="{{ asset('storage/' .$category->image ?? 'img/placeholder.png') }}" alt="{{ $category->name }}"
                        class="w-18 h-18 md:w-24 md:h-24 object-contain relative z-10">
                </div>
                <h3 class="mt-2 font-semibold text-sm md:text-base">{{ $category->name }}</h3>
                <p class="text-gray-500 text-xs md:text-sm">{{ $category->products_count ?? 0 }} products</p>
            </div>
            @endforeach
        </div>
    </div>
</div>