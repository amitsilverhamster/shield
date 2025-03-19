@extends('layouts.app')
@section('title', 'Compare Products')
@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Compare Products</h1>
        <div class="flex items-center gap-3">
            <button id="addProductBtn" class="text-sm bg-[#01998C] text-white px-6 py-2.5 flex items-center gap-2 hover:bg-[#018175] transition-all shadow-sm" onclick="handleAddProduct()">
                <x-heroicon-o-plus class="w-4 h-4" />
                Add Product
            </button>
            <button class="text-sm text-gray-600 px-6 py-2.5 hover:bg-gray-100 transition-all" onclick="clearAll()">
                Clear All
            </button>
        </div>
    </div>

    <!-- Comparison Table -->
    <div class="grid grid-cols-2 gap-6" id="compareGrid">
        <!-- Product Column 1 -->
        <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all">
            <!-- Product Image Section -->
            <div class="relative">
                <div class="absolute top-4 left-4 z-10">
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1 rounded-full">In Stock</span>
                </div>
                <img src="img/95-367x367.webp" alt="Inline Fan 1" class="w-full h-56 object-contain p-4 border border-gray-100 bg-gray-50">
                <button class="absolute top-2 right-2 p-2 bg-white rounded-full shadow-sm hover:text-red-500 transition-colors">
                    <x-heroicon-o-x-mark class="w-5 h-5" />
                </button>
            </div>

            <!-- Product Info Section -->
            <div class="mt-6">
                <!-- Product Header -->
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">EC Inline Fan 200</h3>
                        <p class="text-sm text-gray-500">SKU: ECIF-200</p>
                    </div>
                    <div class="text-right">
                        <div class="text-2xl font-bold text-[#01998C]">$299.99</div>
                        <div class="text-sm text-gray-400 line-through">$349.99</div>
                    </div>
                </div>

                <!-- Quick Highlights -->
                <div class="flex gap-4 mb-6 text-sm">
                    <div class="flex-1 bg-blue-50 p-3 text-center">
                        <div class="font-medium text-blue-800">Efficiency</div>
                        <div class="text-blue-600">A+++</div>
                    </div>
                    <div class="flex-1 bg-green-50 p-3 text-center">
                        <div class="font-medium text-green-800">Noise Level</div>
                        <div class="text-green-600">25 dB</div>
                    </div>
                    <div class="flex-1 bg-purple-50 p-3 text-center">
                        <div class="font-medium text-purple-800">Warranty</div>
                        <div class="text-purple-600">2 Years</div>
                    </div>
                </div>

                <!-- Specifications Section -->
                <div class="mb-6">
                    <h4 class="text-lg font-semibold text-gray-800 mb-4">Specifications</h4>
                    <div class="grid grid-cols-2 gap-3 text-sm bg-gray-50 p-4">
                        <div class="text-gray-600">Air Flow:</div>
                        <div class="font-medium">200 m³/h</div>
                        <div class="text-gray-600">Power:</div>
                        <div class="font-medium">45W</div>
                        <div class="text-gray-600">Noise Level:</div>
                        <div class="font-medium">25 dB</div>
                        <div class="text-gray-600">Size:</div>
                        <div class="font-medium">200mm</div>
                    </div>
                </div>

                <!-- Features Section -->
                <div class="mb-6">
                    <h4 class="text-lg font-semibold text-gray-800 mb-4">Key Features</h4>
                    <ul class="text-sm space-y-2 bg-gray-50 p-4">
                        <li class="flex items-center gap-2">
                            <x-heroicon-o-check class="w-5 h-5 text-[#01998C]" />
                            <span>Energy efficient EC motor</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <x-heroicon-o-check class="w-5 h-5 text-[#01998C]" />
                            <span>Low noise operation</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <x-heroicon-o-check class="w-5 h-5 text-[#01998C]" />
                            <span>Speed controller compatible</span>
                        </li>
                    </ul>
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-3 mt-8">
                    <button class="flex-1 bg-[#01998C] text-white py-3 hover:bg-[#018175] transition-colors font-medium">
                        Add to Cart
                    </button>
                    <button class="p-3 border border-gray-200 hover:bg-gray-50 transition-colors">
                        <x-heroicon-o-heart class="w-6 h-6 text-gray-600" />
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Column 2 -->
        <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all">
            <!-- Product Image Section -->
            <div class="relative">
                <div class="absolute top-4 left-4 z-10">
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1 rounded-full">In Stock</span>
                </div>
                <img src="img/112-367x367.webp" alt="Inline Fan 2" class="w-full h-56 object-contain p-4 border border-gray-100 bg-gray-50">
                <button class="absolute top-2 right-2 p-2 bg-white rounded-full shadow-sm hover:text-red-500 transition-colors">
                    <x-heroicon-o-x-mark class="w-5 h-5" />
                </button>
            </div>

            <!-- Product Info Section -->
            <div class="mt-6">
                <!-- Product Header -->
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Centrifugal Inline Fan 100</h3>
                        <p class="text-sm text-gray-500">SKU: ACF-100</p>
                    </div>
                    <div class="text-right">
                        <div class="text-2xl font-bold text-[#01998C]">$199.99</div>
                        <div class="text-sm text-gray-400 line-through">$229.99</div>
                    </div>
                </div>

                <!-- Quick Highlights -->
                <div class="flex gap-4 mb-6 text-sm">
                    <div class="flex-1 bg-blue-50 p-3 text-center">
                        <div class="font-medium text-blue-800">Efficiency</div>
                        <div class="text-blue-600">A+++</div>
                    </div>
                    <div class="flex-1 bg-green-50 p-3 text-center">
                        <div class="font-medium text-green-800">Noise Level</div>
                        <div class="text-green-600">30 dB</div>
                    </div>
                    <div class="flex-1 bg-purple-50 p-3 text-center">
                        <div class="font-medium text-purple-800">Warranty</div>
                        <div class="text-purple-600">2 Years</div>
                    </div>
                </div>

                <!-- Specifications Section -->
                <div class="mb-6">
                    <h4 class="text-lg font-semibold text-gray-800 mb-4">Specifications</h4>
                    <div class="grid grid-cols-2 gap-3 text-sm bg-gray-50 p-4">
                        <div class="text-gray-600">Air Flow:</div>
                        <div class="font-medium">250 m³/h</div>
                        <div class="text-gray-600">Power:</div>
                        <div class="font-medium">60W</div>
                        <div class="text-gray-600">Noise Level:</div>
                        <div class="font-medium">30 dB</div>
                        <div class="text-gray-600">Size:</div>
                        <div class="font-medium">250mm</div>
                    </div>
                </div>

                <!-- Features Section -->
                <div class="mb-6">
                    <h4 class="text-lg font-semibold text-gray-800 mb-4">Key Features</h4>
                    <ul class="text-sm space-y-2 bg-gray-50 p-4">
                        <li class="flex items-center gap-2">
                            <x-heroicon-o-check class="w-5 h-5 text-[#01998C]" />
                            <span>High performance motor</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <x-heroicon-o-check class="w-5 h-5 text-[#01998C]" />
                            <span>Thermal protection</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <x-heroicon-o-check class="w-5 h-5 text-[#01998C]" />
                            <span>Easy installation</span>
                        </li>
                    </ul>
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-3 mt-8">
                    <button class="flex-1 bg-[#01998C] text-white py-3 hover:bg-[#018175] transition-colors font-medium">
                        Add to Cart
                    </button>
                    <button class="p-3 border border-gray-200 hover:bg-gray-50 transition-colors">
                        <x-heroicon-o-heart class="w-6 h-6 text-gray-600" />
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Alpine.js for tabs functionality -->
<script src="//unpkg.com/alpinejs" defer></script>

