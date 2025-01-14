<x-layout :title="$title">
    @section('page')
        <header class="pt-16 text-gray-800 bg-white border-b-2">
            <div class="pt-6 pb-8 pl-4 md:pl-24">
                <h2 class="flex items-center space-x-2">
                    <a href="" class="text-yellow-300 hover:opacity-80">Beranda</a>
                    <span>/</span>
                    <p>{{ $title }}</p>
                </h2>
                <h1 class="font-medium text-3xl">{{ $title }}</h1>
            </div>
        </header>

        <main class="bg-yellow-300 py-12 flex items-center justify-center">
            <div class="px-10 w-full md:px-20">
                <form action="" class="flex flex-col bg-white px-10 py-10 rounded-lg shadow-lg">
                    <div class="flex flex-col space-y-4">
                        <div class="flex flex-row space-x-5">
                            <input type="text" name="nama" id="nama" placeholder="Nama"
                                class="border-2 border-gray-800 p-3 flex-1 bg-white text-gray-800 font-bold focus:border-gray-800 focus:outline-none focus:ring-0 shadow-[4px_4px_0px_rgba(15,23,42,1)] rounded-none placeholder-gray-800 w-full" />

                            <input type="text" name="email" id="email" placeholder="Email"
                                class="border-2 border-gray-800 p-3 flex-1 bg-white text-gray-800 font-bold focus:border-gray-800 focus:outline-none focus:ring-0 shadow-[4px_4px_0px_rgba(15,23,42,1)] rounded-none placeholder-gray-800 w-full" />
                        </div>

                        <input type="text" name="subjek" id="subjek" placeholder="Subjek"
                            class="border-2 border-gray-800 p-3 flex-1 bg-white text-gray-800 font-bold focus:border-gray-800 focus:outline-none focus:ring-0 shadow-[4px_4px_0px_rgba(15,23,42,1)] rounded-none placeholder-gray-800 w-full" />

                        <textarea name="pesan" id="pesan" placeholder="Pesan"
                            class="border-2 border-gray-800 p-8 flex-1 bg-white text-gray-800 font-bold focus:border-gray-800 focus:outline-none focus:ring-0 shadow-[4px_4px_0px_rgba(15,23,42,1)] rounded-none placeholder-gray-800 w-full"></textarea>
                    </div>

                    <div class="bg-gray-800 duration-200 self-center rounded mt-10">
                        <button
                            class="bg-white flex items-center justify-center active:translate-x-0 active:translate-y-0 border-gray-800 border-2 duration-200 px-4 py-2 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 rounded lg:px-5 lg:py-3 hover:bg-yellow-300">
                            <span class="flex items-center justify-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#1F2937"
                                    class="w-6 h-6">
                                    <path
                                        d="M240-400h320v-80H240v80Zm0-120h480v-80H240v80Zm0-120h480v-80H240v80ZM80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Zm126-240h594v-480H160v525l46-45Zm-46 0v-480 480Z" />
                                </svg>
                                <span class="font-medium text-gray-800 lg:uppercase lg:font-bold lg:text-md">
                                    Kirim Pesan
                                </span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </main>
    @endsection
</x-layout>
