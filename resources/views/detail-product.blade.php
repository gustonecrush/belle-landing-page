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
        <div class="container mx-auto p-6 px-14">
            <div class="text-sm text-gray-600 mt-4">
                <a href="#" class="hover:underline">Home</a> /
                <a href="#" class="hover:underline">Products</a> /
                <a href="#" class="hover:underline">Skin Care</a> /
                <a href="#" class="hover:underline">BYOU</a> /
                <span>Glowing Golden Mask</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-4">
                <div>
                    <div class="relative w-full h-96">
                        <img src="/storage/{{ $products->file_foto_produk }}" alt="BYOU Glowing Golden Mask"
                            class="w-full h-full object-contain rounded-lg shadow-lg">
                        <div class="absolute inset-y-0 left-0 flex items-center">
                            <button class="bg-white text-gray-800 hover:bg-gray-200 rounded-full shadow p-2 -ml-4"
                                aria-label="Previous">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <button class="bg-white text-gray-800 hover:bg-gray-200 rounded-full shadow p-2 -mr-4"
                                aria-label="Next">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <h1 class="text-3xl font-bold mb-0">{{ $products->nama_produk }}</h1>
                    <p class="text-gray-700 mb-2">Bahan aktif: Aloe Barbadensis Extract, Hamamelis Virgiana</p>
                    <div class="flex items-center mb-4">
                        <span class="bg-gray-200 text-gray-700 rounded-full px-3 py-1 text-sm">350 ml</span>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <h2 class="text-lg font-semibold mb-2">Catatan</h2>
                        <p class="text-gray-700 mb-4">
                            {{ $products->description }}
                        </p>
                    </div>



                </div>
            </div>
        </div>

        <section class="w-full  h-fit px-14">
            <div>
                <h1 class="text-3xl font-bold mb-0">PRODUCT RELATED</h1>
                <p class="text-gray-700 mb-2">Temukan produk dengan kategori serupa untuk menambahkan preferensi
                    kecantikanmu dari produk Belle Indonesia</p>

                <div class="border-t border-gray-200 pt-4">
                </div>

            </div>
            <div class="grid grid-cols-4 w-fit mx-auto gap-5">
                @foreach ($productsRelated as $index => $product)
                    <div class="flex w-fit h-fit rounded-lg flex-col gap-2">
                        <div class=" rounded-lg relative flex items-center justify-center">
                            <img class="object-cover w-56 h-56 rounded-xl "
                                src="{{ asset('storage/' . $product->file_foto_produk) }}" data-aos="fade-up"
                                data-aos-duration="{{ $index * 1500 }}" />

                        </div>
                        <div class="flex gap-2 h-fit flex-col">
                            <a href="/products/{{ $product->id }}"
                                class="bg-primary w-full text-white font-medium px-6 py-2 rounded-lg box-shadow-custom  mx-auto items-center text-center">
                                {{ $product->nama_produk }}
                            </a>

                            <!-- Modal -->
                            <div id="productModal_{{ $product->id }}"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-lg max-h-full mx-auto">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <div
                                            class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                {{ $product->nama_produk }}
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                onclick="document.getElementById('productModal_{{ $product->id }}').classList.add('hidden')">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="p-6 space-y-6">
                                            <img src="{{ asset('storage/' . $product->file_foto_produk) }}"
                                                alt="Product Image" class="w-full h-auto rounded-lg">
                                            <p class="font-medium text-lg">{{ $product->nama_produk }}</p>
                                            <p>{{ $product->description }}</p>
                                            {{-- <p><strong>Harga:</strong> Rp. {{ number_format($product->harga, 0, ',', '.') }}</p> --}}
                                            {{-- <p><strong>Tanggal Produksi:</strong> {{ $product->tanggal_produksi }}</p>
                                <p><strong>Stok:</strong> {{ $product->stok }}</p> --}}
                                            {{-- <p><strong>Category:</strong> {{ $product->category->nama }}</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
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