<script>
    function handleAddProduct() {
        const grid = document.getElementById('compareGrid');
        const currentColumns = grid.children.length;
        
        if (currentColumns >= 4) {
            alert('Maximum 4 products can be compared at once');
            return;
        }

        // Update grid columns based on number of products
        if (currentColumns === 2) {
            grid.className = 'grid grid-cols-3 gap-6';
        } else if (currentColumns === 3) {
            grid.className = 'grid grid-cols-4 gap-6';
        }

        // Add new product column with updated design
        const newColumn = document.createElement('div');
        newColumn.className = 'p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all';
        newColumn.innerHTML = `
            <div class="relative">
                <img src="img/Channel-Duct-e1662964282865-300x300.webp" alt="New Product" class="w-full h-56 object-contain p-4 border border-gray-100 bg-gray-50">
                <button class="absolute top-2 right-2 p-2 bg-white rounded-full shadow-sm hover:text-red-500 transition-colors" onclick="removeProduct(this)">
                    <x-heroicon-o-x-mark class="w-5 h-5" />
                </button>
            </div>
            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">New Inline Fan</h3>
                <p class="text-sm text-gray-500 mb-3">SKU: NIF-001</p>
                <!-- Add other product details here -->
            </div>
        `;
        
        grid.appendChild(newColumn);
    }

    function removeProduct(button) {
        const grid = document.getElementById('compareGrid');
        const column = button.closest('.p-6');
        column.remove();

        // Update grid columns based on remaining products
        const currentColumns = grid.children.length;
        if (currentColumns === 3) {
            grid.className = 'grid grid-cols-3 gap-6';
        } else if (currentColumns === 2) {
            grid.className = 'grid grid-cols-2 gap-6';
        }
    }

    function clearAll() {
        const grid = document.getElementById('compareGrid');
        grid.innerHTML = ''; // Remove all products
        grid.className = 'grid grid-cols-2 gap-6'; // Reset to 2 columns
    }
</script>
@endsection