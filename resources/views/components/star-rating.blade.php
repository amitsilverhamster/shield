@props(['rating'])

<div class="flex">
    @for ($i = 1; $i <= 5; $i++)
        @if ($i <= $rating)
            <x-heroicon-s-star class="h-5 w-5 text-yellow-300"/>
        @else
            <x-heroicon-o-star class="h-5 w-5 text-yellow-300"/>
        @endif
    @endfor
</div>
