@extends('layouts.app')
@section('title', 'User Update')
@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="bg-white shadow-md px-8 pt-6 pb-8 mb-4 relative overflow-hidden">        
        <h2 class="text-3xl font-bold mb-6 text-[#0a9387]">Update Profile</h2>
        <form method="POST" action="/user/update" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name
                    </label>
                    <input type="text" name="name" id="name" value="John Doe"
                        class="shadow-sm border-2 border-gray-200 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:border-[#0a9387] transition-colors">
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input type="email" name="email" id="email" value="john@example.com"
                        class="shadow-sm border-2 border-gray-200 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:border-[#0a9387] transition-colors">
                </div>
            </div>

            <div class="w-full">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    New Password
                </label>
                <input type="password" name="password" id="password"
                    class="shadow-sm border-2 border-gray-200 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:border-[#0a9387] transition-colors">
            </div>

            <div class="flex justify-between items-center pt-4">
                <x-button
                    text="Cancel"
                    url="/account"
                    colorone="bg-gray-500"
                    colortwo="bg-gray-600"
                />
                
                <x-button
                    text="Update Profile"
                    colorone="bg-[#0a9387]"
                    colortwo="bg-[#0b7d73]"
                />
            </div>
        </form>
    </div>
</div>
@endsection