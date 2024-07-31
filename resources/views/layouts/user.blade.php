<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css','resources/css/style.css','resources/js/app.js'])
    <title>{{ $header }}</title>
</head>
<body class="max-w-[1400px] mx-auto">
{{--Header--}}
<div class="flex bg-black justify-between fixed z-40 w-full max-w-[1400px] py-0.5">
    <div class="ml-4 lg:ml-20 mt-0.5 w-2/5">
        <div class=" logo-container relative inline-block overflow-hidden">
            <img class="logo block" src="https://kcproz.vn/thumbs/99x86x2/upload/photo/logo-3180.jpg" alt="Logo">
        </div>
    </div>
    <div class="flex-1 w-4/5">
        <div class="ml-4 lg:ml-48 bg-amber-400 h-10 hidden lg:flex lg:justify-between">
            <div class="hotline flex mx-2 p-2  border-black border-r-4  items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                    <path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/>
                </svg>
                <p class="px-1 mx-1">Hotline:</p>
                <p class="font-bold text-sm min-w-[100px]">0989 066 517</p>
            </div>
            <div class="form-sign flex content-center mx-2 p-2 pr-8 border-black border-r-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                    <path d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/>
                </svg>
                <a href="#" class="font-semiboldbold border-r border-black px-1 mx-1 min-w-[90px] ">Đăng nhập</a>
                <a href="#" class="font-semiboldbold text-sm min-w-[52px]">Đăng ký</a>
            </div>
            <a href="" class="cart flex content-center mx-2 p-2 pr-8 border-black border-r-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mr-2 w-4 h-4">
                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                0
            </a>
            <div class="search flex mx-2 w-[200px] md:w-[280px] p-2 pr-8 items-center cursor-pointer relative">
                <p class="px-1">Tìm kiếm</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="ml-auto md:ml-20 w-4 h-4">
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                </svg>
            </div>
        </div>
{{--        Only display search when responsive on small screens--}}
        <div class="flex min-w-[100px] ml-16 search-respon justify-center bg-amber-400 mx-2 p-2 pr-8 items-center cursor-pointer relative lg:hidden">
            <p class="px-1">Tìm kiếm</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="ml-auto md:ml-20 w-4 h-4">
                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
            </svg>
        </div>
        <div class="nav-2 text-white mt-4 mr-4 md:mr-10">
            <ul class="hidden lg:flex flex-wrap justify-evenly cursor-pointer text-xs md:text-sm font-semibold">
                <li class="nav relative pb-3 hover:text-amber-300">
                    <a href="{{route('home')}}">TRANG CHỦ</a>
                    <div class="absolute nav_border-b left-1/2 bottom-0 transform -translate-x-1/2 w-0 h-1 bg-amber-400 transition-all duration-300 ease-in-out"></div>
                </li>
                <li class="nav relative pb-3 hover:text-amber-300">
                    <a href="{{route('introduce')}}">GIỚI THIỆU</a>
                    <div class="absolute nav_border-b absolute left-1/2 bottom-0 transform -translate-x-1/2 w-0 h-1 bg-amber-400 transition-all duration-300 ease-in-out"></div>
                </li>
                <li class="nav relative pb-3 hover:text-amber-300">PRE-ORDER
                    <div class="absolute nav_border-b left-1/2 bottom-0 transform -translate-x-1/2 w-0 h-1 bg-amber-400 transition-all duration-300 ease-in-out"></div>
                </li>
                <li class="nav relative pb-3 hover:text-amber-300">DEAL ORDER
                    <div class="absolute nav_border-b left-1/2 bottom-0 transform -translate-x-1/2 w-0 h-1 bg-amber-400 transition-all duration-300 ease-in-out"></div>
                </li>
                <li class="nav relative pb-3 hover:text-amber-300">HÀNG SẴN
                    <div class="absolute nav_border-b left-1/2 bottom-0 transform -translate-x-1/2 w-0 h-1 bg-amber-400 transition-all duration-300 ease-in-out"></div>
                </li>
                <li class="nav relative pb-3 hover:text-amber-300">CẬP NHẬT
                    <div class="absolute nav_border-b left-1/2 bottom-0 transform -translate-x-1/2 w-0 h-1 bg-amber-400 transition-all duration-300 ease-in-out"></div>
                </li>
                <li class="nav relative pb-3 hover:text-amber-300">
                    <a href="{{ route('policy') }}">CHÍNH SÁCH</a>
                    <div class="absolute nav_border-b left-1/2 bottom-0 transform -translate-x-1/2 w-0 h-1 bg-amber-400 transition-all duration-300 ease-in-out"></div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="lg:h-[100px] h-[136px]"></div>
</div>

{{-- Collapse navbar on small screens--}}
<button type="button" class="w-[1400px] bg-amber-400 px-4 py-1 z-40 top-[92px] fixed lg:hidden" data-hs-overlay="#hs-overlay-backdrop-with-scrolling">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="lg:ml-16 w-8 h-8 white-fill">
        <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
    </svg>
</button>
<div id="hs-overlay-backdrop-with-scrolling" class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-xs w-full z-[80] bg-white border-e dark:bg-neutral-800 dark:border-neutral-700 [--body-scroll:true]' tabindex="-1">
<div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
    <h3 class="font-bold text-gray-800 dark:text-white ml-28" >
        Menu
    </h3>
    <button type="button" class="flex justify-center items-center size-9 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-overlay-backdrop-with-scrolling">
        <span class="sr-only">Close modal</span>
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
        </svg>
    </button>
