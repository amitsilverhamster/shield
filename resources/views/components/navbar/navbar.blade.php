<nav class="sticky top-0 z-50 py-4 bg-white border-b shadow-sm transition-transform duration-300" id="navbar">
    <style>
        /* Hide the clear button in search input */
        input[type="search"]::-webkit-search-cancel-button {
            -webkit-appearance: none;
            display: none;
        }
    </style>
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between gap-4">
            <!-- Logo -->
            <div class="flex items-center space-x-8">


                <div class="flex-shrink-0">
                    <a href="/">
                        <img src="{{ asset('img/hvac_logo.webp') }}" alt="Logo" class="h-12">
                    </a>
                </div>
                <div class="mt-5">
                    @include('components.navbar.menu')

                </div>
            </div>
            <!-- <div class="hidden md:flex w-1/2 relative mt-3" x-data="{ isOpen: false, searchText: '' }">
            <input type="search"
                x-model="searchText"
                @input="isOpen = searchText.length > 0"
                @click.outside="isOpen = false"
                class="w-full px-4 py-4 focus:outline-none focus:ring-[var(--main-color)] focus:border-[var(--main-color)] border border-gray-200 search:appearance-none"
                placeholder="Search products...">

            <button class="absolute right-8 top-7 -translate-y-1/2 text-gray-500 hover:text-[var(--main-color)]">
                <x-heroicon-o-magnifying-glass class="h-5 w-5" />
            </button>

            Static Suggestions Dropdown
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
        </div> -->

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-gray-500 hover:text-[var(--main-color)]" onclick="toggleMenu()">
                <x-heroicon-o-bars-3 class="h-6 w-6" />
            </button>

            <!-- Icons Section -->
            <div class="hidden md:flex items-center space-x-3">
                <ul class="flex items-center space-x-3">
                    <li class="relative">
                        <a href="/account" class="inline-flex p-2 bg-white rounded-full shadow-sm hover:bg-gray-50 transition-colors">
                            <x-heroicon-o-user class="h-5 w-5 text-gray-400 hover:text-[var(--main-color)]" />
                        </a>
                    </li>
                    <li class="relative">
                        <a href="#" class="inline-flex p-2 bg-white rounded-full shadow-sm hover:bg-gray-50 transition-colors">
                            <x-heroicon-o-heart class="h-5 w-5 text-gray-400 hover:text-[var(--main-color)]" />
                            <span class="absolute -top-1 -right-1 bg-[var(--main-color)] text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">0</span>
                        </a>
                    </li>
                    <li class="relative">
                        <a href="/compare" class="inline-flex p-2 bg-white rounded-full shadow-sm hover:bg-gray-50 transition-colors">
                            <x-heroicon-o-arrow-path class="h-5 w-5 text-gray-400 hover:text-[var(--main-color)]" />
                            <span class="absolute -top-1 -right-1 bg-[var(--main-color)] text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">0</span>
                        </a>
                    </li>
                    <li class="relative">
                        <button @click="cartOpen = true" class="inline-flex p-2 bg-white rounded-full shadow-sm hover:bg-gray-50 transition-colors">
                            <x-heroicon-o-shopping-cart class="h-5 w-5 text-gray-400 hover:text-[var(--main-color)]" />
                            <span class="absolute -top-1 -right-1 bg-[var(--main-color)] text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">2</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        // Existing toggle menu function
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            const menuPanel = menu.querySelector('div');

            if (menu.classList.contains('hidden')) {
                // Show menu
                menu.classList.remove('hidden');
                setTimeout(() => {
                    menu.classList.remove('opacity-0');
                    menuPanel.classList.remove('translate-x-full');
                }, 10);
            } else {
                // Hide menu
                menu.classList.add('opacity-0');
                menuPanel.classList.add('translate-x-full');
                setTimeout(() => {
                    menu.classList.add('hidden');
                }, 300);
            }

            document.body.classList.toggle('overflow-hidden');
        }

        // Add scroll behavior
        let lastScroll = 0;
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll <= 0) {
                navbar.classList.remove('nav-hide');
                return;
            }

            if (currentScroll > lastScroll && !navbar.classList.contains('nav-hide')) {
                // Scroll Down -> Hide nav
                navbar.classList.add('nav-hide');
                navbar.style.transform = 'translateY(-100%)';
            } else if (currentScroll < lastScroll && navbar.classList.contains('nav-hide')) {
                // Scroll Up -> Show nav
                navbar.classList.remove('nav-hide');
                navbar.style.transform = 'translateY(0)';
            }

            lastScroll = currentScroll;
        });
    </script>
</nav>