<x-layout :title="$title">
    @section('page')
        <main class="bg-yellow-300 pt-20 font-poppins">
            <section class="text-center justify-center py-16 space-y-4">
                <h1 class="text-3xl font-bold text-gray-800">Keranjang</h1>
                <section class="bg-white pt-10 rounded-lg shadow-lg text-center text-gray-800 mx-10">
                    @if (!empty($keranjang))
                        @foreach ($keranjang as $id => $item)
                            <div class="py-6 px-4">
                                <div class="w-full">
                                    <img src="{{ asset('images/' . $item['gambar']) }}" alt="{{ $item['nama'] }}">
                                </div>
                                <div class="pt-4 space-y-2">
                                    <div class="flex items-start space-x-5">
                                        <h2 class="text-gray-800 text-xl font-medium">{{ $item['nama'] }}</h2>
                                        <a href="{{ route('keranjang.delete', $id) }}"
                                            class="bg-red-600 w-8 h-8 rounded-lg flex items-center justify-center hover:bg-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                                class="fill-current text-white w-6 h-6 ">
                                                <path
                                                    d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <input type="number" name="quantity" id="quantity" value="{{ $item['quantity'] }}"
                                            class="w-16 border-gray-200 border-2 rounded-lg">
                                        <span
                                            class="text-2xl font-semibold text-gray-800">Rp{{ number_format($item['harga'], 0, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="bg-yellow-300 text-center">
                            <div class="py-14 space-y-4 mx-6">
                                <h2 class="uppercase text-2xl tracking-widest">Ringkasan</h2>
                                <div class="bg-white flex justify-between p-4 border-2 border-gray-800 text-gray-800 ">
                                    <span class="font-bold">Total</span>
                                    <span class="font-extrabold">Rp100.000</span>
                                </div>
                                <button
                                    class="w-full h-12 bg-gray-800 text-yellow-300 rounded-lg border-1 border-gray-800 font-medium">Pesan</button>
                            </div>
                        </div>
                    @else
                        <p>Keranjang Anda Kosong.
                            <a href="{{ route('produk') }}" class="text-yellow-300 font-bold">Belanja Sekarang</a>
                        </p>
                    @endif
                </section>
            </section>
        </main>
    @endsection
</x-layout>
