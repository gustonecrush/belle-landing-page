@extends('layouts.main', [
    'title' => 'Belle - Belanja kosmetik dan alat kecantikan, terpercaya, dan terjamin kualitasnya!',
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
        <section class="w-full mx-auto h-fit">
            <h1 class="text-primary font-extrabold text-4xl text-center py-9">Products</h1>
            <div class="grid grid-cols-3 gap-4">
                @foreach ($products as $product)
                    <div class="w-full h-[300px] relative flex items-center justify-center">
                        <img class="object-cover w-full h-full"
                            src="{{ asset('storage/' . $product->file_foto_produk) }}" />
                        <button type="button"
                            class="bg-primary w-fit text-white font-medium px-6 py-2 rounded-lg box-shadow-custom absolute bottom-6 mx-auto"
                            onclick="document.getElementById('productModal_{{ $product->id }}').classList.remove('hidden')">
                            {{ $product->nama_produk }}
                        </button>

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
                                        <img src="{{ asset('storage/' . $product->file_foto_produk) }}" alt="Product Image"
                                            class="w-full h-auto rounded-lg">
                                        <p class="font-medium text-lg">{{ $product->nama_produk }}</p>
                                        <p>{{ $product->description }}</p>
                                        <p><strong>Harga:</strong> Rp. {{ number_format($product->harga, 0, ',', '.') }}</p>
                                        {{-- <p><strong>Tanggal Produksi:</strong> {{ $product->tanggal_produksi }}</p>
                                        <p><strong>Stok:</strong> {{ $product->stok }}</p> --}}
                                        <p><strong>Category:</strong> {{ $product->category->nama }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>

        <section class="w-full bg-primary py-20 mb-10 mt-8"></section>
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
