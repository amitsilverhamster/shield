@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Form Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 border-b border-gray-300 pb-6">
            <!-- Form Section - Takes 1 column -->
            <form class="md:col-span-1" action="{{ route('contact.storeContactForm') }}" method="POST" id="contactForm">
                @csrf
                @if (session('success'))
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)"
                        class="max-w-4xl mx-auto mt-4 p-4 bg-green-100 border border-green-400 text-green-700 relative">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                @if (session('error'))
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)"
                        class="max-w-4xl mx-auto mt-4 p-4 bg-red-100 border border-red-400 text-red-700 relative">
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif
                <h2 class="text-xl font-bold mb-4">Contact Us</h2>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Full Name <span class="text-red-500">*</span></label>
                    <input type="text" id="name" name="name"
                        class="px-2 mt-1 block w-full h-10 border-gray-300 border @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email"
                        class="px-2 mt-1 block w-full h-10 border-gray-300 border @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700">Message <span class="text-red-500">*</span></label>
                    <textarea id="message" name="message" rows="4"
                        class="p-2 mt-1 block w-full border-gray-300 border @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full bg-[var(--main-color)] hover:opacity-80 cursor-pointer text-white py-2 px-4">Submit</button>
            </form>

            <!-- Locations Section - Takes 2 columns -->
            <div class="md:col-span-2 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <h3 class="text-lg font-semibold">Queensland</h3>
                    <div class="flex items-start gap-2 py-4">
                        <x-heroicon-o-map-pin class="text-[var(--main-color)] w-12 mt-3" />
                        <div>
                            <p class="text-sm">Unit 6, 36 Bunya Street, Eagle Farm QLD 4009</p>
                            <p class="text-xs text-gray-500">Hours: 7:30 am to 3:30 pm</p>
                        </div>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14164.844539505775!2d153.082959!3d-27.43153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b9158e031be947b%3A0x897c5f086cc312f8!2s6%2F36%20Bunya%20St%2C%20Eagle%20Farm%20QLD%204009%2C%20Australia!5e0!3m2!1sen!2sin!4v1739254947095!5m2!1sen!2sin"
                        class="w-full h-60 mt-2 shadow-md"></iframe>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Victoria</h3>
                    <div class="flex items-start gap-2 py-4">
                        <x-heroicon-o-map-pin class="text-[var(--main-color)] w-9 mt-2" />
                        <div>
                            <p class="text-sm">2A Link Road, Pakenham VIC 3810</p>
                            <p class="text-xs text-gray-500">Hours: 7:30 am to 3:30 pm</p>
                        </div>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12558.982052281233!2d145.480354!3d-38.099587!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad61d8d5a04d72f%3A0x4ac3ebf153da4faa!2s2%20Link%20Rd%2C%20Pakenham%20VIC%203810%2C%20Australia!5e0!3m2!1sen!2sin!4v1739255027248!5m2!1sen!2sin"
                        class="w-full h-60 mt-2 shadow-md"></iframe>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">New South Wales</h3>
                    <div class="flex items-start gap-2 py-4">
                        <x-heroicon-o-map-pin class="text-[var(--main-color)] w-10 mt-2" />
                        <div>
                            <p class="text-sm">Unit 4, 7 Stubbs Street, Auburn NSW 2144</p>
                            <p class="text-xs text-gray-500">Hours: 7:30 am to 3:30 pm</p>
                        </div>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13255.653117139322!2d151.036371!3d-33.84034700000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a3521b7c741b%3A0xedea460a845165e9!2s4%2F7%20Stubbs%20St%2C%20Auburn%20NSW%202144%2C%20Australia!5e0!3m2!1sen!2sin!4v1739255055661!5m2!1sen!2sin"
                        class="w-full h-60 mt-2 shadow-md"></iframe>
                </div>
            </div>
            <div class="md:col-start-2">
                <h3 class="text-lg font-semibold">New South Wales</h3>
                <div class="flex items-start gap-2 py-4">
                    <x-heroicon-o-map-pin class="text-[var(--main-color)] w-8 mt-1" />
                    <div>
                        <p class="text-sm">PO Box 8282, Baulkham Hills NSW 2153</p>
                        <p class="text-xs text-gray-500">Postal Address</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Info Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 py-6">
            <!-- General Enquiries -->
            <div class="">
                <h3 class="text-lg font-semibold">GENERAL ENQUIRIES</h3>
                <div class="flex items-center gap-2 mt-1">
                    <x-heroicon-o-phone class="w-6 h-6 text-[var(--main-color)]" />
                    <div>
                        <p class="mt-2 text-sm">
                            <a href="mailto:sales@ductlab.com.au" class="text-teal-600 hover:underline">
                                sales@ductlab.com.au
                            </a>
                        </p>
                        <p class="mt-1 text-xs text-gray-600">02 8328 1322</p>
                        <p class="text-xs text-gray-600">1300 123 828</p>
                    </div>
                </div>
            </div>

            <!-- Sales & Product Support -->
            <div class="">
                <h3 class="text-lg font-semibold">SALES & PRODUCT SUPPORT</h3>
                <div class="flex items-center gap-2 mt-1">
                    <x-heroicon-o-phone class="w-6 h-6 text-[var(--main-color)]" />
                    <div>
                        <p class="mt-2 text-sm">
                            <a href="mailto:bryan@airvent.com.au" class="text-teal-600 hover:underline">
                                bryan@airvent.com.au
                            </a>
                        </p>
                        <p class="mt-1 text-xs text-gray-600">0411 797 282</p>
                        <p class="text-xs text-gray-600">(Bryan)</p>
                    </div>
                </div>
            </div>

            <!-- Order & Delivery Enquiries -->
            <div class="">
                <h3 class="text-lg font-semibold">ORDER & DELIVERY ENQUIRIES</h3>
                <div class="flex items-center gap-2 mt-1">
                    <x-heroicon-o-phone class="w-6 h-6 text-[var(--main-color)]" />
                    <div>
                        <p class="mt-2 text-sm">
                            <a href="mailto:orders@airvent.com.au" class="text-teal-600 hover:underline">
                                orders@airvent.com.au
                            </a>
                        </p>
                        <p class="mt-1 text-xs text-gray-600">0423 190 611</p>
                        <p class="text-xs text-gray-600">(Gina)</p>
                        <p class="mt-1 text-xs text-gray-600">0451 037 643</p>
                        <p class="text-xs text-gray-600">(Andrey)</p>
                    </div>
                </div>
            </div>

            <!-- Quote & Estimating -->
            <div class="">
                <h3 class="text-lg font-semibold">QUOTE & ESTIMATING</h3>
                <div class="flex items-center gap-2 mt-1">
                    <x-heroicon-o-phone class="w-6 h-6 text-[var(--main-color)]" />
                    <div>
                        <p class="mt-2 text-sm">
                            <a href="mailto:estimating@airvent.com.au" class="text-teal-600 hover:underline">
                                estimating@airvent.com.au
                            </a>
                        </p>
                        <p class="mt-1 text-xs text-gray-600">0432 583 388</p>
                        <p class="text-xs text-gray-600">(Candy)</p>
                    </div>
                </div>
            </div>

            <!-- Purchasing & Marketing Enquiry -->
            <div class="">
                <h3 class="text-lg font-semibold">PURCHASING & MARKETING ENQUIRY</h3>
                <div class="flex items-center gap-2 mt-1">
                    <x-heroicon-o-phone class="w-6 h-6 text-[var(--main-color)]" />
                    <div>
                        <p class="mt-2 text-sm">
                            <a href="mailto:purchasing@airvent.com.au" class="text-teal-600 hover:underline">
                                purchasing@airvent.com.au
                            </a>
                        </p>
                        <p class="mt-1 text-xs text-gray-600">0411 668 875</p>
                        <p class="text-xs text-gray-600">(Ravi)</p>
                    </div>
                </div>
            </div>

            <!-- Employment & Account Enquiry -->
            <div class="">
                <h3 class="text-lg font-semibold">EMPLOYMENT & ACCOUNT ENQUIRY</h3>
                <div class="flex items-center gap-2 mt-1">
                    <x-heroicon-o-phone class="w-6 h-6 text-[var(--main-color)]" />
                    <div>
                        <p class="mt-2 text-sm">
                            <a href="mailto:accounts@airvent.com.au" class="text-teal-600 hover:underline">
                                accounts@airvent.com.au
                            </a>
                        </p>
                        <p class="mt-1 text-sm">
                            <a href="mailto:admin@airvent.com.au" class="text-teal-600 hover:underline">
                                admin@airvent.com.au
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        // Auto hide success message after 2 seconds
        if (document.getElementById('successMessage')) {
            setTimeout(function() {
                closeMessage();
            }, 2000);
        }

        function closeMessage() {
            const message = document.getElementById('successMessage');
            if (message) {
                message.style.opacity = '0';
                message.style.transition = 'opacity 0.5s';
                setTimeout(() => {
                    message.remove();
                }, 500);
            }
        }
    </script>
@endsection
