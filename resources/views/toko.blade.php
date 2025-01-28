<x-layout :title="$title">
    @section('page')
        <header class="pt-16 text-gray-800 bg-white border-b-2 font-poppins">
            <div class="pt-6 pb-8 pl-4 md:pl-20">
                <h2 class="flex items-center space-x-2">
                    <a href="" class="text-yellow-300 hover:opacity-80">Beranda</a>
                    <span>/</span>
                    <p>{{ $title }}</p>
                </h2>
                <h1 class="font-semibold text-2xl text-gray-700">{{ $title }}</h1>
            </div>
        </header>

        <main class="bg-yellow-300 py-12 flex items-center justify-center font-poppins">
            <div class="px-4 w-full md:px-20">
                <section class="flex flex-col bg-white px-4 py-4 rounded-lg shadow-md shadow-gray-800">
                    <div>
                        <iframe class="w-full h-96"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3066339393745!2d108.99049807496515!3d0.9176300990735035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e37208c56d26b3%3A0xadd5a82dc079425!2sJl.%20Bintara%2C%20Sekip%20Lama%2C%20Kec.%20Singkawang%20Tengah%2C%20Kota%20Singkawang%2C%20Kalimantan%20Barat%2079113!5e0!3m2!1sid!2sid!4v1738052123685!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <ul class="text-gray-700">
                        <li class="text-center space-y-2">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 -960 960 960"
                                    class="fill-current text-yellow-300 w-10 h-10">
                                    <path
                                        d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                </svg>
                            </div>
                            <h2 class="text-xl font-semibold">Alamat</h2>
                            <p>Jl. Bintara, Sekip Lama, Kec. Singkawang Tengah, Kota Singkawang, Kalimantan Barat 79113</p>
                        </li>
                        <li class="text-center space-y-2">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 -960 960 960"
                                    class="fill-current text-yellow-300 w-10 h-10">
                                    <path
                                        d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                </svg>
                            </div>
                            <h2 class="text-xl font-semibold">Alamat</h2>
                            <p>Jl. Bintara, Sekip Lama, Kec. Singkawang Tengah, Kota Singkawang, Kalimantan Barat 79113</p>
                        </li>
                        <li></li>
                    </ul>
                </section>
            </div>
        </main>
    @endsection
</x-layout>