</div>
<div class="">
    <p class="p-2 text-red-600 bg-gray-200 font-semibold">
        Danh Mục Sản Phẩm
    </p>
    <div class="grid grid-cols-1 px-4">
        <a href="" class="py-2 px-2 border-b hover:bg-blue-200">Pre-order</a>
        <a href="" class="py-2 px-2 border-b hover:bg-blue-200">Deal order</a>
        <a href="" class="py-2 px-2 border-b hover:bg-blue-200">Hàng Sẵn</a>
    </div>
    <p class="p-2 text-red-600 bg-gray-200 font-semibold">
        Chuyên Mục
    </p>
    <div class="grid grid-cols-1">
        <a href="{{ route('home') }}" class="py-2 px-2 border-b hover:bg-blue-200">Trang Chủ</a>
        <a href="{{route('introduce')}}" class="py-2 px-2 border-b hover:bg-blue-200">Giới Thiệu</a>
        <a href="" class="py-2 px-2 border-b hover:bg-blue-200">Pre-order</a>
        <a href="" class="py-2 px-2 border-b hover:bg-blue-200">Deal Order</a>
        <a href="" class="py-2 px-2 border-b hover:bg-blue-200">Hàng Sẵn</a>
        <a href="" class="py-2 px-2 border-b hover:bg-blue-200">Cập Nhật</a>
        <a href="" class="py-2 px-2 border-b hover:bg-blue-200">Chính sách</a>
    </div>
</div>
</div>
{{ $slot }}
{{--Footer--}}
<div class="grid grid-cols-1 md:grid-cols-2 py-8 px-8 md:px-28">
    <div>
        <div class="mb-8">
            <b class="text-4xl ">KC Proz</b>
            <p class="font-semibold text-xl">CHUYÊN ORDER/ PRE-ORDER/ HÀNG SẴN FIGURE</p>
        </div>
        <ul class="text-lg">
            <li>
                <b>Hà Nội</b>
                : Phú Diễn - Nam Từ Liêm - Hà Nội
            </li>
            <li>
                <b>TP.HCM</b>
                : Lê Văn Lương - Phước Kiến - Nhà Bè
            </li>
            <li>
                <b>Hotline</b>
                : 077.3031.309 - 0933.699.169
            </li>
            <li>
                <b>Email</b>
                : kcproz.figure@gmail.com
            </li>
            <li>
                <b>Website</b>
                : kcproz.vn
            </li>
        </ul>
        <div class="mt-4">
            Copyright©2024. Clone by
            <a href="https://www.facebook.com/profile.php?id=100045500618167" class="transition duration-300 ease-in-out transform hover:text-amber-300 ">
                DanhBui (DanhMCno1)
            </a>
        </div>
    </div>
    <div class="mt-8 md:mt-0">
        <h3 class="text-2xl mb-2">GOOGLE MAP</h3>
        <div class="w-full h-60 bg-blue-200"></div>
    </div>
</div>

{{--button contact--}}
<button type="button" class="m-1 ms-0 bottom-[300px] right-10 z-40 fixed inline-flex justify-center items-center size-[56px] text-sm font-semibold rounded-full border border-gray-200 bg-gray-200 text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-6 h-6"><path d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64l0 48-128 0 0-48zm-48 48l-64 0c-26.5 0-48 21.5-48 48L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-208c0-26.5-21.5-48-48-48l-64 0 0-48C336 50.1 285.9 0 224 0S112 50.1 112 112l0 48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>
    <span class="flex absolute top-0 end-0 -mt-2">
    <span class="animate-ping absolute inline-flex size-full rounded-full bg-red-400 opacity-75 dark:bg-red-600"></span>
    <span class="relative inline-flex text-xs bg-red-500 text-white rounded-full py-0.5 px-1.5">
      0
    </span>
  </span>
</button>

<button type="button" class="m-1 ms-0 bottom-[220px] right-10 z-40 fixed inline-flex justify-center items-center size-[56px] text-sm font-semibold rounded-full border border-gray-200 bg-amber-400 text-gray-800 shadow-sm hover:bg-amber-600 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800 ">
    <div class="bg-amber-400 rounded-full animate-bounce">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-8 h-8" fill="white" ><path d="M256.6 8C116.5 8 8 110.3 8 248.6c0 72.3 29.7 134.8 78.1 177.9 8.4 7.5 6.6 11.9 8.1 58.2A19.9 19.9 0 0 0 122 502.3c52.9-23.3 53.6-25.1 62.6-22.7C337.9 521.8 504 423.7 504 248.6 504 110.3 396.6 8 256.6 8zm149.2 185.1l-73 115.6a37.4 37.4 0 0 1 -53.9 9.9l-58.1-43.5a15 15 0 0 0 -18 0l-78.4 59.4c-10.5 7.9-24.2-4.6-17.1-15.7l73-115.6a37.4 37.4 0 0 1 53.9-9.9l58.1 43.5a15 15 0 0 0 18 0l78.4-59.4c10.4-8 24.1 4.5 17.1 15.6z"/></svg>
    </div>
</button>

<button type="button" class="m-1 ms-0 bottom-[140px] right-10 z-40 fixed inline-flex justify-center items-center size-[56px] text-sm font-semibold rounded-full border border-gray-200 bg-amber-400 text-gray-800 shadow-sm hover:bg-amber-600 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800 ">
    <div class="animate-bounce">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-8 h-8" fill="white" ><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
    </div>
</button>
@if (isset($script))
    {{ $script }}
@endif
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const logoContainer = document.querySelector('.logo-container');
        const lightEffect = document.createElement('div');
        lightEffect.classList.add('light-effect');
        logoContainer.appendChild(lightEffect);
    });
</script>
</body>
</html>
