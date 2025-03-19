@props(['sliders'])

<div x-data="slider()" class="relative h-[650px] sm:h-[700px] md:h-[600px] overflow-hidden">
    <div class="relative h-full">
        <!-- Content and Image Container for mobile stacked layout -->
        <div class="md:hidden grid grid-rows-[60%_40%] h-full">
            <!-- Top row - Image with background -->
            <div class="relative w-full h-full">
                <div class="absolute inset-0" :class="currentSlide.mode === 'light' ? 'bg-[#E5E7EB]' : 'bg-[#0A9387]'">
                </div>
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="currentIndex === index" x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 transform scale-105"
                        x-transition:enter-end="opacity-100 transform scale-100" 
                        class="absolute inset-0 flex items-center justify-center">
                        <img :src="'/storage/' + slide.image" :alt="slide.title"
                            class="w-full h-full object-contain p-4">
                    </div>
                </template>
            </div>
            <!-- Bottom row - Content -->
            <div class="relative w-full h-full">
                <div class="absolute inset-0" :class="currentSlide.mode === 'light' ? 'bg-[#0A9387]' : 'bg-[#E5E7EB]'">
                </div>
                <div class="relative h-full flex flex-col justify-center p-6 z-30">
                    <template x-for="(slide, index) in slides" :key="index">
                        <div x-show="currentIndex === index" x-transition:enter="transition ease-out duration-700"
                            x-transition:enter-start="opacity-0 transform translate-y-12"
                            x-transition:enter-end="opacity-100 transform translate-y-0" class="space-y-3">
                            <h2 class="text-xl sm:text-2xl font-semibold leading-tight"
                                :class="slide.mode === 'light' ? 'text-white' : 'text-[#0A9387]'"
                                x-text="slide.title"></h2>

                            <p class="text-sm leading-relaxed"
                                :class="slide.mode === 'light' ? 'text-[#E5E7EB]' : 'text-gray-800'"
                                x-text="slide.subtitle"></p>

                            <div class="w-24 h-1 rounded-full"
                                :class="slide.mode === 'light' ? 'bg-white/20' : 'bg-gray-300'">
                                <div class="h-full rounded-full transition-all duration-100"
                                    :class="slide.mode === 'light' ? 'bg-white' : 'bg-[#0A9387]'"
                                    :style="`width: ${progress}%`"></div>
                            </div>

                            <a :href="slide.button_link"
                                class="inline-block px-4 py-2 text-sm transition-all duration-300 hover:opacity-80"
                                :class="slide.mode === 'light' ? 'bg-white text-[#0A9387]' : 'bg-[#0A9387] text-white'"
                                x-text="slide.button_text"></a>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        <!-- Desktop layout (hidden on mobile) -->
        <div class="hidden md:block relative h-full">
            <!-- Background containers -->
            <div class="absolute inset-0 w-full h-full">
                <!-- Right column background (full width) -->
                <div class="absolute inset-0 w-full"
                    :class="currentSlide.mode === 'light' ? 'bg-[#0A9387]' : 'bg-[#E5E7EB]'">
                </div>
                <!-- Left column background with tilted right edge -->
                <div class="absolute left-0 top-0 bottom-0 w-[50%] z-10 [clip-path:polygon(0_0,100%_0,90%_100%,0%_100%)]"
                    :class="currentSlide.mode === 'light' ? 'bg-[#E5E7EB]' : 'bg-[#0A9387]'">
                </div>
            </div>

            <!-- Content container -->
            <div class="relative h-full max-w-7xl mx-auto px-4 flex">
                <!-- Left column - Content -->
                <div class="w-[40%] h-full relative z-20">
                    <div class="h-full flex flex-col justify-center">
                        <template x-for="(slide, index) in slides" :key="index">
                            <div x-show="currentIndex === index" 
                                x-transition:enter="transition ease-out duration-700"
                                x-transition:enter-start="opacity-0 transform -translate-y-12"
                                x-transition:enter-end="opacity-100 transform translate-y-0"
                                class="space-y-4">
                                <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold leading-tight"
                                    :class="slide.mode === 'light' ? 'text-[#0A9387]' : 'text-white'"
                                    x-text="slide.title"></h2>

                                <p class="text-base sm:text-lg md:text-xl leading-relaxed"
                                    :class="slide.mode === 'light' ? 'text-gray-800' : 'text-[#E5E7EB]'"
                                    x-text="slide.subtitle"></p>

                                <div class="w-32 h-1 rounded-full mt-8"
                                    :class="slide.mode === 'light' ? 'bg-gray-300' : 'bg-white/20'">
                                    <div class="h-full rounded-full transition-all duration-100"
                                        :class="slide.mode === 'light' ? 'bg-[#0A9387]' : 'bg-white'"
                                        :style="`width: ${progress}%`"></div>
                                </div>

                                <a :href="slide.button_link"
                                    class="inline-block px-6 py-3 mt-4 text-lg transition-all duration-300 hover:opacity-80"
                                    :class="slide.mode === 'light' ? 'bg-[#0A9387] text-white' : 'bg-white text-[#0A9387]'"
                                    x-text="slide.button_text"></a>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- Right column - Image -->
                <div class="w-[60%] h-full relative z-10">
                    <div class="h-full flex items-center justify-center pl-20">
                        <template x-for="(slide, index) in slides" :key="index">
                            <div x-show="currentIndex === index" 
                                x-transition:enter="transition ease-out duration-700"
                                x-transition:enter-start="opacity-0 transform scale-105"
                                x-transition:enter-end="opacity-100 transform scale-100" 
                                class="h-full flex items-center justify-center p-8">
                                <img :src="'/storage/' + slide.image" :alt="slide.title"
                                    class="w-full h-[90%] object-contain">
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation arrows (moved outside and made always visible) -->
    <div class="absolute bottom-4 right-4 sm:bottom-6 sm:right-6 md:bottom-8 md:right-8 flex items-center gap-2 z-40">
        <button @click="prevSlide"
            class="p-2 rounded-full bg-black/30 backdrop-blur-sm hover:bg-black/50 transition-all group">
            <x-heroicon-o-chevron-left
                class="h-4 w-4 sm:h-5 sm:w-5 text-white transform group-hover:-translate-x-1 transition-transform" />
        </button>
        <button @click="nextSlide"
            class="p-2 rounded-full bg-black/30 backdrop-blur-sm hover:bg-black/50 transition-all group">
            <x-heroicon-o-chevron-right
                class="h-4 w-4 sm:h-5 sm:w-5 text-white transform group-hover:translate-x-1 transition-transform" />
        </button>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('slider', () => ({
            slides: @json($sliders),
            currentIndex: 0,
            progress: 0,
            duration: 6000,
            interval: null,

            init() {
                this.startProgress();
            },

            get currentSlide() {
                return this.slides[this.currentIndex];
            },

            startProgress() {
                this.interval = setInterval(() => {
                    this.progress += 1;
                    if (this.progress >= 100) {
                        this.nextSlide();
                        this.progress = 0;
                    }
                }, this.duration / 100);
            },

            nextSlide() {
                this.progress = 0;
                this.currentIndex = (this.currentIndex + 1) % this.slides.length;
            },

            prevSlide() {
                this.progress = 0;
                this.currentIndex = this.currentIndex === 0 ? this.slides.length - 1 : this
                    .currentIndex - 1;
            }
        }));
    });
</script>
