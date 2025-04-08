<script>
    // produk.blade.php
    $(document).ready(function() {
        // Inisialisasi Notyf untuk menampilkan notifikasi sukses atau error
        const notyf = new Notyf({
            duration: 2000, // Durasi notifikasi dalam milidetik (2 detik)
            position: {
                x: 'center', // Posisi notifikasi di tengah
                y: 'bottom', // Posisi notifikasi di bawah
            },
        });

        // Membatasi input number agar tidak kurang dari 1
        document.querySelectorAll('input[type="number"]').forEach(input => {
            input.addEventListener('input', function() {
                if (this.value < 1) {
                    this.value = 1;
                }
            });
        });

        // Fungsi untuk memuat daftar produk berdasarkan pencarian dan filter
        function loadProducts() {
            const search = $('#search').val(); // Mengambil nilai input pencarian
            const sort = $('#sort').val(); // Mengambil nilai filter urutan

            $.ajax({
                url: '{{ route('produk') }}', // URL untuk mengambil daftar produk
                type: 'GET',
                data: {
                    search: search, // Kirim data pencarian
                    sort: sort // Kirim data filter
                },
                success: function(data) {
                    // Mengupdate daftar produk dengan data yang diterima
                    const html = $(data).find('#produk-list').html();
                    $('#produk-list').html(html);
                },
                error: function() {
                    alert(
                        'Terjadi kesalahan saat memuat data.'
                    ); // Notifikasi error jika gagal mengambil data
                }
            });
        }

        // Event listener untuk tombol pencarian
        $('#search-button').on('click', function(e) {
            e.preventDefault(); // Mencegah reload halaman saat tombol diklik
            loadProducts(); // Memuat daftar produk berdasarkan pencarian
        });

        // Event listener untuk perubahan pada filter urutan
        $('#sort').on('change', function() {
            loadProducts(); // Memuat ulang daftar produk saat filter diubah
        });

        // Event listener untuk tombol tambah ke keranjang
        $(document).on("click", ".add-keranjang", function(e) {
            e.preventDefault(); // Mencegah aksi default dari tombol

            var id = $(this).data("id"); // Mengambil ID produk dari tombol yang diklik
            var quantity = $(this).closest("div").find("input[type='number']")
                .val(); // Mengambil jumlah produk yang dipilih

            $.ajax({
                url: "/keranjang/add/" + id, // Endpoint untuk menambahkan produk ke keranjang
                type: "POST",
                data: {
                    id: id,
                    quantity: quantity, // Kirim jumlah produk yang dipilih
                    _token: "{{ csrf_token() }}" // Token CSRF untuk keamanan
                },
                success: function(response) {
                    if (response.status === "success") {
                        notyf.success(
                            "Produk berhasil ditambahkan ke keranjang!"
                        ); // Notifikasi sukses
                    } else {
                        notyf.error(response.message ||
                            "Gagal menambahkan produk."); // Notifikasi error jika gagal
                    }
                },
                error: function(xhr) {
                    notyf.error(
                        "Terjadi kesalahan. Coba lagi nanti!"
                    ); // Notifikasi error jika terjadi kesalahan
                }
            });
        });

    });

    // keranjang.blade.php
    $(document).on('input', '.quantity-input', function() {
        var quantity = $(this).val(); // Mengambil nilai input jumlah produk
        var itemId = $(this).data('id'); // Mengambil ID produk yang diubah jumlahnya

        $.ajax({
            url: '{{ route('keranjang.update') }}', // Endpoint untuk memperbarui jumlah produk di keranjang
            method: 'POST',
            data: {
                id: itemId, // Kirim ID produk
                quantity: quantity, // Kirim jumlah terbaru
                _token: '{{ csrf_token() }}' // Token CSRF untuk keamanan
            },
            success: function(response) {
                // Update harga item yang diubah
                $('#price-' + itemId).text('Rp' + response.newPrice);
                // Update total harga keseluruhan
                $('#total-price').text('Rp' + response.total);
            },
            error: function() {
                alert(
                    'Terjadi kesalahan saat memperbarui quantity.'
                ); // Notifikasi error jika gagal memperbarui jumlah
            }
        });
    });

    document.getElementById("checkoutForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Mencegah reload form

        // Ambil nilai input
        let nama = document.getElementById("nama").value;
        let alamat = document.getElementById("alamat").value;
        let nomor_hp = document.getElementById("nomor_hp").value;

        // Kirim data ke Laravel (menggunakan fetch API)
        fetch("{{ route('keranjang.checkout') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                },
                body: JSON.stringify({
                    nama,
                    alamat,
                    nomor_hp
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.waLink) {
                    // Buka WhatsApp di tab baru
                    window.open(data.waLink, "_blank");

                    // Redirect ke beranda setelah 2 detik
                    setTimeout(() => {
                        window.location.href = "/";
                    }, 2000);
                }
            });
    });
</script>
