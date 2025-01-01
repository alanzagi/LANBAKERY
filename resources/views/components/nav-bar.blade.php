<nav :title="$title" class="relative">
    <div class="absolute top-0 left-0 w-full bg-yellow-300 border-gray-200 font-poppins z-10">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('beranda') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/alanxcode.jpg') }}"
                    class="h-8 rounded-full ring-2 ring-gray-800 hover:ring-gray-200" />
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap font-rubik-vinyl text-gray-800 hover:text-white hover:transition hover:duration-100">LANBAKERY</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-800 ring-gray-800 ring-2 outline-none rounded-lg lg:hidden hover:bg-gray-200 focus:bg-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full lg:block lg:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 lg:p-0 mt-4 border-2 border-gray-800 rounded-xl bg-gray-200 lg:flex-row lg:space-x-2 rtl:space-x-reverse lg:mt-0 lg:border-0 lg:bg-yellow-300">
                    <li>
                        <a href="{{ route('beranda') }}"
                            class="block py-2 px-3 rounded text-gray-800 hover:text-yellow-300 hover:bg-gray-800 lg:px-5 lg:py-2.5 lg:ring-2 lg:ring-gray-800 lg:rounded-xl 
                                   {{ $title == 'Beranda' ? 'bg-gray-800 text-yellow-300' : 'bg-transparent' }}">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded text-gray-800 hover:text-yellow-300 hover:bg-gray-800 lg:px-5 lg:py-2.5 lg:ring-2 lg:ring-gray-800 lg:rounded-xl 
                                   {{ $title == 'Tentang' ? 'bg-gray-800 text-yellow-300' : 'bg-transparent' }}">
                            Tentang
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded text-gray-800 hover:text-yellow-300 hover:bg-gray-800 lg:px-5 lg:py-2.5 lg:ring-2 lg:ring-gray-800 lg:rounded-xl 
                                   {{ $title == 'Layanan' ? 'bg-gray-800 text-yellow-300' : 'bg-transparent' }}">
                            Layanan
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded text-gray-800 hover:text-yellow-300 hover:bg-gray-800 lg:px-5 lg:py-2.5 lg:ring-2 lg:ring-gray-800 lg:rounded-xl 
                                   {{ $title == 'Kontak' ? 'bg-gray-800 text-yellow-300' : 'bg-transparent' }}">
                            Kontak
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded text-gray-800 hover:text-yellow-300 hover:bg-gray-800 lg:px-5 lg:py-2.5 lg:ring-2 lg:ring-gray-800 lg:rounded-xl 
                                   {{ $title == 'Toko Kami' ? 'bg-gray-800 text-yellow-300' : 'bg-transparent' }}">
                            Toko Kami
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded text-gray-800 hover:text-yellow-300 hover:bg-gray-800 lg:px-5 lg:py-2.5 lg:ring-2 lg:ring-gray-800 lg:rounded-xl 
                                   {{ $title == 'Kontak' ? 'bg-gray-800 text-yellow-300' : 'bg-transparent' }}">
                            Keranjang
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
