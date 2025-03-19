@extends('layouts.app')
@section('title', 'Products')
@section('content')
@php
$bgImage = asset('img/grey-triangle-16-9.webp');

$products = [
[
'image' => 'img/Headerbox-fan-Square-face.webp',
'label'=>'New',
'name' => 'Airvent AC Headerbox Fan',
'sku' => 'ECIF40-100',
'price' => 8.50,
'oldPrice' => 15.00,
'slug'=>'#',

],
[
'image' => 'img/vvb.png',
'label'=>'New',
'name' => 'V-Box',
'sku' => 'ECIF40-100',
'price' => 8.50,
'oldPrice' => 15.00,
'slug'=>'#',

],
[
'image' => 'img/Channel-Duct-e1662964282865-300x300.webp',
'label' => null,
'name' => '204×60 Channel Duct x 2M- Non-Centre Bar',
'sku' => 'ECIF40-100',
'price' => 25.00,
'oldPrice' => 50.00,
'slug'=>'#',

],
[
'image' => 'img/Support-Clip-Metal-300x300.webp',
'label' => null,
'name' => '204×60 Support Clip – Metal',
'sku' => 'ECIF40-100',
'price' => 1.50,
'oldPrice' => 5.00,
'slug'=>'#',

],
[
'image' => 'img/90-Degree-Horizontal-Bend-300x300.webp',
'label' => null,
'name' => '204×60 90 Degree Horizontal Bend',
'sku' => 'ECIF40-100',
'price' => 8.50,
'oldPrice' => 15.00,
'slug'=>'#',

],
[
'image' => 'img/LinearBarGrille.webp',
'label' => null,
'name' => 'Linear Bar Grille [Fixed Core]',
'sku' => 'ECIF40-100',
'price' => 8.50,
'oldPrice' => 15.00,
'slug'=>'#',

],
[
'image' => 'img/Drop_in_Anchor.png',
'label' => null,
'name' => 'M10x30mm HKD/Drop in anchor',
'sku' => 'ECIF40-100',
'price' => 8.50,
'oldPrice' => 15.00,
'slug'=>'#',

],
[
'image' => 'img/Metal Perforated Strapping.webp',
'label' => null,
'name' => 'Metal Perforated Straping',
'sku' => 'ECIF40-100',
'price' => 8.50,
'oldPrice' => 15.00,
'slug'=>'#',

],
[
'image' => 'img/Nude Flexible Duct.webp',
'label' => null,
'name' => 'Nude Flexible Duct',
'sku' => 'ECIF40-100',
'price' => 8.50,
'oldPrice' => 15.00,
'slug'=>'#',

],
[
'image' => 'img/Uni-Boots.webp',
'label' => null,
'name' => 'Uniboot',
'sku' => 'ECIF40-100',
'price' => 8.50,
'oldPrice' => 15.00,
'slug'=>'#',

],
];
@endphp
<!-- products section -->
<section class="pb-2 max-w-7xl mx-auto">
    <div class="mt-6  pb-2 flex justify-between items-center">
        <div>
            <h2 class="text-gray-600 text-sm">
                <x-heroicon-o-funnel class="h-4 w-4 inline-block mr-1" />
                Filter
            </h2>
        </div>
    </div>

    <!-- Card Section  -->
    <div class="grid grid-cols-12 gap-6">
        <!-- Filter cards - now sticky -->
        <div class="hidden md:block md:col-span-3">
            <div class="sticky top-4  p-2">
                <div class="grid grid-cols-1 gap-0">
                    <!-- categoryContainer -->
                    <div class="border-t border-gray-200 py-1.5" id="categoryContainer">
                        <div id="categoryToggle" class="py-1 px-1.5 mb-1 flex items-center justify-between cursor-pointer ">
                            <p class="text-lg font-semibold">Shop by Categories</p>
                            <x-heroicon-o-chevron-down class="h-5 w-5 text-gray-400 transition-transform duration-300 hidden" id="chevronDown" />
                            <x-heroicon-o-chevron-right class="h-5 w-5 text-gray-400" id="chevronRight" />
                        </div>
                        <!-- Categories content wrapper -->
                        <div id="categoriesContent" class="hidden space-y-1 pb-3 toggle-content">
                            <!-- Your existing category content -->
                            <div class="w-full">
                                <div class="ms-1">
                                    <div class="accessoryToggle py-1.5 px-3 flex items-center justify-between cursor-pointer hover:bg-gray-50">
                                        <span class="text-sm">Accessories</span>
                                        <x-heroicon-o-plus class="h-5 w-5 text-gray-400" id="accessoryPlus" />
                                        <x-heroicon-o-minus class="h-5 w-5 text-gray-400 hidden" id="accessoryMinus" />
                                    </div>
                                    <!-- Accessories content wrapper -->
                                    <div id="accessoryContent" class="pl-6 ml-2 border-l border-gray-200">
                                        <div class="py-1.5 px-2 text-sm text-gray-600 hover:text-[#01998C] cursor-pointer">Accessory 1</div>
                                        <div class="py-1.5 px-2 text-sm text-gray-600 hover:text-[#01998C] cursor-pointer">Accessory 2</div>
                                        <div class="py-1.5 px-2 text-sm text-gray-600 hover:text-[#01998C] cursor-pointer">Accessory 3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="ms-1">
                                    <div class="py-1.5 px-3 flex items-center justify-between cursor-pointer hover:bg-gray-50">
                                        <p class="text-sm">Header Box</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="ms-1">
                                    <div class="pvcductingToggle py-1.5 px-3 flex items-center justify-between cursor-pointer hover:bg-gray-50">
                                        <span class="text-sm">PVC Ducting</span>
                                        <x-heroicon-o-plus class="h-5 w-5 text-gray-400" id="pvcductingPlus" />
                                        <x-heroicon-o-minus class="h-5 w-5 text-gray-400 hidden" id="pvcductingMinus" />
                                    </div>
                                    <!-- Accessories content wrapper -->
                                    <div id="pvcductingContent" class="pl-6 ml-2 border-l border-gray-200">
                                        <div class="py-1.5 px-2 text-sm text-gray-600 hover:text-[#01998C] cursor-pointer">pvcducting 1</div>
                                        <div class="py-1.5 px-2 text-sm text-gray-600 hover:text-[#01998C] cursor-pointer">pvcducting 2</div>
                                        <div class="py-1.5 px-2 text-sm text-gray-600 hover:text-[#01998C] cursor-pointer">pvcducting 3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="ms-1">
                                    <div class="py-1.5 px-3 flex items-center justify-between cursor-pointer hover:bg-gray-50">
                                        <p class="text-sm">Pirpac</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="ms-1">
                                    <div class="brandToggle py-1.5 px-3 flex items-center justify-between cursor-pointer hover:bg-gray-50">
                                        <span class="text-sm">Brand</span>
                                        <x-heroicon-o-plus class="h-5 w-5 text-gray-400" id="brandPlus" />
                                        <x-heroicon-o-minus class="h-5 w-5 text-gray-400 hidden" id="brandMinus" />
                                    </div>
                                    <!-- Accessories content wrapper -->
                                    <div id="brandContent" class="pl-6 ml-2 border-l border-gray-200">
                                        <div class="py-1.5 px-2 text-sm text-gray-600 hover:text-[#01998C] cursor-pointer">brand 1</div>
                                        <div class="py-1.5 px-2 text-sm text-gray-600 hover:text-[#01998C] cursor-pointer">brand 2</div>
                                        <div class="py-1.5 px-2 text-sm text-gray-600 hover:text-[#01998C] cursor-pointer">brand 3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="ms-1">
                                    <div class="py-1.5 px-3 flex items-center justify-between cursor-pointer hover:bg-gray-50">
                                        <p class="text-sm">Inline Fan 100mm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="ms-1">
                                    <div class="py-1.5 px-3 flex items-center justify-between cursor-pointer hover:bg-gray-50">
                                        <p class="text-sm">Inline Fan 150mm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="ms-1">
                                    <div class="py-1.5 px-3 flex items-center justify-between cursor-pointer hover:bg-gray-50">
                                        <p class="text-sm">Inline Fan 200mm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="ms-1">
                                    <div class="py-1.5 px-3 flex items-center justify-between cursor-pointer hover:bg-gray-50">
                                        <p class="text-sm">Inline Fan 250mm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="ms-1">
                                    <div class="py-1.5 px-3 flex items-center justify-between cursor-pointer hover:bg-gray-50">
                                        <p class="text-sm">PIR Board</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="ms-1">
                                    <div class="py-1.5 px-3 flex items-center justify-between cursor-pointer hover:bg-gray-50">
                                        <p class="text-sm">Inline Fan 300mm+</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="ms-1">
                                    <div class="fansToggle py-1.5 px-3 flex items-center justify-between cursor-pointer hover:bg-gray-50">
                                        <span class="text-sm">Fans</span>
                                        <x-heroicon-o-plus class="h-5 w-5 text-gray-400" id="fansPlus" />
                                        <x-heroicon-o-minus class="h-5 w-5 text-gray-400 hidden" id="fansMinus" />
                                    </div>
                                    <!-- Accessories content wrapper -->
                                    <div id="fansContent" class="pl-6 ml-2 border-l border-gray-200">
                                        <div class="py-1.5 px-2 text-sm text-gray-600 hover:text-[#01998C] cursor-pointer">fans 1</div>
                                        <div class="py-1.5 px-2 text-sm text-gray-600 hover:text-[#01998C] cursor-pointer">fans 2</div>
                                        <div class="py-1.5 px-2 text-sm text-gray-600 hover:text-[#01998C] cursor-pointer">fans 3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="ms-1">
                                    <div class="py-1.5 px-3 flex items-center justify-between cursor-pointer hover:bg-gray-50">
                                        <p class="text-sm">Run-On-Timer(ROT's)</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Add more category items as needed -->
                        </div>
                    </div>
                    <!-- brandcategoryContainer -->
                    <div class="border-t border-gray-200 py-1.5" id="brandcategoryContainer">
                        <div id="brandcategoryToggle" class="py-1 px-1.5 mb-1 flex items-center justify-between cursor-pointer ">
                            <p class="text-lg font-semibold">Brand</p>
                            <x-heroicon-o-chevron-down class="h-5 w-5 text-gray-400 transition-transform duration-300 hidden" id="brandchevronDown" />
                            <x-heroicon-o-chevron-right class="h-5 w-5 text-gray-400" id="brandchevronRight" />
                        </div>
                        <!-- Categories content wrapper -->
                        <div id="brandcategoriesContent" class="hidden space-y-1 pb-3 toggle-content">
                            <!-- Your existing brandcategory content -->

                            <div class="w-full">
                                <div class="py-1.5 px-3 flex items-center space-x-2 cursor-pointer hover:bg-gray-50">
                                    <input type="checkbox" class="h-4 w-4 text-[#01998C] cursor-pointer" />
                                    <span class="text-sm">Airvent</span>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="py-1.5 px-3 flex items-center space-x-2 cursor-pointer hover:bg-gray-50">
                                    <input type="checkbox" class="h-4 w-4 text-[#01998C] cursor-pointer" />
                                    <span class="text-sm">Ductlab</span>
                                </div>
                            </div>
                            <!-- Add more brandcategory items as needed -->
                        </div>
                    </div>
                    <!-- sizecontainer -->
                    <div class="border-t border-gray-200 py-1.5" id="sizeContainer">
                        <div id="sizeToggle" class="py-1 px-1.5 mb-1 flex items-center justify-between cursor-pointer ">
                            <p class="text-lg font-semibold">Size</p>
                            <x-heroicon-o-chevron-down class="h-5 w-5 text-gray-400 transition-transform duration-300 hidden" id="sizechevronDown" />
                            <x-heroicon-o-chevron-right class="h-5 w-5 text-gray-400" id="sizechevronRight" />
                        </div>
                        <!-- Categories content wrapper -->
                        <div id="sizesContent" class="hidden space-y-1 pb-3 toggle-content">
                            <!-- Your existing size content -->

                            <div class="w-full">
                                <div class="py-1.5 px-3 flex items-center space-x-2 cursor-pointer hover:bg-gray-50">
                                    <input type="checkbox" class="h-4 w-4 text-[#01998C] cursor-pointer" />
                                    <span class="text-sm">100mm</span>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="py-1.5 px-3 flex items-center space-x-2 cursor-pointer hover:bg-gray-50">
                                    <input type="checkbox" class="h-4 w-4 text-[#01998C] cursor-pointer" />
                                    <span class="text-sm">150mm</span>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="py-1.5 px-3 flex items-center space-x-2 cursor-pointer hover:bg-gray-50">
                                    <input type="checkbox" class="h-4 w-4 text-[#01998C] cursor-pointer" />
                                    <span class="text-sm">200mm</span>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="py-1.5 px-3 flex items-center space-x-2 cursor-pointer hover:bg-gray-50">
                                    <input type="checkbox" class="h-4 w-4 text-[#01998C] cursor-pointer" />
                                    <span class="text-sm">250mm</span>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="py-1.5 px-3 flex items-center space-x-2 cursor-pointer hover:bg-gray-50">
                                    <input type="checkbox" class="h-4 w-4 text-[#01998C] cursor-pointer" />
                                    <span class="text-sm">315mm</span>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="py-1.5 px-3 flex items-center space-x-2 cursor-pointer hover:bg-gray-50">
                                    <input type="checkbox" class="h-4 w-4 text-[#01998C] cursor-pointer" />
                                    <span class="text-sm">350mm</span>
                                </div>
                            </div>
                            <!-- Add more size items as needed -->
                        </div>
                    </div>
                    <!-- warrantycategoryContainer -->
                    <div class="border-t border-gray-200 py-1.5" id="warrantyContainer">
                        <div id="warrantyToggle" class="py-1 px-1.5 mb-1 flex items-center justify-between cursor-pointer ">
                            <p class="text-lg font-semibold">Warranty</p>
                            <x-heroicon-o-chevron-down class="h-5 w-5 text-gray-400 transition-transform duration-300 hidden" id="warrantychevronDown" />
                            <x-heroicon-o-chevron-right class="h-5 w-5 text-gray-400" id="warrantychevronRight" />
                        </div>
                        <!-- Categories content wrapper -->
                        <div id="warrantyContent" class="hidden space-y-1 pb-3 toggle-content">
                            <!-- Your existing warranty content -->

                            <div class="w-full">
                                <div class="px-3 py-1.5">
                                    <ul class="flex flex-wrap gap-1.5">
                                        <li> <a href="#" class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-gray-500/10 ring-inset hover:bg-[#3b3b3b] hover:text-[#fff] active:bg-[#3b3b3b] active:text-[#fff]">1 year</a>
                                        </li>
                                        <li> <a href="#" class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-gray-500/10 ring-inset hover:bg-[#3b3b3b] hover:text-[#fff] active:bg-[#3b3b3b] active:text-[#fff]">2 year</a>
                                        </li>
                                        <li> <a href="#" class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-gray-500/10 ring-inset hover:bg-[#3b3b3b] hover:text-[#fff] active:bg-[#3b3b3b] active:text-[#fff]">3 year</a>
                                        </li>
                                        <li> <a href="#" class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-gray-500/10 ring-inset hover:bg-[#3b3b3b] hover:text-[#fff] active:bg-[#3b3b3b] active:text-[#fff]">5 year</a>
                                        </li>
                                        <li> <a href="#" class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-gray-500/10 ring-inset hover:bg-[#3b3b3b] hover:text-[#fff] active:bg-[#3b3b3b] active:text-[#fff]">7 year</a>
                                        </li>
                                        <li> <a href="#" class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-gray-500/10 ring-inset hover:bg-[#3b3b3b] hover:text-[#fff] active:bg-[#3b3b3b] active:text-[#fff]">Lifetime</a>
                                        </li>
                                        <li> <a href="#" class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-gray-500/10 ring-inset hover:bg-[#3b3b3b] hover:text-[#fff] active:bg-[#3b3b3b] active:text-[#fff]">Limitied lifetime</a>
                                        </li>
                                        <li> <a href="#" class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-gray-500/10 ring-inset hover:bg-[#3b3b3b] hover:text-[#fff] active:bg-[#3b3b3b] active:text-[#fff]">No</a>
                                        </li>
                                        <li> <a href="#" class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-gray-500/10 ring-inset hover:bg-[#3b3b3b] hover:text-[#fff] active:bg-[#3b3b3b] active:text-[#fff]">Product Defects only</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <!-- Add more warranty items as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- products grid - now wider -->
        <div class="col-span-12 md:col-span-9">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6 ">
                @foreach($products as $product)
                <x-product-card
                    :label="$product['label']"
                    :name="$product['name']"
                    :sku="$product['sku']"
                    :slug="$product['slug']"
                    :price="$product['price']"
                    :oldPrice="$product['oldPrice']"
                    :image="$product['image']"
                    />

                @endforeach
            </div>
        </div>

</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Category toggle setup and initial state
        const categoryToggle = document.getElementById('categoryToggle');
        const categoriesContent = document.getElementById('categoriesContent');
        const chevronDown = document.getElementById('chevronDown');
        const chevronRight = document.getElementById('chevronRight');
        const categoryContainer = document.getElementById('categoryContainer');
        let isOpen = true; // Changed to true for default open state

        // Set initial state for category
        categoriesContent.classList.remove('hidden');
        chevronDown.classList.remove('hidden');
        chevronRight.classList.add('hidden');
        chevronDown.classList.add('chevron-rotate');
        categoryContainer.classList.add('border-t');

        categoryToggle.addEventListener('click', function() {
            isOpen = !isOpen;

            if (isOpen) {
                // Show content
                categoriesContent.classList.remove('hidden');
                chevronDown.classList.remove('hidden');
                chevronRight.classList.add('hidden');
                chevronDown.classList.add('chevron-rotate');
                // Add bottom border
                categoryContainer.classList.add('border-t');
            } else {
                // Hide content
                categoriesContent.classList.add('hidden');
                chevronDown.classList.remove('chevron-rotate');
                chevronDown.classList.add('hidden');
                chevronRight.classList.remove('hidden');
                // Remove bottom border
                categoryContainer.classList.add('border-t');
            }
        });
        const accessoryToggle = document.querySelector('.accessoryToggle');
        const accessoryContent = document.getElementById('accessoryContent');
        const accessoryPlus = document.getElementById('accessoryPlus');
        const accessoryMinus = document.getElementById('accessoryMinus');
        let isAccessoryOpen = false;

        accessoryToggle.addEventListener('click', function() {
            isAccessoryOpen = !isAccessoryOpen;

            if (isAccessoryOpen) {
                // Show content
                accessoryContent.classList.remove('hidden');
                accessoryPlus.classList.add('hidden');
                accessoryMinus.classList.remove('hidden');
            } else {
                // Hide content
                accessoryContent.classList.add('hidden');
                accessoryPlus.classList.remove('hidden');
                accessoryMinus.classList.add('hidden');
            }
        });
        const pvcductingToggle = document.querySelector('.pvcductingToggle');
        const pvcductingContent = document.getElementById('pvcductingContent');
        const pvcductingPlus = document.getElementById('pvcductingPlus');
        const pvcductingMinus = document.getElementById('pvcductingMinus');
        let ispvcductingOpen = false;

        pvcductingToggle.addEventListener('click', function() {
            ispvcductingOpen = !ispvcductingOpen;

            if (ispvcductingOpen) {
                // Show content
                pvcductingContent.classList.remove('hidden');
                pvcductingPlus.classList.add('hidden');
                pvcductingMinus.classList.remove('hidden');
            } else {
                // Hide content
                pvcductingContent.classList.add('hidden');
                pvcductingPlus.classList.remove('hidden');
                pvcductingMinus.classList.add('hidden');
            }
        });
        const brandToggle = document.querySelector('.brandToggle');
        const brandContent = document.getElementById('brandContent');
        const brandPlus = document.getElementById('brandPlus');
        const brandMinus = document.getElementById('brandMinus');
        let isbrandOpen = false;

        brandToggle.addEventListener('click', function() {
            isbrandOpen = !isbrandOpen;

            if (isbrandOpen) {
                // Show content
                brandContent.classList.remove('hidden');
                brandPlus.classList.add('hidden');
                brandMinus.classList.remove('hidden');
            } else {
                // Hide content
                brandContent.classList.add('hidden');
                brandPlus.classList.remove('hidden');
                brandMinus.classList.add('hidden');
            }
        });
        const fansToggle = document.querySelector('.fansToggle');
        const fansContent = document.getElementById('fansContent');
        const fansPlus = document.getElementById('fansPlus');
        const fansMinus = document.getElementById('fansMinus');
        let isfansOpen = false;

        fansToggle.addEventListener('click', function() {
            isfansOpen = !isfansOpen;

            if (isfansOpen) {
                // Show content
                fansContent.classList.remove('hidden');
                fansPlus.classList.add('hidden');
                fansMinus.classList.remove('hidden');
            } else {
                // Hide content
                fansContent.classList.add('hidden');
                fansPlus.classList.remove('hidden');
                fansMinus.classList.add('hidden');
            }
        });
        // Brand category toggle setup and initial state
        const brandcategoryToggle = document.getElementById('brandcategoryToggle');
        const brandcategoriesContent = document.getElementById('brandcategoriesContent');
        const brandchevronDown = document.getElementById('brandchevronDown');
        const brandchevronRight = document.getElementById('brandchevronRight');
        const brandcategoryContainer = document.getElementById('brandcategoryContainer');
        let brandisOpen = true; // Changed to true for default open state

        // Set initial state for brand category
        brandcategoriesContent.classList.remove('hidden');
        brandchevronDown.classList.remove('hidden');
        brandchevronRight.classList.add('hidden');
        brandchevronDown.classList.add('chevron-rotate');
        brandcategoryContainer.classList.add('border-t');

        brandcategoryToggle.addEventListener('click', function() {
            brandisOpen = !brandisOpen;

            if (brandisOpen) {
                // Show content
                brandcategoriesContent.classList.remove('hidden');
                brandchevronDown.classList.remove('hidden');
                brandchevronRight.classList.add('hidden');
                brandchevronDown.classList.add('chevron-rotate');
                // Add bottom border
                brandcategoryContainer.classList.add('border-t');
            } else {
                // Hide content
                brandcategoriesContent.classList.add('hidden');
                brandchevronDown.classList.remove('chevron-rotate');
                brandchevronDown.classList.add('hidden');
                brandchevronRight.classList.remove('hidden');
                // Remove bottom border
                brandcategoryContainer.classList.add('border-t');
            }
        });

        // Size toggle setup and initial state
        const sizeToggle = document.getElementById('sizeToggle');
        const sizesContent = document.getElementById('sizesContent');
        const sizechevronDown = document.getElementById('sizechevronDown');
        const sizechevronRight = document.getElementById('sizechevronRight');
        const sizeContainer = document.getElementById('sizeContainer');
        let sizeisOpen = true; // Changed to true for default open state

        // Set initial state for size
        sizesContent.classList.remove('hidden');
        sizechevronDown.classList.remove('hidden');
        sizechevronRight.classList.add('hidden');
        sizechevronDown.classList.add('chevron-rotate');
        sizeContainer.classList.add('border-t');

        sizeToggle.addEventListener('click', function() {
            sizeisOpen = !sizeisOpen;

            if (sizeisOpen) {
                // Show content
                sizesContent.classList.remove('hidden');
                sizeschevronDown.classList.remove('hidden');
                sizeschevronRight.classList.add('hidden');
                sizeschevronDown.classList.add('chevron-rotate');
                // Add bottom border
                sizeContainer.classList.add('border-t');
            } else {
                // Hide content
                sizesContent.classList.add('hidden');
                sizeschevronDown.classList.remove('chevron-rotate');
                sizeschevronDown.classList.add('hidden');
                sizeschevronRight.classList.remove('hidden');
                // Remove bottom border
                sizeContainer.classList.add('border-t');
            }
        });

        // Warranty toggle setup and initial state
        const warrantyToggle = document.getElementById('warrantyToggle');
        const warrantyContent = document.getElementById('warrantyContent');
        const warrantychevronDown = document.getElementById('warrantychevronDown');
        const warrantychevronRight = document.getElementById('warrantychevronRight');
        const warrantyContainer = document.getElementById('warrantyContainer');
        let warrantyisOpen = true; // Changed to true for default open state

        // Set initial state for warranty
        warrantyContent.classList.remove('hidden');
        warrantychevronDown.classList.remove('hidden');
        warrantychevronRight.classList.add('hidden');
        warrantychevronDown.classList.add('chevron-rotate');
        warrantyContainer.classList.add('border-t');

        warrantyToggle.addEventListener('click', function() {
            warrantyisOpen = !warrantyisOpen;

            if (warrantyisOpen) {
                // Show content
                warrantyContent.classList.remove('hidden');
                warrantychevronDown.classList.remove('hidden');
                warrantychevronRight.classList.add('hidden');
                warrantychevronDown.classList.add('chevron-rotate');
                // Add bottom border
                warrantyContainer.classList.add('border-t');
            } else {
                // Hide content
                warrantyContent.classList.add('hidden');
                warrantychevronDown.classList.remove('chevron-rotate');
                warrantychevronDown.classList.add('hidden');
                warrantychevronRight.classList.remove('hidden');
                // Remove bottom border
                warrantyContainer.classList.add('border-t');
            }
        });
    });
</script>
<style>
    #categoriesContent {
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    .chevron-rotate {
        transform: rotate(180deg);
    }
</style>
@endsection