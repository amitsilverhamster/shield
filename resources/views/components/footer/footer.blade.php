<footer class="fixed-bottom left-0 right-0 bg-white shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.1)] z-40">
    <div class="max-w-7xl mx-auto px-4 py-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- About Us Section -->
        <div class="space-y-4">
            <h3 class="font-semibold text-gray-800 text-lg sm:text-base mb-4">About Us</h3>
            <p class="text-sm text-gray-600">
                Airvent Australia is a leading supplier of Flat Duct & Fans in Australia.
            </p>
        </div>

        <!-- Contact Section -->
        <div class="space-y-4">
            <h3 class="font-semibold text-gray-800 text-lg sm:text-base mb-4">Contact</h3>
            <div class="space-y-4 text-sm">
                <p class="text-gray-600">
                    <strong class="block mb-1">PHONE</strong>
                    Sales: 1300 123 828<br>
                    Enquiries: 02 8328 1322
                </p>
                <p class="text-gray-600">
                    <strong class="block mb-1">EMAIL</strong>
                    <a href="mailto:sales@airvent.com.au"
                        class="hover:underline hover:text-[var(--main-color)]">sales@airvent.com.au</a>
                </p>
                <p class="text-gray-600">
                    <strong class="block mb-1">Opening Hours</strong>
                    Mon - Fri, 7:30 am - 3:30 pm<br>
                    Closed weekends and public holidays
                </p>
            </div>
        </div>

        <!-- Links Section -->
        <div class="space-y-4">
            <h3 class="font-semibold text-gray-800 text-lg sm:text-base mb-4">Quick Links</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="text-gray-600 hover:text-[var(--main-color)] hover:underline block">Help
                        Centre</a></li>
                <li><a href="#"
                        class="text-gray-600 hover:text-[var(--main-color)] hover:underline block">Events</a></li>
                <li><a href="#" class="text-gray-600 hover:text-[var(--main-color)] hover:underline block">About
                        Us</a></li>
                <li><a href="#"
                        class="text-gray-600 hover:text-[var(--main-color)] hover:underline block">Products</a></li>
                <li><a href="#"
                        class="text-gray-600 hover:text-[var(--main-color)] hover:underline block">Projects</a></li>
                <li><a href="#"
                        class="text-gray-600 hover:text-[var(--main-color)] hover:underline block">Downloads</a></li>
                <li><a href="#"
                        class="text-gray-600 hover:text-[var(--main-color)] hover:underline block">Certificates</a></li>
            </ul>
        </div>

        <!-- PVC Sizes Section -->
        <div class="space-y-4">
            <h3 class="font-semibold text-gray-800 text-lg sm:text-base mb-4">PVC Sizes</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#"
                        class="text-gray-600 hover:text-[var(--main-color)] hover:underline block">204×60</a></li>
                <li><a href="#"
                        class="text-gray-600 hover:text-[var(--main-color)] hover:underline block">220×90</a></li>
                <li><a href="#"
                        class="text-gray-600 hover:text-[var(--main-color)] hover:underline block">300×60</a></li>
                <li><a href="#"
                        class="text-gray-600 hover:text-[var(--main-color)] hover:underline block">350×75</a></li>
                <li><a href="#"
                        class="text-gray-600 hover:text-[var(--main-color)] hover:underline block">500×75</a></li>
            </ul>
        </div>
    </div>

    <!-- Footer Bottom Section -->
    <div class="bg-gray-200 py-3">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col sm:flex-row justify-between items-center space-y-4 sm:space-y-0">
                <button onclick="toggleModal('languageModal')" class="flex items-center space-x-1 text-sm">
                    <span>Australia / English</span>
                    <x-heroicon-o-chevron-down class="w-4 h-3 stroke-[4]" />
                </button>
                <div class="flex flex-wrap justify-center gap-4 text-sm">
                    <a href="/privacy-policy" class="hover:underline hover:text-[var(--main-color)]">Privacy Policy</a>
                    <a href="/refund-and-return-policy" class="hover:underline hover:text-[var(--main-color)]">Refund
                        and Returns Policy</a>
                    <a href="/disclaimer" class="hover:underline hover:text-[var(--main-color)]">Disclaimer</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo Section -->
    <div class="bg-black">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="flex flex-col flex-row justify-between items-center space-y-4 ">
                <a href="/">
                    <img src="{{ asset('img/hvac_white.png') }}" alt="Logo" class="h-8 sm:h-10">
                </a>
                <div class="flex space-x-6">
                    <a href="https://www.linkedin.com/company/airvent-australia/"
                        class="text-white hover:text-gray-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M0 0v24h24V0H0zm8 19H5V8h3v11zM6.5 6.732c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zM20 19h-3v-5.604c0-3.368-4-3.113-4 0V19h-3V8h3v1.765c1.396-2.586 7-2.777 7 2.476V19z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Use the language modal component -->
