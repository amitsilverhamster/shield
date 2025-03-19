@extends('layouts.app')
@section('title', 'Your Account')
@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-2xl font-semibold mb-6">Your Account</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Your Orders -->
        <a href="{{url ('your-orders')}}">
            <div class="p-4 bg-white border rounded-lg shadow-sm flex items-center space-x-4 cursor-pointer">
                <img src="{{ asset('img/order.png') }}" alt="Orders" class="w-12">
                <div>
                    <h2 class="text-lg font-medium hover:text-[var(--main-color)]">Your Orders</h2>
                    <p class="text-sm text-gray-600">Track, return, or buy things again</p>
                </div>
            </div>
        </a>

        <!-- Login & Security -->
        <a href="{{url ('user-update')}}">
            <div class="p-4 bg-white border rounded-lg shadow-sm flex items-center space-x-4 cursor-pointer">
                <img src="{{ asset('img/user.png') }}" alt="Security" class="w-12">
                <div>
                    <h2 class="text-lg font-medium hover:text-[var(--main-color)]">Login & Security</h2>
                    <p class="text-sm text-gray-600">Edit login, name, and mobile number</p>
                </div>
            </div>
        </a>

        <!-- Your Addresses -->
        <div class="p-4 bg-white border rounded-lg shadow-sm flex items-center space-x-4 cursor-pointer">
            <img src="{{ asset('img/placeholder.png') }}" alt="Addresses" class="w-12">
            <div>
                <h2 class="text-lg font-medium hover:text-[var(--main-color)]">Your Addresses</h2>
                <p class="text-sm text-gray-600">Edit addresses for orders and gifts</p>
            </div>
        </div>

        <!-- Business Account -->
        <div class="p-4 bg-white border rounded-lg shadow-sm flex items-center space-x-4 cursor-pointer">
            <img src="{{ asset('img/end-user.png') }}" alt="Business" class="w-12">
            <div>
                <h2 class="text-lg font-medium hover:text-[var(--main-color)]">Your business account</h2>
                <p class="text-sm text-gray-600">Sign up for discounts and GST invoices</p>
            </div>
        </div>

        <!-- Payment Options -->
        <div class="p-4 bg-white border rounded-lg shadow-sm flex items-center space-x-4 cursor-pointer">
            <img src="{{ asset('img/credit-card.png') }}" alt="Payments" class="w-12">
            <div>
                <h2 class="text-lg font-medium hover:text-[var(--main-color)]">Payment options</h2>
                <p class="text-sm text-gray-600">Edit or add payment methods</p>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="p-4 bg-white border rounded-lg shadow-sm flex items-center space-x-4 cursor-pointer">
            <img src="{{ asset('img/info.png') }}" alt="Contact" class="w-12">
            <div>
                <h2 class="text-lg font-medium hover:text-[var(--main-color)]">Contact Us</h2>
                <p class="text-sm text-gray-600">Customer service via phone or chat</p>
            </div>
        </div>
    </div>
    <div class="mt-8">
        <h2 class="text-xl font-medium">Based on Browsing History</h2>
        @php
        $products = [
            [
            'image' => 'img/Headerbox-fan-Square-face.webp',
            'label'=>'New',
            'name' => 'Airvent AC Headerbox Fan',
            'sku' => 'ECIF40-100',
            'slug'=>'products/single',
            'price' => 8.50,
            'oldPrice' => 15.00,
            'category' => ['all', 'ductlab', 'airvent']
            ],
            [
            'image' => 'img/vvb.png',
            'label'=>'New',
            'name' => 'V-Box',
            'sku' => 'ECIF40-100',
            'slug'=>'products/single',

            'price' => 8.50,
            'oldPrice' => 15.00,
            'category' => ['all', 'ductlab', 'airvent']
            ],
            [
            'image' => 'img/Channel-Duct-e1662964282865-300x300.webp',
            'label' => null,
            'name' => '204×60 Channel Duct x 2M- Non-Centre Bar',
            'sku' => 'ECIF40-100',
            'slug'=>'products/single',

            'price' => 25.00,
            'oldPrice' => 50.00,
            'category' => ['all', 'ductlab', 'airvent']
            ],
            [
            'image' => 'img/Support-Clip-Metal-300x300.webp',
            'label' => null,
            'name' => '204×60 Support Clip – Metal',
            'sku' => 'ECIF40-100',
            'slug'=>'products/single',

            'price' => 1.50,
            'oldPrice' => 5.00,
            'category' => ['all', 'ductlab', 'airvent']
            ],
            [
            'image' => 'img/90-Degree-Horizontal-Bend-300x300.webp',
            'label' => null,
            'name' => '204×60 90 Degree Horizontal Bend',
            'slug'=>'products/single',

            'sku' => 'ECIF40-100',
            'price' => 8.50,
            'oldPrice' => 15.00,
            'category' => ['all', 'ductlab', 'airvent']
            ],
            [
            'image' => 'img/LinearBarGrille.webp',
            'label' => null,
            'name' => 'Linear Bar Grille [Fixed Core]',
            'sku' => 'ECIF40-100',
            'slug'=>'products/single',

            'price' => 8.50,
            'oldPrice' => 15.00,
            'category' => ['all', 'ductlab', 'airvent']
            ],
            [
            'image' => 'img/Drop_in_Anchor.png',
            'label' => null,
            'name' => 'M10x30mm HKD/Drop in anchor',
            'sku' => 'ECIF40-100',
            'slug'=>'products/single',

            'price' => 8.50,
            'oldPrice' => 15.00,
            'category' => ['all', 'ductlab', 'airvent']
            ],
            [
            'image' => 'img/Metal Perforated Strapping.webp',
            'label' => null,
            'name' => 'Metal Perforated Straping',
            'sku' => 'ECIF40-100',
            'slug'=>'products/single',

            'price' => 8.50,
            'oldPrice' => 15.00,
            'category' => ['all', 'ductlab', 'airvent']
            ],
            [
            'image' => 'img/Nude Flexible Duct.webp',
            'label' => null,
            'name' => 'Nude Flexible Duct',
            'sku' => 'ECIF40-100',
            'slug'=>'products/single',

            'price' => 8.50,
            'oldPrice' => 15.00,
            'category' => ['all', 'ductlab', 'airvent']
            ],
            [
            'image' => 'img/Uni-Boots.webp',
            'label' => null,
            'name' => 'Uniboot',
            'sku' => 'ECIF40-100',
            'slug'=>'products/single',

            'price' => 8.50,
            'oldPrice' => 15.00,
            'category' => ['all', 'ductlab', 'airvent']
            ],
        ];
        @endphp
        <div class="relative mt-4 max-w-7xl mx-auto px-8" 
            x-data="{ 
                activeSlide: 0,
                slidesPerView: 5,
                totalSlides: {{ count($products) }},
                autoplayInterval: null,
                
                init() {
                    this.startAutoplay();
                    this.$watch('activeSlide', value => {
                        if (value < 0) this.activeSlide = this.totalSlides - this.slidesPerView;
                        if (value > this.totalSlides - this.slidesPerView) this.activeSlide = 0;
                    });
                },
                
                startAutoplay() {
                    this.autoplayInterval = setInterval(() => {
                        this.nextSlide();
                    }, 3000);
                },
                
                stopAutoplay() {
                    if (this.autoplayInterval) clearInterval(this.autoplayInterval);
                },
                
                nextSlide() {
                    this.activeSlide = (this.activeSlide + 1) % (this.totalSlides - this.slidesPerView + 1);
                },
                
                prevSlide() {
                    this.activeSlide = this.activeSlide - 1;
                    if (this.activeSlide < 0) {
                        this.activeSlide = this.totalSlides - this.slidesPerView;
                    }
                }
            }"
            @mouseenter="stopAutoplay()"
            @mouseleave="startAutoplay()"
        >
            <div class="relative overflow-hidden py-4">
                <div class="flex transition-transform duration-700 ease-in-out" 
                     :style="`transform: translateX(-${activeSlide * 25}%)`"> {{-- for 5 do 20% each --}}
                    @foreach($products as $index => $product)
                        <div class="flex-none w-1/4 px-2">
                            <div class="group bg-white/80 backdrop-blur-md rounded-lg shadow-sm hover:shadow-lg 
                                      transform hover:-translate-y-1 transition-all duration-500">
                                <x-product-card
                                    :label="$product['label']"
                                    :name="$product['name']"
                                    :sku="$product['sku']"
                                    :slug="$product['slug']"
                                    :price="$product['price']"
                                    :oldPrice="$product['oldPrice']"
                                    :image="$product['image']"
                                    :category="$product['category']" />
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button @click="prevSlide()" 
                class="absolute -left-6 top-1/2 transform -translate-y-1/2 bg-white/80 backdrop-blur-md p-4 rounded-full
                       shadow-lg hover:shadow-2xl hover:bg-white z-10 transition-all duration-300 border border-white/20
                       group">
                <x-heroicon-o-chevron-left class="w-6 h-6 text-gray-700 group-hover:text-[var(--main-color)] transition-colors duration-300" />
            </button>
            <button @click="nextSlide()" 
                class="absolute -right-6 top-1/2 transform -translate-y-1/2 bg-white/80 backdrop-blur-md p-4 rounded-full
                       shadow-lg hover:shadow-2xl hover:bg-white z-10 transition-all duration-300 border border-white/20
                       group">
                <x-heroicon-o-chevron-right class="w-6 h-6 text-gray-700 group-hover:text-[var(--main-color)] transition-colors duration-300" />
            </button>

            <!-- Progress Indicator -->
            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <template x-for="(_, index) in Array.from({ length: totalSlides - slidesPerView + 1 })" :key="index">
                    <button @click="activeSlide = index"
                        :class="{'bg-[var(--main-color)]': activeSlide === index, 'bg-gray-300': activeSlide !== index}"
                        class="w-2 h-2 rounded-full transition-all duration-300 hover:scale-150">
                    </button>
                </template>
            </div>
        </div>
    </div>
