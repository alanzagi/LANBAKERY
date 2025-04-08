<x-layout :title="$title">
    @section('page')
        <header id="default-carousel" class="relative w-full pt-[5rem] bg-yellow-300 z-20" data-carousel="slide">
            <div class="relative h-56 overflow-hidden border-y-2 border-gray-800 md:h-[27rem]">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/jajan-pasar.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/roti-tawar.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/puding.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/roti-mini.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/paketan.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
        </header>

        <main class="py-10 bg-yellow-300 font-poppins px-5 md:px-24">
            <div class="bg-white px-12 rounded-lg shadow-lg pb-20 flex flex-col">
                <div class="text-center text-gray-800 py-10 md:pt-20">
                    <h1 class="text-4xl font-bold">Daftar Produk</h1>
                    <p class="text-sm px-10 md:hidden">Kami menyediakan produk yang beragam mulai dari Jajanan Pasar hingga
                        Kue
                        Kering.</p>
                </div>

                <div class="flex flex-col space-y-10 md:flex-row md:space-x-10 md:px-10 md:justify-center md:items-center">
                    <select name="sort" id="sort"
                        class="border-2 border-gray-800 bg-white text-gray-800 font-bold focus:border-gray-800 focus:outline-none focus:ring-0 shadow-[4px_4px_0px_rgba(15,23,42,1)] rounded-none">
                        <option value="">Urutkan</option>
                        <option value="nama_asc">Berdasarkan Nama A - Z</option>
                        <option value="nama_desc">Berdasarkan Nama Z - A</option>
                        <option value="harga_asc">Harga Terendah ke Tertinggi</option>
                        <option value="harga_desc">Harga Tertinggi ke Terendah</option>
                    </select>

                    <div class="flex flex-row items-center md:pb-10">
                        <input type="text" id="search" name="search" placeholder="Cari Produk"
                            class="border-2 border-gray-800 p-3 flex-1 bg-white text-gray-800 font-bold focus:border-gray-800 focus:outline-none focus:ring-0 shadow-[4px_4px_0px_rgba(15,23,42,1)] rounded-none placeholder-gray-800 w-full" />
                        <button id="search-button"
                            class="bg-yellow-300 text-gray-800 border-2 border-gray-800 p-3 font-bold hover:bg-yellow-400 active:translate-x-1 active:translate-y-1 shadow-[4px_4px_0px_rgba(15,24,42,1)] rounded-none">
                            Cari
                        </button>
                    </div>
                </div>

                <div id="produk-list" class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-x-12 lg:grid-cols-3">
                    @foreach ($produk as $item)
                        <div
                            class="flex flex-col space-y-4 border-b-2 border-gray-800 w-full md:border-2 md:p-6 md:rounded-lg md:shadow-lg">
                            <div class="h-52 rounded-lg overflow-hidden flex justify-center items-center">
                                <img src="{{ asset('images/' . $item->gambar) }}" alt=""
                                    class="max-h-full max-w-full object-contain">
                            </div>
                            <h2 class="text-lg text-center font-medium">{{ $item->nama }}</h2>
                            <div class="flex flex-row items-center">
                                <input type="number" placeholder="Cari Produk" value="1" min="1"
                                    class="border-2 border-gray-800 p-3 flex-1 bg-white text-gray-800 font-bold w-full 
    focus:border-gray-800 focus:outline-none focus:ring-0 shadow-[4px_4px_0px_rgba(15,23,42,1)] 
    rounded-none placeholder-gray-800" />
                                <a href="#"
                                    class="add-keranjang bg-yellow-300 text-gray-800 border-2 border-gray-800 p-3 font-bold hover:bg-yellow-400 active:translate-x-1 active:translate-y-1 shadow-[4px_4px_0px_rgba(15,24,42,1)] rounded-none"
                                    data-id="{{ $item->id }}" data-nama="{{ $item->nama }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#1F2937"
                                        class=" w-6 h-6">
                                        <path
                                            d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z" />
                                    </svg>
                                </a>

                            </div>
                            <h2 class="text-lg pb-2 font-bold">Rp{{ number_format($item->harga, 0, ',', '.') }}</h2>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>
    @endsection
</x-layout>
