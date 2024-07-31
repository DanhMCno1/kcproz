<x-user-layout>
    <x-slot name="header">
        KC-PROZ Chuyên cung cấp mô hình - figure chính hãng
    </x-slot>

    <!-- Banner -->
    <div data-hs-carousel='{
        "loadingClasses": "opacity-0",
        "isAutoPlay": true
        }' class="relative">
        <div class="hs-carousel relative overflow-hidden w-full min-h-[180px] xs:min-h-[260px] sm:min-h-[300px] md:min-h-[360px] lg:min-h-[400px] xl:min-h-[500px] 2xl:min-h-[600px] bg-white">
            <div class="hs-carousel-body absolute top-0 bottom-0 left-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                <div class="hs-carousel-slide">
                    <div class="flex justify-center h-full dark:bg-neutral-900 items-center">
                        <img class="w-full object-cover" src="https://kcproz.vn/thumbs/1366x595x1/upload/photo/bannervananh-2640.png">
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div class="flex justify-center h-full dark:bg-neutral-800 items-center">
                        <img class="w-full object-cover" src="https://kcproz.vn/thumbs/1366x595x1/upload/photo/kc-pro-47000.jpg">
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div class="flex justify-center h-full dark:bg-neutral-700 items-center">
                        <img class="w-full object-cover" src="https://kcproz.vn/thumbs/1366x595x1/upload/photo/banner-freeship-4327.jpg">
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 left-0 inline-flex justify-center items-center w-10 h-10 md:w-[60px] md:h-[40px] m-auto text-gray-800 text-white bg-black/10 font-bold hover:bg-white/30">
        <span class="text-xl md:text-2xl" aria-hidden="true">
            <svg class="flex-shrink-0 w-6 h-6 md:w-8 md:h-8" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m15 18-6-6 6-6"></path>
            </svg>
        </span>
            <span class="sr-only">Previous</span>
        </button>
        <button type="button" class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 right-0 inline-flex justify-center items-center w-10 h-10 md:w-[60px] md:h-[40px] m-auto text-gray-800 text-white bg-black/10 font-bold hover:bg-white/30">
            <span class="sr-only text-xl md:text-3xl">Next</span>
            <span class="text-xl md:text-2xl" aria-hidden="true">
            <svg class="flex-shrink-0 w-6 h-6 md:w-8 md:h-8" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </span>
        </button>

        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 left-0 right-0 space-x-2">
            <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 w-3 h-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"></span>
            <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 w-3 h-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"></span>
            <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 w-3 h-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"></span>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Gioi thieu nhanh -->
    <div class="w-full h-auto md:min-h-[500px] my-10 px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex flex-col">
            <p class="intro_welcome text-2xl md:text-4xl">Welcome To</p>
            <p class="text-3xl md:text-5xl font-bold py-3">KC ProZ</p>
            <span>KC PROZ hiện nay là một trong những đại lý Việt Nam chuyên figure chính hãng có UY TÍN và được nhiều khách hàng TÍN NHIỆM. Với phương châm kinh doanh hài lòng trước nhận tiền sau, KC luôn cố gắng mang lại những sản phẩm chất lượng và đảm bảo nguồn hàng cho quý khách hàng. Cố gắng vì khách hàng là động lực để cửa hàng phát triển hơn trong tương lai.
        </span>
            <div class="grid grid-cols-2 mt-4">
                <div class="flex border-b border-r p-5 border-0.5">
                    <div class="w-14 h-14 bg-amber-400 rounded-full flex items-center justify-center overflow-hidden">
                        <img src="https://kcproz.vn/upload/news/untitleddesign13-removebg-preview-4992.png" alt="Product Quality">
                    </div>
                    <div class="ml-2">
                        <p>Sản phẩm</p>
                        <b class="text-2xl">Chất lượng</b>
                    </div>
                </div>
                <div class="flex border-b p-5 border-0.5">
                    <div class="w-14 h-14 bg-amber-400 rounded-full flex items-center justify-center overflow-hidden">
                        <img src="https://kcproz.vn/upload/news/tc2-1988.png" alt="Return Policy">
                    </div>
                    <div class="ml-2">
                        <p>Chính sách</p>
                        <b class="text-2xl">Đổi trả</b>
                    </div>
                </div>
                <div class="flex border-r p-5 border-0.5">
                    <div class="w-14 h-14 bg-amber-400 rounded-full flex items-center justify-center overflow-hidden">
                        <img src="https://kcproz.vn/upload/news/untitleddesign12-removebg-preview-3864.png" alt="Delivery Service">
                    </div>
                    <div class="ml-2">
                        <p>Giao hàng</p>
                        <b class="text-2xl">Tận nơi</b>
                    </div>
                </div>
                <div class="flex p-5 border-0.5">
                    <div class="w-14 h-14 bg-amber-400 rounded-full flex items-center justify-center overflow-hidden">
                        <img src="https://kcproz.vn/upload/news/tc4-2758.png" alt="Delivery Service">
                    </div>
                    <div class="ml-2">
                        <p>Tư vấn</p>
                        <b class="text-2xl">Nhiệt tình</b>
                    </div>
                </div>
            </div>
            <div class="flex mt-6">
                <a href="{{ route('introduce') }}" class="p-3 bg-amber-400 flex font-bold items-center">XEM THÊM
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="ml-2 w-4 h-4"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                </a>
            </div>
        </div>
        <video class="mt-8 md:mt-28  w-full lg:w-[720px]" autoplay controls loop>
            <source src="{{asset('videos/kc-branding3-8519.mp4')}}" type="video/mp4">
        </video>
    </div>
    <!-- End Gioi thieu nhanh -->

    {{--Sản phẩm New //--}}
    <div class="w-full bg-black">
        <div class="py-6 h-[660px]">
            <h2 class="font-bold text-3xl text-white text-center">SẢN PHẨM
                <span class="text-amber-400">NEW //</span>
            </h2>
            <div class="md:p-10 p-4 xl:p-20">
                <div class="swiper-container overflow-hidden">
                    <div class="swiper-wrapper ">
                        <a class="swiper-slide relative" href="">
                            <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/44978101712436368369004578121623833941218991n-4422.jpg" alt="Chuang Yi - Zoro">
                            <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/44984659912436368502337893969210859805313545n-4889.jpg" alt="Chuang Yi - Zoro Hover">
                           <div class="mt-2">
                               <p class="text-white">Mô hình Chuang Yi - Zoro</p>
                               <p class="text-amber-400 text-lg font-semibold">6.000.000đ</p>
                           </div>
                        </a>
                        <a class="swiper-slide relative" href="">
                            <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/4497899479968334257832726415305093882831412n-8806.jpg" alt="Image 1">
                            <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/4498319079968335424499273370318788238422849n-5343.jpg" alt="Mô hình REAL SUKUNA VS JOGO Hover">
                            <div class="mt-2">
                                <p class="text-white">Mô hình REAL SUKUNA VS JOGO</p>
                                <p class="text-amber-400 text-lg font-semibold">10.000.000đ</p>
                            </div>
                        </a>
                        <a class="swiper-slide relative" href="">
                            <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/4500934019013204520105057807259210195737847n-1474.jpg" alt="Image 1">
                            <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/4498529009013205486771626124275930199457485n-5249.jpg" alt="Mô hình REAL SUKUNA VS JOGO Hover">
                            <div class="mt-2">
                                <p class="text-white">MÔ HÌNH LAYER 1 STUDIO - NANAMI KENTO</p>
                                <p class="text-amber-400 text-lg font-semibold">4.000.000đ</p>
                            </div>
                        </a>
                        <a class="swiper-slide" href="">
                            <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/45007248912458546100120131050053291298208329n-6904.jpg" alt="Image 2">
                            <p class="text-white">Mô hình Luffy Gear 4 CHIBI</p>
                            <p class="text-amber-400 text-lg font-semibold">1.500.000đ</p>
                        </a>

                        <a class="swiper-slide" href="">
                            <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/44984185610224369965567315466676864927344672n-1217.jpg" alt="Image 5">
                            <p class="text-white">Mô hình OPM STUDIO - BATHHOUSE 2.0</p>
                            <p class="text-amber-400 text-lg font-semibold">10.500.000đ</p>
                        </a>
                        <a class="swiper-slide" href="">
                            <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/45006308412446591434648937306557092804745418n-6587.jpg" alt="Image 6">
                            <p class="text-white">Mô hình OPM KANEKI</p>
                            <p class="text-amber-400 text-lg font-semibold">10.000.000đ</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- HOT Sale--}}
        <div class="w-full bg-black opacity-95 flex flex-col lg:flex-row">
            <div class="hidden lg:block lg:ml-20 py-20">
                <img src="https://kcproz.vn/thumbs/448x605x1/upload/photo/3695955352585791203438183142527246514960953n-6896.jpg" alt="Side Image">
            </div>
            <div class="h-[1200px] sm:h-[720px] flex-grow">
                <div class="py-4 lg:ml-48 mt-20 relative">
                    <h2 class="font-bold text-3xl text-white text-center">SẢN PHẨM
                        <span class="text-amber-400">BÁN CHẠY //</span>
                    </h2>
                    <div class="absolute w-full lg:w-[900px] h-[460px] bg-black opacity-95 top-16 lg:left-[-280px]">
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 py-6 px-4">
                            <a class="swiper-slide-hot-sale relative w-[260px] mb-6 lg:mb-0" href="">
                                <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/39795230010785476134093818102482367030995708n-2920.jpg" alt="">
                                <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/39758206310785476834093742965220711705298451n-9670.jpg" alt="">
                                <div class="mt-2">
                                    <p class="text-white">MÔ HÌNH NIREN STUDIO - HITSUGAYA TOSHIRO</p>
                                    <p class="text-amber-400 text-lg font-semibold">6.000.000đ</p>
                                </div>
                            </a>
                            <a class="swiper-slide-hot-sale relative w-[260px] mb-6 lg:mb-0" href="">
                                <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/3809909122738044255604909098462364721004572n-9623.jpg" alt="Image 1">
                                <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/3806486232738047522271248559530232019384629n-5980.jpg" alt="Mô hình REAL SUKUNA VS JOGO Hover">
                                <div class="mt-2">
                                    <p class="text-white">Mô hình REAL SUKUNA VS JOGO</p>
                                    <p class="text-amber-400 text-lg font-semibold">10.000.000đ</p>
                                </div>
                            </a>
                            <a class="swiper-slide-hot-sale relative w-[260px]" href="">
                                <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/37690670429963804171732004627293395696784539n-5803.jpg" alt="">
                                <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/37727528129963806738398415076629303098572374n-7635.jpg" alt="">
                                <div class="mt-2">
                                    <p class="text-white">MÔ HÌNH VENTUS STUDIO - NAMIKAZE MINATO</p>
                                    <p class="text-amber-400 text-lg font-semibold">12.300.000đ</p>
                                </div>
                            </a>
                        </div>
                        <div class="bottom-[-20px] relative flex justify-center lg:justify-end">
                            <a class="text-amber-400 font-bold text-lg absolute flex right-10 p-1 hover:text-white" href="">Xem thêm
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-7 h-7 mx-1" fill="white">
                                    <path d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM241 377c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l87-87-87-87c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L345 239c9.4 9.4 9.4 24.6 0 33.9L241 377z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--    Banner-2  --}}
    <div class="md:w-full md:h-72 my-4">
        <img class="w-full h-full" src="https://kcproz.vn/thumbs/1366x300x1/upload/photo/qc-7381.jpg">
    </div>