<div class="mt-8">
    <h3 class="text-xl font-medium">Browsing History</h3>
    
    <div class="relative mt-4" 
        x-data="{ 
            activeSlide: 0,
            slidesPerView: 5,
            totalSlides: {{ count($products) }},
            autoplayInterval: null,
            
            init() {
                this.startAutoplay();
                this.$watch('activeSlide', value => {
                    if (value < 0) this.activeSlide = this.totalSlides - this.slidesPerView;
                    if (value > this.totalSlides - this.slidesPerView) this.activeSlide = 0;
                });
            },
            
            startAutoplay() {
                this.autoplayInterval = setInterval(() => {
                    this.nextSlide();
                }, 3000);
            },
            
            stopAutoplay() {
                if (this.autoplayInterval) clearInterval(this.autoplayInterval);
            },
            
            nextSlide() {
                this.activeSlide = (this.activeSlide + 1) % (this.totalSlides - this.slidesPerView + 1);
            },
            
            prevSlide() {
                this.activeSlide = this.activeSlide - 1;
                if (this.activeSlide < 0) {
                    this.activeSlide = this.totalSlides - this.slidesPerView;
                }
            },
            removeFromHistory(index) {
                // Here you would typically make an API call to remove the item
                // For now, we'll just console.log
                console.log('Removing item at index:', index);
            }
        }"
        @mouseenter="stopAutoplay()"
        @mouseleave="startAutoplay()"
    >
        <div class="relative overflow-hidden py-4">
            <div class="flex transition-transform duration-700 ease-in-out" 
                 :style="`transform: translateX(-${activeSlide * 20}%)`">
                @foreach($products as $index => $product)
                    <div class="flex-none w-1/5 px-2">
                        <div class="bg-white/80 backdrop-blur-md border border-gray-300 hover:border-[#01998C] transition-all duration-300 relative">
                            <button 
                                @click.prevent="removeFromHistory({{ $index }})"
                                class="absolute -top-2 -right-2 z-10 bg-white rounded-full p-1 shadow-md hover:bg-red-50 transition-colors duration-300"
                            >
                                <x-heroicon-o-x-mark class="w-4 h-4 text-red-500"/>
                            </button>
                            <a href="{{ url($product['slug']) }}" class="block">
                                <div class="bg-cover bg-center" style="background-image: url('{{ asset('img/grey-triangle-16-9.webp') }}');">
                                    <img src="{{ asset($product['image']) }}" 
                                         alt="{{ $product['name'] }}" 
                                         class="w-full h-32 object-contain hover:scale-105 transition-transform duration-300 p-2 mix-blend-multiply">
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Navigation Buttons -->
        <button @click="prevSlide()" 
            class="absolute -left-4 top-1/2 transform -translate-y-1/2 bg-white/80 backdrop-blur-md p-2 rounded-full
                   shadow-lg hover:shadow-xl hover:bg-white z-10 transition-all duration-300 border border-white/20">
            <x-heroicon-o-chevron-left class="w-4 h-4 text-gray-700" />
        </button>
        <button @click="nextSlide()" 
            class="absolute -right-4 top-1/2 transform -translate-y-1/2 bg-white/80 backdrop-blur-md p-2 rounded-full
                   shadow-lg hover:shadow-xl hover:bg-white z-10 transition-all duration-300 border border-white/20">
            <x-heroicon-o-chevron-right class="w-4 h-4 text-gray-700" />
        </button>

        <!-- Progress Indicator -->
        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 flex space-x-1">
            <template x-for="(_, index) in Array.from({ length: totalSlides - slidesPerView + 1 })" :key="index">
                <button @click="activeSlide = index"
                    :class="{'bg-[var(--main-color)]': activeSlide === index, 'bg-gray-300': activeSlide !== index}"
                    class="w-1.5 h-1.5 rounded-full transition-all duration-300">
                </button>
            </template>
        </div>
    </div>
</div>
</div>
@endsection