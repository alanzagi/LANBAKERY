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
                                    class="flex justify-start items-center font-medium opacity-80 hover:opacity-100 lg:uppercase lg:font-bold ">Pesan
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
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white hover:transition-all hover:duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
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
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white hover:transition-all hover:duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
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
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white hover:transition-all hover:duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
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
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white hover:transition-all hover:duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
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
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white hover:transition-all hover:duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
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
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white hover:transition-all hover:duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
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
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white hover:transition-all hover:duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
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
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white hover:transition-all hover:duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
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
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white hover:transition-all hover:duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
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
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white hover:transition-all hover:duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
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
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white hover:transition-all hover:duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
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
                        class="w-full h-full border-gray-800 border-2 rounded-md bg-white hover:transition-all hover:duration-200 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 hover:shadow-[8px_8px_0px_rgba(31,41,55,1)] hover:bg-yellow-300">
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

        <section class="bg-yellow-300 font-poppins px-5 lg:px-28">
            <div class="space-y-10">
                <div class="flex flex-col items-center justify-center">
                    <h2 class="text-gray-800 font-bold text-3xl md:text-3xl">Keunggulan Kami</h2>
                    <hr class="border-2 border-gray-800 w-20 mt-4">
                </div>
            </div>
        </section>
    @endsection
</x-layout>