{{--    Pre-order --}}
    <div class="my-6">
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold">PRE-ORDER</h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4">
            <a class="swiper-slide-pre relative" href="">
                <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/z4473604795172be657485881afc2737241ccfcbbf44ff-7805.jpg" alt="Enel">
                <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/z44736049761734a28b3aa1b76590b3f41c004ef30dc74-5694.jpg" alt="Chuang Yi - Zoro Hover">
                <div class="mt-2">
                    <p class="text-gray-500 font-semibold hover:text-amber-400">Mô hình TH Studio</p>
                    <p class="text-lg font-bold">3.500.000đ</p>
                </div>
            </a>
            <a class="swiper-slide-pre relative" href="">
                <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/3759150241045642530033223151641823997749243n-6663.jpg" alt="Image 1">
                <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/37750072410472009198773846933299027965919837n-3219.jpg" alt="Mô hình REAL SUKUNA VS JOGO Hover">
                <div class="mt-2">
                    <p class="text-gray-500 font-semibold hover:text-amber-400">Mô hình RAVEN STUDIO - ZORO X KAIDO</p>
                    <p class="text-lg font-bold">15.600.000đ</p>
                </div>
            </a>
            <a class="swiper-slide-pre relative" href="">
                <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/42859784411495145463126873519356950133069534n-2962.jpg" alt="Image 1">
                <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/42859785711495146263126799126301853426198315n-9086.jpg" alt="Mô hình REAL SUKUNA VS JOGO Hover">
                <div class="mt-2">
                    <p class="text-gray-500 font-semibold hover:text-amber-400">Mô hình Konoha Studio - Madara</p>
                    <p class="text-lg font-bold">15.500.000đ</p>
                </div>
            </a>
            <a class="swiper-slide-pre relative" href="">
                <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/44728721612244140121560738599130870649246707n-2936.jpg" alt="Image 1">
                <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/44749946812244140721560674773712371031092029n-4301.jpg" alt="Mô hình REAL SUKUNA VS JOGO Hover">
                <div class="mt-2">
                    <p class="text-gray-500 font-semibold hover:text-amber-400">Mô hình Last Sleep Studio - Goku SSJ2</p>
                    <p class="text-lg font-bold">6.400.000đ</p>
                </div>
            </a>
            <a class="swiper-slide-pre relative" href="">
                <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/45020070510253434429327531067048242030402874n-7473.jpg" alt="Image 1">
                <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/45010286410253434262660886154368517220691505n-5208.jpg" alt="Mô hình REAL SUKUNA VS JOGO Hover">
                <div class="mt-2">
                    <p class="text-gray-500 font-semibold hover:text-amber-400">Mô hình ZZDD Studio - King</p>
                    <p class="text-lg font-bold">16.500.000đ</p>
                </div>
            </a>
        </div>
    </div>

    {{--    DEAL-ORDER --}}
    <div class="my-6">
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold">DEAL-ORDER</h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4">
            <a class="swiper-slide-pre relative" href="">
                <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/1865151807980484777666128645858773665849124n-1517.jpg" alt="Chuang Yi - Zoro">
                <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/1835303607980484710999467510003704751955184n-3908.jpg" alt="Chuang Yi - Zoro Hover">
                <div class="mt-2">
                    <p class="text-gray-500 font-semibold hover:text-amber-400">Mô hinh Tiantong Studio - Zoro 1/1</p>
                    <p class="text-lg font-bold">57.000.000đ</p>
                </div>
            </a>
            <a class="swiper-slide-pre relative" href="">
                <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/z3944020543337c6764cad89f1809a363024a01a644fdc-2338.jpg" alt="Image 1">
                <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/z3944020521375ec7b795e20988d48a570c881c2c5c83f-7808.jpg" alt="Mô hình REAL SUKUNA VS JOGO Hover">
                <div class="mt-2">
                    <p class="text-gray-500 font-semibold hover:text-amber-400">Mô hình Hunter Studio - Goku</p>
                    <p class="text-lg font-bold">13.000.000đ</p>
                </div>
            </a>
            <a class="swiper-slide-pre relative" href="">
                <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/2700639529996441506477181326744744515172469n-8868.jpg" alt="Image 1">
                <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/2711396859996441439810523571630520544351501n-2787.jpg" alt="Mô hình REAL SUKUNA VS JOGO Hover">
                <div class="mt-2">
                    <p class="text-gray-500 font-semibold hover:text-amber-400">Mô hình SD Studio - Frieza Bust</p>
                    <p class="text-lg font-bold">12.400.000đ</p>
                </div>
            </a>
            <a class="swiper-slide-pre relative" href="">
                <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/z3992850811897858b9272eaf619ac1683dac4942d4c4d-6436.jpg" alt="Image 1">
                <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/121553928101572720852212776718934064333248064n-2120.jpg" alt="Mô hình REAL SUKUNA VS JOGO Hover">
                <div class="mt-2">
                    <p class="text-gray-500 font-semibold hover:text-amber-400">Mô hình SD Studio - Cell Bust</p>
                    <p class="text-lg font-bold">16.000.000đ</p>
                </div>
            </a>
            <a class="swiper-slide-pre relative" href="">
                <img class="border-b-8 border-amber-400" src="https://kcproz.vn/thumbs/416x540x1/upload/product/29666213911303055575815767770917415250937706n-5395.jpg" alt="Image 1">
                <img class="img-hover" src="https://kcproz.vn/thumbs/416x540x1/upload/product/324938990207311044955362888916344667294657n-1441.jpg" alt="Mô hình REAL SUKUNA VS JOGO Hover">
                <div class="mt-2">
                    <p class="text-gray-500 font-semibold hover:text-amber-400">Mô hình Vientiane x LX Studio - Marco</p>
                    <p class="text-lg font-bold">9.400.000đ</p>
                </div>
            </a>
        </div>
    </div>
    <div class="flex items-center justify-center">
        <a class="text-center bg-amber-400 py-3 px-4 flex font-semibold hover:bg-white border-amber-400 border-2 hover:text-amber-400 hover:fill-amber-400">XEM THÊM
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-6 h-6 mx-1"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
        </a>
    </div>

