<div class="max-w-7xl mx-auto px-4 pb-5">
    <div class="my-6 border-b pb-2 flex justify-between items-center">
        <h2 class="text-3xl">Blog</h2>
        <!-- <a href="/blog" class="px-3 py-1 text-white text-sm font-medium bg-[var(--main-color)] hover:opacity-80">
            <span class="pe-1">></span>
            Blog Overview
        </a> -->
        <x-button text="View More" url="#" />

    </div>
    {{-- Card Section --}}
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
        <div class="overflow-hidden bg-white relative">
            <div class="text-center absolute top-36 left-1/3 transform -translate-x-1/4 bg-white  p-3 mt-4 text-sm text-gray-600 z-10">
                <span class="font-medium"><a href="#" class="hover-underline-animation ">Inline Fans</a></span> • <span>August 6</span>
            </div>
            <a href="#">
                <img src="img/inline-fan-600x400.webp" alt="Card Image" class="w-full h-48 object-cover">
            </a>
            <div class="py-2 text-center px-4 mt-2">
                <a href="#" class="leading-none text-gray-800 text-lg font-semibold ">
                    How To Teach Children To Dress Themselves: The Ultimate Guide
                </a>
            </div>
            <div class="text-center pb-4">
                <a href="#" class="text-sm text-gray-600 hover-underline-animation ">READ MORE →</a>
            </div>
        </div>
        <div class="overflow-hidden bg-white relative">
            <div class="text-center absolute top-36 left-1/3 transform -translate-x-1/4 bg-white  p-3 mt-4 text-sm text-gray-600 z-10">
                <span class="font-medium"><a href="#" class="hover-underline-animation ">Inline Fans</a></span> • <span>August 6</span>
            </div>
            <a href="#">
                <img src="img/inline-fan-600x400.webp" alt="Card Image" class="w-full h-48 object-cover">
            </a>
            <div class="py-2 text-center px-4 mt-2">
                <a href="#" class="leading-none text-gray-800 text-lg font-semibold ">
                    How To Teach Children To Dress Themselves: The Ultimate Guide
                </a>
            </div>
            <div class="text-center pb-4">
                <a href="#" class="text-sm text-gray-600 hover-underline-animation ">READ MORE →</a>
            </div>
        </div>
        <div class="overflow-hidden bg-white relative">
            <div class="text-center absolute top-36 left-1/3 transform -translate-x-1/4 bg-white  p-3 mt-4 text-sm text-gray-600 z-10">
                <span class="font-medium"><a href="#" class="hover-underline-animation ">Inline Fans</a></span> • <span>August 6</span>
            </div>
            <a href="#">
                <img src="img/inline-fan-600x400.webp" alt="Card Image" class="w-full h-48 object-cover">
            </a>
            <div class="py-2 text-center px-4 mt-2">
                <a href="#" class="leading-none text-gray-800 text-lg font-semibold ">
                    How To Teach Children To Dress Themselves: The Ultimate Guide
                </a>
            </div>
            <div class="text-center pb-4">
                <a href="#" class="text-sm text-gray-600 hover-underline-animation ">READ MORE →</a>
            </div>
        </div>
        <!-- Blog Links Section -->
        <div>
            <ul class="space-y-2 text-gray-700 font-semibold text-lg leading-6">
                <li class="mb-6 border-b pb-2">
                    <a href="#" class="hover:text-[var(--main-color)] ">
                    How To Teach Children To Dress Themselves: The Ultimate Guide

                    </a>
                </li>
                <li class="mb-6 border-b pb-2">
                    <a href="#" class="hover:text-[var(--main-color)] ">
                    How To Teach Children To Dress Themselves: The Ultimate Guide

                    </a>
                </li>
                <li class="mb-6 border-b pb-2">
                    <a href="#" class="hover:text-[var(--main-color)] ">
                    How To Teach Children To Dress Themselves: The Ultimate Guide

                    </a>
                </li>
                <li class="mb-6 border-b pb-2">
                    <a href="#" class="hover:text-[var(--main-color)] ">
                    How To Teach Children To Dress Themselves: The Ultimate Guide

                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<style>
.hover-underline-animation {
    position: relative;
    display: inline-block;
}

.hover-underline-animation:hover {
    color: #01998C;
}

.hover-underline-animation::after {
    content: '';
    position: absolute;
    width: 100%;
    transform: scaleX(0);
    height: 1px;
    bottom: 0;
    left: 0;
    background-color: #01998C;
    transform-origin: bottom right;
    transition: transform 0.25s ease-out;
}

.hover-underline-animation:hover::after {
    transform: scaleX(1);
    transform-origin: bottom left;
}
</style>