<header class="w-full md:px-8">
    <nav class="border-b border-gray-100 dark:border-gray-800">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Logo" /> --}}
                <span class="self-center text-3xl md:text-4xl font-bold whitespace-nowrap dark:text-white">
                    {{ config('app.name') }}
                </span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                @guest
                <a href="{{ route('login') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-full text-sm px-5 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer">
                    Connexion
                </a>
                @endguest

                @auth
                <div class="flex gap-3">
                    <button type="button" id="avatarButton" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="relative inline-flex items-center justify-center w-10 h-10 p-1 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-700 cursor-pointer hover:ring-2 ring-gray-300 dark:ring-gray-500">
                        <span class="font-semibold text-gray-600 dark:text-gray-300">{{ Auth::user()->initials }}</span>
                    </button>
                </div>

                <!-- Dropdown menu -->
                <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-3xl shadow-sm w-64 dark:bg-gray-800 dark:divide-gray-600 p-5">
                    <div class="pb-3 text-sm text-gray-900 dark:text-white flex gap-3 items-center">
                        <div href="#" class="w-12 h-12">
                            <div class="bg-yellow-400 h-12 w-12 rounded-full"></div>
                        </div>
                        <div class="flex flex-col justify-center">
                            <span class="font-bold">{{ Auth::user()->name }}</span>
                            <span class="font-semibold text-gray-500 dark:text-gray-400 text-sm">{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                    <ul class="py-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                        <li>
                            <a href="{{ route('profile') }}" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white rounded-2xl flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                </svg>
                                <span class="font-semibold">Mon compte</span>
                            </a>
                        </li>
                    </ul>
                    <div class="py-3">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white rounded-2xl flex items-center gap-3 text-gray-700 dark:text-gray-200 w-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                                </svg>
                                <span class="font-semibold">Déconnexion</span>
                            </button>
                        </form>
                    </div>
                </div>
                @endauth

                <button data-collapse-toggle="navbar" type="button" class="inline-flex items-center p-3 w-10 h-10 justify-center text-sm text-gray-500 rounded-full md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="hidden w-full md:block md:w-auto" id="navbar">
                <ul class="font-semibold flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-3xl bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800/50 md:dark:bg-gray-900 dark:border-gray-700">
                    @php
                        $active = "block py-2 px-3 text-white bg-blue-700 rounded-3xl md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500";

                        $inactive = "block py-2 px-3 text-gray-900 rounded-3xl hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700/50 dark:hover:text-white md:dark:hover:bg-transparent";
                    @endphp
                    <li>
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? $active : $inactive }}" aria-current="page">Accueil</a>
                    </li>
                    <li>
                        <a href="{{ route('article') }}" class="{{ request()->routeIs('article') ? $active : $inactive }}">Publications</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? $active : $inactive }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>