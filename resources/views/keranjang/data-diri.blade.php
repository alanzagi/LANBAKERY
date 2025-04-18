<x-layout :title="$title">
    @section('page')
        <main class="bg-yellow-300 pt-20 font-poppins">
            <section class="text-center justify-center py-16 space-y-4 lg:px-40">
                <section class="px-10 text-gray-800 pb-4 space-y-2">
                    <h1 class="text-3xl font-bold">Pemesanan</h1>
                    <p class="">Staf kami akan menghubungi Anda setelah mengisi data diri dibawah. </p>
                </section>

                {{-- Menampilkan produk yang ada di keranjang --}}
                <section class="bg-white shadow-lg text-gray-800 mx-4 md:mx-10 p-6 border-t-2 border-gray-800">
                    @if (!empty($keranjang))
                        <div class="font-medium">
                            <h2 class="flex items-start border-b border-gray-400 pb-2 font-medium">Daftar Produk</h2>

                            @php $totalHarga = 0; @endphp
                            @foreach ($keranjang as $id => $item)
                                @php $totalHarga += $item['harga'] * $item['quantity']; @endphp
                                <div class="py-2 border-b border-gray-400 keranjang-item">
                                    <div class="flex items-center justify-between">
                                        <h2 class="text-sm produk-nama">{{ $item['nama'] }} x
                                            <span class="produk-qty">{{ $item['quantity'] }}</span>
                                        </h2>
                                        <span class="produk-harga">
                                            Rp{{ number_format($item['harga'] * $item['quantity'], 0, ',', '.') }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="bg-yellow-300 mt-6 p-6 rounded-lg text-center">
                            <div
                                class="bg-white flex justify-between p-4 border-2 border-gray-800 text-gray-800 mt-4 rounded-lg">
                                <span class="font-bold">Total</span>
                                <span class="font-extrabold">
                                    Rp{{ number_format($totalHarga, 0, ',', '.') }}
                                </span>
                            </div>
                        </div>
                    @else
                        <p class="text-center text-lg">Keranjang Anda Kosong.</p>
                    @endif
                </section>

                {{-- Form Data Diri --}}
                <section class="bg-white shadow-lg border-b-2 border-gray-800 text-gray-800 mx-4 md:mx-10 p-6 mt-6">
                    <h2 class="flex items-start mb-4 border-b border-gray-400 pb-2 font-medium">Data Diri</h2>
                    <form id="checkoutForm">
                        @csrf
                        <div class="mb-4">
                            <label for="nama" class="block text-sm text-left">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" required
                                class="w-full border border-gray-300 rounded-lg p-2 focus:border-yellow-500">
                        </div>

                        <div class="mb-4">
                            <label for="alamat" class="block text-sm text-left">Alamat</label>
                            <textarea id="alamat" name="alamat" required
                                class="w-full border border-gray-300 rounded-lg p-2 focus:border-yellow-500"></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="nomor_hp" class="block text-sm text-left">Nomor HP</label>
                            <input type="text" id="nomor_hp" name="nomor_hp" required pattern="[0-9]{10,15}"
                                class="w-full border border-gray-300 rounded-lg p-2 focus:border-yellow-500">
                        </div>

                        <button type="submit"
                            class="mt-4 w-full h-12 bg-gray-800 text-yellow-300 rounded-lg font-medium hover:bg-gray-700">
                            Pesan Sekarang
                        </button>
                    </form>
                </section>
            </section>
        </main>
    @endsection
</x-layout>
