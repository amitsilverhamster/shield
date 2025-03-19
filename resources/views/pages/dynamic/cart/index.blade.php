@extends('layouts.app')
@section('title', ' Shopping Cart')
@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid grid-cols-12 gap-6 items-center">
            <div class="col-span-12 md:col-span-9">
                <h2 class="text-2xl font-semibold mb-4">Shopping Cart</h2>
                <div class="max-w-4xl mx-auto bg-white p-6 border">
                    @if(count($cartItems) > 0)
                    <a href="#" class="text-[#0A9387] text-sm font-medium">Select all items</a>

                    @foreach($cartItems as $item)
                    <div class="flex border-b pb-4 mt-4" id="cart-item-{{ $item['id'] }}">
                        <input type="checkbox" class="mr-4">
                        <img src="{{ asset('storage/' .$item['image']) }}" alt="{{ $item['name'] }}" class="w-35 h-35 object-cover items-center">

                        <div class="ml-4 flex-1">
                            <h3 class="text-lg font-semibold">{{ $item['name'] }}</h3>
                            @if($item['in_stock'])
                            <p class="text-green-600 text-sm mt-1">In stock</p>
                            @else
                            <p class="text-red-600 text-sm mt-1">Out of stock</p>
                            @endif
                            <p class="text-gray-600 text-sm">SKU: {{ $item['sku'] }}</p>
                            <div class="flex items-center mt-2 gap-4">
                                <div class="flex items-center border border-gray-300" x-data="{ quantity: {{ $item['quantity'] }} }">
                                    <button class="px-3 py-2 cursor-pointer"
                                        @click="if(quantity > 1) { 
                                                quantity--; 
                                                updateCartQuantity({{ $item['id'] }}, quantity);
                                            }">
                                        <x-heroicon-o-minus class="h-4 w-4" />
                                    </button>
                                    <input type="text"
                                        class="w-12 h-11 border-gray-300 px-2 py-1 text-center"
                                        x-model="quantity"
                                        @change="quantity = quantity < 1 ? 1 : quantity; updateCartQuantity({{ $item['id'] }}, quantity);">
                                    <button class="px-3 py-2 cursor-pointer"
                                        @click="quantity++; updateCartQuantity({{ $item['id'] }}, quantity);">
                                        <x-heroicon-o-plus class="h-4 w-4" />
                                    </button>
                                </div>
                                <div class="text-sm text-blue-600 mt-2 mr-4">
                                    <a href="#" class="pr-1 border-r text-red-600 font-medium"
                                        onclick="event.preventDefault(); removeFromCart({{ $item['id'] }});">Delete</a>
                                    <a href="#" class="pr-1 border-r text-[#0A9387] font-medium">Save for later</a>
                                    <a href="/dynamic/products/{{ $item['id'] }}" class="text-[#0A9387] font-medium">See more</a>
                                </div>
                            </div>
                        </div>

                        <div class="text-right">
                            @if(isset($item['sale_price']) && $item['sale_price'] < $item['regular_price'])
                                <p class="text-xs px-2 py-1">
                                <span class="bg-red-700 text-white px-2 py-1 mr-1">
                                    {{ round((($item['regular_price'] - $item['sale_price']) / $item['regular_price']) * 100) }}% off
                                </span>
                                <span class="text-red-700 font-bold">Limited time deal</span>
                                </p>
                                <p class="text-xl font-semibold text-gray-800">${{ number_format($item['sale_price'], 2) }} each</p>
                                <p class="text-sm text-gray-500 line-through">${{ number_format($item['regular_price'], 2) }}</p>
                                @if($item['quantity'] > 1)
                                <p class="text-md text-gray-800 mt-1">Total: ${{ number_format($item['sale_price'] * $item['quantity'], 2) }}</p>
                                @endif
                                @else
                                <p class="text-xl font-semibold text-gray-800">${{ number_format($item['price'], 2) }} each</p>
                                @if($item['quantity'] > 1)
                                <p class="text-md text-gray-800 mt-1">Total: ${{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                                @endif
                                @endif
                        </div>
                    </div>
                    @endforeach

                    <div class="text-right mt-4 font-semibold text-xl">
                        Subtotal ({{ $itemCount }} {{ Str::plural('item', $itemCount) }}): ${{ number_format($subtotal, 2) }}
                    </div>
                    @else
                    <div class="text-center py-6">
                        <p class="text-lg mb-4">Your cart is empty</p>
                        <a href="/dynamic/products" class="bg-[#0A9387] text-white px-6 py-2 rounded-md hover:bg-[#087a70]">
                            Continue Shopping
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            @if(count($cartItems) > 0)
            <div class="hidden md:block md:col-span-3">
                <div class="p-2 mt-4">
                    <div class="max-w-sm bg-white p-4 border">
                        <div class="flex justify-between items-center">
                            <div class="h-4 bg-green-700 w-32 rounded-md"></div>
                            <span class="font-semibold text-gray-900">${{ number_format($subtotal, 2) }}</span>
                        </div>
                        <div class="mt-2 flex items-center text-green-700">
                            <svg class="w-5 h-5 text-green-600 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 5.707 8.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l7-7a1 1 0 000-1.414z" clip-rule="evenodd" />
                            </svg>
                            <span class="font-semibold">Your order is eligible for <span class="font-bold">FREE Delivery.</span></span>
                        </div>
                        <p class="text-gray-500 text-sm">Choose <span class="text-blue-600 font-semibold">FREE Delivery</span> option at checkout.</p>

                        <div class="mt-4 border-t pt-3">
                            <p class="text-lg font-semibold">Subtotal ({{ $itemCount }} {{ Str::plural('item', $itemCount) }}): <span class="text-black">${{ number_format($subtotal, 2) }}</span></p>
                            <x-button text=" Proceed to Buy" url="#"   />

                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<script>
    function removeFromCart(productId) {
        // Get CSRF token from the page - using Laravel's csrf_token() function directly
        const csrfToken = '{{ csrf_token() }}';

        fetch('/cart/remove', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    product_id: productId
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('cart-item-' + productId).remove();
                    // Refresh the page to update totals
                    location.reload();
                }
            });
    }

    function updateCartQuantity(productId, quantity) {
        // Also update this function to use the same reliable CSRF token method
        const csrfToken = '{{ csrf_token() }}';

        fetch('/cart/update', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    product_id: productId,
                    quantity: quantity
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // You could update subtotals via AJAX instead of reloading
                    // but for simplicity, we'll just reload
                    location.reload();
                }
            });
    }
</script>
@endsection