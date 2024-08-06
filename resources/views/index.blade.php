@extends('layouts.main', [
    'title' => 'Belle -  Belanja kosmetik dan alat kecantikan, terpercaya, dan terjamin kualitasnya!',
])

@section('content')
    <main class="w-full h-full bg-white">
        <header class="w-full bg-primary">
            <nav class="w-full flex items-center justify-between max-w-5xl mx-auto py-8">
                <a href="/" class="text-white text-4xl">
                    <img src="{{ asset('assets/images/logo-belle-white.png') }}" class="h-14" alt="Logo" />
                </a>
                <div class="md:hidden">
                    <!-- Mobile menu button -->
                    <button id="menu-button" class="text-white focus:outline-none">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
                <ul id="menu" class="hidden md:flex text-white text-lg gap-9 font-medium tracking-tight">
                    <li><a class="cursor-pointer" href="/">Home</a></li>
                    <li><a class="cursor-pointer" href="/products">Products</a></li>
                    <li><a class="cursor-pointer" href="/about-us">About Us</a></li>
                    <li><a class="cursor-pointer" href="/contact-us">Contact Us</a></li>
                </ul>
            </nav>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden">
                <ul class="text-white flex flex-col items-center text-lg gap-4 pb-10 md:pb-0 font-medium tracking-tight">
                    <li><a class="cursor-pointer" href="/">Home</a></li>
                    <li><a class="cursor-pointer" href="/products">Products</a></li>
                    <li><a class="cursor-pointer" href="/about-us">About Us</a></li>
                    <li><a class="cursor-pointer" href="/contact-us">Contact Us</a></li>
                </ul>
            </div>
        </header>
        <section
            class="w-full max-w-5xl mx-auto h-[70vh] mt-20 px-10 md:px-0 mb-56 md:mb-0 md:mt-0 flex md:flex-row flex-col items-center">
            <div class="flex flex-col gap-0 flex-1 text-left  !justify-start !items-start">
                <div class="flex flex-col gap-1">
                    <p class="text-3xl text-primary font-medium">
                        Skincare Beauty
                    </p>
                    <h1 class="text-5xl md:text-[5.5rem] leading-[100%] font-extrabold text-primary">
                        PRODUCT
                    </h1>
                    <p class="text-gray-700 font-normal text-base">
                        Devoted to serving natural beauty, we have poured all of our knowledge & experience to provide
                        the
                        best beauty products and detailed services to a variety of consumers. We highly value extended
                        services to educate and satisfyour customers. Getting to know us means getting to know what you
                        need.
                    </p>
                </div>
                <div class="w-full block md:hidden">
                    <div class="swiper mySwiper mt-0">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/product.png') }}" class="flex-1 h-[200px] w-[200px]"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/product.png') }}" class="flex-1 h-[200px] w-[200px]"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/product.png') }}" class="flex-1 h-[200px] w-[200px]"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/product.png') }}" class="flex-1 h-[200px] w-[200px]"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/product.png') }}" class="flex-1 h-[200px] w-[200px]"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/product.png') }}" class="flex-1 h-[200px] w-[200px]"
                                    alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
                <a href=""
                    class="bg-primary w-fit text-white font-medium px-6 py-2 rounded-lg box-shadow-custom flex mt-5">
                    read more
                </a>
            </div>
            <div class="w-full hidden md:block">
                <div class="swiper mySwiper mt-0">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/product.png') }}" class="flex-1 h-[500px] w-[500px]"
                                alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/product.png') }}" class="flex-1 h-[500px] w-[500px]"
                                alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/product.png') }}" class="flex-1 h-[500px] w-[500px]"
                                alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/product.png') }}" class="flex-1 h-[500px] w-[500px]"
                                alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/product.png') }}" class="flex-1 h-[500px] w-[500px]"
                                alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/product.png') }}" class="flex-1 h-[500px] w-[500px]"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <section class="w-full mx-auto h-fit">
            <div class="flex flex-col gap-1 text-center w-full items-center justify-center px-12">
                <h1 class="text-primary font-extrabold text-3xl md:text-4xl text-center mt-9"> Categories</h1>
                <p class="text-gray-600 font-normal text-base md:text-lg text-center"> Temukan produk dengan
                    category
                    yang kamu cari</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-0 mt-10">
                @foreach ($categories as $category)
                    <div class="w-full h-[300px] relative flex items-center justify-center">
                        <img class="object-cover w-full h-[300px]" src="{{ asset('storage/' . $category->image) }}" />
                        <a href=""
                            class="bg-primary w-fit text-white font-medium px-6 py-2 rounded-lg box-shadow-custom absolute bottom-6 mx-auto">
                            {{ $category->nama }}
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
        {{-- <section class="w-full max-w-5xl mx-auto grid grid-cols-4 py-24">
            <div class="flex flex-col gap-1 items-center justify-center">
                <img class="w-[200px] !h-[200px]" src="{{ asset('assets/images/product-7.png') }}" />
                <h4 class="font-bold text-primary">BYOU</h4>
                <p class="text-primary">Rubber Mask All Variant</p>
            </div>
            <div class="flex flex-col gap-1 items-center justify-center">
                <img class="w-[200px] !h-[200px]" src="{{ asset('assets/images/product-8.png') }}" />
                <h4 class="font-bold text-primary">ETREBELLE</h4>
                <p class="text-primary">Golden Skin Caviar 24 Hours</p>
            </div>
            <div class="flex flex-col gap-1 items-center justify-center">
                <img class="w-[200px] !h-[200px]" src="{{ asset('assets/images/product-9.png') }}" />
                <h4 class="font-bold text-primary">JEAN D'ARCEL</h4>
                <p class="text-primary">Renewing Face Cream</p>
            </div>
            <div class="flex flex-col gap-1 items-center justify-center">
                <img class="w-[50px] !h-[200px]" src="{{ asset('assets/images/product-10.png') }}" />
                <h4 class="font-bold text-primary">JEAN D'ARCEL</h4>
                <p class="text-primary">Dermal Creaming Gel</p>
            </div>
        </section> --}}
        <div class="flex items-center justify-center w-full">
            <section
                class="w-fit md:flex grid grid-cols-1 md:grid-cols-4 gap-10 md:gap-0 justify-center md:justify-between items-center md:px-20 px-10 my-14">

                <img src="{{ asset('assets/images/logos/belle.png') }}" alt="" class="w-32 md:w-24">
                <img src="{{ asset('assets/images/logos/byou.png') }}" alt="" class="w-32 md:w-24">
                <img src="{{ asset('assets/images/logos/etre.png') }}" alt="" class="w-32 md:w-24">
                <img src="{{ asset('assets/images/logos/jean-arcel.png') }}" alt="" class="w-32 md:w-24">
            </section>
        </div>

        <footer class="w-full px-10 md:px-14 py-16 mx-auto bg-primary">
            <div
                class="w-full flex flex-col md:grid md:grid-cols-3 gap-x-5 items-start justify-center md:items-center md:justify-center">
                <div class="flex flex-col gap-2 flex-1">
                    <p href="" class=" text-4xl text-white font-bold">BELLE</p>
                    <p class="italic text-md md:text-xl text-white">Your beauty business solutions</p>
                </div>
                <div class="flex flex-col gap-2 flex-1 w-full">
                    <p href="" class="text-md md:text-xl text-white font-bold">Main Office :
                        Panjang Jiwo Permai III/28
                        Surabaya - Indonesia</p>
                    <p class="italic text-sm md:text-lg text-white w-[100px] ">https://maps.app.goo.gl/tQTPpc356bb1n64C6
                    </p>
                </div>
                <div class="flex flex-col gap-2 flex-1 mt-3 md:mt-0 items-start md:items-center justify-center">
                    <p href="" class="text-md md:text-xl text-white font-bold">Customer
                        care<br /><span class="hidden md:block">+62838 4933 9756</span>
                    </p>
                    <img src="{{ asset('assets/images/qr-code.png') }}" class="w-32 h-32 md:w-20 md:h-20" />
                </div>
            </div>
        </footer>
    </main>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 0) {
                header.classList.add('bg-white', 'shadow-custom', 'text-gray-800', 'duration-700',
                    'border-gray-800');
                header.classList.remove('text-white', 'border-white')
            } else {
                header.classList.remove('bg-white', 'shadow-custom', 'text-gray-800', 'border-gray-800');
                header.classList.add('text-white', 'border-white')
            }
        });
    </script>
@endsection
