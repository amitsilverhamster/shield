<div class="primary-bg relative text-white py-8">
    <div class="max-w-7xl mx-auto px-4">
        <div class="relative grid md:grid-cols-2 gap-8 items-center">
            <div class="space-y-4">
                <h1 class="text-4xl font-bold">{{ $title }}</h1>
                <p class="text-lg">{{ $content }}</p>
            </div>
            @if($image)
            <div class="flex justify-center items-center">
                <img src="{{ $image }}" alt="{{ $title }}" class="w-96 h-64 object-cover rounded-lg">
            </div>
            @endif
        </div>
    </div>
</div>