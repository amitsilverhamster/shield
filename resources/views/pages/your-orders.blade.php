@extends('layouts.app')
@section('title', 'Your Orders')
@section('content')
<div class="max-w-7xl mx-auto px-4 py-8" x-data="{ 
    showTrackingModal: false,
    activeOrder: null,
    tracking: {
        steps: [
            { status: 'Order Placed', date: 'Jan 15, 2024', done: true },
            { status: 'Processing', date: 'Jan 16, 2024', done: true },
            { status: 'Ready for Shipping', date: 'Jan 17, 2024', done: true },
            { status: 'In Transit', date: 'Jan 18, 2024', done: false },
            { status: 'Out for Delivery', date: '', done: false },
            { status: 'Delivered', date: '', done: false }
        ]
    }
}">
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Your Orders</h1>
        <div class="flex flex-col sm:flex-row w-full md:w-auto gap-3">
            <select class="px-4 py-2.5 text-gray-600 bg-white border border-gray-200 hover:border-[var(--main-color)] transition-colors focus:ring-2 focus:ring-[var(--main-color)]/20 focus:border-[var(--main-color)]">
                <option value="">All Orders</option>
                <option value="processing">Processing</option>
                <option value="shipped">Shipped</option>
                <option value="delivered">Delivered</option>
                <option value="cancelled">Cancelled</option>
            </select>
            <div class="relative">
                <input type="text" 
                    placeholder="Search orders..." 
                    class="w-full sm:w-64 pl-10 pr-4 py-2.5 border border-gray-200 hover:border-[var(--main-color)] transition-colors focus:ring-2 focus:ring-[var(--main-color)]/20 focus:border-[var(--main-color)]">
                <x-heroicon-o-magnifying-glass class="absolute left-3 top-3 w-5 h-5 text-gray-400" />
            </div>
        </div>
    </div>

    <!-- Orders List -->
    <div class="space-y-6">
        <!-- Processing Order -->
        <div class="bg-white shadow-sm p-6 hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-[var(--main-color)]/20">
            <div class="flex justify-between items-start">
                <div>
                    <div class="flex items-center gap-4">
                        <h3 class="text-lg font-semibold">Order #ORD-2024-001</h3>
                        <span class="px-3 py-1 rounded-full text-sm bg-blue-100 text-blue-800">
                            Processing
                        </span>
                    </div>
                    <p class="text-gray-600 text-sm mt-1">Ordered on Jan 15, 2024</p>
                </div>
                <p class="text-lg font-bold">$42.50</p>
            </div>
            
            <div class="mt-4">
                <!-- Processing Status Info -->
                <div class="bg-blue-50 rounded-lg p-4 mb-4">
                    <div class="flex items-center gap-2 text-blue-800">
                        <x-heroicon-o-truck class="w-5 h-5" />
                        <span class="font-medium">Expected Delivery: Jan 22, 2024</span>
                    </div>
                    <p class="text-sm text-blue-600 mt-1">Return available until: Feb 22, 2024</p>
                </div>

                <div class="border-t border-dashed border-gray-200 pt-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <a href="">
                            <div class="flex gap-4 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="relative group">
                                    <img src="{{ asset('img/Headerbox-fan-Square-face.webp') }}" 
                                        alt="Airvent AC Headerbox Fan" 
                                        class="w-24 h-24 object-contain bg-gray-50 rounded-lg shadow-sm group-hover:scale-105 transition-transform duration-300">
                                    <div class="absolute inset-0 ring-1 ring-[var(--main-color)]/20 rounded-lg group-hover:ring-2 group-hover:ring-[var(--main-color)]/40 transition-all"></div>
                                </div>
                                <div>
                                    <h4 class="font-medium">Airvent AC Headerbox Fan</h4>
                                    <p class="text-sm text-gray-600">Quantity: 2</p>
                                    <p class="text-sm font-medium">$8.50</p>
                                </div>
                            </div>
                        </a>

                        <!-- Product Review Section -->
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <div class="mb-3">
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center">
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-o-star class="w-5 h-5 text-yellow-400" />
                                    </div>
                                    <span class="text-sm text-gray-600">(4.0)</span>
                                </div>
                                <p class="text-sm text-gray-600 mt-2">Great product! Works perfectly in my HVAC system.</p>
                            </div>
                            <button class="text-sm text-[var(--main-color)] hover:underline">Write a Review</button>
                        </div>
                    </div>
                </div>

                <!-- Order Actions -->
                <div class="flex flex-wrap justify-between items-center gap-4 mt-6 pt-4 border-t border-gray-200">
                    <div class="flex gap-4">
                        <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-gray-600 hover:text-[var(--main-color)]">
                            <x-heroicon-o-arrow-path class="w-5 h-5" />
                            Buy Again
                        </a>
                        <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-gray-600 hover:text-[var(--main-color)]">
                            <x-heroicon-o-document-text class="w-5 h-5" />
                            Download Invoice
                        </a>
                        <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-gray-600 hover:text-[var(--main-color)]">
                            <x-heroicon-o-arrow-path-rounded-square class="w-5 h-5" />
                            Return or Replace Item
                        </a>
                    </div>
                    <button @click="showTrackingModal = true; activeOrder = 'ORD-2024-001'" 
                        class="inline-flex items-center gap-1 text-sm font-semibold text-gray-600 hover:text-[var(--main-color)]">
                        <x-heroicon-o-truck class="w-5 h-5" />
                        Track Order
                    </button>
                </div>
            </div>
        </div>

        <!-- Shipped Order -->
        <div class="bg-white shadow-sm p-6 hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-[var(--main-color)]/20">
            <div class="flex justify-between items-start">
                <div>
                    <div class="flex items-center gap-4">
                        <h3 class="text-lg font-semibold">Order #ORD-2024-002</h3>
                        <span class="px-3 py-1 rounded-full text-sm bg-gray-100 text-gray-800">
                            Shipped
                        </span>
                    </div>
                    <p class="text-gray-600 text-sm mt-1">Ordered on Jan 12, 2024</p>
                </div>
                <p class="text-lg font-bold">$65.00</p>
            </div>
            
            <div class="mt-4">
                <!-- Shipped Status Info -->
                <div class="bg-gray-100 rounded-lg p-4 mb-4">
                    <div class="flex items-center gap-2 text-gray-800">
                        <x-heroicon-o-truck class="w-5 h-5" />
                        <span class="font-medium text-gray-700">In Transit - Arriving Jan 20, 2024</span>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">Tracking ID: 1Z999AA1234567890</p>
                </div>

                <div class="border-t border-dashed border-gray-200 pt-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex gap-4 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                            <div class="relative group">
                                <img src="{{ asset('img/Headerbox-fan-Square-face.webp') }}" 
                                    alt="Airvent AC Headerbox Fan" 
                                    class="w-24 h-24 object-contain bg-gray-50 rounded-lg shadow-sm group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute inset-0 ring-1 ring-[var(--main-color)]/20 rounded-lg group-hover:ring-2 group-hover:ring-[var(--main-color)]/40 transition-all"></div>
                            </div>
                            <div>
                                <h4 class="font-medium">Airvent AC Headerbox Fan</h4>
                                <p class="text-sm text-gray-600">Quantity: 2</p>
                                <p class="text-sm font-medium">$8.50</p>
                            </div>
                        </div>

                        <!-- Product Review Section -->
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <div class="mb-3">
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center">
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-o-star class="w-5 h-5 text-yellow-400" />
                                    </div>
                                    <span class="text-sm text-gray-600">(4.0)</span>
                                </div>
                                <p class="text-sm text-gray-600 mt-2">Great product! Works perfectly in my HVAC system.</p>
                            </div>
                            <button class="text-sm text-[var(--main-color)] hover:underline">Write a Review</button>
                        </div>
                    </div>
                </div>

                <!-- Order Actions -->
                <div class="flex flex-wrap justify-between items-center gap-4 mt-6 pt-4 border-t border-gray-200">
                    <div class="flex gap-4">
                        <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-gray-600 hover:text-[var(--main-color)]">
                            <x-heroicon-o-arrow-path class="w-5 h-5" />
                            Buy Again
                        </a>
                        <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-gray-600 hover:text-[var(--main-color)]">
                            <x-heroicon-o-document-text class="w-5 h-5" />
                            Download Invoice
                        </a>
                        <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-gray-600 hover:text-[var(--main-color)]">
                            <x-heroicon-o-arrow-path-rounded-square class="w-5 h-5" />
                            Return or Replace Item
                        </a>
                    </div>
                    <button @click="showTrackingModal = true; activeOrder = 'ORD-2024-002'" 
                        class="inline-flex items-center gap-1 text-sm font-semibold text-gray-600 hover:text-[var(--main-color)]">
                        <x-heroicon-o-truck class="w-5 h-5" />
                        Track Order
                    </button>
                </div>
            </div>
        </div>

        <!-- Delivered Order -->
        <div class="bg-white shadow-sm p-6 hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-[var(--main-color)]/20">
            <div class="flex justify-between items-start">
                <div>
                    <div class="flex items-center gap-4">
                        <h3 class="text-lg font-semibold">Order #ORD-2024-003</h3>
                        <span class="px-3 py-1 rounded-full text-sm bg-green-100 text-green-700">
                            Delivered
                        </span>
                    </div>
                    <p class="text-gray-500 text-sm mt-1">Ordered on Jan 5, 2024</p>
                </div>
                <p class="text-lg font-bold">$129.99</p>
            </div>
            
            <div class="mt-4">
                <!-- Delivered Status Info -->
                <div class="bg-green-100 rounded-lg p-4 mb-4">
                    <div class="flex items-center gap-2 text-green-800">
                        <x-heroicon-o-check-circle class="w-5 h-5" />
                        <span class="font-medium">Delivered on Jan 10, 2024</span>
                    </div>
                    <p class="text-sm text-green-700 mt-1">Return available until: Feb 10, 2024</p>
                </div>

                <div class="border-t border-dashed border-gray-200 pt-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex gap-4 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                            <div class="relative group">
                                <img src="{{ asset('img/Headerbox-fan-Square-face.webp') }}" 
                                    alt="Airvent AC Headerbox Fan" 
                                    class="w-24 h-24 object-contain bg-gray-50 rounded-lg shadow-sm group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute inset-0 ring-1 ring-[var(--main-color)]/20 rounded-lg group-hover:ring-2 group-hover:ring-[var(--main-color)]/40 transition-all"></div>
                            </div>
                            <div>
                                <h4 class="font-medium">Airvent AC Headerbox Fan</h4>
                                <p class="text-sm text-gray-600">Quantity: 2</p>
                                <p class="text-sm font-medium">$8.50</p>
                            </div>
                        </div>

                        <!-- Product Review Section -->
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <div class="mb-3">
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center">
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-o-star class="w-5 h-5 text-yellow-400" />
                                    </div>
                                    <span class="text-sm text-gray-600">(4.0)</span>
                                </div>
                                <p class="text-sm text-gray-600 mt-2">Great product! Works perfectly in my HVAC system.</p>
                            </div>
                            <button class="text-sm text-[var(--main-color)] hover:underline">Write a Review</button>
                        </div>
                    </div>
                </div>

                <!-- Order Actions -->
                <div class="flex flex-wrap justify-between items-center gap-4 mt-6 pt-4 border-t border-gray-200">
                    <div class="flex gap-4">
                        <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-gray-600 hover:text-[var(--main-color)]">
                            <x-heroicon-o-arrow-path class="w-5 h-5" />
                            Buy Again
                        </a>
                        <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-gray-600 hover:text-[var(--main-color)]">
                            <x-heroicon-o-document-text class="w-5 h-5" />
                            Download Invoice
                        </a>
                        <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-gray-600 hover:text-[var(--main-color)]">
                            <x-heroicon-o-arrow-path-rounded-square class="w-5 h-5" />
                            Return or Replace Item
                        </a>
                    </div>
                    <button @click="showTrackingModal = true; activeOrder = 'ORD-2024-003'" 
                        class="inline-flex items-center gap-1 text-sm font-semibold text-gray-600 hover:text-[var(--main-color)]">
                        <x-heroicon-o-truck class="w-5 h-5" />
                        Track Order
                    </button>
                </div>
            </div>
        </div>

        <!-- Cancelled Order -->
        <div class="bg-white shadow-sm p-6 hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-[var(--main-color)]/20">
            <div class="flex justify-between items-start">
                <div>
                    <div class="flex items-center gap-4">
                        <h3 class="text-lg font-semibold">Order #ORD-2024-004</h3>
                        <span class="px-3 py-1 rounded-full text-sm bg-red-100 text-red-800">
                            Cancelled
                        </span>
                    </div>
                    <p class="text-gray-600 text-sm mt-1">Ordered on Jan 2, 2024</p>
                </div>
                <p class="text-lg font-bold">$89.99</p>
            </div>
            
            <div class="mt-4">
                <!-- Cancelled Status Info -->
                <div class="bg-red-100 rounded-lg p-4 mb-4">
                    <div class="flex items-center gap-2 text-red-800">
                        <x-heroicon-o-x-circle class="w-5 h-5" />
                        <span class="font-medium">Cancelled on Jan 3, 2024</span>
                    </div>
                    <p class="text-sm text-red-700 mt-1">Reason: Customer requested cancellation</p>
                </div>

                <div class="border-t border-dashed border-gray-200 pt-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex gap-4 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                            <div class="relative group">
                                <img src="{{ asset('img/Headerbox-fan-Square-face.webp') }}" 
                                    alt="Airvent AC Headerbox Fan" 
                                    class="w-24 h-24 object-contain bg-gray-50 rounded-lg shadow-sm group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute inset-0 ring-1 ring-[var(--main-color)]/20 rounded-lg group-hover:ring-2 group-hover:ring-[var(--main-color)]/40 transition-all"></div>
                            </div>
                            <div>
                                <h4 class="font-medium">Airvent AC Headerbox Fan</h4>
                                <p class="text-sm text-gray-600">Quantity: 2</p>
                                <p class="text-sm font-medium">$8.50</p>
                            </div>
                        </div>

                        <!-- Product Review Section -->
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <div class="mb-3">
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center">
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-s-star class="w-5 h-5 text-yellow-400" />
                                        <x-heroicon-o-star class="w-5 h-5 text-yellow-400" />
                                    </div>
                                    <span class="text-sm text-gray-600">(4.0)</span>
                                </div>
                                <p class="text-sm text-gray-600 mt-2">Great product! Works perfectly in my HVAC system.</p>
                            </div>
                            <button class="text-sm text-[var(--main-color)] hover:underline">Write a Review</button>
                        </div>
                    </div>
                </div>
                <!-- Order Actions -->
                <div class="flex flex-wrap justify-between items-center gap-4 mt-6 pt-4 border-t border-gray-200">
                    <div class="flex gap-4">
                        <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-gray-600 hover:text-[var(--main-color)]">
                            <x-heroicon-o-arrow-path class="w-5 h-5" />
                            Buy Again
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tracking Modal -->
    <div x-show="showTrackingModal" 
        class="fixed inset-0 z-50 overflow-y-auto backdrop-blur-sm" 
        style="display: none;">
        
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <div x-show="showTrackingModal"
                class="inline-block align-bottom bg-white px-6 pt-5 pb-6 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full border border-[var(--main-color)]/20">
                
                <div class="absolute top-0 right-0 pt-4 pr-4">
                    <button @click="showTrackingModal = false" class="text-gray-400 hover:text-gray-500">
                        <x-heroicon-o-x-mark class="h-6 w-6" />
                    </button>
                </div>

                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                        <h3 class="text-lg font-medium text-gray-900">
                            Track Order #<span x-text="activeOrder"></span>
                        </h3>

                        <div class="mt-8 space-y-8">
                            <template x-for="(step, index) in tracking.steps" :key="index">
                                <div class="relative">
                                    <div class="flex items-center">
                                        <div :class="`flex-shrink-0 w-8 h-8 rounded-full border-2 ${step.done ? 'border-[var(--main-color)] bg-[var(--main-color)]' : 'border-gray-300'} flex items-center justify-center transition-colors duration-300`">
                                            <template x-if="step.done">
                                                <x-heroicon-s-check class="w-5 h-5 text-white" />
                                            </template>
                                        </div>
                                        <div class="ml-4 flex-grow">
                                            <p class="text-sm font-medium" x-text="step.status"></p>
                                            <p class="text-sm text-gray-500" x-text="step.date"></p>
                                        </div>
                                    </div>
                                    <template x-if="index < tracking.steps.length - 1">
                                        <div :class="`absolute left-4 top-8 -ml-px h-12 w-0.5 ${step.done ? 'bg-[var(--main-color)]' : 'bg-gray-300'} transition-colors duration-300`"></div>
                                    </template>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection