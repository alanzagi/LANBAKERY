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
                <section class="flex flex-col bg-white px-4 py-4 rounded-lg shadow-md shadow-gray-800 space-y-8">
                    <div>
                        <iframe class="w-full h-96"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3066339393745!2d108.99049807496515!3d0.9176300990735035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e37208c56d26b3%3A0xadd5a82dc079425!2sJl.%20Bintara%2C%20Sekip%20Lama%2C%20Kec.%20Singkawang%20Tengah%2C%20Kota%20Singkawang%2C%20Kalimantan%20Barat%2079113!5e0!3m2!1sid!2sid!4v1738052123685!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <ul class="text-gray-700 pb-8">
                        <li class="text-center space-y-2">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto -mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 -960 960 960"
                                    class="fill-current text-yellow-300 w-10 h-10">
                                    <path
                                        d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                </svg>
                            </div>
                            <h2 class="text-xl font-semibold">Alamat</h2>
                            <p class="text-sm">Jl. Bintara, Sekip Lama, Kec. Singkawang Tengah, Kota Singkawang, Kalimantan
                                Barat 79113</p>
                        </li>
                        <li class="text-center space-y-2">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto -mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                    class="fill-current text-yellow-300 w-10 h-10">
                                    <path
                                        d="M760-480q0-117-81.5-198.5T480-760v-80q75 0 140.5 28.5t114 77q48.5 48.5 77 114T840-480h-80Zm-160 0q0-50-35-85t-85-35v-80q83 0 141.5 58.5T680-480h-80Zm198 360q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                                </svg>
                            </div>
                            <h2 class="text-xl font-semibold">Telepon</h2>
                            <div>
                                <p class="text-sm">(031) 566 3389</p>
                                <p class="text-sm">(031) 567 3613</p>
                            </div>
                        </li>
                        <li class="text-center space-y-2">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto -mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                    class="fill-current text-yellow-300 w-10 h-10">
                                    <path
                                        d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                                </svg>
                            </div>
                            <h2 class="text-xl font-semibold">Jam Operasional</h2>
                            <p class="text-sm">06.15 - 21.00</p>
                        </li>
                    </ul>
                </section>
            </div>
        </main>
    @endsection
</x-layout>
