@extends('layouts.main', [
    'title' => 'Belle -  Belanja kosmetik dan alat kecantikan, terpercaya, dan terjamin kualitasnya!',
])

@section('content')
    <main class="w-full h-full bg-white">
        <header class="w-full bg-primary">
            <nav class="w-full flex items-center justify-between max-w-5xl mx-auto py-8">
                <a href="" class="text-white text-4xl">LOGO BELLE</a>
                <ul class="text-white flex text-lg gap-9 font-medium tracking-tight">
                    <li><a href="/">Home</a></li>
                    <li><a href="/products">
                            Products</a></li>
                    <li>About Us</li>
                    <li>Contact Us</li>
                </ul>
            </nav>
        </header>
        <section class="w-full max-w-5xl mx-auto h-[70vh] flex items-center">
            <div class="flex flex-col gap-0 flex-1 text-left !justify-start !items-start">
                <div class="flex flex-col gap-1">
                    <p class="text-3xl text-primary font-medium">
                        Skincare Beauty
                    </p>
                    <h1 class="text-[5.5rem] leading-[100%] font-extrabold text-primary">
                        PRODUCT
                    </h1>
                    <p class="text-primary font-regular text-base">
                        Devoted to serving natural beauty, we have poured all of our knowledge & experience to provide
                        the
                        best beauty products and detailed services to a variety of consumers. We highly value extended
                        services to educate and satisfyour customers. Getting to know us means getting to know what you
                        need.
                    </p>
                </div>
                <a href=""
                    class="bg-primary w-fit text-white font-medium px-6 py-2 rounded-lg box-shadow-custom flex mt-5">
                    read more
                </a>
            </div>
            <div class="w-full">
                <img src="{{ asset('assets/images/product.png') }}" class="flex-1" alt="">
            </div>
        </section>
        <section class="w-full mx-auto h-fit">
            <h1 class="text-primary font-extrabold text-4xl text-center py-9">Product Categories</h1>
            <div class="grid grid-cols-3 gap-0">
                <div class="w-full h-[300px] relative flex items-center justify-center">
                    <img class="object-cover w-full h-[300px]" src="{{ asset('assets/images/product-1.jpg') }}" />
                    <a href=""
                        class="bg-primary w-fit text-white font-medium px-6 py-2 rounded-lg box-shadow-custom absolute bottom-6 mx-auto">
                        Skincare
                    </a>
                </div>
                <div class="w-full h-[300px] relative flex items-center justify-center"> <img
                        class="object-cover w-full h-[300px]" src="{{ asset('assets/images/product-2.jpg') }}" />
                    <a href=""
                        class="bg-primary w-fit text-white font-medium px-6 py-2 rounded-lg box-shadow-custom absolute bottom-6 mx-auto">
                        Puff and brush
                    </a>
                </div>
                <div class="w-full h-[300px] relative flex items-center justify-center">
                    <img src="{{ asset('assets/images/product-3.webp') }}" />
                    <a href=""
                        class="bg-primary w-fit text-white font-medium px-6 py-2 rounded-lg box-shadow-custom absolute bottom-6 mx-auto">
                        Beauty tools and clinic equipments
                    </a>
                </div>
                <div class="w-full h-[300px] relative flex items-center justify-center">
                    <img class="object-cover w-full h-[300px]" src="{{ asset('assets/images/product-4.webp') }}" />
                    <a href=""
                        class="bg-primary w-fit text-white font-medium px-6 py-2 rounded-lg box-shadow-custom absolute bottom-6 mx-auto">
                        Salon and clinic support
                    </a>
                </div>
                <div class="w-full h-[300px] relative flex items-center justify-center">
                    <img class="object-cover w-full h-[300px]" src="{{ asset('assets/images/product-5.jpg') }}" />
                    <a href=""
                        class="bg-primary w-fit text-white font-medium px-6 py-2 rounded-lg box-shadow-custom absolute bottom-6 mx-auto">
                        Beauty packaging
                    </a>
                </div>
                <div class="w-full h-[300px] relative flex items-center justify-center">
                    <img class="object-cover w-full h-[300px]" src="{{ asset('assets/images/product-6.webp') }}" />
                    <a href=""
                        class="bg-primary w-fit text-white font-medium px-6 py-2 rounded-lg box-shadow-custom absolute bottom-6 mx-auto">
                        Beautypreuneur support
                    </a>
                </div>
            </div>
        </section>
        <section class="w-full max-w-5xl mx-auto grid grid-cols-4 py-24">
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
        </section>
        <section class="w-full bg-primary py-20 mb-10"></section>
        <footer class="w-full max-w-5xl mx-auto">
            <div class="w-full grid grid-cols-3 gap-x-5">
                <div class="flex flex-col gap-2 flex-1">
                    <p href="" class=" text-4xl text-primary font-bold">BELLE</p>
                    <p class="italic text-xl text-primary">Your beauty business solutions</p>
                </div>
                <div class="flex flex-col gap-2 flex-1 w-full">
                    <p href="" class=" text-xl text-primary font-bold">Main Office :
                        Panjang Jiwo Permai III/28
                        Surabaya - Indonesia</p>
                    <p class="italic text-lg text-primary w-[100px]">https://maps.app.goo.gl/tQTPpc356bb1n64C6</p>
                </div>
                <div class="flex flex-col gap-2 flex-1 items-center justify-center">
                    <p href="" class=" text-xl text-primary font-bold">Customer care<br />+62838 4933 9756</p>
                    <img src="{{ asset('assets/images/qrcode.png') }}" class="w-20 h-20" />
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
