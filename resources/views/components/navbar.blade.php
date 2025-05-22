<nav class="fixed top-0 z-50 w-full border-gray-200 bg-[#137384] sm:px-[72.5px] px-2">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3 text-white">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo.png') }}" class="h-[45px]" alt="Logo MPKSDI" />
            <span class="self-center text-[20px] font-bold leading-[30px]">MPKSDI PDM Banyumas</span>
        </a>

        <!-- Hidden Checkbox Toggle -->
        <input type="checkbox" id="menu-toggle" class="peer hidden" />

        <!-- Hamburger Button -->
        <label for="menu-toggle" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg cursor-pointer min-[991px]:hidden hover:outline-2 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </label>

        <!-- Navbar Menu -->
        <div
            id="navbar-solid-bg"
            class="w-full min-[991px]:block min-[991px]:w-auto overflow-hidden
         max-h-0 opacity-0 invisible
         peer-checked:max-h-screen peer-checked:opacity-100 peer-checked:visible
         min-[991px]:max-h-full min-[991px]:opacity-100 min-[991px]:visible
         transition-all duration-1000 ease-in-out">
            <ul
                class="flex flex-col font-medium mt-4 rounded-lg bg-[#137384] min-[991px]:space-x-8 rtl:space-x-reverse min-[991px]:flex-row min-[991px]:mt-0 min-[991px]:border-0 min-[991px]:bg-transparent">
                <li>
                    <a href="/" class="block py-2 px-3 min-[991px]:p-0 {{ request()->is('/') ? 'text-gray-900' : 'text-white' }} rounded-sm hover:bg-transparent hover:text-gray-400 duration-300 min-[991px]:border-0 min-[991px]:hover:text-gray-400">Beranda</a>
                </li>
                <li>
                    <a href="/profile" class="block py-2 px-3 min-[991px]:p-0 {{ request()->is('profile') ? 'text-gray-900' : 'text-white' }} rounded-sm hover:bg-transparent hover:text-gray-400 duration-300 min-[991px]:border-0 min-[991px]:hover:text-gray-400">Profil</a>
                </li>
                <li>
                    <a href="/berita" class="block py-2 px-3 min-[991px]:p-0 {{ request()->is('berita') ? 'text-gray-900' : 'text-white' }} rounded-sm hover:bg-transparent hover:text-gray-400 duration-300 min-[991px]:border-0 min-[991px]:hover:text-gray-400">Berita & Wawasan</a>
                </li>
                <li>
                    <a href="/galeri" class="block py-2 px-3 min-[991px]:p-0 {{ request()->is('galeri') ? 'text-gray-900' : 'text-white' }} rounded-sm hover:bg-transparent hover:text-gray-400 duration-300 min-[991px]:border-0 min-[991px]:hover:text-gray-400">Galeri</a>
                </li>
            </ul>
        </div>
    </div>
</nav>