@extends('layouts.main', [
    'title' => 'Belle -  Belanja kosmetik dan alat kecantikan, terpercaya, dan terjamin kualitasnya!',
])

@section('content')
    <main class="w-full h-full bg-white">
        <header class="w-full bg-primary">
            <nav class="w-full flex items-center justify-between max-w-5xl mx-auto py-8">
                <a href="" class="text-white text-4xl"><img src="{{ asset('assets/images/logo-belle-white.png') }}"
                        class="h-14" /></a>
                <ul class="text-white flex text-lg gap-9 font-medium tracking-tight">
                    <li><a class="cursor-pointer" href="/">Home</a></li>
                    <li>
                        <a class="cursor-pointer" href="/products">Products</a>
                    </li>
                    <li><a class="cursor-pointer" href="/about-us">About Us</a></li>
                    <li><a class="cursor-pointer" href="/contact-us">Contact Us</a></li>
                </ul>
            </nav>
        </header>
        <div class="w-full">
            <div class="w-full h-[60vh] md:h-2/3  relative flex items-center justify-center">
                <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/about-us-img-01.jpg" alt=""
                    class="w-full md:h-2/3 h-[60vh] object-cover">
                <div class="flex flex-col gap-3 absolute mx-auto items-center justify-center max-w-4xl text-center">
                    <p class="text-primary">
                        OUR MISSION
                    </p>
                    <h2 class="text-primary font-bold text-xl md:text-3xl">LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISCING
                        ELIT, SED
                        DO TEMPOR
                        INCIDIDUNT UT.</h2>
                    <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/Dr.-Leigh.png"
                        class="w-56 -mt-13" alt="">
                </div>
            </div>
            <div class="w-full flex md:flex-row flex-col gap-10 items-center  md:mt-14">
                <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/about-us-img-02.jpg" alt=""
                    class="md:w-1/2 md:h-2/3 w-full h-fit">
                <div class="flex flex-col gap-10">
                    <div class="flex flex-row gap-2 items-center">
                        <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/h1-icon-img-1.png"
                            class="w-12 h-12 md:w-20 md:h-20" alt="">
                        <div class="flex flex-col gap-1 text-primary">
                            <h1 class="font-semibold">PREMIUM QUALITY
                            </h1>
                            <p class="-mt-3 text-sm md:text-base">Non consectetur a erat nam at</p>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2 items-center">
                        <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/h1-icon-img-2.png"
                            class="w-12 h-12 md:w-20 md:h-20" alt="">
                        <div class="flex flex-col gap-1 text-primary">
                            <h1 class="font-semibold">CRUELTY FREE

                            </h1>
                            <p class="-mt-3 text-sm md:text-base">Non consectetur a erat nam at</p>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2 items-center">
                        <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/h1-icon-img-3.png"
                            class="w-12 h-12 md:w-20 md:h-20" alt="">
                        <div class="flex flex-col gap-1 text-primary">
                            <h1 class="font-semibold">VEGAN PRODUCTS
                            </h1>
                            <p class="-mt-3 text-sm md:text-base">Non consectetur a erat nam at</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col">
                <div class="w-full items-center justify-center gap-4 flex px-14 md:px-0" style="margin-top: 150px;">
                    <div class="flex flex-col gap-3 absolute mx-auto items-center justify-center max-w-4xl text-center">
                        <p class="text-primary md:text-base text-sm">
                            REVIEWS
                        </p>
                        <h2 class="text-primary font-bold text-xl md:text-3xl -mt-3">WHAT OUR CUSTOMERS SAY
                        </h2>

                    </div>
                </div>
                <div class="swiper mySwiper mt-20">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-3 items-start p-20">
                                <h1 class="text-primary uppercase text-lg text-left font-medium">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua
                                </h1>
                                <p class="text-primary">Milly Antersaseva</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-3 items-start p-20">
                                <h1 class="text-primary uppercase text-lg text-left font-medium">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua
                                </h1>
                                <p class="text-primary">Milly Antersaseva</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-3 items-start p-20">
                                <h1 class="text-primary uppercase text-lg text-left font-medium">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua
                                </h1>
                                <p class="text-primary">Milly Antersaseva</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-3 items-start p-20">
                                <h1 class="text-primary uppercase text-lg text-left font-medium">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua
                                </h1>
                                <p class="text-primary">Milly Antersaseva</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-3 items-start p-20">
                                <h1 class="text-primary uppercase text-lg text-left font-medium">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua
                                </h1>
                                <p class="text-primary">Milly Antersaseva</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-3 items-start p-20">
                                <h1 class="text-primary uppercase text-lg text-left font-medium">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua
                                </h1>
                                <p class="text-primary">Milly Antersaseva</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="flex flex-col md:flex-row w-full mt-0 md:mt-14">
                    <div class="w-fit relative items-center flex ">
                        <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/h1-img-3.jpg"
                            alt="" class="w-full block h-[40vh] md:h-fit object-cover">
                        <div class="flex flex-col gap-1 text-primary absolute h-fit w-2/3 px-10">
                            <p class="-mt-3">NEW LINE</p>
                            <h1 class="font-semibold text-md md:text-lg">INTENSE HYDRATATION
                            </h1>
                            <p class=" leading-[100%]">Pharetra magna ac placerat vestibulum lect us ma uris dui
                                accumsan sit amet
                                nulla facil.
                            </p>
                            <a href="" class="font-medium underline mt-5 text-xs">VIEW MORE</a>
                        </div>
                    </div>
                    <div class="w-fit relative items-center flex ">
                        <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/h1-img-4.jpg"
                            alt="" class="w-full block h-[40vh] md:h-fit object-cover">
                        <div class="flex flex-col gap-1 text-primary absolute h-fit w-2/3 px-10">
                            <p class="-mt-3 ">ONLINE SHOP</p>
                            <h1 class="font-semibold text-md md:text-lg">YOU CAN TEST OUR AMAZING
                                FORMULA AS SOON AS TODAY
                                WITOUT GOING TO THE STORE
                            </h1>

                            <a href="" class="font-medium underline mt-5 text-xs">VIEW MORE</a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="w-full md:flex grid grid-cols-3 gap-10 md:gap-0 justify-between items-center md:px-20 px-10 my-14">
                <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/client-01.png" alt=""
                    class="w-24">
                <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/client-02.png" alt=""
                    class="w-24">
                <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/client-03.png" alt=""
                    class="w-24">
                <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/client-04.png" alt=""
                    class="w-24">
                <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/client-05.png" alt=""
                    class="w-24">
                <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/client-06.png" alt=""
                    class="w-24">
            </div>
            <div class="flex flex-col-reverse md:flex-row items-center w-full overflow-x-hidden h-fit ">
                <div class="flex items-center mt-10 md:mt-0  justify-center w-full md:w-1/2 h-fit">
                    <div class="flex flex-col text-primary gap-4 mx-10 md:mx-20">
                        <h1 class="font-semibold text-xl md:text-3xl">LATEST NEWS FROM DR. LEIGH LABORATORY
                        </h1>
                        <p class="-mt-3">Lorem ipsum dolor sit amet conse ctetur adipiscing elit, sed do eiusmod lorem
                            ipsum dolore amet in vivid tempor idunt.</p>
                        <a href=""
                            class="bg-primary rounded-lg text-xs text-white items-center w-fit justify-center px-5 py-3">
                            READ MORE
                        </a>
                    </div>
                </div>
                <div class="flex flex-row items-center w-full md:w-1/2 h-fit">
                    <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/05/about-us-img-02.jpg"
                        alt="" class="w-1/2 object-contain ">
                    <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/05/about-us-img-01.jpg"
                        alt="" class="w-1/2 object-contain ">
                </div>
            </div>

            <div class="w-full flex flex-col">
                <div class="w-full items-center justify-center gap-4 flex" style="margin-top: 150px;">
                    <div class="flex flex-col gap-3 absolute mx-auto items-center justify-center max-w-4xl text-center">
                        <p class="text-primary">
                            ONLY THE BEST
                        </p>
                        <h2 class="text-primary font-bold text-xl md:text-3xl -mt-3">TAKE CARE OF YOUR SKIN TODAY
                        </h2>

                    </div>
                </div>
                <div class="flex flex-col md:flex-row  gap-10 mx-16 mt-20">
                    <div class="flex flex-col gap-3 text-primary items-center justify-center w-fit text-center">
                        <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/h1-icon-img-7.png"
                            alt="" class="w-24 h-24">

                        <h1 class="font-semibold text-lg leading-[100%]">RENOVATE FORMULA WATER BASED

                        </h1>
                        <p class=" leading-[100%]">Ornare quam viverra orci si sagittis sit amet consectetu adi piscing
                            elit tristique et egestai ultrices gravida dictum fu.
                        </p>
                    </div>
                    <div class="flex flex-col gap-3 text-primary items-center justify-center w-fit text-center">

                        <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/h1-icon-img-8.png"
                            alt="" class="w-24 h-24">

                        <h1 class="font-semibold text-lg leading-[100%]">EVERYDAY CARE & SERUM DROPS

                        </h1>
                        <p class=" leading-[100%]">Ornare quam viverra orci si sagittis sit amet consectetu adi piscing
                            elit tristique et egestai ultrices gravida dictum fu.
                        </p>
                    </div>
                    <div class="flex flex-col gap-3 text-primary items-center justify-center w-fit text-center">

                        <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/h1-icon-img-9.png"
                            alt="" class="w-24 h-24">

                        <h1 class="font-semibold text-lg leading-[100%]">PREMIUM SKINCARE FORMULAS

                        </h1>
                        <p class=" leading-[100%]">Ornare quam viverra orci si sagittis sit amet consectetu adi piscing
                            elit tristique et egestai ultrices gravida dictum fu.
                        </p>
                    </div>
                    <div class="flex flex-col gap-3 text-primary items-center justify-center w-fit text-center">

                        <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/h1-icon-img-10.png"
                            alt="" class="w-24 h-24">

                        <h1 class="font-semibold text-lg leading-[100%]">PORE PURIFYING & CLEANSING

                        </h1>
                        <p class=" leading-[100%]">Ornare quam viverra orci si sagittis sit amet consectetu adi piscing
                            elit tristique et egestai ultrices gravida dictum fu.
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="flex flex-col md:flex-row w-full bg-[#EAF3FC] py-14 items-center justify-center mx-aut mt-20 gap-14">
                <div class="flex flex-row gap-3 w-fit items-center">
                    <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/h1-icon-img-11.png"
                        class="w-10 h-10" alt="">
                    <p class="text-xl font-medium text-primary">BEST GIFTS FOR YOU</p>
                </div>
                <div class="flex flex-row gap-3 w-fit items-center">
                    <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/h1-icon-img-12.png"
                        class="w-10 h-10" alt="">
                    <p class="text-xl font-medium text-primary">ONLY 100% NATURAL</p>
                </div>
                <div class="flex flex-row gap-3 w-fit items-center">
                    <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/h1-icon-img-13.png"
                        class="w-10 h-10" alt="">
                    <p class="text-xl font-medium text-primary">INTERNET PURCHASE</p>
                </div>
                <div class="flex flex-row gap-3 w-fit items-center">
                    <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/h1-icon-img-14.png"
                        class="w-10 h-10" alt="">
                    <p class="text-xl font-medium text-primary">ALWAYS REACHABLE</p>
                </div>
            </div>
        </div>

        <div class="w-full flex flex-col">
            <div class="w-full items-center justify-center gap-4 flex" style="margin-top: 150px;">
                <div class="flex flex-col gap-3 absolute mx-auto items-center justify-center max-w-4xl text-center">
                    <p class="text-primary">
                        GET ALL INFORMATION
                    </p>
                    <h2 class="text-primary font-bold text-3xl -mt-3">SUBSCRIBE TO OUR NEWSLETTER
                    </h2>

                </div>
            </div>
            <div class="w-full items-center justify-center flex">
                <div class="flex flex-row gap-2 mx-16 mt-20 max-w-3xl w-full items-center justify-center">
                    <input type="text"
                        class="border-gray-400 border rounded-xl text-primary placeholder:text-primary w-full"
                        placeholder="Email Address">
                    <a href=""
                        class="bg-primary rounded-lg text-xs text-white items-center w-fit justify-center px-5 py-3">
                        SUBSCRIBE
                    </a>
                </div>
            </div>

        </div>

        <footer class="w-full px-10 md:px-14 py-16 mx-auto mt-28 bg-primary">
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
                    <img src="{{ asset('assets/images/qrcode.png') }}" class="w-32 h-32 md:w-20 md:h-20" />
                </div>
            </div>
        </footer>
    </main>
@endsection
