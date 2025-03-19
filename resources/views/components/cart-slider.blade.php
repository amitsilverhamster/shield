<div class="fixed z-50"
    x-show="cartOpen"
    x-cloak
    @click="cartOpen = false"
    x-transition:enter="transition-opacity ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition-opacity ease-in duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0">
</div>

<div class="fixed right-0 top-0 w-96 h-full bg-white shadow-lg z-50"
    x-show="cartOpen"
    x-cloak
    @click.away="cartOpen = false"
    x-transition:enter="transition-transform ease-out duration-300"
    x-transition:enter-start="transform translate-x-full"
    x-transition:enter-end="transform translate-x-0"
    x-transition:leave="transition-transform ease-in duration-300"
    x-transition:leave-start="transform translate-x-0"
    x-transition:leave-end="transform translate-x-full">

    <!-- Cart Header -->
    <div class="p-4 border-b bg-[#3B3B3B] text-white">
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-2">
                <h3 class="text-lg font-medium">Shopping Cart</h3>
                <span class="bg-[var(--main-color)] text-white text-sm px-2 py-0.5 rounded-full min-w-1 text-center">
                    2
                </span>
            </div>
            <button @click="cartOpen = false" class="text-white hover:text-gray-100">
                <x-heroicon-o-x-mark class="h-6 w-6" />
            </button>
        </div>
    </div>

    <!-- Cart Items -->
    <div class="overflow-y-auto h-[calc(100vh-180px)]">
        <div class="p-4 space-y-4">
            <!-- Cart Item -->
            <div class="flex gap-4 border-b pb-4 hover:bg-gray-50 p-2 rounded transition-colors duration-200">
                <img src="{{ asset('img/90-Degree-Horizontal-Bend-300x300.webp') }}" 
                    class="w-20 h-20 object-cover rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200" 
                    alt="Product">
                <div class="flex-1">
                    <h4 class="font-medium text-sm hover:text-[var(--main-color)] transition-colors duration-200">204×60 90 Degree Horizontal Bend</h4>
                    <p class="text-xs text-gray-500 mb-3">SKU: ECIF40-100</p>
                    <div class="flex items-center border border-gray-300 w-24" x-data="{ quantity: 1 }">
                        <button class="px-2 py-1 cursor-pointer"
                            @click="quantity = quantity > 1 ? quantity - 1 : 1">
                            <x-heroicon-o-minus class="h-3 w-3" />
                        </button>
                        <input type="text"
                            class="w-full h-6 border-gray-300 px-2 py-1 text-center text-sm"
                            x-model="quantity"
                            @input="quantity = $event.target.value.replace(/[^0-9]/g, ''); quantity = quantity === '' ? 1 : parseInt(quantity)">
                        <button class="px-2 py-1 cursor-pointer"
                            @click="quantity++">
                            <x-heroicon-o-plus class="h-3 w-3" />
                        </button>
                    </div>

                </div>
                <div class="text-right flex flex-col justify-between">
                    <p class="font-medium text-sm">$8.50</p>
                    <button class="text-gray-400 hover:text-red-500 transition-colors duration-200 text-sm mt-2 flex items-center gap-1">
                        <x-heroicon-o-trash class="h-4 w-4" />
                        <span>Remove</span>
                    </button>
                </div>
            </div>

            <!-- Second item with same styling -->
            <div class="flex gap-4 border-b pb-4 hover:bg-gray-50 p-2 rounded transition-colors duration-200">
                <img src="{{ asset('img/LinearBarGrille.webp') }}" 
                    class="w-20 h-20 object-cover rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200" 
                    alt="Product">
                <div class="flex-1">
                    <h4 class="font-medium text-sm hover:text-[var(--main-color)] transition-colors duration-200">Linear Bar Grille [Fixed Core]</h4>
                    <p class="text-xs text-gray-500 mb-3">SKU: ECIF40-100</p>
                    <div class="flex items-center border border-gray-300 w-24" x-data="{ quantity: 1 }">
                        <button class="px-2 py-1 cursor-pointer"
                            @click="quantity = quantity > 1 ? quantity - 1 : 1">
                            <x-heroicon-o-minus class="h-3 w-3" />
                        </button>
                        <input type="text"
                            class="w-full h-6 border-gray-300 px-2 py-1 text-center text-sm"
                            x-model="quantity"
                            @input="quantity = $event.target.value.replace(/[^0-9]/g, ''); quantity = quantity === '' ? 1 : parseInt(quantity)">
                        <button class="px-2 py-1 cursor-pointer"
                            @click="quantity++">
                            <x-heroicon-o-plus class="h-3 w-3" />
                        </button>
                    </div>
                </div>
                <div class="text-right flex flex-col justify-between">
                    <p class="font-medium text-sm">$17.00</p>
                    <button class="text-gray-400 hover:text-red-500 transition-colors duration-200 text-sm mt-2 flex items-center gap-1">
                        <x-heroicon-o-trash class="h-4 w-4" />
                        <span>Remove</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Footer -->
    <div class="fixed bottom-0 right-0 w-96 bg-white border-t p-4 space-y-4">
        <div class="flex justify-between font-medium">
            <span>Total</span>
            <span>$25.50</span>
        </div>
        <div class="flex gap-4">
            <x-button text="View Cart" url="/cart"/>
            <x-button text="Checkout" url="#" colorone="bg-[#3B3B3B]" colortwo="bg-[#000]"/>
        </div>
    </div>
</div>
