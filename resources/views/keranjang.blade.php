<x-layout :title="$title">
    @section('page')
        <main class="bg-yellow-300 pt-20 font-poppins">
            <section class="text-center justify-center py-16 space-y-4">
                <h1 class="text-3xl font-bold text-gray-800">Keranjang</h1>
                <section class="bg-white px-4 py-10 rounded-lg shadow-lg text-center text-gray-800 mx-10">
                    @if (!empty($keranjang))
                        <table border="1">
                            <tr>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($keranjang as $id => $item)
                                <tr>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>Rp{{ number_format($item['harga'], 0, ',', '.') }}</td>
                                    <td>{{ $item['quantity'] }}</td>
                                    <td>
                                        <a href="{{ route('keranjang.delete', $id) }}">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>Keranjang Anda Kosong.
                            <a href="" class="text-yellow-300 font-bold">Belanja Sekarang</a>
                        </p>
                    @endif

                </section>
            </section>
        </main>
    @endsection
</x-layout>
