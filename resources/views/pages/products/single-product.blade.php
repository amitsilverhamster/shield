@extends('layouts.app')

@section('title', 'Products')
@section('content')
@php
$bgImage = asset('img/grey-triangle-16-9.webp');
@endphp
<div class="pb-8">
    <div class="relative w-full border-t border-gray-300">
        <!-- Diagonal Background -->
        <div class="absolute inset-0">
            <div class="w-full h-full lg:hidden">
                <!-- Mobile background -->
                <div class="grid grid-cols-1 h-full">
                    <div class="bg-gray-100 h-[420px]"></div>
                    <div class="bg-white flex-1"></div>
                </div>
            </div>

        </div>

        <div class="max-w-7xl mx-auto py-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-20 p-4 lg:p-6 relative min-h-[400px]">
                <!-- Left Column: Image and SKU - Make it sticky -->
                <div class="lg:col-span-6 relative" x-data="{ currentImageIndex: 0 }">
                    <div class="lg:sticky lg:top-4">
                        <div class="overflow-hidden h-8 lg:h-10 flex justify-end">
                            <img src="/img/360-degrees.svg" alt="360" class="h-6 lg:h-8">
                        </div>
                        <div class="overflow-hidden h-60 sm:h-70 lg:h-90 flex items-center justify-center relative">
                            <!-- Main Image -->
                            <img src="/img/Headerbox-fan-Square-face.webp"
                                alt="demo" class="h-full w-full object-contain">

                            <!-- Navigation Arrows -->
                            <div class="absolute inset-0 flex items-center justify-between px-2 sm:px-4">
                                <button
                                    class="text-[var(--main-color)] hover:text-opacity-75 transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>
                                <button
                                    class="text-[var(--main-color)] hover:text-opacity-75 transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Thumbnails -->
                        <div class="flex overflow-x-auto gap-3 mt-4 lg:mt-8 pb-2  lg:overflow-x-hidden">
                            <button class="w-20 h-20 border-2 overflow-hidden transition-all duration-200 border-[var(--main-color)]">
                                <img src="/img/90-Degree-Horizontal-Bend-300x300.webp" alt="thumbnail">
                            </button>
                            <!-- Add more thumbnail buttons as needed -->
                        </div>
                    </div>
                </div>

                <!-- Right Column: Title and Description - Allow scrolling -->
                <div class="lg:col-span-6 relative">
                    <div class="h-full flex flex-col">
                        <!-- Title and basic info section -->
                        <div class=" mb-4">
                            <!-- <p class=" font-semibold">In Stock</p> -->
                            <h1 class="landing-none text-2xl sm:text-3xl lg:text-4xl font-semibold text-[var(--main-color)]   mb-1">
                                Airvent AC Headerbox Fan </h1>
                            <ul class="list-none flex flex-wrap gap-3 text-gray-600 text-sm font-medium pb-2">
                                <li class="border-e pe-2"> <span class="text-gray-400  ">Brand:</span> Airvent </li>
                                <li class="border-e pe-2">
                                    <div class="flex items-center gap-1">
                                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                                        <x-heroicon-o-star class="h-4 w-4 text-gray-400" />
                                        <sub class="text-xs text-gray-400 cursor-pointer" onclick="scrollToReviewsAndOpen()">(5 Reviews)</sub>

                                    </div>
                                </li>
                                <li> <span class="text-gray-400">SKU: </span>ACHB35-150</li>

                            </ul>
                        </div>

                        <!-- Scrollable content section -->
                        <div class="flex-1 overflow-y-auto">
                            <!-- Table section -->
                            <div class="overflow-hidden">
                                <div class="w-full">
                                    <table class="w-full border-collapse border border-gray-200">
                                        <thead>
                                            <tr class="bg-gray-50">
                                                <th class="border border-gray-200 px-4 py-2" colspan="3">BUY MORE. SAVE MORE.
                                                </th>

                                            </tr>
                                            <tr class="bg-gray-100">
                                                <th class="border border-gray-200 px-4 py-2">(L/s)
                                                </th>
                                                <th class="border border-gray-200 px-4 py-2">Price for each item</th>
                                                <th class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">Subtotal</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">% Savings</span>
                                                </th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">Buy 1</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">Buy 1</span>
                                                </td>
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">$7.00 each</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">$7.00 each</span>
                                                </td>
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">$6.00</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">-</span>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-50 text-center">
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">Buy 2 +</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">Buy 2 -4</span>
                                                </td>
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">$5.00 each</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">$5.00 each</span>
                                                </td>
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">$8.00</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">28.57% </span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">Buy 5 +</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">Buy 5 -9</span>
                                                </td>
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">$3.60 each</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">$3.60 each</span>
                                                </td>
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">$13.50</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">28.00%</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">Buy 10 +</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">Buy 10 -19</span>
                                                </td>
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">$2.30 each</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">$2.30 each</span>
                                                </td>
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">$23.00</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">14.81%</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">Buy 20 +</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">Buy 20 -29</span>
                                                </td>
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">$2.10 each</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">$2.10 each</span>
                                                </td>
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">$42.00</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">8.70%</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">Buy 30 +</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">Buy 30 - 49</span>
                                                </td>
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">$1.90 each</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">$7.00 each</span>
                                                </td>
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">$57.00</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">9.52%</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">Buy 50 +</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">Buy 50 - 99</span>
                                                </td>
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price">$1.80 each</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">$1.80 each</span>
                                                </td>
                                                <td class="border border-gray-200 px-4 py-2">
                                                    <span class="original-price"> $90.00</span>
                                                    <span class="savings-percentage hidden text-[#3b3b3b]">5.26%</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="bg-gray-50">
                                                <td class="border border-gray-200 px-4 py-2" colspan="3">
                                                    <div class="flex justify-between items-center py-2">
                                                        <div>
                                                            <p class="text-xs">Savings % based on buy qty</p>
                                                            <p class="text-xs">vs previous buy qty</p>
                                                        </div>

                                                        <div>
                                                            <label class="inline-flex items-center cursor-pointer">
                                                                <input type="checkbox" value="" class="sr-only peer" id="toggleSavings">
                                                                <span class="me-3 text-sm">Show % Savings</span>
                                                                <div class="relative w-11 h-6 bg-gray-200  rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#01998C] dark:peer-checked:bg-[#01998C]"></div>

                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="flex justify-center items-center py-2">
                                                        <div class="text-sm pe-2">
                                                            <p>Buy 100 for Suppliers Pack Size</p>
                                                        </div>

                                                        <div>
                                                            <x-heroicon-o-information-circle class="w-5 h-5 mr-2" />
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <!-- Delivery methods section -->
                            <div class="flex items-center gap-4 py-3 mt-3 lg:pt-2 border-y border-gray-200 mt-2">
                                <a href="#" class="relative text-[#017A6B] flex items-center gap-2 text-lg hover:underline group">
                                    <span class="rounded-full bg-[#3b3b3b] p-2 flex items-center justify-center">
                                        <x-heroicon-o-truck class="h-6 w-6 text-white" />
                                    </span>
                                    Free Delivery

                                    <!-- Tooltip -->
                                    <div class="absolute left-0  mt-3 hidden w-72 p-4 text-white bg-[#3b3b3b] rounded-lg shadow-lg group-hover:block z-50">
                                        <strong class="block text-lg">Delivery Information</strong>
                                        <hr class="my-2 border-gray-700" />

                                        <p class="text-sm"><strong>Orders under $30</strong> <br>
                                            (Bulky items sent as parcel for FREE)</p>
                                        <ul class="mt-2 text-sm">
                                            <li>- Aust Post UNTRACKED Letter – <strong>FREE</strong></li>
                                            <li>- Parcel – From <strong>$8</strong></li>
                                            <li>- Express – From <strong>$10</strong></li>
                                            <li>- Click and Collect – <strong>2hrs</strong></li>
                                        </ul>

                                        <hr class="my-2 border-gray-700" />

                                        <p class="text-sm"><strong>Orders over $30</strong></p>
                                        <ul class="mt-2 text-sm">
                                            <li>- Parcel – <strong>FREE</strong></li>
                                            <li>- Express – From <strong>$10</strong></li>
                                            <li>- Click and Collect – <strong>2hrs</strong></li>
                                        </ul>
                                    </div>
                                </a>
                                <a href="#" class="relative text-[#017A6B] flex items-center gap-2 text-lg hover:underline group">
                                    <span class="rounded-full bg-[#3b3b3b] p-2 flex items-center justify-center">
                                        <x-heroicon-o-envelope-open class="h-6 w-6 text-white" />
                                    </span>
                                    Email Quote

                                    <!-- Tooltip -->
                                    <div class="absolute left-0  mt-3 hidden w-72 p-4 text-white bg-[#3b3b3b] rounded-lg shadow-lg group-hover:block z-50">
                                        <p class="block text-sm">To create a quote, add all the items to your shopping cart, go to <span class="underline">shopping cart </span>and click “Email as a Quote”.</p>
                                    </div>
                                </a>
                                <a href="#" class="relative text-[#017A6B] flex items-center gap-2 text-lg hover:underline ">
                                    <span class="rounded-full bg-[#3b3b3b] p-2 flex items-center justify-center">
                                        <x-heroicon-o-heart class="h-6 w-6 text-white" />
                                    </span>
                                    Save to wishlist
                                </a>
                            </div>

                            <!-- Payment methods section -->
                            <div class="border-b pb-3 mt-2">
                                <a href="#"
                                    class="flex flex-wrap items-center gap-4 pt-1 lg:pt-2">
                                    <img src="{{ asset('img/paypal-icon.svg') }}" alt="patpal" class="h-10 lg:h-12">
                                    <img src="{{ asset('img/visa-icon.svg') }}" alt="visa" class="h-10 lg:h-12">
                                    <img src="{{ asset('img/mastercard-icon.svg') }}"
                                        alt="mastercard" class="h-5 lg:h-12">
                                    <img src="{{ asset('img/apple-pay.svg') }}"
                                        alt="apple pay" class="h-5 lg:h-12 border border-gray-100">
                                    <img src="{{ asset('img/stripe.webp') }}"
                                        alt="apple pay" class="h-5 lg:h-12 border border-gray-100 ">
                                </a>
                            </div>
                            <!-- Quantity and add to cart section -->
                            <div class="pb-3 mt-4">
                                <p class="text-gray-500 text-sm pb-2">Quantity</p>
                                <div class="flex items-center gap-4">
                                    <div class="flex items-center border border-gray-300" x-data="{ quantity: 1 }">
                                        <button class="px-3 py-2 cursor-pointer"
                                            @click="quantity = quantity > 1 ? quantity - 1 : 1">
                                            <x-heroicon-o-minus class="h-5 w-5" />
                                        </button>
                                        <input type="text"
                                            class="w-12 h-11 border-gray-300 px-2 py-1 text-center"
                                            x-model="quantity"
                                            @input="quantity = $event.target.value.replace(/[^0-9]/g, ''); quantity = quantity === '' ? 1 : parseInt(quantity)">
                                        <button class="px-3 py-2 cursor-pointer"
                                            @click="quantity++">
                                            <x-heroicon-o-plus class="h-5 w-5" />
                                        </button>
                                    </div>

                                    <div>
                                        <a href="#" class="text-sm font-semibold flex items-center gap-1 border py-3 px-4 bg-[#01998C] text-white hover:bg-[#017A6B]">
                                            <div class="group">
                                                <x-heroicon-o-plus-circle class="h-5 w-5 group-hover:hidden" />
                                            </div>
                                            <p>ADD TO CART</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-sm pt-4 text-start space-y-1">
                                    <p class="text-gray-800 flex justify-start gap-1">
                                        <x-heroicon-o-calculator class="h-5 w-5" />
                                        <span>Total amount =<span class="font-bold text-[#017A6B]">$5.70</span> ($5.70/each)</span>
                                    </p>
                                    <p class="text-gray-800">Your Spend Discount of<span class="font-bold text-[#017A6B]"> 5%</span> has been applied</p>
                                    <p class="text-gray-800">Spend a further <span class="font-bold text-[#017A6B]">$94.00</span> to get <span class="font-bold text-[#017A6B]">10% </span> your Total Order</p>
                                    <p class="text-gray-800 flex justify-start gap-1">
                                        <x-heroicon-o-truck class="h-5 w-5" />
                                        <span>Order within the next<span class="font-bold text-[#017A6B]"> 01day, 19hours, 30minutes </span> next dispatch Monday 1pm</span>
                                    </p>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Full Description Section -->
        <div class="py-4">

            <!-- Navigation Tabs -->
            <div class="w-full" x-data="{ activeTab: 'Description' }">
                <!-- Navigation Tabs -->
                <div class="flex flex-col sm:flex-row mb-4 sm:mb-8 w-full justify-between gap-4">
                    <nav class="flex flex-row justify-between items-center w-full overflow-x-auto" role="tablist">
                        <button id="Description-tab"
                            role="tab"
                            aria-selected="true"
                            aria-controls="Description"
                            class="tab-button flex-1 text-center px-2 sm:px-4 py-2 text-sm sm:text-base font-semibold text-[var(--main-color)] border-b-2 border-[var(--main-color)]"
                            onclick="showTab('Description')">
                            Description
                        </button>
                        <button id="Specification-tab" class="tab-button flex-1 text-center px-2 sm:px-4 py-2 text-sm sm:text-base text-gray-500" onclick="showTab('Specification')">Specification</button>


                        <button id="Downloads-tab" class="tab-button flex-1 text-center px-2 sm:px-4 py-2 text-sm sm:text-base text-gray-500" onclick="showTab('Downloads')">Downloads</button>
                        <button id="review-tab" class="tab-button flex-1 text-center px-2 sm:px-4 py-2 text-sm sm:text-base text-gray-500" onclick="showTab('review')">Review</button>
                    </nav>
                </div>

                <!-- Products Grid -->
                <div id="Description" class="tab-content block">
                    <div
                        class="prose max-w-none text-gray-600 [&>ul]:list-disc [&>ol]:list-decimal [&>ul]:ml-4 [&>ol]:ml-4 [&>p]:mb-4 last:[&>p]:mb-0">
                        <div className="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-lg">
                            <h2 className="text-2xl font-bold text-gray-800 mb-4">
                                Airvent AC Headerbox Fan
                            </h2>
                            <p className="text-gray-600 mb-6">
                                A high-performance solution designed for effective air movement and ventilation in various environments. With its robust construction and advanced features, this fan ensures efficient airflow and reliable operation, making it an ideal choice for both residential and commercial applications.
                            </p>

                            <h3 className="text-xl font-semibold text-gray-700 mb-2">Features:</h3>
                            <ul className="list-disc pl-6 space-y-2 text-gray-600">
                                <li><strong className="text-gray-800">High Performance:</strong> Engineered for maximum airflow and efficiency in air handling systems.</li>
                                <li><strong className="text-gray-800">Durable Construction:</strong> Built with high-quality materials to ensure long-lasting performance and reliability.</li>
                                <li><strong className="text-gray-800">Versatile Application:</strong> Suitable for use in a range of settings, including residential, industrial, and commercial environments.</li>
                                <li><strong className="text-gray-800">Quiet Operation:</strong> Designed to minimize noise while delivering powerful ventilation.</li>
                                <li><strong className="text-gray-800">Easy Installation:</strong> User-friendly design facilitates quick and straightforward installation.</li>
                            </ul>

                            <h3 className="text-xl font-semibold text-gray-700 mt-6 mb-2">Specifications:</h3>
                            <ul className="list-disc pl-6 space-y-2 text-gray-600">
                                <li><strong className="text-gray-800">Type:</strong> Headerbox Fan</li>
                                <li><strong className="text-gray-800">Motor:</strong> AC Motor</li>
                                <li><strong className="text-gray-800">Construction:</strong> High-quality, durable materials</li>
                                <li><strong className="text-gray-800">Application:</strong> Residential, industrial, commercial</li>
                                <li><strong className="text-gray-800">Operation:</strong> Quiet and efficient airflow</li>
                                <li><strong className="text-gray-800">Installation:</strong> Simple and hassle-free</li>
                            </ul>

                            <h3 className="text-xl font-semibold text-gray-700 mt-6 mb-2">Benefits:</h3>
                            <ul className="list-disc pl-6 space-y-2 text-gray-600">
                                <li><strong className="text-gray-800">Efficient Ventilation:</strong> Provides effective airflow to enhance air quality and comfort.</li>
                                <li><strong className="text-gray-800">Long-Lasting:</strong> Reliable construction ensures a long service life and consistent performance.</li>
                                <li><strong className="text-gray-800">Versatile Use:</strong> Suitable for a variety of applications, offering flexibility in installation and operation.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="Specification" class="tab-content hidden">
                    <div class="text-gray-600">
                        specifications
                    </div>

                    <div class="overflow-x-auto -mx-4 sm:mx-0">
                        <div class="min-w-[640px] px-4 sm:px-0">
                            <table class="min-w-full border-collapse border border-gray-200">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="border border-gray-200 px-4 py-2">Fitting Airflow (L/s)
                                        </th>
                                        <th class="border border-gray-200 px-4 py-2">220x90</th>
                                        <th class="border border-gray-200 px-4 py-2">300x60</th>
                                        <th class="border border-gray-200 px-4 py-2">350x75</th>
                                        <th class="border border-gray-200 px-4 py-2">500x75</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td class="border border-gray-200 px-4 py-2 font-medium">100</td>
                                        <td class="border border-gray-200 px-4 py-2">5 Pa</td>
                                        <td class="border border-gray-200 px-4 py-2">9 Pa</td>
                                        <td class="border border-gray-200 px-4 py-2">3 Pa</td>
                                        <td class="border border-gray-200 px-4 py-2">2 Pa</td>
                                    </tr>
                                    <tr class="bg-gray-50 text-center">
                                        <td class="border border-gray-200 px-4 py-2 font-medium">120</td>
                                        <td class="border border-gray-200 px-4 py-2">7 Pa</td>
                                        <td class="border border-gray-200 px-4 py-2">12 Pa</td>
                                        <td class="border border-gray-200 px-4 py-2">5 Pa</td>
                                        <td class="border border-gray-200 px-4 py-2">2 Pa</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="border border-gray-200 px-4 py-2 font-medium">140</td>
                                        <td class="border border-gray-200 px-4 py-2">10 Pa</td>
                                        <td class="border border-gray-200 px-4 py-2">15 Pa</td>
                                        <td class="border border-gray-200 px-4 py-2">6 Pa</td>
                                        <td class="border border-gray-200 px-4 py-2">3 Pa</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div id="Downloads" class="tab-content hidden">
                    <div class="text-gray-600">
                        <div class="w-full mt-8">
                            <table class="w-full border-collapse border-t border-b border-gray-200">
                                <thead class="hidden sm:table-header-group">
                                    <tr class="bg-gray-100">
                                        <th class="text-left p-4">Title</th>
                                        <th class="text-left p-4">Document Type</th>
                                        <th class="p-4">Language</th>
                                        <th class="p-4">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-200 hover:bg-gray-100 flex flex-wrap sm:table-row">
                                        <td class="p-2 px-4 w-3/4 sm:w-auto">
                                            <span class="text-gray-600">Flayer</span><br>
                                            <span class="font-bold">product->sku </span>
                                        </td>
                                        <td class="p-2 items-center hidden sm:flex">
                                            <x-heroicon-o-document class="h-5 w-5 text-gray-500 mr-2" />
                                            Flayer
                                        </td>
                                        <td class="p-2 text-center hidden sm:table-cell">
                                            <select class="border border-gray-300 p-1">
                                                <option>EN</option>
                                                <option>DE</option>
                                                <option>FR</option>
                                            </select>
                                        </td>
                                        <td class="p-2 w-1/4 sm:w-auto flex items-center justify-end sm:justify-center">
                                            <button class="flex items-center bg-[var(--main-color)] text-white px-4 py-2">
                                                Downloads
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200 hover:bg-gray-100 bg-gray-50 flex flex-wrap sm:table-row">
                                        <td class="p-2 px-4 w-3/4 sm:w-auto">
                                            <span class="text-gray-600">Flayer</span><br>
                                            <span class="font-bold">product->sku </span>
                                        </td>
                                        <td class="p-2 items-center hidden sm:flex">
                                            <x-heroicon-o-document class="h-5 w-5 text-gray-500 mr-2" />
                                            Flayer
                                        </td>
                                        <td class="p-2 text-center hidden sm:table-cell">
                                            <select class="border border-gray-300 p-1">
                                                <option>EN</option>
                                                <option>DE</option>
                                                <option>FR</option>
                                            </select>
                                        </td>
                                        <td class="p-2 w-1/4 sm:w-auto flex items-center justify-end sm:justify-center">
                                            <button class="flex items-center bg-[var(--main-color)] text-white px-4 py-2">
                                                Downloads
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200 hover:bg-gray-100 bg-gray-50 flex flex-wrap sm:table-row">
                                        <td class="p-2 px-4 w-3/4 sm:w-auto">
                                            <span class="text-gray-600">Catalogue</span><br>
                                            <span class="font-bold">product->sku </span>
                                        </td>
                                        <td class="p-2 items-center hidden sm:flex">
                                            <x-heroicon-o-document class="h-5 w-5 text-gray-500 mr-2" />
                                            Catalogue
                                        </td>
                                        <td class="p-2 text-center hidden sm:table-cell">
                                            <select class="border border-gray-300 p-1">
                                                <option>EN</option>
                                                <option>DE</option>
                                                <option>FR</option>
                                            </select>
                                        </td>
                                        <td class="p-2 w-1/4 sm:w-auto flex items-center justify-end sm:justify-center">
                                            <button class="flex items-center bg-[var(--main-color)] text-white px-4 py-2">
                                                Downloads
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200 hover:bg-gray-100 bg-gray-50 flex flex-wrap sm:table-row">
                                        <td class="p-2 px-4 w-3/4 sm:w-auto">
                                            <span class="text-gray-600">Catalogue</span><br>
                                            <span class="font-bold">product->sku </span>
                                        </td>
                                        <td class="p-2 items-center hidden sm:flex">
                                            <x-heroicon-o-document class="h-5 w-5 text-gray-500 mr-2" />
                                            Catalogue
                                        </td>
                                        <td class="p-2 text-center hidden sm:table-cell">
                                            <select class="border border-gray-300 p-1">
                                                <option>EN</option>
                                                <option>DE</option>
                                                <option>FR</option>
                                            </select>
                                        </td>
                                        <td class="p-2 w-1/4 sm:w-auto flex items-center justify-end sm:justify-center">
                                            <button class="flex items-center bg-[var(--main-color)] text-white px-4 py-2">
                                                Downloads
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="review" class="tab-content hidden">
                    <div class="prose max-w-none">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-semibold">Customer Reviews</h3>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400 flex">
                                    <x-heroicon-s-star class="h-5 w-5" />
                                    <x-heroicon-s-star class="h-5 w-5" />
                                    <x-heroicon-s-star class="h-5 w-5" />
                                    <x-heroicon-s-star class="h-5 w-5" />
                                    <x-heroicon-s-star class="h-5 w-5" />
                                </span>
                                <span class="text-gray-600">(5 Reviews)</span>
                            </div>
                        </div>

                        <!-- Individual Reviews -->
                        <div class="space-y-6">
                            <div class="border-b pb-6">
                                <div class="flex items-center justify-between mb-2">
                                    <div>
                                        <span class="font-semibold">John D.</span>
                                        <span class="text-gray-500 text-sm ml-2">Verified Purchase</span>
                                    </div>
                                    <span class="text-yellow-400 flex">
                                        <x-heroicon-s-star class="h-4 w-4" />
                                        <x-heroicon-s-star class="h-4 w-4" />
                                        <x-heroicon-s-star class="h-4 w-4" />
                                        <x-heroicon-s-star class="h-4 w-4" />
                                        <x-heroicon-s-star class="h-4 w-4" />
                                    </span>
                                </div>
                                <p class="text-gray-600">Exceptional quality and craftsmanship. The attention to detail is remarkable.</p>
                            </div>

                            <div class="border-b pb-6">
                                <div class="flex items-center justify-between mb-2">
                                    <div>
                                        <span class="font-semibold">Michael R.</span>
                                        <span class="text-gray-500 text-sm ml-2">Verified Purchase</span>
                                    </div>
                                    <span class="text-yellow-400 flex">
                                        <x-heroicon-s-star class="h-4 w-4" />
                                        <x-heroicon-s-star class="h-4 w-4" />
                                        <x-heroicon-s-star class="h-4 w-4" />
                                        <x-heroicon-s-star class="h-4 w-4" />
                                        <x-heroicon-s-star class="h-4 w-4" />
                                    </span>
                                </div>
                                <p class="text-gray-600">Fast shipping and excellent customer service. Very satisfied with my purchase.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Button -->
        <div class="mt-8 text-center">
            <a href="{{ url('/contact') }}"
                class="group inline-flex items-center bg-[var(--main-color)] text-white px-8 py-4 hover:opacity-80  space-x-2">
                <x-heroicon-o-chat-bubble-left-ellipsis class="w-5 h-5" />
                <span>Contact Us About This Product</span>
                <x-heroicon-o-arrow-right
                    class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" />
            </a>
        </div>
    </div>

    <!-- Related Products Section remains the same -->
    <div class="max-w-7xl mx-auto px-4 py-8">
        <h3 class="text-2xl font-medium mb-6 flex items-center justify-left border-b pb-2">
            Related Products
        </h3>
        <div
            class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-4 sm:gap-6">
            <div class="overflow-hidden mb-4 border-e  border-t border-b border-l border-gray-300 hover:border hover:border-[#01998C] transition-all duration-200 relative group">
                <div class="absolute top-2 left-2 bg-[#01998C] text-white px-3 py-1 text-xs font-semibold z-10">
                    SALE
                </div>

                <div class="bg-cover bg-center" style="background-image: url('{{ $bgImage }}');"> <a href="/products/single"><img src="{{ asset('img/Drop_in_Anchor.png') }}" alt="EC Inline"
                            class="w-full h-auto sm:h-40 md:h-44 lg:h-48 xl:h-52 object-contain transition-transform duration-300 hover:scale-105 p-2 sm:p-4"></a> </div>
                <div class="p-6">
                    <p class="text-gray-600 text-xs pb-1">
                        SKU: ECIF40-100
                    </p>
                    <div class="h-[48px]">
                        <h2 class="text-gray-800 text-base hover:text-[var(--main-color)] pb-1 font-semibold leading-5">
                            <a href="/products/single">
                                M10x30mm HKD/Drop in anchor</a>
                        </h2>
                    </div>

                    <!-- <p class="text-gray-600 text-xs pb-2 absolute top-45 left-2 flex items-center gap-2 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-200 ">
                    Fastener & Screw
                </p> -->

                    <div class="flex justify-between items-center ">
                        <!-- <div class="flex items-center gap-1 absolute top-45 right-2 flex items-center gap-2 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-200">
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                    </div> -->
                        <!-- Action buttons that appear on hover -->
                        <div class="absolute top-2 right-2 flex items-center gap-2 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-200">
                            <button class="p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                                <x-heroicon-o-heart class="h-4 w-4 text-gray-400 hover:text-[var(--main-color)]" />
                            </button>
                            <button class="p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                                <x-heroicon-o-arrow-path class="h-4 w-4 text-gray-400 hover:text-[var(--main-color)]" />
                            </button>
                        </div>
                    </div>
                    <div class="flex justify-between items-center ">
                        <div>
                            <p class="text-[#01998C] font-semibold">$8.50</p>
                            <p class="text-gray-400 text-xs font-medium line-through">$15.00</p>

                        </div>
                        <div>
                            <a href="#" class="text-sm font-semibold flex items-center gap-1">
                                <div class="group">
                                    <x-heroicon-o-plus-circle class="h-5 w-5 group-hover:hidden text-[#302D2A]" />
                                    <x-heroicon-s-plus-circle class="h-5 w-5 hidden group-hover:block text-[#01998C]" />
                                </div>
                                <p class="text-[#302D2A]">ADD TO CART</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden mb-4 border-e  border-t border-b border-l border-gray-300 hover:border hover:border-[#01998C] transition-all duration-200 relative group">
                <div class="absolute top-2 left-2 bg-[#01998C] text-white px-3 py-1 text-xs font-semibold z-10">
                    SALE
                </div>

                <div class="bg-cover bg-center" style="background-image: url('{{ $bgImage }}');"> <a href="/products/single"><img src="{{ asset('img/Metal Perforated Strapping.webp') }}" alt="EC Inline"
                            class="w-full h-auto sm:h-40 md:h-44 lg:h-48 xl:h-52 object-contain transition-transform duration-300 hover:scale-105 p-2 sm:p-4"></a> </div>
                <div class="p-6">
                    <p class="text-gray-600 text-xs pb-1">
                        SKU: ECIF40-100
                    </p>
                    <div class="h-[48px]">
                        <h2 class="text-gray-800 text-base hover:text-[var(--main-color)] pb-1 font-semibold leading-5">
                            <a href="/products/single">
                                Metal Perforated Straping</a>
                        </h2>
                    </div>

                    <!-- <p class="text-gray-600 text-xs pb-2 absolute top-45 left-2 flex items-center gap-2 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-200 ">
                    Consumable
                </p> -->

                    <div class="flex justify-between items-center ">
                        <!-- <div class="flex items-center gap-1 absolute top-45 right-2 flex items-center gap-2 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-200">
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                    </div> -->
                        <!-- Action buttons that appear on hover -->
                        <div class="absolute top-2 right-2 flex items-center gap-2 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-200">
                            <button class="p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                                <x-heroicon-o-heart class="h-4 w-4 text-gray-400 hover:text-[var(--main-color)]" />
                            </button>
                            <button class="p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                                <x-heroicon-o-arrow-path class="h-4 w-4 text-gray-400 hover:text-[var(--main-color)]" />
                            </button>
                        </div>
                    </div>
                    <div class="flex justify-between items-center ">
                        <div>
                            <p class="text-[#01998C] font-semibold">$8.50</p>
                            <p class="text-gray-400 text-xs font-medium line-through">$15.00</p>

                        </div>
                        <div>
                            <a href="#" class="text-sm font-semibold flex items-center gap-1">
                                <div class="group">
                                    <x-heroicon-o-plus-circle class="h-5 w-5 group-hover:hidden text-[#302D2A]" />
                                    <x-heroicon-s-plus-circle class="h-5 w-5 hidden group-hover:block text-[#01998C]" />
                                </div>
                                <p class="text-[#302D2A]">ADD TO CART</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden mb-4 border-e  border-t border-b border-l border-gray-300 hover:border hover:border-[#01998C] transition-all duration-200 relative group">
                <div class="absolute top-2 left-2 bg-[#01998C] text-white px-3 py-1 text-xs font-semibold z-10">
                    SALE
                </div>

                <div class="bg-cover bg-center" style="background-image: url('{{ $bgImage }}');"> <a href="/products/single"><img src="{{ asset('img/Nude Flexible Duct.webp') }}" alt="EC Inline"
                            class="w-full h-auto sm:h-40 md:h-44 lg:h-48 xl:h-52 object-contain transition-transform duration-300 hover:scale-105 p-2 sm:p-4"></a> </div>
                <div class="p-6">
                    <p class="text-gray-600 text-xs pb-1">
                        SKU: ECIF40-100
                    </p>
                    <div class="h-[48px]">
                        <h2 class="text-gray-800 text-base hover:text-[var(--main-color)] pb-1 font-semibold leading-5">
                            <a href="/products/single">
                                Nude Flexible Duct</a>
                        </h2>
                    </div>

                    <!-- <p class="text-gray-600 text-xs pb-2 absolute top-45 left-2 flex items-center gap-2 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-200 ">
                    Duct & Damper
                </p> -->

                    <div class="flex justify-between items-center ">
                        <!-- <div class="flex items-center gap-1 absolute top-45 right-2 flex items-center gap-2 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-200">
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                    </div> -->
                        <!-- Action buttons that appear on hover -->
                        <div class="absolute top-2 right-2 flex items-center gap-2 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-200">
                            <button class="p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                                <x-heroicon-o-heart class="h-4 w-4 text-gray-400 hover:text-[var(--main-color)]" />
                            </button>
                            <button class="p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                                <x-heroicon-o-arrow-path class="h-4 w-4 text-gray-400 hover:text-[var(--main-color)]" />
                            </button>
                        </div>
                    </div>
                    <div class="flex justify-between items-center ">
                        <div>
                            <p class="text-[#01998C] font-semibold">$8.50</p>
                            <p class="text-gray-400 text-xs font-medium line-through">$15.00</p>

                        </div>
                        <div>
                            <a href="#" class="text-sm font-semibold flex items-center gap-1">
                                <div class="group">
                                    <x-heroicon-o-plus-circle class="h-5 w-5 group-hover:hidden text-[#302D2A]" />
                                    <x-heroicon-s-plus-circle class="h-5 w-5 hidden group-hover:block text-[#01998C]" />
                                </div>
                                <p class="text-[#302D2A]">ADD TO CART</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden mb-4 border-e  border-t border-b border-l border-gray-300 hover:border hover:border-[#01998C] transition-all duration-200 relative group">
                <div class="absolute top-2 left-2 bg-[#01998C] text-white px-3 py-1 text-xs font-semibold z-10">
                    SALE
                </div>

                <div class="bg-cover bg-center" style="background-image: url('{{ $bgImage }}');"> <a href="/products/single"><img src="{{ asset('img/Uni-Boots.webp') }}" alt="EC Inline"
                            class="w-full h-auto sm:h-40 md:h-44 lg:h-48 xl:h-52 object-contain transition-transform duration-300 hover:scale-105 p-2 sm:p-4"></a> </div>
                <div class="p-6">
                    <p class="text-gray-600 text-xs pb-1">
                        SKU: ECIF40-100
                    </p>
                    <div class="h-[48px]">
                        <h2 class="text-gray-800 text-base hover:text-[var(--main-color)] pb-1 font-semibold leading-5">
                            <a href="/products/single">
                                Uniboot</a>
                        </h2>
                    </div>

                    <!-- <p class="text-gray-600 text-xs pb-2 absolute top-45 left-2 flex items-center gap-2 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-200 ">
                    Steel
                </p> -->

                    <div class="flex justify-between items-center ">
                        <!-- <div class="flex items-center gap-1 absolute top-45 right-2 flex items-center gap-2 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-200">
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                        <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                    </div> -->
                        <!-- Action buttons that appear on hover -->
                        <div class="absolute top-2 right-2 flex items-center gap-2 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-200">
                            <button class="p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                                <x-heroicon-o-heart class="h-4 w-4 text-gray-400 hover:text-[var(--main-color)]" />
                            </button>
                            <button class="p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                                <x-heroicon-o-arrow-path class="h-4 w-4 text-gray-400 hover:text-[var(--main-color)]" />
                            </button>
                        </div>
                    </div>
                    <div class="flex justify-between items-center ">
                        <div>
                            <p class="text-[#01998C] font-semibold">$8.50</p>
                            <p class="text-gray-400 text-xs font-medium line-through">$15.00</p>

                        </div>
                        <div>
                            <a href="#" class="text-sm font-semibold flex items-center gap-1">
                                <div class="group">
                                    <x-heroicon-o-plus-circle class="h-5 w-5 group-hover:hidden text-[#302D2A]" />
                                    <x-heroicon-s-plus-circle class="h-5 w-5 hidden group-hover:block text-[#01998C]" />
                                </div>
                                <p class="text-[#302D2A]">ADD TO CART</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    // Make sure Description tab is active by default on page load
    document.addEventListener('DOMContentLoaded', function() {
        showTab('Description');
    });

    function showTab(tabId) {
        // Hide all tab contents
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.add('hidden');
            content.classList.remove('block');
        });

        // Show selected tab content
        const selectedTab = document.getElementById(tabId);
        selectedTab.classList.remove('hidden');
        selectedTab.classList.add('block');

        // Update tab button styles
        document.querySelectorAll('.tab-button').forEach(button => {
            button.classList.remove('text-[var(--main-color)]', 'border-b-2', 'border-[var(--main-color)]');
            button.classList.add('text-gray-500');
        });

        // Set active tab button style
        const activeButton = document.getElementById(tabId + '-tab');
        activeButton.classList.remove('text-gray-500');
        activeButton.classList.add('text-[var(--main-color)]', 'border-b-2', 'border-[var(--main-color)]');
    }

    // Add new code for savings toggle
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('toggleSavings');
        const originalPrices = document.querySelectorAll('.original-price');
        const savingsPercentages = document.querySelectorAll('.savings-percentage');

        toggleButton.addEventListener('change', function() {
            if (this.checked) {
                originalPrices.forEach(price => price.classList.add('hidden'));
                savingsPercentages.forEach(savings => savings.classList.remove('hidden'));
            } else {
                originalPrices.forEach(price => price.classList.remove('hidden'));
                savingsPercentages.forEach(savings => savings.classList.add('hidden'));
            }
        });
    });

    function scrollToReviewsAndOpen() {
        // Get the reviews tab element
        const reviewsTab = document.getElementById('review-tab');

        // Show the reviews tab
        showTab('review');

        // Scroll to the tabs section
        reviewsTab.scrollIntoView({
            behavior: 'smooth'
        });
    }
</script>
<style>
    /* Add custom scrollbar styling */
    .overflow-y-auto {
        scrollbar-width: thin;
        scrollbar-color: rgba(156, 163, 175, 0.5) transparent;
    }

    .overflow-y-auto::-webkit-scrollbar {
        width: 6px;
    }

    .overflow-y-auto::-webkit-scrollbar-track {
        background: transparent;
    }

    .overflow-y-auto::-webkit-scrollbar-thumb {
        background-color: rgba(156, 163, 175, 0.5);
        border-radius: 3px;
    }

    /* Prevent horizontal scrolling in tables */
    table {
        table-layout: fixed;
        width: 100%;
    }

    td {
        word-wrap: break-word;
    }
</style>
@endsection