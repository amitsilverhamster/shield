@props([
'id' => null,
'label' => null,
'name',
'sku',
'price',
'oldPrice',
'slug',
'image',
'category' => ['all']
])

@php
$bgImage = asset('img/grey-triangle-16-9.webp');
@endphp

<div class="overflow-hidden mb-4 border-e border-t border-b border-l border-gray-300 hover:border hover:border-[#01998C] transition-all duration-200 relative group">
    @if(isset($label) && !empty($label))
    <div class="absolute top-0 -left-2 bg-red-500 text-white px-3 py-1 text-xs font-semibold z-10">
        {{$label}}
    </div>
    @endif
    <div class="bg-cover bg-center" style="background-image: url('{{ $bgImage }}');">
        <a href="{{ route('products.show', $slug) }}"> <img src="{{ asset($image) }}" alt="{{ $name }}"
                class="w-full h-auto sm:h-40 md:h-44 lg:h-48 xl:h-52 object-contain transition-transform duration-300 hover:scale-105 p-2 sm:p-4 mix-blend-multiply">
        </a>
    </div>
    <div class="p-4">
        <p class="text-gray-600 text-xs pb-1">
            ID:{{ $id }} 
            SKU: {{ $sku }}
        </p>
        <div class="h-[48px]">
            <h2 class="text-gray-800 text-base hover:text-[var(--main-color)] pb-1 font-semibold leading-5">
                <a href="{{ route('products.show', $slug) }}">
                    {{ $name }}
                </a>
            </h2>
        </div>

        <div class="absolute top-2 right-2 flex items-center gap-2 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-200">
            <button class="p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                <x-heroicon-o-heart class="h-4 w-4 text-gray-400 hover:text-[var(--main-color)]" />
            </button>
            <button class="p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                <x-heroicon-o-arrow-path class="h-4 w-4 text-gray-400 hover:text-[var(--main-color)]" />
            </button>
        </div>

        <div class="flex justify-between items-center">
            <div>
                <p class="text-[#01998C] font-semibold">${{ number_format($price, 2) }}</p>
                <p class="text-gray-400 text-xs font-medium line-through">${{ number_format($oldPrice, 2) }}</p>
            </div>
            <div>
                @if(!is_null($id))
                <button type="button" class="add-to-cart-btn text-sm font-semibold flex items-center gap-1" 
                       data-product-id="{{ $id }}">
                    <div class="btn-icon-container">
                        <div class="plus-icon">
                            <x-heroicon-o-plus-circle class="h-5 w-5 text-[#302D2A]" />
                        </div>
                        <div class="check-icon hidden">
                            <x-heroicon-s-check-circle class="h-5 w-5 text-green-500" />
                        </div>
                    </div>
                    <p class="text-[#302D2A]">ADD TO CART</p>
                </button>
                @else
                <span class="text-sm font-semibold text-gray-400">ID not provided</span>
                @endif
            </div>
        </div>
    </div>
</div>

<div id="cart-success-message" class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded-md shadow-lg z-50 hidden">
    Product added to cart successfully!
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id');
            const plusIcon = this.querySelector('.plus-icon');
            const checkIcon = this.querySelector('.check-icon');
            
            // Add loading state
            button.disabled = true;
            
            fetch('{{ route('cart.add') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    product_id: productId,
                    quantity: 1
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    const successMsg = document.getElementById('cart-success-message');
                    successMsg.textContent = data.message;
                    successMsg.classList.remove('hidden');
                    
                    // Show check icon
                    plusIcon.classList.add('hidden');
                    checkIcon.classList.remove('hidden');
                    
                    // Update cart count if you have a cart indicator
                    if (data.cart_count && document.getElementById('cart-count')) {
                        document.getElementById('cart-count').textContent = data.cart_count;
                    }
                    
                    // Reset to plus icon after 2 seconds
                    setTimeout(() => {
                        plusIcon.classList.remove('hidden');
                        checkIcon.classList.add('hidden');
                        successMsg.classList.add('hidden');
                        button.disabled = false;
                    }, 2000);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                button.disabled = false;
            });
        });
    });
});
</script>