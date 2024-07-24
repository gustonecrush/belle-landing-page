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
            <div class="w-full h-2/3 relative flex items-center justify-center">
                <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/about-us-img-01.jpg" alt=""
                    class="w-full h-2/3">
                <div class="flex flex-col gap-3 absolute mx-auto items-center justify-center max-w-4xl text-center">
                    <p class="text-primary">
                        OUR MISSION
                    </p>
                    <h2 class="text-primary font-bold text-3xl">LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISCING ELIT, SED
                        DO TEMPOR
                        INCIDIDUNT UT.</h2>
                    <img src="https://drleigh.qodeinteractive.com/wp-content/uploads/2023/04/Dr.-Leigh.png"
                        class="w-56 -mt-13" alt="">
                </div>
            </div>

            <div class="w-full flex flex-col -mt-10">
                <div class="w-full items-center justify-center gap-4 flex" style="margin-top: 150px;">
                    <div class="flex flex-col gap-3 absolute mx-auto items-center justify-center max-w-4xl text-center">
                        <h2 class="text-primary font-bold text-3xl -mt-3">CONTACT US NOW BY EMAIL

                        </h2>
                        <p class="text-primary">
                            We will answer in 48h or less. Thank you.
                        </p>


                    </div>
                </div>
                <div class="w-full items-center justify-center flex">
                    <div class="flex gap-2 mx-16 mt-20 max-w-3xl w-full items-center justify-center flex-col">
                        <textarea type="text" class="border-gray-400 border rounded-xl text-primary placeholder:text-primary w-full"
                            placeholder="Type Question Here..." rows="10"></textarea>

                        <div class="w-full flex gap-2">
                            <input type="text"
                                class="border-gray-400 border rounded-xl text-primary placeholder:text-primary w-full"
                                placeholder="Name">
                            <input type="text"
                                class="border-gray-400 border rounded-xl text-primary placeholder:text-primary w-full"
                                placeholder="Email Address">
                        </div>
                        <div class="w-full flex gap-2">
                            <input type="text"
                                class="border-gray-400 border rounded-xl text-primary placeholder:text-primary w-full"
                                placeholder="Telephone">
                            <input type="text"
                                class="border-gray-400 border rounded-xl text-primary placeholder:text-primary w-full"
                                placeholder="Website">
                        </div>
                        <a href=""
                            class="bg-primary mt-6 rounded-lg text-xs text-white items-center w-fit justify-center px-5 py-3">
                            SEND MESSAGE
                        </a>
                    </div>
                </div>

            </div>

            <div class="w-full flex justify-between items-center px-20 my-14">
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



        <footer class="w-full px-14 py-16 mx-auto mt-28 bg-primary">
            <div class="w-full grid grid-cols-3 gap-x-5">
                <div class="flex flex-col gap-2 flex-1">
                    <p href="" class=" text-4xl text-white font-bold">BELLE</p>
                    <p class="italic text-xl text-white">Your beauty business solutions</p>
                </div>
                <div class="flex flex-col gap-2 flex-1 w-full">
                    <p href="" class=" text-xl text-white font-bold">Main Office :
                        Panjang Jiwo Permai III/28
                        Surabaya - Indonesia</p>
                    <p class="italic text-lg text-white w-[100px]">https://maps.app.goo.gl/tQTPpc356bb1n64C6</p>
                </div>
                <div class="flex flex-col gap-2 flex-1 items-center justify-center">
                    <p href="" class=" text-xl text-white font-bold">Customer care<br />+62838 4933 9756</p>
                    <img src="{{ asset('assets/images/qrcode.png') }}" class="w-20 h-20" />
                </div>
            </div>
        </footer>
    </main>
@endsection
