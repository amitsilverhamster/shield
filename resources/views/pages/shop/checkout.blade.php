@extends('layouts.app')
@section('title', ' Checkout')
@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Checkout</h1>
            <p class="text-xs text-gray-600">Returning customer? Click here to login</p>
            <p class="text-xs text-gray-600"> Have a coupon? Click here to enter your code</p>
        </div>
    </div>

    <!-- Comparison Table -->
    <div class="grid grid-cols-2 gap-6">
        <!-- Product Column 1 -->
        <div class="p-6 bg-white border  ">
            <!-- Product Image Section -->
            <form action="">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <h1 class="text-xl font-semibold">Billing details</h1>

                        <div class="mt-4 space-y-4">
                            <!-- First Name & Last Name -->

                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700">First name <span class="text-red-500">*</span></label>
                                <input type="text" id="first_name" name="first_name" required class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last name <span class="text-red-500">*</span></label>
                                <input type="text" id="last_name" name="last_name" required class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500">
                            </div>


                            <!-- Company name -->
                            <div>
                                <label for="company_name" class="block text-sm font-medium text-gray-700">Company name (optional)</label>
                                <input type="text" id="company_name" name="company_name" class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500">
                            </div>

                            <!-- Country/Region -->
                            <div>
                                <label for="country" class="block text-sm font-medium text-gray-700">Country / Region <span class="text-red-500">*</span></label>
                                <select id="country" name="country" required class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500 text-sm">
                                    <option value="">Select a country / region</option>
                                    <option value="Australia">Australia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <!-- Add more countries as needed -->
                                </select>
                            </div>

                            <!-- Street Address -->
                            <div>
                                <label for="street_address_1" class="block text-sm font-medium text-gray-700">Street address <span class="text-red-500">*</span></label>
                                <input type="text" id="street_address_1" name="street_address_1" placeholder="House number and street name" required class="mt-1 block w-full  border-gray-300 border p-1 focus:border-blue-500 focus:ring-blue-500 text-sm ">
                            </div>
                            <div>
                                <input type="text" id="street_address_2" name="street_address_2" placeholder="Apartment, suite, unit, etc. (optional)" class="mt-1 block w-full  border-gray-300 border p-1 focus:border-blue-500 focus:ring-blue-500 text-sm">
                            </div>

                            <!-- Suburb -->
                            <div>
                                <label for="suburb" class="block text-sm font-medium text-gray-700">Suburb <span class="text-red-500">*</span></label>
                                <input type="text" id="suburb" name="suburb" required class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500">
                            </div>

                            <!-- State & Postcode -->

                            <div>
                                <label for="state" class="block text-sm font-medium text-gray-700">State <span class="text-red-500">*</span></label>
                                <select id="state" name="state" required class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500 text-sm">
                                    <option value="">Select a state</option>
                                    <option value="ACT">Australian Capital Territory</option>
                                    <option value="NSW">New South Wales</option>
                                    <option value="NT">Northern Territory</option>
                                    <option value="QLD">Queensland</option>
                                    <option value="SA">South Australia</option>
                                    <option value="TAS">Tasmania</option>
                                    <option value="VIC">Victoria</option>
                                    <option value="WA">Western Australia</option>
                                </select>
                            </div>
                            <div>
                                <label for="postcode" class="block text-sm font-medium text-gray-700">Postcode <span class="text-red-500">*</span></label>
                                <input type="text" id="postcode" name="postcode" required class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <!-- Phone & Email -->
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone <span class="text-red-500">*</span></label>
                                <input type="tel" id="phone" name="phone" required class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email Address <span class="text-red-500">*</span></label>
                                <input type="email" id="email" name="email" required class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="ship_different" name="ship_different" class="rounded text-blue-600 focus:ring-blue-500">
                            <p class="text-sm">Ship to a different address?</p>
                            
                        </div>
                        
                        <div class="mt-4 space-y-4">
                            <!-- First Name & Last Name -->

                            <div>
                                <label for="first_name1" class="block text-sm font-medium text-gray-700">First name <span class="text-red-500">*</span></label>
                                <input type="text" id="first_name1" name="first_name1" required class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="last_name1" class="block text-sm font-medium text-gray-700">Last name <span class="text-red-500">*</span></label>
                                <input type="text" id="last_name1" name="last_name1" required class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500">
                            </div>


                            <!-- Company name -->
                            <div>
                                <label for="company_name1" class="block text-sm font-medium text-gray-700">Company name (optional)</label>
                                <input type="text" id="company_name1" name="company_name1" class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500">
                            </div>

                            <!-- Country/Region -->
                            <div>
                                <label for="country1" class="block text-sm font-medium text-gray-700">Country / Region <span class="text-red-500">*</span></label>
                                <select id="country1" name="country1" required class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500 text-sm">
                                    <option value="">Select a country / region</option>
                                    <option value="Australia">Australia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <!-- Add more countries as needed -->
                                </select>
                            </div>

                            <!-- Street Address -->
                            <div>
                                <label for="street_address_3" class="block text-sm font-medium text-gray-700">Street address <span class="text-red-500">*</span></label>
                                <input type="text" id="street_address_3" name="street_address_3" placeholder="House number and street name" required class="mt-1 block w-full  border-gray-300 border p-1 focus:border-blue-500 focus:ring-blue-500 text-sm ">
                            </div>
                            <div>
                                <input type="text" id="street_address_4" name="street_address_4" placeholder="Apartment, suite, unit, etc. (optional)" class="mt-1 block w-full  border-gray-300 border p-1 focus:border-blue-500 focus:ring-blue-500 text-sm">
                            </div>

                            <!-- Suburb -->
                            <div>
                                <label for="suburb1" class="block text-sm font-medium text-gray-700">Suburb<span class="text-red-500">*</span></label>
                                <input type="text" id="suburb1" name="suburb1" required class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500">
                            </div>

                            <!-- State & Postcode -->

                            <div>
                                <label for="state1" class="block text-sm font-medium text-gray-700">State <span class="text-red-500">*</span></label>
                                <select id="state1" name="state1" required class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500 text-sm">
                                    <option value="">Select a state</option>
                                    <option value="ACT">Australian Capital Territory</option>
                                    <option value="NSW">New South Wales</option>
                                    <option value="NT">Northern Territory</option>
                                    <option value="QLD">Queensland</option>
                                    <option value="SA">South Australia</option>
                                    <option value="TAS">Tasmania</option>
                                    <option value="VIC">Victoria</option>
                                    <option value="WA">Western Australia</option>
                                </select>
                            </div>
                            <div>
                                <label for="postcode1" class="block text-sm font-medium text-gray-700">Postcode <span class="text-red-500">*</span></label>
                                <input type="text" id="postcode1" name="postcode1" required class="mt-1 block w-full  border-gray-300 border py-1 focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="order_notes" class="block text-sm font-medium text-gray-700">Order notes (optional)</label>
                                <textarea id="order_notes" name="order_notes" rows="4" class="mt-1 block w-full border-gray-300 border p-2 focus:border-blue-500 focus:ring-blue-500 text-sm" placeholder="Notes about your order, e.g. special delivery instructions"></textarea>
                            </div>
                          
                        </div>
                    </div>

                </div>
            </form>
        </div>

        <!-- Product Column 2 -->
        <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all">
            <!-- Product Image Section -->
            <h1>hii</h1>
        </div>
    </div>
</div>

@endsection