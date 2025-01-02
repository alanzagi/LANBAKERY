<x-layout :title="$title">
    @section('page')
        <main class="h-screen bg-yellow-300 font-poppins flex items-center justify-start">
            <div class="px-5">
                <div class="flex flex-col">
                    <h1 class="text-gray-800 font-bold text-3xl md:text-4xl">Selalu dan #PastiSelera</h1>
                    <p class="text-gray-800 font-normal text-md pr-20 max-w-lg md:text-xl lg:text-2xl">
                        "Toko roti terbaik dengan rasa istimewa, selalu dan pasti selera untuk semua pelanggan."
                    </p>
                    <a href="" target="_blank" class="bg-gray-800 duration-200 self-start mt-3 rounded">
                        <div
                            class="bg-gray-200 active:translate-x-0 active:translate-y-0 active:bg-gray-200 border-gray-800 border-2 duration-200 px-4 py-2 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 rounded lg:px-5 lg:py-4 hover:bg-yellow-300">
                            <span class="duration-200 flex justify-start items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#1F2937"
                                    class="w-6 h-6">
                                    <path
                                        d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z" />
                                </svg>
                                <span
                                    class="flex justify-start items-center font-medium text-gray-800 lg:uppercase lg:font-bold ">Pesan
                                    Sekarang</span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </main>

        <section class="bg-yellow-300 font-poppins px-5 pb-20 lg:px-28">
            <div class="space-y-10">
                <div class="flex flex-col items-center justify-center">
                    <h2 class="text-gray-800 font-bold text-3xl md:text-3xl">Produk Kami</h2>
                    <hr class="border-2 border-gray-800 w-20 mt-4">
                </div>

                <div class="grid grid-cols-1 gap-y-4 md:grid-cols-2 md:gap-8 lg:grid-cols-4">
                    <div
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white transition duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
                        <a href="" class="block cursor-pointer">
                            <article class="w-full h-full">
                                <figure class="w-full h-1/2 border-gray-800 border-b-2">
                                    <img src="{{ asset('images/jajan-pasar.jpg') }}" alt="Jajan-Pasar.jpg"
                                        class="w-full h-72 object-cover md:h-48" />
                                </figure>
                                <div class="px-6 py-6 text-center h-full">
                                    <h1 class="text-2xl text-gray-800 font-bold">Jajan Pasar</h1>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white transition duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
                        <a href="" class="block cursor-pointer">
                            <article class="w-full h-full">
                                <figure class="w-full h-1/2 border-gray-800 border-b-2">
                                    <img src="{{ asset('images/roll-tart.jpg') }}" alt="Roll-Tart.jpg"
                                        class="w-full h-72 object-cover md:h-48" />
                                </figure>
                                <div class="px-6 py-6 text-center h-full">
                                    <h1 class="text-2xl text-gray-800 font-bold">Roll Tart</h1>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white transition duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
                        <a href="" class="block cursor-pointer">
                            <article class="w-full h-full">
                                <figure class="w-full h-1/2 border-gray-800 border-b-2">
                                    <img src="{{ asset('images/brownies.jpg') }}" alt="Brownies.jpg"
                                        class="w-full h-72 object-cover md:h-48" />
                                </figure>
                                <div class="px-6 py-6 text-center h-full">
                                    <h1 class="text-2xl text-gray-800 font-bold">Brownies</h1>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white transition duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
                        <a href="" class="block cursor-pointer">
                            <article class="w-full h-full">
                                <figure class="w-full h-1/2 border-gray-800 border-b-2">
                                    <img src="{{ asset('images/paketan.jpg') }}" alt="Paketan.jpg"
                                        class="w-full h-72 object-cover md:h-48" />
                                </figure>
                                <div class="px-6 py-6 text-center h-full">
                                    <h1 class="text-2xl text-gray-800 font-bold">Paketan</h1>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white transition duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
                        <a href="" class="block cursor-pointer">
                            <article class="w-full h-full">
                                <figure class="w-full h-1/2 border-gray-800 border-b-2">
                                    <img src="{{ asset('images/cake.jpg') }}" alt="Cake.jpg"
                                        class="w-full h-72 object-cover md:h-48" />
                                </figure>
                                <div class="px-6 py-6 text-center h-full">
                                    <h1 class="text-2xl text-gray-800 font-bold">Cake</h1>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white transition duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
                        <a href="" class="block cursor-pointer">
                            <article class="w-full h-full">
                                <figure class="w-full h-1/2 border-gray-800 border-b-2">
                                    <img src="{{ asset('images/roti-manis.jpg') }}" alt="Roti-Manis.jpg"
                                        class="w-full h-72 object-cover md:h-48" />
                                </figure>
                                <div class="px-6 py-6 text-center h-full">
                                    <h1 class="text-2xl text-gray-800 font-bold">Roti Manis</h1>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white transition duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
                        <a href="" class="block cursor-pointer">
                            <article class="w-full h-full">
                                <figure class="w-full h-1/2 border-gray-800 border-b-2">
                                    <img src="{{ asset('images/roti-mini.jpg') }}" alt="Kue Kering.jpg"
                                        class="w-full h-72 object-cover md:h-48" />
                                </figure>
                                <div class="px-6 py-6 text-center h-full">
                                    <h1 class="text-2xl text-gray-800 font-bold">Roti Mini</h1>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white transition duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
                        <a href="" class="block cursor-pointer">
                            <article class="w-full h-full">
                                <figure class="w-full h-1/2 border-gray-800 border-b-2">
                                    <img src="{{ asset('images/roti-tawar.jpg') }}" alt="Roti Tawar.jpg"
                                        class="w-full h-72 object-cover md:h-48" />
                                </figure>
                                <div class="px-6 py-6 text-center h-full">
                                    <h1 class="text-2xl text-gray-800 font-bold">Roti Tawar</h1>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white transition duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
                        <a href="" class="block cursor-pointer">
                            <article class="w-full h-full">
                                <figure class="w-full h-1/2 border-gray-800 border-b-2">
                                    <img src="{{ asset('images/roti-kepang.jpg') }}" alt="Roti-Kepang.jpg"
                                        class="w-full h-72 object-cover md:h-48" />
                                </figure>
                                <div class="px-6 py-6 text-center h-full">
                                    <h1 class="text-2xl text-gray-800 font-bold">Roti Kepang</h1>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white transition duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
                        <a href="" class="block cursor-pointer">
                            <article class="w-full h-full">
                                <figure class="w-full h-1/2 border-gray-800 border-b-2">
                                    <img src="{{ asset('images/donut.jpg') }}" alt="Donut.jpg"
                                        class="w-full h-72 object-cover md:h-48" />
                                </figure>
                                <div class="px-6 py-6 text-center h-full">
                                    <h1 class="text-2xl text-gray-800 font-bold">Donut</h1>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white transition duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
                        <a href="" class="block cursor-pointer">
                            <article class="w-full h-full">
                                <figure class="w-full h-1/2 border-gray-800 border-b-2">
                                    <img src="{{ asset('images/puding.jpg') }}" alt="Puding.jpg"
                                        class="w-full h-72 object-cover md:h-48" />
                                </figure>
                                <div class="px-6 py-6 text-center h-full">
                                    <h1 class="text-2xl text-gray-800 font-bold">Puding</h1>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white transition duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
                        <a href="" class="block cursor-pointer">
                            <article class="w-full h-full">
                                <figure class="w-full h-1/2 border-gray-800 border-b-2">
                                    <img src="{{ asset('images/kue-kering.jpg') }}" alt="Kue Kering.jpg"
                                        class="w-full h-72 object-cover md:h-48" />
                                </figure>
                                <div class="px-6 py-6 text-center h-full">
                                    <h1 class="text-2xl text-gray-800 font-bold">Kue Kering</h1>
                                </div>
                            </article>
                        </a>
                    </div>


                </div>
            </div>
        </section>

        <section class="bg-yellow-300 font-poppins px-4 pb-20 lg:px-28">
            <div class="space-y-10">
                <div class="text-center">
                    <h2 class="text-gray-800 font-bold text-3xl md:text-3xl">Keunggulan Kami</h2>
                    <hr class="border-2 border-gray-800 w-20 mt-4 mx-auto">
                </div>

                <div class="grid grid-cols-1 gap-y-4 md:grid-cols-2 md:gap-8 lg:grid-cols-3">
                    <!-- Keunggulan 1 -->
                    <article
                        class="group bg-white rounded-md border-2 border-gray-800 p-4 flex flex-col items-start gap-4 transition duration-200 hover:bg-yellow-300">
                        <header class="flex flex-col space-y-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                class="fill-current text-yellow-300 w-14 h-14 group-hover:text-white">
                                <path
                                    d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-75 29-147t81-128.5q52-56.5 125-91T475-881q21 0 43 2t45 7q-9 45 6 85t45 66.5q30 26.5 71.5 36.5t85.5-5q-26 59 7.5 113t99.5 56q1 11 1.5 20.5t.5 20.5q0 82-31.5 154.5t-85.5 127q-54 54.5-127 86T480-80Zm-60-480q25 0 42.5-17.5T480-620q0-25-17.5-42.5T420-680q-25 0-42.5 17.5T360-620q0 25 17.5 42.5T420-560Zm-80 200q25 0 42.5-17.5T400-420q0-25-17.5-42.5T340-480q-25 0-42.5 17.5T280-420q0 25 17.5 42.5T340-360Zm260 40q17 0 28.5-11.5T640-360q0-17-11.5-28.5T600-400q-17 0-28.5 11.5T560-360q0 17 11.5 28.5T600-320ZM480-160q122 0 216.5-84T800-458q-50-22-78.5-60T683-603q-77-11-132-66t-68-132q-80-2-140.5 29t-101 79.5Q201-644 180.5-587T160-480q0 133 93.5 226.5T480-160Zm0-324Z" />
                            </svg>
                            <h1 class="text-2xl text-gray-800 font-bold group-hover:text-white">Banyak Varian</h1>
                        </header>
                        <section>
                            <p class="text-gray-700 font-medium text-sm group-hover:text-white">Toko kami mempunyai lebih
                                dari 500 varian produk yang bermacam-macam, mulai dari roti mini dan jajan pasar hingga
                                spiku dan brownies.</p>
                        </section>
                    </article>

                    <!-- Keunggulan 2 -->
                    <article
                        class="group bg-white rounded-md border-2 border-gray-800 p-4 flex flex-col items-start gap-4 transition duration-200 hover:bg-yellow-300">
                        <header class="flex flex-col space-y-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                class="fill-current text-yellow-300 w-14 h-14 group-hover:text-white">
                                <path
                                    d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                            </svg>
                            <h1 class="text-2xl text-gray-800 font-bold group-hover:text-white">Bahan Terbaik & Tanpa
                                Pengawet</h1>
                        </header>
                        <section>
                            <p class="text-gray-700 font-medium text-sm group-hover:text-white">Semua produk kami
                                menggunakan bahan terbaik, berkualitas dan bebas dari berbagai macam pengawet makanan.</p>
                        </section>
                    </article>

                    <!-- Keunggulan 3 -->
                    <article
                        class="group bg-white rounded-md border-2 border-gray-800 p-4 flex flex-col items-start gap-4 transition duration-200 hover:bg-yellow-300">
                        <header class="flex flex-col space-y-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                class="fill-current text-yellow-300 w-14 h-14 group-hover:text-white">
                                <path
                                    d="M260-361v-40H160v-80h200v-80H200q-17 0-28.5-11.5T160-601v-160q0-17 11.5-28.5T200-801h60v-40h80v40h100v80H240v80h160q17 0 28.5 11.5T440-601v160q0 17-11.5 28.5T400-401h-60v40h-80Zm298 240L388-291l56-56 114 114 226-226 56 56-282 282Z" />
                            </svg>
                            <h1 class="text-2xl text-gray-800 font-bold group-hover:text-white">Harga Bersaing</h1>
                        </header>
                        <section>
                            <p class="text-gray-700 font-medium text-sm group-hover:text-white">Semua produk kami memiliki
                                harga yang bersaing di pasaran.</p>
                        </section>
                    </article>

                    <!-- Keunggulan 4 -->
                    <article
                        class="group bg-white rounded-md border-2 border-gray-800 p-4 flex flex-col items-start gap-4 transition duration-200 hover:bg-yellow-300">
                        <header class="flex flex-col space-y-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                class="fill-current text-yellow-300 w-14 h-14 group-hover:text-white">
                                <path
                                    d="M280-880h400v314q0 23-10 41t-28 29l-142 84 28 92h152l-124 88 48 152-124-94-124 94 48-152-124-88h152l28-92-142-84q-18-11-28-29t-10-41v-314Zm80 80v234l80 48v-282h-80Zm240 0h-80v282l80-48v-234ZM480-647Zm-40-12Zm80 0Z" />
                            </svg>
                            <h1 class="text-2xl text-gray-800 font-bold group-hover:text-white">Meraih Penghargaan</h1>
                        </header>
                        <section>
                            <p class="text-gray-700 font-medium text-sm group-hover:text-white">Toko kami memenangkan
                                beberapa penghargaan bergengsi di Indonesia seperti rekor MURI dan Jawa Pos Culinary Awards.
                            </p>
                        </section>
                    </article>

                    <!-- Keunggulan 5 -->
                    <article
                        class="group bg-white rounded-md border-2 border-gray-800 p-4 flex flex-col items-start gap-4 transition duration-200 hover:bg-yellow-300">
                        <header class="flex flex-col space-y-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                class="fill-current text-yellow-300 w-14 h-14 group-hover:text-white">
                                <path
                                    d="M240-80q-50 0-85-35t-35-85v-120h120v-560h600v680q0 50-35 85t-85 35H240Zm480-80q17 0 28.5-11.5T760-200v-600H320v480h360v120q0 17 11.5 28.5T720-160ZM360-600v-80h360v80H360Zm0 120v-80h360v80H360ZM240-160h360v-80H200v40q0 17 11.5 28.5T240-160Zm0 0h-40 400-360Z" />
                            </svg>
                            <h1 class="text-2xl text-gray-800 font-bold group-hover:text-white">Resep Kuno</h1>
                        </header>
                        <section>
                            <p class="text-gray-700 font-medium text-sm group-hover:text-white">Semua roti dan kue buatan
                                kami menggunakan resep yang khas sejak tahun 1989.</p>
                        </section>
                    </article>

                    <!-- Keunggulan 6 -->
                    <article
                        class="group bg-white rounded-md border-2 border-gray-800 p-4 flex flex-col items-start gap-4 transition duration-200 hover:bg-yellow-300">
                        <header class="flex flex-col space-y-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                class="fill-current text-yellow-300 w-14 h-14 group-hover:text-white">
                                <path
                                    d="M160-80q-17 0-28.5-11.5T120-120v-200q0-33 23.5-56.5T200-400v-160q0-33 23.5-56.5T280-640h160v-58q-18-12-29-29t-11-41q0-15 6-29.5t18-26.5l56-56 56 56q12 12 18 26.5t6 29.5q0 24-11 41t-29 29v58h160q33 0 56.5 23.5T760-560v160q33 0 56.5 23.5T840-320v200q0 17-11.5 28.5T800-80H160Zm120-320h400v-160H280v160Zm-80 240h560v-160H200v160Zm80-240h400-400Zm-80 240h560-560Zm560-240H200h560Z" />
                            </svg>
                            <h1 class="text-2xl text-gray-800 font-bold group-hover:text-white">Pesanan Khusus</h1>
                        </header>
                        <section>
                            <p class="text-gray-700 font-medium text-sm group-hover:text-white">Kami juga melayani pesanan
                                khusus untuk acara keluarga, ulang tahun, kantor, pernikahan, arisan, training, dan
                                lain-lain.</p>
                        </section>
                    </article>
                </div>
            </div>
        </section>
    @endsection
</x-layout>
