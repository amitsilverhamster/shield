<style>
    [x-cloak] {
        display: none !important;
    }
</style>

@php
$bgImage = asset('img/grey-triangle-16-9.webp');

$products = [
[
'id'=>1,
'image' => 'img/Headerbox-fan-Square-face.webp',
'label'=>'New',
'name' => 'Airvent AC Headerbox Fan',
'sku' => 'ECIF40-100',
'slug'=>'single',
'price' => 8.50,
'oldPrice' => 15.00,
'category' => ['all', 'ductlab', 'airvent']
],
[
'id'=>1,

'image' => 'img/vvb.png',
'label'=>'New',
'name' => 'V-Box',
'sku' => 'ECIF40-100',
'slug'=>'single',

'price' => 8.50,
'oldPrice' => 15.00,
'category' => ['all', 'ductlab', 'airvent']
],
[
'id'=>1,

'image' => 'img/Channel-Duct-e1662964282865-300x300.webp',
'label' => null,
'name' => '204×60 Channel Duct x 2M- Non-Centre Bar',
'sku' => 'ECIF40-100',
'slug'=>'single',

'price' => 25.00,
'oldPrice' => 50.00,
'category' => ['all', 'ductlab', 'airvent']
],
[
'id'=>1,
'image' => 'img/Support-Clip-Metal-300x300.webp',
'label' => null,
'name' => '204×60 Support Clip – Metal',
'sku' => 'ECIF40-100',
'slug'=>'single',

'price' => 1.50,
'oldPrice' => 5.00,
'category' => ['all', 'ductlab', 'airvent']
],
[
'id'=>1,
'image' => 'img/90-Degree-Horizontal-Bend-300x300.webp',
'label' => null,
'name' => '204×60 90 Degree Horizontal Bend',
'slug'=>'single',

'sku' => 'ECIF40-100',
'price' => 8.50,
'oldPrice' => 15.00,
'category' => ['all', 'ductlab', 'airvent']
],
[
'id'=>1,
'image' => 'img/LinearBarGrille.webp',
'label' => null,
'name' => 'Linear Bar Grille [Fixed Core]',
'sku' => 'ECIF40-100',
'slug'=>'single',

'price' => 8.50,
'oldPrice' => 15.00,
'category' => ['all', 'ductlab', 'airvent']
],
[
'id'=>1,
'image' => 'img/Drop_in_Anchor.png',
'label' => null,
'name' => 'M10x30mm HKD/Drop in anchor',
'sku' => 'ECIF40-100',
'slug'=>'single',

'price' => 8.50,
'oldPrice' => 15.00,
'category' => ['all', 'ductlab', 'airvent']
],
[
'id'=>1,
'image' => 'img/Metal Perforated Strapping.webp',
'label' => null,
'name' => 'Metal Perforated Straping',
'sku' => 'ECIF40-100',
'slug'=>'single',

'price' => 8.50,
'oldPrice' => 15.00,
'category' => ['all', 'ductlab', 'airvent']
],
[
'id'=>1,
'image' => 'img/Nude Flexible Duct.webp',
'label' => null,
'name' => 'Nude Flexible Duct',
'sku' => 'ECIF40-100',
'slug'=>'single',

'price' => 8.50,
'oldPrice' => 15.00,
'category' => ['all', 'ductlab', 'airvent']
],
[
'id'=>1,
'image' => 'img/Uni-Boots.webp',
'label' => null,
'name' => 'Uniboot',
'sku' => 'ECIF40-100',
'slug'=>'single',

'price' => 8.50,
'oldPrice' => 15.00,
'category' => ['all', 'ductlab', 'airvent']
],
];
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
            price: null,
            brand: null,
            rating: null
        },
        categories: {
            hvac: false,
            ventilation: false,
            cooling: false,
            heating: false
        }
    }"
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
                    <!-- Price Range -->
                    <div>
                        <button class="w-full flex justify-between items-center py-2 text-left text-sm"
                            @click="filters.price = filters.price === null ? 'shown' : null">
                            <span>Price Range</span>
                            <x-heroicon-o-chevron-down class="h-4 w-4 transform"
                                x-bind:class="filters.price !== null ? 'rotate-180' : ''" />
                        </button>
                        <div x-show="filters.price !== null" class="mt-2 space-y-2 pl-4">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="price" value="0-50" class="rounded">
                                <span>$0 - $50</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="price" value="51-100" class="rounded">
                                <span>$51 - $100</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="price" value="101-200" class="rounded">
                                <span>$101 - $200</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="price" value="201+" class="rounded">
                                <span>$201+</span>
                            </label>
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

            <!-- Category Section -->
            <div class=" border-y pb-1">
                <button class="w-full flex justify-between items-center py-2 text-left font-medium"
                    @click="activeTab = activeTab === 'category' ? null : 'category'">
                    <span>Categories</span>
                    <x-heroicon-o-chevron-down class="h-5 w-5 transform"
                        x-bind:class="activeTab === 'category' ? 'rotate-180' : ''" />
                </button>

                <div x-show="activeTab === 'category'" class="mt-2 space-y-2">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" x-model="categories.hvac" class="rounded">
                        <span>HVAC Systems</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" x-model="categories.ventilation" class="rounded">
                        <span>Ventilation</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" x-model="categories.cooling" class="rounded">
                        <span>Cooling</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" x-model="categories.heating" class="rounded">
                        <span>Heating</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Sidebar Footer -->
        <div class="fixed bottom-0 left-0 w-80 p-4  border-t bg-gray-100">
            <div class="flex gap-4 py-4">
                <x-button text="Filters" url="#" @click="sidebarOpen = false" />


                <button @click="
                    filters.price = null;
                    filters.brand = null;
                    filters.rating = null;
                    categories.hvac = false;
                    categories.ventilation = false;
                    categories.cooling = false;
                    categories.heating = false;
                    "
                    class="flex-1 px-4 py-2 text-sm border border-gray-300  hover:bg-gray-100">
                    Reset All Filters
                </button>
            </div>
        </div>

    </div>

    <!-- Rest of the content -->

    <div class="my-4 sm:my-6 border-b pb-2 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 sm:gap-0">
        <h2 class="text-2xl sm:text-3xl text-[#3B3B3B]">Products</h2>
    </div>

    <div class="grid grid grid-cols-12 gap-6">
        <div class="col-span-12 sm:col-span-2 border border-gray-300 hover:border-gray-800 text-gray-500 hover:text-gray-800">
            <a href="#" class="py-2  flex items-center justify-between px-4" @click.prevent="sidebarOpen = true; activeTab = 'filter'"><span> Filter </span><span> <x-heroicon-o-chevron-down class="h-5 w-5" /></span></a>

        </div>
        <div class="col-span-12 sm:col-span-2 border border-gray-300 hover:border-gray-800 text-gray-500 hover:text-gray-800">
            <a href="#" class="py-2 flex items-center px-4 justify-between" @click.prevent="sidebarOpen = true; activeTab = 'category'"> <span>Category</span> <span> <x-heroicon-o-chevron-down class="h-5 w-5" />
                </span></a>
        </div>
        <div class="col-span-12 sm:col-span-8 ">
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
        <div class="col-span-12 sm:col-span-12">
            <div class=" flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 sm:gap-0">
                <div class="flex gap-4 items-center text-gray-500 text-sm">
                    <div>
                        <p class="flex gap-2 items-center text-gray-500 text-sm">
                            <span> <x-heroicon-o-funnel class="h-6 w-6 text-gray-500" />
                            </span>
                            <span>Filter</span>
                        </p>
                    </div>
                    <div>
                        <!-- Active Filter Chips -->
                        <div class="flex flex-wrap gap-2">
                            <!-- Price Range Chip -->
                            <template x-if="filters.price !== null">
                                <span class="inline-flex items-center gap-1 px-3 py-1 text-sm bg-gray-100 text-gray-700 hover:bg-blue-100 hover:text-blue-500 rounded-full">
                                    <span>Price Range</span>
                                    <button @click="filters.price = null" class="ml-1 text-gray-500 hover:text-gray-700">
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

                            <!-- Category Chips -->
                            <template x-if="categories.hvac">
                                <span class="inline-flex items-center gap-1 px-3 py-1 text-sm bg-gray-100 text-gray-700 hover:bg-blue-100 hover:text-blue-500 rounded-full">
                                    <span>HVAC Systems</span>
                                    <button @click="categories.hvac = false" class="ml-1 text-gray-500 hover:text-gray-700">
                                        <x-heroicon-o-x-mark class="h-4 w-4" />
                                    </button>
                                </span>
                            </template>

                            <template x-if="categories.ventilation">
                                <span class="inline-flex items-center gap-1 px-3 py-1 text-sm bg-gray-100 text-gray-700 hover:bg-blue-100 hover:text-blue-500 rounded-full">
                                    <span>Ventilation</span>
                                    <button @click="categories.ventilation = false" class="ml-1 text-gray-500 hover:text-gray-700">
                                        <x-heroicon-o-x-mark class="h-4 w-4" />
                                    </button>
                                </span>
                            </template>

                            <template x-if="categories.cooling">
                                <span class="inline-flex items-center gap-1 px-3 py-1 text-sm bg-gray-100 text-gray-700 hover:bg-blue-100 hover:text-blue-500 rounded-full">
                                    <span>Cooling</span>
                                    <button @click="categories.cooling = false" class="ml-1 text-gray-500 hover:text-gray-700">
                                        <x-heroicon-o-x-mark class="h-4 w-4" />
                                    </button>
                                </span>
                            </template>

                            <template x-if="categories.heating">
                                <span class="inline-flex items-center gap-1 px-3 py-1 text-sm bg-gray-100 text-gray-700 hover:bg-blue-100 hover:text-blue-500 rounded-full">
                                    <span>Heating</span>
                                    <button @click="categories.heating = false" class="ml-1 text-gray-500 hover:text-gray-700">
                                        <x-heroicon-o-x-mark class="h-4 w-4" />
                                    </button>
                                </span>
                            </template>
                        </div>
                    </div>

                </div>
                <div class="flex gap-4 items-center text-gray-500 text-sm">
                    <p>187 products</p>
                    <x-heroicon-o-squares-2x2 class="h-6 w-6 text-gray-500" />
                    <x-heroicon-o-squares-plus class="h-6 w-6 text-gray-500" />
                    <x-heroicon-o-queue-list class="h-6 w-6 text-gray-500" />

                </div>
            </div>

        </div>

    </div>

    <!-- Navigation Tabs -->
    <!-- <div class="flex flex-col sm:flex-row mb-4 sm:mb-8 w-full justify-between gap-4">
        <div class="flex flex-row justify-between items-center w-full overflow-x-auto">
            <button id="all-tab" class="flex-1 text-center px-2 sm:px-4 py-2 text-sm sm:text-base font-semibold text-[var(--main-color)] border-b-2 border-[var(--main-color)]" onclick="showTab('all')">All</button>
            <button id="ductlab-tab" class="flex-1 text-center px-2 sm:px-4 py-2 text-sm sm:text-base text-gray-500" onclick="showTab('ductlab')">Ductlab</button>
            <button id="airvent-tab" class="flex-1 text-center px-2 sm:px-4 py-2 text-sm sm:text-base text-gray-500" onclick="showTab('airvent')">Airvent</button>
        </div>
    </div> -->

    <!-- Products Grid -->
    @foreach(['all', 'ductlab', 'airvent'] as $tab)
    <div id="{{ $tab }}" class=" mt-8 product-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 {{ $tab !== 'all' ? 'hidden' : '' }}">
        @foreach($products as $product)
        @if(in_array($tab, $product['category']))
        <x-product-card
            :id:="$product['id']"
            :label="$product['label']"
            :name="$product['name']"
            :sku="$product['sku']"
            :slug="$product['slug']"
            :price="$product['price']"
            :oldPrice="$product['oldPrice']"
            :image="$product['image']"
            :category="$product['category']" />
        @endif
        @endforeach
    </div>
    @endforeach
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
</style>