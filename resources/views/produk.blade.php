<x-layout :title="$title">
    @section('page')
        <main class="pt-20 bg-yellow-300 font-poppins px-5 md:px-20">
            <div class="bg-white px-5 rounded-lg shadow-lg py-5 flex flex-col">
                <div class="flex flex-col space-y-10 md:flex-row md:space-x-10 md:px-10 md:justify-center md:items-center">
                    <select name="" id=""
                        class="border-2 border-gray-800 bg-white text-gray-800 font-bold focus:border-gray-800 focus:outline-none focus:ring-0 shadow-[4px_4px_0px_rgba(15,23,42,1)] rounded-none">
                        <option value="" class="text-gray-800">Urutkan</option>
                        <option value="" class="">Berdasarkan Nama A - Z</option>
                        <option value="" class="">Berdasarkan Nama Z - A</option>
                        <option value="" class="">Harga Terendah ke Tertinggi</option>
                        <option value="" class="">Harga Tertinggi ke Terendah</option>
                    </select>

                    <div class="flex flex-row items-center md:pb-10">
                        <input type="text" placeholder="Cari Produk"
                            class="border-2 border-gray-800 p-3 flex-1 bg-white text-gray-800 font-bold focus:border-gray-800 focus:outline-none focus:ring-0 shadow-[4px_4px_0px_rgba(15,23,42,1)] rounded-none placeholder-gray-800 w-full" />
                        <button
                            class="bg-yellow-300 text-gray-800 border-2 border-gray-800 p-3 font-bold hover:bg-yellow-400 active:translate-x-1 active:translate-y-1 shadow-[4px_4px_0px_rgba(15,24,42,1)] rounded-none">
                            Cari
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-x-12 lg:grid-cols-3">
                    @foreach ($produk as $item)
                        <div class="flex flex-col space-y-4 border-b-2 border-gray-800 w-full">
                            <div class="h-52 rounded-lg overflow-hidden flex justify-center items-center">
                                <img src="{{ asset('images/' . $item->gambar) }}" alt=""
                                    class="max-h-full max-w-full object-contain">
                            </div>
                            <h2 class="text-lg text-center font-medium">{{ $item->nama }}</h2>
                            <div class="flex flex-row items-center">
                                <input type="number" placeholder="Cari Produk" value="1"
                                    class="border-2 border-gray-800 p-3 flex-1 bg-white text-gray-800 font-bold w-full focus:border-gray-800 focus:outline-none focus:ring-0 shadow-[4px_4px_0px_rgba(15,23,42,1)] rounded-none placeholder-gray-800" />
                                <button
                                    class="bg-yellow-300 text-gray-800 border-2 border-gray-800 p-3 font-bold hover:bg-yellow-400 active:translate-x-1 active:translate-y-1 shadow-[4px_4px_0px_rgba(15,24,42,1)] rounded-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                        class="text-gray-800 w-6 h-6">
                                        <path
                                            d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="text-lg pb-2 font-bold">Rp{{ number_format($item->harga, 0, ',', '.') }}</h2>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>
    @endsection
</x-layout>
