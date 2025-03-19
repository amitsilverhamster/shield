<div class="product-banner border-1 drop-shadow-sm  bg-gray-300">
    <div class="parent_div ">
        <div class="child_div">
            <div class="max-w-7xl mx-auto">
                <div class="flex items-end h-full ">
                    <div class="w-1/2 self-end px-4">
                        <div class="py-12 pr-8 text-left ">
                            <h1 class="text-4xl font-medium   py-3 text-[#01998C] ">
                                Products</h1>
                            <p class="text-xl">Exclusive
                                EC FAN RANGE
                            </p>
                            <ul class="list-disc list-inside">
                                <li class="py-1"> Our EC Fan range meets the requirements of NCC 2019 J5.4</li>
                                <li class="py-1"> Energy Efficient | Long Lifespan | Variable Speed Control | Easy Install</li>
                                <li class="py-1">First EC MOTOR Inline Fan with built-in ROT & Speed Dial in Australia</li>
                            </ul>
                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                                <div class="relative">
                                    <input type="search" class="w-lg py-2 pl-10 mt-4 pr-4  bg-white border text-gray-700 drop-shadow-lg" placeholder="Search products">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 mt-4 pointer-events-none">
                                        <x-heroicon-o-magnifying-glass class="w-6 h-7 text-gray-500 mr-5" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex text-white">
                                 <button class="relative flex items-center justify-between pr-6 text-sm font-medium bg-[#01998C] shadow-lg transition-all duration-300 hover:opacity-90 group hover:bg-[#01998C] my-5 mr-5">
                                    <span class="relative flex items-center">
                                        <span class="w-9 h-10 flex items-center bg-neutral-500 justify-center mr-2 transition-transform duration-300 group-hover:translate-x-1 group-hover:bg-neutral-600">
                                            <x-heroicon-o-chevron-down class="w-4 h-4 text-white -rotate-90"/>
                                        </span>
                                        <span>Productfinder</span>
                                    </span>
                                </button>
                                
                                <button class="relative flex items-center justify-between pr-6 text-sm font-medium bg-[#01998C] shadow-lg transition-all duration-300 hover:opacity-90 group hover:bg-[#01998C] my-5">
                                    <span class="relative flex items-center">
                                        <span class="w-9 h-10 flex items-center bg-neutral-500 justify-center mr-2 transition-transform duration-300 group-hover:translate-x-1 group-hover:bg-neutral-600">
                                            <x-heroicon-o-chevron-down class="w-4 h-4 text-white -rotate-90"/>
                                        </span>
                                        <span>Show product categories</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .product-banner {
        height: 454px;
        width: 100%;
    }

    .parent_div {
        width: 100%;
        height: 100%;
    }

    .child_div {
        width: 100%;
        height: 100%;
        background-image: linear-gradient(100deg, rgb(255,255,255,255)50%, transparent 50%), url('/img/home.webp');
        background-size: contain;
        background-position: right;
        background-repeat: no-repeat;
    }

    @media screen and (min-width: 1540px) {
        .product-banner {
            height: 569px;
        }

    }

    @media screen and (min-width: 1024px) and (max-width: 1028px) {

        .product-banner {
            height: 306px;
        }

    }

    @media screen and (min-width: 1029px) and (max-width: 1280px) {

        .product-banner {
            height: 381px;
        }

    }
</style>