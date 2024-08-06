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

            <div class="w-full flex flex-col -mt-10">
                <div class="w-full items-center justify-center gap-4 flex" style="margin-top: 150px;">
                    <div class="flex flex-col gap-3 absolute mx-auto items-center justify-center max-w-4xl text-center">
                        <h2 class="text-primary font-bold text-xl md:text-3xl -mt-3">CONTACT US NOW BY EMAIL

                        </h2>
                        <p class="text-primary -mt-3 md:mt-0">
                            We will answer in 48h or less. Thank you.
                        </p>
                    </div>
                </div>
                <div class="w-full items-center justify-center flex md:mt-0 -mt-10">
                    <div class="flex gap-2 mx-8 md:mx-16 mt-20 max-w-3xl w-full items-center justify-center flex-col">
                        <textarea type="text"
                            class="border-gray-400 border rounded-xl text-primary placeholder:text-primary w-full text-sm md:text-base"
                            placeholder="Type Question Here..." rows="10"></textarea>

                        <div class="w-full flex flex-col md:flex-row gap-2">
                            <input type="text"
                                class="border-gray-400 border rounded-xl text-primary placeholder:text-primary w-full text-sm md:text-base"
                                placeholder="Name">
                            <input type="text"
                                class="border-gray-400 border rounded-xl text-primary placeholder:text-primary w-full text-sm md:text-base"
                                placeholder="Email Address">
                        </div>
                        <div class="w-full flex flex-col md:flex-row gap-2">
                            <input type="text"
                                class="border-gray-400 border rounded-xl text-primary placeholder:text-primary w-full text-sm md:text-base"
                                placeholder="Telephone">
                            <input type="text"
                                class="border-gray-400 border rounded-xl text-primary placeholder:text-primary w-full text-sm md:text-base"
                                placeholder="Website">
                        </div>
                        <a href=""
                            class="bg-primary mt-6 rounded-lg text-xs text-white items-center w-full text-center md:w-fit justify-center px-5 py-3">
                            SEND MESSAGE
                        </a>
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
                    <img src="{{ asset('assets/images/qr-code.png') }}" class="w-32 h-32 md:w-20 md:h-20" />
                </div>
            </div>
        </footer>
    </main>
@endsection