{{--    News - REVIEW --}}
    <div class="w-full bg-black mt-10">
        <div class="py-6">
            <h2 class="font-bold text-3xl text-amber-400 text-center">TIN TỨC - HÀNG VỀ - REVIEW</h2>
            <div class="flex justify-center">
                <p class="text-gray-400 font-semibold">Cập nhật tin tức mới nhất từ</p>
                <p class="text-white font-bold mx-2">KC-PROZ</p>
            </div>
            <div class="relative flex justify-center lg:justify-end">
                <a class="text-amber-400 font-bold text-lg flex items-center hover:text-white" href="">
                    Xem thêm
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-7 h-7 mx-1" fill="currentColor">
                        <path d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM241 377c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l87-87-87-87c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L345 239c9.4 9.4 9.4 24.6 0 33.9L241 377z"/>
                    </svg>
                </a>
            </div>

            <div class="flex flex-wrap justify-between gap-6 px-10 lg:px-20 my-10">
                <a class="relative w-full sm:w-full md:w-1/3 max-w-sm h-[330px] md:h-[400px] overflow-hidden border-b-4 border-b-gray-900" href="">
                    <div class="block transition-transform duration-300 ease-in-out hover:text-amber-400">
                        <img class="w-full h-full object-cover transition-transform duration-300 ease-in-out hover:scale-110" src="https://kcproz.vn/thumbs/376x220x1/upload/news/3248652728581004188225216925288218021952130n-7829.jpg" alt="">
                        <div class="inset-0 p-4 flex flex-col justify-end bg-black bg-opacity-50">
                            <p class="text-amber-400">13/01/2023</p>
                            <p class="text-white text-lg font-semibold hover:text-amber-400">Update hàng về 15/11/2023 - 15/12/2023</p>
                        </div>
                        <div class="absolute left-1/2 bottom-0 transform -translate-x-1/2 w-0 h-2 bg-amber-400 transition-all duration-300 ease-in-out"></div>
                    </div>
                </a>
                <a class="relative w-full sm:w-full md:w-1/3 max-w-sm h-[300px] md:h-[400px] overflow-hidden border-b-4 border-b-gray-900" href="">
                    <div class="block transition-transform duration-300 ease-in-out hover:text-amber-400">
                        <img class="w-full h-full object-cover transition-transform duration-300 ease-in-out hover:scale-110" src="https://kcproz.vn/thumbs/376x220x1/upload/news/3179666588478886598086129110384044419773487n-9674.jpg" alt="">
                        <div class="inset-0 p-4 flex flex-col justify-end bg-black bg-opacity-50">
                            <p class="text-amber-400">08/12/2022</p>
                            <p class="text-white text-lg font-semibold hover:text-amber-400">Update hàng về 5/12/2022</p>
                        </div>
                        <div class="absolute left-1/2 bottom-0 transform -translate-x-1/2 w-0 h-2 bg-amber-400 transition-all duration-300 ease-in-out"></div>
                    </div>
                </a>
                <a class="relative w-full sm:w-full md:w-1/3 max-w-sm h-[300px] md:h-[400px] overflow-hidden border-b-4 border-b-gray-900" href="">
                    <div class="block transition-transform duration-300 ease-in-out hover:text-amber-400">
                        <img class="w-full h-full object-cover transition-transform duration-300 ease-in-out hover:scale-110" src="https://kcproz.vn/thumbs/376x220x1/upload/news/3153275918291534283488023584318280708850154n-1893.jpg" alt="">
                        <div class="inset-0 p-4 flex flex-col justify-end bg-black bg-opacity-50">
                            <p class="text-amber-400">20/11/2022</p>
                            <p class="text-white text-lg font-semibold hover:text-amber-400">Update hàng về 13/11/2022</p>
                        </div>
                        <div class="absolute left-1/2 bottom-0 transform -translate-x-1/2 w-0 h-2 bg-amber-400 transition-all duration-300 ease-in-out"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

{{--  Feedback + Fanpage  --}}
    <div class="flex xl:justify-between p-4 xl:p-20 bg-black opacity-90">
        <div class="xl:w-1/2">
            <h2 class="text-amber-400 text-xl font-bold">FEEDBACK</h2>

            <div class="w-full bg-amber-400 h-96">
masnds
            </div>
        </div>

        <div class="xl:w-2/5">
            <h2 class="text-amber-400 text-xl font-bold">FANPAGE</h2>
            <div class="w-full bg-amber-400 h-8">
                masnds
            </div>
        </div>
    </div>
</x-user-layout>

