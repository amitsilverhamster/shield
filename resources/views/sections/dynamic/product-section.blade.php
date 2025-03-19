<style>
    [x-cloak] {
        display: none !important;
    }
</style>

@php
$bgImage = asset('img/grey-triangle-16-9.webp');
@endphp

<div class="pb-5 max-w-7xl mx-auto px-2 sm:px-4"
    x-data="{ 
        sidebarOpen: false,
        activeTab: null,
        init() {
            this.sidebarOpen = false;
            this.activeTab = null;
        },
        filters: {
            price: {
                min: 0,
                max: 500,
                show: false
            },
            brand: null,
            rating: null
        },
        priceRange: {
            min: 0,
            max: 500
        },
        selectedCategories: {},
        categoryDropdowns: {},
        toggleCategory(slug) {
            if (this.selectedCategories[slug]) {
                this.selectedCategories[slug] = false;
            } else {
                this.selectedCategories[slug] = true;
            }
        },
        isCategorySelected(slug) {
            return this.selectedCategories[slug] === true;
        },
        toggleCategoryDropdown(slug) {
            if (this.categoryDropdowns[slug]) {
                this.categoryDropdowns[slug] = false;
            } else {
                this.categoryDropdowns[slug] = true;
            }
        },
        isCategoryDropdownOpen(slug) {
            return this.categoryDropdowns[slug] === true;
        },
        resetFilters() {
            this.filters.price = {
                min: 0,
                max: 500,
                show: false
            };
            this.filters.brand = null;
            this.filters.rating = null;
            this.selectedCategories = {};
        },
        hasActiveFilters() {
            return Object.values(this.selectedCategories).some(value => value === true) || 
                   (this.filters.price.show && (this.filters.price.min > 0 || this.filters.price.max < 500));
        },
        isPriceInRange(productPrice) {
            if (!this.filters.price.show) return true;
            return productPrice >= this.filters.price.min && productPrice <= this.filters.price.max;
        },
        isProductVisible(categories, price) {
            // Check category filter
            let passesCategories = true;
            if (Object.values(this.selectedCategories).some(value => value === true)) {
                passesCategories = categories.some(category => 
                    this.selectedCategories[category] === true
                );
            }
            
            // Check price filter
            const passesPrice = this.isPriceInRange(price);
            
            // Product is visible if it passes both category and price filters
            return passesCategories && passesPrice;
        }
    }"
    x-init="
        selectedCategories = {
            @foreach($categories as $category)
                '{{ $category->slug }}': false,
            @endforeach
        };
        categoryDropdowns = {
            @foreach($allcategories as $category)
                @if($category->children && $category->children->count() > 0)
                    '{{ $category->slug }}': false,
                @endif
            @endforeach
        };
    "
    x-cloak>
    <!-- Sidebar Overlay -->
    <div x-cloak x-show="sidebarOpen"
        class="fixed inset-0 bg-opacity-0 z-5"
        @click="sidebarOpen = false"
        x-transition:enter="transition-opacity ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
    </div>

    <!-- Sliding Sidebar -->
    <div x-cloak x-show="sidebarOpen"
        class="fixed left-0 top-0 w-80 h-full bg-white shadow-lg z-50 overflow-y-auto"
        x-transition:enter="transition-transform ease-out duration-300"
        x-transition:enter-start="transform -translate-x-full"
        x-transition:enter-end="transform translate-x-0"
        x-transition:leave="transition-transform ease-in duration-300"
        x-transition:leave-start="transform translate-x-0"
        x-transition:leave-end="transform -translate-x-full">

        <!-- Sidebar Header -->
        <div class="p-4 border-b bg-[#3B3B3B] text-white">
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-medium">Filter Product</h3>
                <button @click="sidebarOpen = false" class="text-white hover:text-gray-100">
                    <x-heroicon-o-x-mark class="h-6 w-6 " />
                </button>
            </div>
        </div>

        <!-- Sidebar Content -->

        <div class="p-4">
            <div class="hidden md:flex w-full relative " x-data="{ isOpen: false, searchText: '' }">
                <input type="search"
                    x-model="searchText"
                    @input="isOpen = searchText.length > 0"
                    @click.outside="isOpen = false"
                    class="w-full px-4 py-2 focus:outline-none focus:ring-[var(--main-color)] focus:border-[var(--main-color)] border border-gray-300 search:appearance-none"
                    placeholder="Search products...">

                <button class="absolute right-8 top-5 -translate-y-1/2 text-gray-500 hover:text-[var(--main-color)]">
                    <x-heroicon-o-magnifying-glass class="h-5 w-5" />
                </button>

                <!-- Static Suggestions Dropdown -->
                <div x-show="isOpen"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95"
                    class="absolute w-full bg-white mt-1 top-full shadow-lg z-50">

                    <template x-if="searchText.length > 0">
                        <div>
                            <div class="p-3 hover:bg-gray-50 cursor-pointer border-b">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('img/90-Degree-Horizontal-Bend-300x300.webp') }}" class="w-12 h-12 object-cover rounded" alt="AC Unit">
                                    <div>
                                        <p class="text-gray-800 font-medium">AC Unit Model X200</p>
                                        <p class="text-gray-500 text-sm">Air Conditioning</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 hover:bg-gray-50 cursor-pointer border-b">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('img/90-Degree-Horizontal-Bend-300x300.webp') }}" class="w-12 h-12 object-cover rounded" alt="Heat Pump">
                                    <div>
                                        <p class="text-gray-800 font-medium">Heat Pump HP-100</p>
                                        <p class="text-gray-500 text-sm">Heating</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 hover:bg-gray-50 cursor-pointer">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('img/90-Degree-Horizontal-Bend-300x300.webp') }}" class="w-12 h-12 object-cover rounded" alt="Air Filter">
                                    <div>
                                        <p class="text-gray-800 font-medium">HEPA Air Filter</p>
                                        <p class="text-gray-500 text-sm">Accessories</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        <div class="p-4">
            <!-- Filter Section -->
            <div class="border-t">
                <button class="w-full flex justify-between items-center py-2 text-left font-medium "
                    @click="activeTab = activeTab === 'filter' ? null : 'filter'">
                    <span>Filters</span>
                    <x-heroicon-o-chevron-down class="h-5 w-5 transform"
                        x-bind:class="activeTab === 'filter' ? 'rotate-180' : ''" />
                </button>

                <div x-show="activeTab === 'filter'" class="mt-2 space-y-2">
                    <!-- Price Range - Replaced with slider -->
                    <div>
                        <button class="w-full flex justify-between items-center py-2 text-left text-sm"
                            @click="filters.price.show = !filters.price.show">
                            <span>Price Range</span>
                            <x-heroicon-o-chevron-down class="h-4 w-4 transform"
                                x-bind:class="filters.price.show ? 'rotate-180' : ''" />
                        </button>
                        <div x-show="filters.price.show" class="mt-4 space-y-4 px-2">
                            <!-- Price range slider -->
                            <div class="relative price-range-slider" x-data="rangeSlider()" id="price-slider">
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm text-gray-500">$<span x-text="filters.price.min"></span></span>
                                    <span class="text-sm text-gray-500">$<span x-text="filters.price.max"></span></span>
                                </div>

                                <div class="relative h-1 bg-gray-200 rounded-full slider-track"
                                    @click="handleTrackClick($event)">
                                    <!-- Track highlight -->
                                    <div class="absolute h-1 bg-gray-500 rounded-full"
                                        :style="`left: ${(filters.price.min / priceRange.max) * 100}%; right: ${100 - (filters.price.max / priceRange.max) * 100}%`"></div>

                                    <!-- Min handle -->
                                    <div class="absolute top-0 -mt-2 -ml-3 z-10 cursor-pointer slider-handle"
                                        :style="`left: ${(filters.price.min / priceRange.max) * 100}%`"
                                        @mousedown.prevent="startDrag($event, 'min')"
                                        @touchstart.prevent="startDrag($event, 'min')"
                                        role="slider"
                                        aria-valuemin="0"
                                        aria-valuemax="500"
                                        :aria-valuenow="filters.price.min"
                                        aria-label="Minimum price"
                                        tabindex="0"
                                        @keydown.left.prevent="decrementMin(10)"
                                        @keydown.right.prevent="incrementMin(10)"
                                        @keydown.down.prevent="decrementMin(10)"
                                        @keydown.up.prevent="incrementMin(10)">
                                        <div class="w-6 h-6 bg-white border-2 border-gray-500 rounded-full shadow transition-colors handle-dot"
                                            :class="{'border-blue-500 ring-2 ring-blue-300': dragging === 'min'}"></div>
                                    </div>

                                    <!-- Max handle -->
                                    <div class="absolute top-0 -mt-2 -ml-3 z-10 cursor-pointer slider-handle"
                                        :style="`left: ${(filters.price.max / priceRange.max) * 100}%`"
                                        @mousedown.prevent="startDrag($event, 'max')"
                                        @touchstart.prevent="startDrag($event, 'max')"
                                        role="slider"
                                        aria-valuemin="0"
                                        aria-valuemax="500"
                                        :aria-valuenow="filters.price.max"
                                        aria-label="Maximum price"
                                        tabindex="0"
                                        @keydown.left.prevent="decrementMax(10)"
                                        @keydown.right.prevent="incrementMax(10)"
                                        @keydown.down.prevent="decrementMax(10)"
                                        @keydown.up.prevent="incrementMax(10)">
                                        <div class="w-6 h-6 bg-white border-2 border-gray-500 rounded-full shadow transition-colors handle-dot"
                                            :class="{'border-blue-500 ring-2 ring-blue-300': dragging === 'max'}"></div>
                                    </div>
                                </div>

                                <div class="flex justify-between items-center mt-6 space-x-4">
                                    <div class="relative w-full">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">$</span>
                                        <input type="number"
                                            x-model.number="filters.price.min"
                                            min="0"
                                            :max="filters.price.max - 10"
                                            step="10"
                                            @input="validateMin()"
                                            class="w-full pl-7 pr-3 py-2 border border-gray-300 rounded text-sm">
                                    </div>
                                    <span class="text-gray-500">to</span>
                                    <div class="relative w-full">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">$</span>
                                        <input type="number"
                                            x-model.number="filters.price.max"
                                            :min="filters.price.min + 10"
                                            max="500"
                                            step="10"
                                            @input="validateMax()"
                                            class="w-full pl-7 pr-3 py-2 border border-gray-300 rounded text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Brand -->
                    <div>
                        <button class="w-full flex justify-between items-center py-2 text-left text-sm"
                            @click="filters.brand = filters.brand === null ? 'shown' : null">
                            <span>Brand</span>
                            <x-heroicon-o-chevron-down class="h-4 w-4 transform"
                                x-bind:class="filters.brand !== null ? 'rotate-180' : ''" />
                        </button>
                        <div x-show="filters.brand !== null" class="mt-2 space-y-2 pl-4">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" value="ductlab" class="rounded">
                                <span>All</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" value="ductlab" class="rounded">
                                <span>Ductlab</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" value="airvent" class="rounded">
                                <span>Airvent</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Section with Hierarchical Categories -->
            <div class="border-y pb-1">
                <button class="w-full flex justify-between items-center py-2 text-left font-medium"
                    @click="activeTab = activeTab === 'category' ? null : 'category'">
                    <span>Categories</span>
                    <x-heroicon-o-chevron-down class="h-5 w-5 transform"
                        x-bind:class="activeTab === 'category' ? 'rotate-180' : ''" />
                </button>

                <div x-show="activeTab === 'category'" class="mt-2 space-y-2">
                    @foreach($allcategories as $category)
                    @if(!$category->parent_id)
                    <div class="w-full">
                        <div class="ms-1">
                            @if($category->children && $category->children->count() > 0)
                            <!-- Parent category with children -->
                            <div class="py-1.5 px-3 flex items-center justify-between cursor-pointer hover:bg-gray-50">
                                <div class="flex items-center space-x-2">
                                    <input type="checkbox"
                                        :checked="isCategorySelected('{{ $category->slug }}')"
                                        @click.stop="toggleCategory('{{ $category->slug }}')"
                                        class="rounded">
                                    <span class="text-sm">{{ $category->name }}</span>
                                </div>
                                <button @click.prevent="toggleCategoryDropdown('{{ $category->slug }}')">
                                    <template x-if="isCategoryDropdownOpen('{{ $category->slug }}')">
                                        <x-heroicon-o-minus class="h-5 w-5 text-gray-400" />
                                    </template>
                                    <template x-if="!isCategoryDropdownOpen('{{ $category->slug }}')">
                                        <x-heroicon-o-plus class="h-5 w-5 text-gray-400" />
                                    </template>
                                </button>
                            </div>

                            <!-- Children categories -->
                            <div x-show="isCategoryDropdownOpen('{{ $category->slug }}')"
                                class="pl-6 ml-2 border-l border-gray-200">
                                @foreach($category->children as $child)
                                <div class="py-1.5 px-2 flex items-center space-x-2">
                                    <input type="checkbox"
                                        :checked="isCategorySelected('{{ $child->slug }}')"
                                        @click="toggleCategory('{{ $child->slug }}')"
                                        class="rounded">
                                    <span class="text-sm text-gray-600 hover:text-[#01998C] cursor-pointer">
                                        {{ $child->name }}
                                    </span>
                                </div>
                                @endforeach
                            </div>
                            @else
                            <!-- Regular category without children -->
                            <div class="py-1.5 px-3 flex items-center space-x-2">
                                <input type="checkbox"
                                    :checked="isCategorySelected('{{ $category->slug }}')"
                                    @click="toggleCategory('{{ $category->slug }}')"
                                    class="rounded">
                                <span class="text-sm">{{ $category->name }}</span>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Sidebar Footer -->
        <div class="fixed bottom-0 left-0 w-80 p-4 border-t bg-gray-100">
            <div class="flex gap-4 py-4">
                <x-button text=" Apply" @click="sidebarOpen = false" />
                <x-button
                    text="Reset Filters"
                    @click="resetFilters(); $dispatch('filters-reset'); $nextTick(() => { sidebarOpen = false })"
                    colorone="bg-[#3B3B3B]"
                    colortwo="bg-[#000]" />
            </div>
        </div>

    </div>

    <!-- Rest of the content -->
    <div class="grid grid grid-cols-12 gap-6">
        <div class="col-span-12 sm:col-span-2 border border-gray-300 hover:border-gray-800 text-gray-500 hover:text-gray-800">
            <a href="#" class="py-2  flex items-center justify-between px-4" @click.prevent="sidebarOpen = true; activeTab = 'filter'"><span> Filter </span><span> <x-heroicon-o-chevron-down class="h-5 w-5" /></span></a>

        </div>
        <div class="col-span-12 sm:col-span-2 border border-gray-300 hover:border-gray-800 text-gray-500 hover:text-gray-800">
            <a href="#" class="py-2 flex items-center px-4 justify-between" @click.prevent="sidebarOpen = true; activeTab = 'category'"> <span>Category</span> <span> <x-heroicon-o-chevron-down class="h-5 w-5" />
                </span></a>
        </div>
        <div class="col-span-12 sm:col-span-5 ">
            <div class="hidden md:flex w-full relative " x-data="{ isOpen: false, searchText: '' }">
                <input type="search"
                    x-model="searchText"
                    @input="isOpen = searchText.length > 0"
                    @click.outside="isOpen = false"
                    class="w-full px-4 py-2 focus:outline-none focus:ring-[var(--main-color)] focus:border-[var(--main-color)] border border-gray-300 search:appearance-none"
                    placeholder="Search products...">

                <button class="absolute right-8 top-5 -translate-y-1/2 text-gray-500 hover:text-[var(--main-color)]">
                    <x-heroicon-o-magnifying-glass class="h-5 w-5" />
                </button>

                <!-- Static Suggestions Dropdown -->
                <div x-show="isOpen"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95"
                    class="absolute w-full bg-white mt-1 top-full shadow-lg z-50">

                    <template x-if="searchText.length > 0">
                        <div>
                            <div class="p-3 hover:bg-gray-50 cursor-pointer border-b">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('img/90-Degree-Horizontal-Bend-300x300.webp') }}" class="w-12 h-12 object-cover rounded" alt="AC Unit">
                                    <div>
                                        <p class="text-gray-800 font-medium">AC Unit Model X200</p>
                                        <p class="text-gray-500 text-sm">Air Conditioning</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 hover:bg-gray-50 cursor-pointer border-b">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('img/90-Degree-Horizontal-Bend-300x300.webp') }}" class="w-12 h-12 object-cover rounded" alt="Heat Pump">
                                    <div>
                                        <p class="text-gray-800 font-medium">Heat Pump HP-100</p>
                                        <p class="text-gray-500 text-sm">Heating</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 hover:bg-gray-50 cursor-pointer">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('img/90-Degree-Horizontal-Bend-300x300.webp') }}" class="w-12 h-12 object-cover rounded" alt="Air Filter">
                                    <div>
                                        <p class="text-gray-800 font-medium">HEPA Air Filter</p>
                                        <p class="text-gray-500 text-sm">Accessories</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-3 items-center">
            <div class="flex gap-4 justify-self-center text-gray-500 text-sm">
                <p>187 products</p>
                <x-heroicon-o-squares-2x2 class="h-6 w-6 text-gray-500" />
                <x-heroicon-o-squares-plus class="h-6 w-6 text-gray-500" />
                <x-heroicon-o-queue-list class="h-6 w-6 text-gray-500" />

            </div>
        </div>
        <div class="col-span-12 sm:col-span-12">
            <div class=" flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 sm:gap-0">
                <div class="flex gap-4 items-center text-gray-500 text-sm">
                    <div x-show="hasActiveFilters() || filters.price.show || filters.brand !== null || filters.rating !== null">
                        <p class="flex gap-2 items-center text-gray-500 text-sm">
                            <span> <x-heroicon-o-funnel class="h-6 w-6 text-gray-500" />
                            </span>
                            <span>Filter</span>
                        </p>
                    </div>
                    <div>
                        <!-- Active Filter Chips -->
                        <div class="flex flex-wrap gap-2">
                            <!-- Price Range Chip - Updated -->
                            <template x-if="filters.price.show && (filters.price.min > 0 || filters.price.max < 500)">
                                <span class="inline-flex items-center gap-1 px-3 py-1 text-sm bg-gray-100 text-gray-700 hover:bg-blue-100 hover:text-blue-500 rounded-full">
                                    <span x-text="`Price: $${filters.price.min} - $${filters.price.max}`"></span>
                                    <button @click="filters.price.min = 0; filters.price.max = 500;" class="ml-1 text-gray-500 hover:text-gray-700">
                                        <x-heroicon-o-x-mark class="h-4 w-4" />
                                    </button>
                                </span>
                            </template>

                            <!-- Brand Chips -->
                            <template x-if="filters.brand !== null">
                                <span class="inline-flex items-center gap-1 px-3 py-1 text-sm bg-gray-100 text-gray-700 hover:bg-blue-100 hover:text-blue-500 rounded-full">
                                    <span>Brand Filter</span>
                                    <button @click="filters.brand = null" class="ml-1 text-gray-500 hover:text-gray-700">
                                        <x-heroicon-o-x-mark class="h-4 w-4" />
                                    </button>
                                </span>
                            </template>

                            <!-- Category Chips - Fixed Implementation -->
                            @foreach($allcategories as $category)
                            <template x-if="isCategorySelected('{{ $category->slug }}')">
                                <span class="inline-flex items-center gap-1 px-3 py-1 text-sm bg-gray-100 text-gray-700 hover:bg-blue-100 hover:text-blue-500 rounded-full">
                                    <span>{{ $category->name }}</span>
                                    <button @click="toggleCategory('{{ $category->slug }}')" class="ml-1 text-gray-500 hover:text-gray-700">
                                        <x-heroicon-o-x-mark class="h-4 w-4" />
                                    </button>
                                </span>
                            </template>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- Products Grid - Updated with filtering -->
    <div class="mt-8 product-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($products as $product)
        <div x-show="isProductVisible({{ json_encode($product['category']) }}, {{ $product['price'] }})" class="product-item">
            <x-product-card
                :id="$product['id']"
                :label="$product['label']"
                :name="$product['name']"
                :sku="$product['sku']"
                :slug="$product['slug']"
                :price="$product['price']"
                :oldPrice="$product['oldPrice']"
                :image="'storage/' .$product['image']"
                :category="$product['category']" />
        </div>

        @endforeach

        <!-- Empty state message when no products match filters -->

    </div>
    <div class="flex gap-4 justify-self-center text-gray-500 text-sm mt-3">
        @if(request()->is('dynamic'))
        <x-button
            text="Show More"
            url="dynamic/products"
            colorone="bg-[#3B3B3B]"
            colortwo="bg-[#000]" />
        @endif
    </div>
