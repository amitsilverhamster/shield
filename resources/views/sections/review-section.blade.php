<!-- review section -->
<section class="relative mt-12 bg-gray-100 py-8">
    <div class="relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
            x-data="sliderReviews"
            @keydown.right="next"
            @keydown.left="prev">
            <!-- Card Section  -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 py-8 md:pb-18 items-center">
                <!-- Header -->
                @if(!request()->is('products/single'))

                <div class="col-span-1 md:col-span-12 flex border-b h-full">
                    <div class="w-full p-2 flex flex-col justify-start h-full">
                        <div class="grid grid-cols-1 place-content-center">
                            <h2 class="text-3xl md:text-3xl mb-1 font-medium  text-[#3B3B3B]">
                                Our Testimonials </h2>
                        </div>
                    </div>
                </div>
                @endif
                <!-- reviews grid -->
                <div class="col-span-1 md:col-span-12 mt-4">
                    <div class="relative flex items-center">
                        <!-- Slider controls - now outside the slider -->
                        <button @click="prev" class="hidden md:block mr-4 bg-white p-2 rounded-full shadow-lg z-10">
                            <x-heroicon-o-chevron-left class="h-6 w-6" />
                        </button>

                        <!-- Slider container -->
                        <div class="overflow-hidden flex-1">
                            <div class="flex transition-transform duration-300 ease-in-out"
                                :style="{ transform: `translateX(-${currentIndex * (100/3)}%)` }">
                                <template x-for="review in slides" :key="review.username">
                                    <div class="w-1/3 flex-none px-2">
                                        <div class="bg-white shadow-sm p-6 flex flex-col aspect-[4/4]">
                                            <div class="mb-4">
                                                <img src="{{asset('img/quotation-mark.webp')}}" class="w-8 h-8" alt="">
                                            </div>
                                            <h3 class="font-semibold mb-2" x-text="review.title"></h3>
                                            <p class="text-gray-600 text-sm mb-4 flex-1 line-clamp-4" x-text="review.content"></p>
                                            <div class="flex items-start space-x-3 mt-auto">
                                                <div class="border rounded-full w-12 h-12 flex-shrink-0">
                                                    <img src="{{asset('img/37306023_8288957.png')}}" alt="" class="rounded-full w-full h-full object-cover">
                                                </div>
                                                <div class="flex-1">
                                                    <p class="text-gray-900 font-medium" x-text="review.username"></p>
                                                    <p class="text-gray-500 text-sm" x-text="review.date"></p>
                                                    <div class="flex items-center mt-1">
                                                        <template x-if="review.rating">
                                                            <div x-data="{ rating: review.rating }">
                                                                <x-star-rating :rating="'x-bind:rating'" />
                                                            </div>
                                                        </template>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <!-- Right button -->
                        <button @click="next" class="hidden md:block ml-4 bg-white p-2 rounded-full shadow-lg z-10">
                            <x-heroicon-o-chevron-right class="h-6 w-6" />
                        </button>
                    </div>

                    <!-- Dots navigation -->
                    <div class="flex justify-center mt-4 space-x-2">
                        <template x-for="(_, index) in [...Array(maxIndex + 1)]" :key="index">
                            <button
                                @click="currentIndex = index"
                                :class="{'bg-[#01998C]': currentIndex === index, 'bg-gray-300': currentIndex !== index}"
                                class="w-2 h-2 md:w-3 md:h-3 rounded-full">
                            </button>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('sliderReviews', () => ({
            currentIndex: 0,
            slides: [{
                    username: 'Jack_Melbourne',
                    rating: 5,
                    date: '2021-10-20',
                    title: 'Top-Notch Quality & Competitive Pricing!',
                    content: 'Bought a Mitsubishi split system from HVAC Warehouse, and I\'m super impressed! The pricing was better than any local store in Melbourne, and the quality is spot on.'
                },
                {
                    username: 'Sarah_Sydney',
                    rating: 5,
                    date: '2021-10-15',
                    title: 'Fast Shipping Across Australia',
                    content: 'Ordered a ducted aircon system for our home in Sydney, and it arrived quicker than expected. Customer service was fantastic and helped me choose the right unit.'
                },
                {
                    username: 'Liam_Pth',
                    rating: 4,
                    date: '2021-10-10',
                    title: 'Great Products, Shipping Could Be Faster',
                    content: 'The Daikin system I ordered is brilliant, and the price was unbeatable. Only downside was that delivery to Perth took a bit longer than expected. Otherwise, great experience!'
                },
                {
                    username: 'Emily_Brisbane',
                    rating: 5,
                    date: '2021-10-05',
                    title: 'Best HVAC Supplier in Australia!',
                    content: 'I\'ve bought multiple air conditioning units for my rental properties, and HVAC Warehouse never disappoints. They have great stock availability, fair prices, and excellent customer service.'
                },
                {
                    username: 'Mike_Tradie',
                    rating: 4,
                    date: '2021-09-30',
                    title: 'Good Deals, Website Needs Improvement',
                    content: 'Found a great deal on a Fujitsu aircon, but the website was a bit tricky to navigate at first. Apart from that, everything was smooth, and the product is top-quality.'
                },
                {
                    username: 'Daniel_HVAC',
                    rating: 5,
                    date: '2021-09-25',
                    title: 'Reliable Aussie Business',
                    content: 'As an HVAC technician, I rely on quality suppliers, and HVAC Warehouse has been amazing. The products are authentic, and their service is excellent. Definitely a trusted name in the industry!'
                },
                {
                    username: 'Alex_GoldCoast',
                    rating: 5,
                    date: '2021-09-20',
                    title: 'Perfect for Homeowners & Tradies',
                    content: 'Bought a ducted heating system for my home, and the whole process was seamless. Great support team, and they had exactly what I needed in stock. Will buy again!'
                },
                {
                    username: 'Chloe_Adelaide',
                    rating: 4,
                    date: '2021-09-15',
                    title: 'Good Prices but Some Items Out of Stock',
                    content: 'The prices here are fantastic, but a couple of models I wanted were out of stock. Ended up getting a different unit, and it\'s working great. Just wish they had more inventory.'
                }
            ],
            get slidesPerView() {
                return 3; // Fixed to always show 3 slides
            },
            get maxIndex() {
                return this.slides.length - this.slidesPerView;
            },
            next() {
                if (this.currentIndex < this.maxIndex) {
                    this.currentIndex++;
                }
            },
            prev() {
                if (this.currentIndex > 0) {
                    this.currentIndex--;
                }
            },
        }));
    });
</script>