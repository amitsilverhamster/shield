@extends('layouts.app')
@section('title', ' Add To Cart')
@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid grid-cols-12 gap-6 items-center">
            <div class="col-span-12 md:col-span-9">
                <h2 class="text-2xl font-semibold mb-4">Shopping Cart</h2>
                <div class="max-w-4xl mx-auto bg-white p-6   border">

                    <a href="#" class="text-[#0A9387] text-sm font-medium">Select all items</a>

                    <div class="flex  border-b pb-4 mt-4">
                        <input type="checkbox" class="mr-4">
                        <img src="{{ asset('img/Channel-Duct-e1662964282865-300x300.webp') }}" alt="Product" class="w-35 h-35 object-cover items-center ">

                        <div class="ml-4 flex-1">
                            <h3 class="text-lg font-semibold">204×60 Channel Duct x 2M- Non-Centre Bar</h3>
                            <span class="bg-orange-600 text-white text-xs px-2 py-1 ">#1 Best Seller</span>
                            <p class="text-green-600 text-sm mt-1">In stock</p>
                            <p class="text-gray-600 text-sm">SKU: ECIF40-100</p>
                            <div class="flex items-center mt-2 gap-4">
                                <div class="flex items-center border border-gray-300" x-data="{ quantity: 1 }">
                                    <button class="px-3 py-2 cursor-pointer"
                                        @click="quantity = quantity > 1 ? quantity - 1 : 1">
                                        <x-heroicon-o-minus class="h-4 w-4" />
                                    </button>
                                    <input type="text"
                                        class="w-12 h-11 border-gray-300 px-2 py-1 text-center"
                                        x-model="quantity"
                                        @input="quantity = $event.target.value.replace(/[^0-9]/g, ''); quantity = quantity === '' ? 1 : parseInt(quantity)">
                                    <button class="px-3 py-2 cursor-pointer"
                                        @click="quantity++">
                                        <x-heroicon-o-plus class="h-4 w-4" />
                                    </button>
                                </div>
                                <div class="text-sm text-blue-600 mt-2 mr-4">
                                    <a href="#" class="pr-1 border-r  text-red-600 font-medium">Delete</a>
                                    <a href="#" class="pr-1 border-r text-[#0A9387] font-medium">Save for later</a>
                                    <a href="#" class="text-[#0A9387] font-medium">See more</a>
                                </div>

                            </div>

                        </div>

                        <div class="text-right">
                            <p class="  text-xs px-2 py-1  "><span class="bg-red-700 text-white px-2 py-1 mr-1">50% off </span> <span class="text-red-700 font-bold ">Limited time deal</span></p>
                            <p class="text-xl font-semibold text-gray-800">$25.00</p>
                            <p class="text-sm text-gray-500 line-through">$50.00</p>
                        </div>
                    </div>

                    <div class="text-right mt-4 font-semibold text-xl">
                        Subtotal (1 item): $25.00
                    </div>
                </div>
            </div>

            <div class="hidden md:block md:col-span-3 ">
                <div class=" p-2 mt-4 ">
                    <div class="max-w-sm bg-white  p-4 border ">
                        <div class="flex justify-between items-center">
                            <div class="h-4 bg-green-700 w-32 rounded-md"></div>
                            <span class="font-semibold text-gray-900">$100</span>
                        </div>
                        <div class="mt-2 flex items-center text-green-700">
                            <svg class="w-5 h-5 text-green-600 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 5.707 8.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l7-7a1 1 0 000-1.414z" clip-rule="evenodd" />
                            </svg>
                            <span class="font-semibold">Your order is eligible for <span class="font-bold">FREE Delivery.</span></span>
                        </div>
                        <p class="text-gray-500 text-sm">Choose <span class="text-blue-600 font-semibold">FREE Delivery</span> option at checkout.</p>

                        <div class="mt-4 border-t pt-3">
                            <p class="text-lg font-semibold">Subtotal (1 item): <span class="text-black">$25.00</span></p>

                            <button class="mt-4 w-full bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 rounded-md">
                                Proceed to Buy
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- Css for blog content --}}
    <style>
        .blog-content h1 {
            font-size: 2.5rem;
            margin: 1.5rem 0;
        }

        .blog-content h2 {
            font-size: 2rem;
            margin: 1.2rem 0;
        }

        .blog-content h3 {
            font-size: 1.75rem;
            margin: 1rem 0;
        }

        .blog-content p {
            margin: 1rem 0;
            line-height: 1.6;
        }

        .blog-content img {
            max-width: 100%;
            height: auto;
        }
    </style>
</div>


@endsection