</div>

<script>
    function showTab(tabId) {
        // Hide all grids
        document.querySelectorAll('.product-grid').forEach(grid => grid.classList.add('hidden'));
        // Show selected grid
        document.getElementById(tabId).classList.remove('hidden');

        // Remove active styles from all tabs
        document.querySelectorAll('button[id$="-tab"]').forEach(tab => {
            tab.classList.remove('text-[var(--main-color)]', 'border-b-2', 'border-[var(--main-color)]');
            tab.classList.add('text-gray-500');
        });

        // Add active styles to selected tab
        const activeTab = document.getElementById(tabId + '-tab');
        activeTab.classList.remove('text-gray-500');
        activeTab.classList.add('text-[var(--main-color)]', 'border-b-2', 'border-[var(--main-color)]');
    }

    function rangeSlider() {
        return {
            dragging: null,
            sliderTrackRef: null,

            // Start drag operation
            startDrag(event, handle) {
                event.preventDefault();
                this.dragging = handle;

                // Store a reference to the slider track for later use
                this.sliderTrackRef = document.getElementById('price-slider').querySelector('.slider-track');

                // Bind methods to this context to ensure proper this reference
                this.boundUpdateDrag = this.updateDrag.bind(this);
                this.boundStopDrag = this.stopDrag.bind(this);

                // Add event listeners for mouse/touch move and up events
                document.addEventListener('mousemove', this.boundUpdateDrag);
                document.addEventListener('touchmove', this.boundUpdateDrag);
                document.addEventListener('mouseup', this.boundStopDrag);
                document.addEventListener('touchend', this.boundStopDrag);

                // Add class to body to prevent text selection during drag
                document.body.classList.add('select-none');
            },

            // Update handle position during drag
            updateDrag(event) {
                if (!this.dragging || !this.sliderTrackRef) return;

                const rect = this.sliderTrackRef.getBoundingClientRect();
                const offsetX = (event.type === 'touchmove') ? event.touches[0].clientX : event.clientX;

                // Calculate position as percentage of track width (0 to 1)
                const position = Math.max(0, Math.min(1, (offsetX - rect.left) / rect.width));
                const value = Math.round((position * 500) / 10) * 10; // Snap to steps of 10

                if (this.dragging === 'min') {
                    this.filters.price.min = Math.min(value, this.filters.price.max - 10);
                } else if (this.dragging === 'max') {
                    this.filters.price.max = Math.max(value, this.filters.price.min + 10);
                }
            },

            // Stop drag operation
            stopDrag() {
                this.dragging = null;
                this.sliderTrackRef = null;

                // Remove event listeners
                document.removeEventListener('mousemove', this.boundUpdateDrag);
                document.removeEventListener('touchmove', this.boundUpdateDrag);
                document.removeEventListener('mouseup', this.boundStopDrag);
                document.removeEventListener('touchend', this.boundStopDrag);

                document.body.classList.remove('select-none');
            },

            // Handle clicks directly on track
            handleTrackClick(event) {
                const rect = event.target.getBoundingClientRect();
                const position = (event.clientX - rect.left) / rect.width;
                const value = Math.round((position * 500) / 10) * 10; // Snap to steps of 10

                // Determine whether to move min or max handle based on proximity
                const minDistance = Math.abs(value - this.filters.price.min);
                const maxDistance = Math.abs(value - this.filters.price.max);

                if (minDistance <= maxDistance) {
                    this.filters.price.min = Math.min(value, this.filters.price.max - 10);
                } else {
                    this.filters.price.max = Math.max(value, this.filters.price.min + 10);
                }
            },

            // Keyboard controls for min handle
            incrementMin(step) {
                this.filters.price.min = Math.min(this.filters.price.min + step, this.filters.price.max - 10);
            },

            decrementMin(step) {
                this.filters.price.min = Math.max(0, this.filters.price.min - step);
            },

            // Keyboard controls for max handle
            incrementMax(step) {
                this.filters.price.max = Math.min(500, this.filters.price.max + step);
            },

            decrementMax(step) {
                this.filters.price.max = Math.max(this.filters.price.min + 10, this.filters.price.max - step);
            },

            // Validate input fields
            validateMin() {
                if (this.filters.price.min > this.filters.price.max - 10) {
                    this.filters.price.min = this.filters.price.max - 10;
                }
            },

            validateMax() {
                if (this.filters.price.max < this.filters.price.min + 10) {
                    this.filters.price.max = this.filters.price.min + 10;
                }
            }
        };
    }
</script>

<style>
    /* Hide the clear button in search input */
    input[type="search"]::-webkit-search-cancel-button {
        -webkit-appearance: none;
        display: none;
    }

    [x-cloak] {
        display: none !important;
    }

    /* Custom styles for range slider */
    input[type="range"] {
        -webkit-appearance: none;
        appearance: none;
        background: transparent;
    }

    input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        height: 24px;
        width: 24px;
        border-radius: 50%;
        background: white;
        border: 2px solid #4B5563;
        cursor: pointer;
        margin-top: -11px;
    }

    input[type="range"]::-moz-range-thumb {
        height: 24px;
        width: 24px;
        border-radius: 50%;
        background: white;
        border: 2px solid #4B5563;
        cursor: pointer;
    }

    input[type="range"]:focus {
        outline: none;
    }

    /* Fix for number input arrows */
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
    }

    /* Additional styles for slider handle focus and hover states */
    .slider-handle:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5);
    }

    /* Prevent text selection during slider drag */
    .select-none {
        user-select: none;
    }

    /* Enhanced styles for handles with larger touch targets */
    .relative h-1.bg-gray-200 .absolute.top-0.-mt-2.-ml-3.z-10.cursor-pointer div {
        transition: transform 0.1s, border-color 0.2s;
    }

    .relative h-1.bg-gray-200 .absolute.top-0.-mt-2.-ml-3.z-10.cursor-pointer:hover div {
        transform: scale(1.1);
        border-color: var(--main-color, #4B5563);
    }

    .relative h-1.bg-gray-200 .absolute.top-0.-mt-2.-ml-3.z-10.cursor-pointer:active div {
        transform: scale(1.2);
        border-color: var(--main-color, #4B5563);
    }

    /* Enhanced styles for the Amazon-like range slider */
    .price-range-slider .slider-track {
        height: 4px;
        background-color: #E5E7EB;
        margin: 12px 0;
    }

    .price-range-slider .slider-handle {
        touch-action: none;
    }

    .price-range-slider .handle-dot {
        cursor: grab;
        transition: transform 0.15s ease, border-color 0.2s ease;
    }

    .price-range-slider .handle-dot:hover {
        transform: scale(1.1);
        border-color: var(--main-color, #3B82F6);
    }

    .price-range-slider .handle-dot:active {
        cursor: grabbing;
        transform: scale(1.2);
    }

    /* Make the track highlight more visible */
    .price-range-slider .slider-track {
        height: 4px;
        background-color: #E5E7EB;
        border-radius: 2px;
    }

    .price-range-slider .slider-track .absolute.h-1 {
        height: 4px;
        background-color: var(--main-color, #3B82F6);
    }

    /* Improved focus states for keyboard accessibility */
    .price-range-slider .slider-handle:focus {
        outline: none;
    }

    .price-range-slider .slider-handle:focus .handle-dot {
        border-color: var(--main-color, #3B82F6);
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
    }

    /* Enhanced styles for more obvious grab handles */
    .price-range-slider .handle-dot {
        width: 24px;
        height: 24px;
        background-color: white;
        border: 2px solid var(--main-color, #3B82F6);
        border-radius: 50%;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        cursor: grab;
        transition: transform 0.15s ease-out, border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .price-range-slider .handle-dot:hover {
        transform: scale(1.15);
        border-color: var(--main-color, #3B82F6);
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.25);
    }

    .price-range-slider .handle-dot:active,
    .price-range-slider .slider-handle.dragging .handle-dot {
        cursor: grabbing;
        transform: scale(1.2);
        border-width: 3px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    /* Make the track highlight more visible */
    .price-range-slider .slider-track {
        height: 4px;
        background-color: #E5E7EB;
        border-radius: 2px;
    }

    .price-range-slider .slider-track .absolute.h-1 {
        height: 4px;
        background-color: var(--main-color, #3B82F6);
    }
</style>