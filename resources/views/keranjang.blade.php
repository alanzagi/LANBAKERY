<x-layout :title="$title">
    @section('page')
        <main class="bg-yellow-300 pt-20 font-poppins">
            <section class="text-center justify-center py-16 space-y-4 lg:px-40">
                <h1 class="text-3xl font-bold text-gray-800 pb-10">Keranjang</h1>
                <section class="bg-white border-2 border-gray-800 box-border shadow-lg text-gray-800 mx-4 md:mx-10 p-6">
                    <form action="{{ route('keranjang.data_diri') }}" method="POST">
                        @csrf
                        @if (!empty($keranjang))
                            @php $totalHarga = 0; @endphp
                            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-2">
                                @foreach ($keranjang as $id => $item)
                                    @php $totalHarga += $item['harga'] * $item['quantity']; @endphp
                                    <div
                                        class="border border-gray-300 rounded-lg p-4 flex flex-col md:flex-row md:items-center">
                                        <div class="w-full md:w-1/3 lg:w-1/4 p-2">
                                            <input type="hidden" name="produk[{{ $id }}][gambar]"
                                                value="{{ $item['gambar'] }}">
                                            <img class="rounded-lg" src="{{ asset('images/' . $item['gambar']) }}"
                                                alt="{{ $item['nama'] }}">
                                        </div>
                                        <div class="flex flex-col flex-1 px-4 space-y-2">
                                            <div class="flex justify-between items-center">
                                                <h2 class="text-lg font-medium">{{ $item['nama'] }}</h2>
                                                <a href="{{ route('keranjang.delete', $id) }}"
                                                    class="bg-red-600 w-8 h-8 rounded-lg flex items-center justify-center hover:bg-red-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                                        class="fill-current text-white w-6 h-6">
                                                        <path
                                                            d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <input type="hidden" name="produk[{{ $id }}][id]"
                                                    value="{{ $id }}">
                                                <input type="hidden" name="produk[{{ $id }}][nama]"
                                                    value="{{ $item['nama'] }}">
                                                <input type="hidden" name="produk[{{ $id }}][harga]"
                                                    value="{{ $item['harga'] }}">
                                                <input type="number" name="produk[{{ $id }}][quantity]"
                                                    id="quantity-{{ $id }}" value="{{ $item['quantity'] }}"
                                                    data-id="{{ $id }}"
                                                    class="w-16 border-gray-300 border-2 rounded-lg quantity-input focus:border-yellow-300 focus:ring-yellow-300 text-center">
                                                <span id="price-{{ $id }}"
                                                    class="text-xl font-semibold text-gray-800">
                                                    Rp{{ number_format($item['harga'] * $item['quantity'], 0, ',', '.') }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="bg-yellow-300 mt-6 p-6 rounded-lg text-center">
                                <h2 class="uppercase text-2xl tracking-widest">Ringkasan</h2>
                                <div
                                    class="bg-white flex justify-between p-4 border-2 border-gray-800 text-gray-800 mt-4 rounded-lg">
                                    <span class="font-bold">Total</span>
                                    <span class="font-extrabold" id="total-price">
                                        Rp{{ number_format($totalHarga, 0, ',', '.') }}
                                    </span>
                                </div>
                                <button type="submit"
                                    class="mt-4 w-full h-12 bg-gray-800 text-yellow-300 rounded-lg font-medium hover:bg-gray-700">
                                    Pesan Sekarang
                                </button>
                            </div>
                        @else
                            <p class="text-center text-lg">Keranjang Anda Kosong.
                                <a href="{{ route('produk') }}" class="text-yellow-500 font-bold underline">Belanja
                                    Sekarang</a>
                            </p>
                        @endif
                    </form>
                </section>
            </section>
        </main>
    @endsection
</x-layout>
