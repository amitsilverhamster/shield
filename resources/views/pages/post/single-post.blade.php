@extends('layouts.app')
@section('title', 'Blog')
@section('content')

<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 md:col-span-8">
            <!-- Image Section -->
            <div class="mb-8">
                <div class="py-3">
                    <span class="font-medium pb-1"><a href="#" class="hover-underline-animation ">Inline Fans</a></span> • <span>August 6</span>
                    <h1 class="text-xl md:text-2xl font-bold  mb-2"> How To Teach Children To Dress Themselves: The Ultimate Guide</h1>
                </div>
                <img src="/img/inline-fan-600x400.webp"
                    alt="Blog Image"
                    class="w-full h-100 object-cover brightness-75">
            </div>

            <!-- Content Section -->
            <div>
                <!-- Short Description -->
                <div class="mb-8 bg-gray-100">
                    <p class="text-xl text-gray-600 leading-relaxed border-l-4 border-[var(--main-color)] pl-6 py-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor ante, pellentesque et dapibus non, consequat eget tellus. Nullam ac egestas lacus, sit amet hendrerit mi. Cras ac ipsum non augue facilisis dapibus. Maecenas erat enim, auctor sed iaculis sit amet, volutpat in purus. Mauris sit amet turpis scelerisque, maximus mi laoreet, ultrices diam. Vestibulum at arcu enim. Fusce et velit dui. Cras fermentum nulla nec purus accumsan, et bibendum erat gravida. Praesent ut lorem sit amet arcu euismod tempor at nec ipsum. Praesent non ornare est. Etiam enim elit, pellentesque id aliquet a, consectetur euismod elit. Aliquam facilisis, sem a tempus porta, nulla odio mollis lectus, vel ornare nisi quam id eros. Nunc sodales lobortis lorem, vel maximus urna.
                    </p>
                </div>

                <!-- Main Content -->
                <div class="blog-content">
                    <h1>Lorem Ipsum</h1>
                    <p class="text-sm text-gray-600 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor ante, pellentesque et dapibus non, consequat eget tellus. Nullam ac egestas lacus, sit amet hendrerit mi. Cras ac ipsum non augue facilisis dapibus. Maecenas erat enim, auctor sed iaculis sit amet, volutpat in purus. Mauris sit amet turpis scelerisque, maximus mi laoreet, ultrices diam. Vestibulum at arcu enim. Fusce et velit dui. Cras fermentum nulla nec purus accumsan, et bibendum erat gravida. Praesent ut lorem sit amet arcu euismod tempor at nec ipsum. Praesent non ornare est. Etiam enim elit, pellentesque id aliquet a, consectetur euismod elit. Aliquam facilisis, sem a tempus porta, nulla odio mollis lectus, vel ornare nisi quam id eros. Nunc sodales lobortis lorem, vel maximus urna.

                        Sed pharetra vulputate malesuada. Fusce interdum lacus ut fermentum gravida. Curabitur cursus vehicula velit, a posuere nibh lacinia vel. Duis dictum tortor vel risus varius dignissim. Quisque ut leo dolor. Sed imperdiet, diam ac gravida accumsan, sem arcu aliquam nulla, nec posuere libero eros sed dui. In suscipit a lectus eu vulputate. Nam mi est, ullamcorper vel lacus in, vestibulum feugiat dolor. Morbi a vestibulum quam. Quisque sit amet metus interdum, scelerisque metus et, egestas velit. Nullam molestie, magna sed venenatis imperdiet, quam nulla euismod est, pretium ultrices massa magna malesuada lorem. Vestibulum quis est quis sapien pulvinar consequat. Sed lacinia, massa nec molestie varius, ex sem auctor nisl, id consectetur metus nibh vitae justo. Maecenas massa augue, suscipit non libero ut, tempor volutpat nunc. Nulla in purus erat. Nullam ipsum est, dictum non vestibulum tempus, imperdiet vitae dolor.

                        Sed at nunc dui. Nullam auctor libero eget molestie pharetra. Fusce maximus fringilla diam. Mauris rhoncus egestas metus vel placerat. Vivamus ullamcorper mattis ante, id lobortis purus aliquam non. Duis fringilla quam sit amet lectus egestas feugiat. Nullam sollicitudin arcu eu libero vehicula, non convallis sem vestibulum.

                        Proin sodales purus felis, vitae scelerisque justo pellentesque at. Duis quis viverra sapien, a facilisis lorem. Duis bibendum dolor lacus, iaculis dignissim tortor mollis nec. Etiam porta ante metus, quis tempor ex viverra non. Aliquam quis malesuada turpis. Sed ac neque lectus. Nullam rhoncus congue velit at pulvinar.

                        In sagittis orci purus, sed imperdiet nulla interdum vel. Suspendisse at nibh nec sem lobortis dignissim ut eget ligula. Ut ornare eleifend metus, sit amet rhoncus sem finibus sit amet. Phasellus feugiat, velit id dictum mattis, ligula risus luctus nisl, a viverra odio turpis sed mi. Aenean venenatis tortor nec neque porta, sed commodo est malesuada. Sed lobortis nisl sed erat sodales eleifend. Curabitur efficitur venenatis diam, quis fringilla erat feugiat non. Suspendisse hendrerit eros pretium varius mollis. Nullam vestibulum erat sed lacus porttitor, eu maximus lacus tincidunt. Donec vitae euismod tellus. Donec nec quam vitae libero interdum accumsan. Donec erat diam, fermentum nec tincidunt quis, suscipit at erat. Curabitur maximus, dolor et sollicitudin venenatis, mi urna interdum neque, non tempus justo purus eget est. Duis viverra urna non ipsum dapibus commodo. Sed et elit vel nibh commodo sodales a in dolor. Suspendisse potenti.</p>
                </div>
            </div>
        </div>
        <div class="hidden md:block md:col-span-4">
            <div class=" top-4  p-2">
                <div class="grid grid-cols-1 gap-4">
                    <div class="border-b py-4 mt-5">
                        <p class="text-xl font-semibold py-2">Search</p>
                        <div class="hidden md:flex w-full relative">
                            <input type="search"
                                class="w-full px-4 py-2  bg-gray-100   focus:outline-none focus:ring-[var(--main-color)] focus:border-[var(--main-color)]"
                                placeholder="Search...">
                            <button class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-500 hover:text-[var(--main-color)]">
                                <x-heroicon-o-magnifying-glass class="h-5 w-5" />
                            </button>
                        </div>
                    </div>
                    <div class="border-b py-4">
                        <p class="text-xl font-medium">Blog Category</p>
                        <ul class="list-none space-y-2">
                            <li class="mt-3 text-sm font-medium flex items-center">
                                <span class="w-1 h-1 bg-[#01998C] inline-block mr-2"></span>
                                <a href="#" > <span class="hover:underline">Inline Fans</span> <span class="text-gray-400">(1)</span></a>
                            </li>
                            <li class="text-sm font-medium flex items-center">
                                <span class="w-1 h-1 bg-[#01998C] inline-block mr-2"></span>
                                <a href="#" > <span class="hover:underline">Help</span><span class="text-gray-400">(0)</span></a>
                            </li>
                            <li class="text-sm font-medium flex items-center">
                                <span class="w-1 h-1 bg-[#01998C] inline-block mr-2"></span>
                                <a href="#" ><span class="hover:underline">Global World</span> <span class="text-gray-400">(0)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="border-b py-4">
                        <p class="text-xl font-medium">Popular Posts</p>
                        <ul class="space-y-6 ">
                            <li class="mt-3 text-sm font-medium">
                                <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-4">
                                        <img src="/img/Headerbox-fan-Square-face.webp" alt="Box fan square face" class="w-full h-auto">
                                    </div>
                                    <div class="col-span-8">
                                        <p class="font-medium pb-1 text-gray-400 text-xs">August 6, 2022</p>
                                        <a href="#" class="hover:text-[var(--main-color)] text-sm font-semibold ">How To Teach Children To Dress Themselves: The Ultimate Guide</a>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-3 text-sm font-medium">
                                <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-4">
                                        <img src="/img/Headerbox-fan-Square-face.webp" alt="Box fan square face" class="w-full h-auto">
                                    </div>
                                    <div class="col-span-8">
                                        <p class="font-medium pb-1 text-gray-400 text-xs">August 6, 2022</p>
                                        <a href="#" class="hover:text-[var(--main-color)] text-sm font-semibold ">How To Teach Children To Dress Themselves: The Ultimate Guide</a>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-3 text-sm font-medium">
                                <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-4">
                                        <img src="/img/Headerbox-fan-Square-face.webp" alt="Box fan square face" class="w-full h-auto">
                                    </div>
                                    <div class="col-span-8">
                                        <p class="font-medium pb-1 text-gray-400 text-xs">August 6, 2022</p>
                                        <a href="#" class="hover:text-[var(--main-color)] text-sm font-semibold ">How To Teach Children To Dress Themselves: The Ultimate Guide</a>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-3 text-sm font-medium">
                                <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-4">
                                        <img src="/img/Headerbox-fan-Square-face.webp" alt="Box fan square face" class="w-full h-auto">
                                    </div>
                                    <div class="col-span-8">
                                        <p class="font-medium pb-1 text-gray-400 text-xs">August 6, 2022</p>
                                        <a href="#" class="hover:text-[var(--main-color)] text-sm font-semibold ">How To Teach Children To Dress Themselves: The Ultimate Guide</a>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-3 text-sm font-medium">
                                <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-4">
                                        <img src="/img/Headerbox-fan-Square-face.webp" alt="Box fan square face" class="w-full h-auto">
                                    </div>
                                    <div class="col-span-8">
                                        <p class="font-medium pb-1 text-gray-400 text-xs">August 6, 2022</p>
                                        <a href="#" class="hover:text-[var(--main-color)] text-sm font-semibold ">How To Teach Children To Dress Themselves: The Ultimate Guide</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="border-b pb-8 pt-4 relative w-full h-[600px]">
                        <img src="/img/bedroom.webp" class="w-full h-full object-cover" alt="Camping Equipment">
                        <div class="absolute inset-0  bg-opacity-0 flex flex-col items-center justify-center text-white p-4">
                            <p class="font-bold text-sm uppercase tracking-widest">Up To</p>
                            <h3 class="text-6xl font-bold mb-2">50%<span class="text-xl align-top"> Off</span></h3>
                            <p class="text-lg font-medium mb-4 text-center">Selected <br> Camping Equipment</p>
                            <a href="#" class="border border-white px-6 py-2 text-white font-semibold hover:bg-white hover:text-black transition-all">Shop Now</a>
                        </div>
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
@endsection