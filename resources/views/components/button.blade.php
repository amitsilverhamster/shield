@props([
    'text' => 'View More',
    'url' => '',
    'colorone' => 'bg-[#0a9387]', // Base teal
    'colortwo' => 'bg-[#0b7d73]', // Darker teal
])

@php
    $commonAttributes = [
        'class' => "text-white font-normal pl-2 pr-4 flex items-center gap-2 transition-colors relative overflow-hidden group cursor-pointer $colorone",
        'style' => "transition: background-color 0.3s;",
        'onmouseover' => "this.classList.remove('$colorone'); this.classList.add('$colortwo');",
        'onmouseout' => "this.classList.remove('$colortwo'); this.classList.add('$colorone');"
    ];
    
    $tag = $url ? 'a' : 'button';
    if($url) {
        $commonAttributes['href'] = $url;
    } else {
        $commonAttributes['type'] = 'button';
        $commonAttributes['class'] .= ' border-0';
    }
@endphp

<{{ $tag }} {{ $attributes->merge($commonAttributes) }}>
    <div class="absolute inset-0 {{ $colortwo }}"
        style="clip-path: polygon(0 0, 25% 0, 20% 100%, 0% 100%);">
    </div>
    <div class="relative py-2">
        <x-heroicon-o-chevron-right
            class="h-5 w-5 relative z-10 transition-transform duration-300 transform group-hover:translate-x-2 pe-1" />
    </div>
    <span class="relative z-10 ml-3 text-md">{{ $text }}</span>
</{{ $tag }}>