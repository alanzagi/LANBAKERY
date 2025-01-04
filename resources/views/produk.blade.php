<x-layout :title="$title">
    @section('page')
        <main class="pt-20 bg-yellow-300 font-poppins px-5">
            <div class="bg-white px-5 rounded-lg shadow-lg py-5 flex flex-col">
                <div class="flex flex-col space-y-10">
                    <select name="" id=""
                        class="border-2 border-gray-800 p-3 flex-1 bg-white text-gray-800 font-bold focus:border-gray-800 focus:outline-none focus:ring-0 shadow-[4px_4px_0px_rgba(15,23,42,1)] rounded-none">>
                        <option value="" class="text-gray-800">Urutkan</option>
                        <option value="" class="">Berdasarkan Nama A - Z</option>
                        <option value="" class="">Berdasarkan Nama Z - A</option>
                        <option value="" class="">Harga Terendah ke Tertinggi</option>
                        <option value="" class="">Harga Tertinggi ke Terendah</option>
                    </select>

                    <div class="flex flex-row items-center">
                        <input type="text" placeholder="Cari Produk"
                            class="border-2 border-gray-800 p-3 flex-1 bg-white text-gray-800 font-bold focus:border-gray-800 focus:outline-none focus:ring-0 shadow-[4px_4px_0px_rgba(15,23,42,1)] rounded-none placeholder-gray-800" />
                        <button
                            class="bg-yellow-300 text-gray-800 border-2 border-gray-800 p-3 font-bold hover:bg-yellow-400 active:translate-x-1 active:translate-y-1 shadow-[4px_4px_0px_rgba(15,24,42,1)] rounded-none">
                            Cari
                        </button>
                    </div>
                </div>
            </div>
        </main>
    @endsection
</x-layout>
