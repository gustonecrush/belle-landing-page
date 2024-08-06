@extends('layouts.main', [
    'title' => 'Belle - Belanja kosmetik dan alat kecantikan, terpercaya, dan terjamin kualitasnya!',
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

        <section class="w-full bg-primary py-20"></section>
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

    <!-- Product Detail Modal -->


    <script>
        function openProductModal(productId) {
            // Fetch product details via API or use data already loaded on the page
            // For demonstration purpose, I'll just show basic structure
            const product = {
                nama_produk: "Product Name",
                description: "Product Description",
                harga: "Product Price",
                tanggal_produksi: "Production Date",
                stok: "Stock Availability",
                file_foto_produk: "{{ asset('assets/images/product-placeholder.png') }}", // Placeholder image path
                category: "Product Category"
            };

            // Update modal content with product details
            document.getElementById('productModalTitle').textContent = product.nama_produk;
            const modalContent = document.getElementById('productModalContent');
            modalContent.innerHTML = `
                <div class="flex flex-col gap-2">
                    <img src="${product.file_foto_produk}" alt="Product Image" class="w-full h-auto rounded-lg">
                    <p class="font-medium text-lg">${product.nama_produk}</p>
                    <p>${product.description}</p>
                    <p><strong>Harga:</strong> ${product.harga}</p>
                    <p><strong>Tanggal Produksi:</strong> ${product.tanggal_produksi}</p>
                    <p><strong>Stok:</strong> ${product.stok}</p>
                    <p><strong>Category:</strong> ${product.category}</p>
                </div>
            `;

            // Show the modal
            const modal = document.getElementById('productModal');
            modal.classList.remove('hidden');
        }

        function closeProductModal() {
            // Close the modal
            const modal = document.getElementById('productModal');
            modal.classList.add('hidden');
        }
    </script>
@endsection
