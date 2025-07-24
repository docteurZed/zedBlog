<div>
    <section class="md:px-12">
        <div class="grid grid-cols-1 md:grid-cols-7 gap-8 py-8 px-4 lg:px-8 lg:py-16 items-center">
            <div class="md:col-span-3">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-6xl dark:text-white">
                    {{ config('app.name') }}
                </h1>

                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                    Vous aimez la lecture ou l'écriture, vous êtes au bon endroit. Explorer notre plateforme, lisez, cultivez-vous et laissez-y votre empreinte.
                </p>

                <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                    <a href="{{ route('login') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-semibold text-center text-white rounded-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Commencer
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="md:col-span-4">
                <div class="grid grid-cols-5 gap-3 items-center">
                    <div class="w-full">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="w-full h-48 md:h-64 rounded-4xl">
                    </div>
                    <div class="w-full">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="w-full h-64 md:h-80 rounded-4xl">
                    </div>
                    <div class="w-full">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="w-full h-80 md:h-96 rounded-4xl">
                    </div>
                    <div class="w-full">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="w-full h-64 md:h-80 rounded-4xl">
                    </div>
                    <div class="w-full">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="w-full h-48 md:h-64 rounded-4xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-8 md:px-16">
        <div class="py-8 mx-auto max-w-screen-xl lg:py-16">
            <div class="">
                <div class="flex justify-between items-start mb-8">
                    <div>
                        <h2 class="mb-3 text-3xl text-gray-900 dark:text-white font-bold">Catégories</h2>
                        <p class="font-semibold text-lg text-gray-600 dark:text-gray-400">Découvrez ici les catégories de nos publications.</p>
                    </div>
                    <a href="{{ route('category') }}" class="border border-gray-400 dark:border-gray-600 rounded-full px-3 py-2 text-gray-900 dark:text-white flex gap-2 items-center cursor-pointer hover:bg-gray-200/25 dark:hover:bg-gray-700/25 transition ease-in-out duration-150">
                        <span class="text-sm font-semibold hidden md:inline-flex">Tout voir</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                        </svg>
                    </a>
                </div>
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8">
                    <a href="#" class="relative group w-full h-52 border border-dashed border-gray-400 dark:border-gray-600 rounded-4xl p-8 flex items-center flex-col gap-2 cursor-pointer overflow-hidden">

                        <!-- FOND animé qui glisse -->
                        <div class="absolute inset-0 bg-gray-700/20 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-in-out pointer-events-none rounded-4xl z-0"></div>

                        <!-- Contenu au-dessus -->
                        <div class="relative z-10 flex items-center flex-col gap-2">
                            <div class="w-20 h-20">
                                <div class="w-20 h-20 bg-red-500 rounded-full"></div>
                            </div>
                            <h4 class="text-gray-900 dark:text-white font-bold text-lg">Loremdolor</h4>
                            <p class="text-gray-600 dark:text-gray-400 font-semibold">5 articles</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 dark:bg-gray-950/25 px-8 md:px-16 rounded-t-4xl">
        <div class="py-8 mx-auto max-w-screen-xl lg:py-16">
            <div class="mb-8">
                <div class="mb-4 text-center">
                    <h2 class="mb-3 text-3xl text-gray-900 dark:text-white font-bold">Les plus récents</h2>
                    <p class="font-semibold text-lg text-gray-600 dark:text-gray-400">Découvrez ici les plus récentes publications sur la plateforme</p>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="flex flex-col justify-between border border-gray-200 dark:border-gray-700 rounded-3xl group">
                    <a href="#">
                        <div class="relative w-full h-56 rounded-t-3xl overflow-hidden shadow-lg">
                            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="Article image" class="object-cover w-full h-full">

                            <div class="absolute inset-0 bg-black/25 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-in-out pointer-events-none rounded-t-3xl"></div>

                            <div class="absolute top-0 m-4 z-10 text-white text-sm bg-blue-500 rounded-full px-2 py-1 font-semibold">Technologie</div>

                            <div class="absolute w-full h-full flex items-center justify-center top-0 left-0 z-10 ">
                                <div class="text-white text-sm bg-black/60 rounded-full p-2 font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-7 h-7" viewBox="0 0 16 16">
                                        <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="relative flex flex-col gap-3 bg-gray-50 p-4 dark:bg-gray-800/50 rounded-b-3xl overflow-hidden">
                        <div class="absolute inset-0 bg-black/25 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-in-out pointer-events-none rounded-b-3xl"></div>

                        <div class="flex gap-3 items-center">
                            <a href="#" class="w-10 h-10">
                                <div class="bg-yellow-400 h-10 w-10 rounded-full"></div>
                            </a>
                            <div class="flex gap-2 items-center text-sm">
                                <a href="#" class="text-gray-700 dark:text-gray-200 font-semibold hover:underline">Albert Camp</a>
                                <span class="text-gray-500 dark:text-gray-400">•</span>
                                <span class="text-gray-500 dark:text-gray-400">15 juil. 2025</span>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="text-lg font-bold text-gray-900 dark:text-white block hover:underline">Lorem ipsum dolor sit amet consectetur.</a>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="flex gap-2">
                                <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-red-400 flex gap-2 items-center cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                    </svg>
                                    <span class="text-sm font-semibold hidden md:inline-flex">1.5k</span>
                                </a>
                                <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-green-400 flex gap-2 items-center cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/><path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                    </svg>
                                    <span class="text-sm font-semibold hidden md:inline-flex">2.7k</span>
                                </a>
                            </div>
                            <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-gray-900 dark:text-white text-sm font-semibold cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 text-center">
                <a href="{{ route('article') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-semibold text-center text-white rounded-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Tous les articles
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 dark:bg-gray-950/25 px-8 md:px-16 rounded-b-4xl">
        <div class="py-8 mx-auto max-w-screen-xl lg:py-16">
            <div class="">
                <div class="mb-4">
                    <h2 class="mb-3 text-3xl text-gray-900 dark:text-white font-bold">Les plus populaires</h2>
                    <p class="font-semibold text-lg text-gray-600 dark:text-gray-400">Découvrez ici nos publications les plus populaires</p>
                </div>
                <div class="flex justify-between items-center mb-8">
                    <div class="flex gap-2">
                        <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full px-3 py-2 text-gray-900 dark:text-white text-sm font-semibold cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150 bg-gray-100 dark:bg-gray-800">Tout</a>
                        <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full px-3 py-2 text-gray-900 dark:text-white text-sm font-semibold cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150">Aricles</a>
                        <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full px-3 py-2 text-gray-900 dark:text-white text-sm font-semibold cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150">Vidéos</a>
                        <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full px-3 py-2 text-gray-900 dark:text-white text-sm font-semibold cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150">Audios</a>
                    </div>
                    <a href="{{ route('article') }}" class="border border-gray-400 dark:border-gray-600 rounded-full px-3 py-2 text-gray-900 dark:text-white flex gap-2 items-center cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150">
                        <span class="text-sm font-semibold hidden md:inline-flex">Tout voir</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                        </svg>
                    </a>
                </div>
                <div class="grid md:grid-cols-2 gap-8 md:gap-8">
                    <div class="flex flex-col gap-4 justify-between">
                        <a href="#">
                            <div class="relative w-full h-80 md:h-112 rounded-3xl overflow-hidden shadow-lg group">
                                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="Article image" class="object-cover w-full h-full">

                                <div class="absolute inset-0 bg-black/25 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-in-out pointer-events-none rounded-3xl"></div>

                                <div class="absolute top-0 m-4 z-10 text-white text-sm bg-blue-500 rounded-full px-2 py-1 font-semibold">Technologie</div>

                                <div class="absolute bottom-0 m-4 z-10 text-white text-sm bg-black/60 rounded-full p-1 font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                                        <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="mx-4 flex gap-3 items-center">
                            <a href="#" class="w-10 h-10">
                                <div class="bg-yellow-400 h-10 w-10 rounded-full"></div>
                            </a>
                            <div class="flex gap-2 items-center">
                                <a href="#" class="text-gray-700 dark:text-gray-200 font-semibold hover:underline">Albert Camp</a>
                                <span class="text-gray-500 dark:text-gray-400">•</span>
                                <span class="text-sm text-gray-500 dark:text-gray-400">15 juil. 2025 à 15:00</span>
                            </div>
                        </div>
                        <div class="mx-4">
                            <a href="#" class="text-xl font-bold text-gray-900 dark:text-white block hover:underline">Lorem ipsum dolor sit amet consectetur.</a>
                            <p class="text-sm text-gray-400 dark:text-gray-500 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae consectetur.</p>
                        </div>
                        <hr class="text-gray-100 dark:text-gray-800 mx-4">
                        <div class="flex justify-between items-center mx-4">
                            <div class="flex gap-2">
                                <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-red-400 flex gap-2 items-center cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                    </svg>
                                    <span class="text-sm font-semibold hidden md:inline-flex">1.5k</span>
                                </a>
                                <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-green-400 flex gap-2 items-center cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/><path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                    </svg>
                                    <span class="text-sm font-semibold hidden md:inline-flex">2.7k</span>
                                </a>
                            </div>
                            <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-gray-900 dark:text-white text-sm font-semibold cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="w-full md:h-56 border border-gray-200 dark:border-gray-700 p-4 rounded-3xl md:grid grid-cols-3 gap-3">
                            <div class="col-span-2 mb-5 md:mb-0 flex flex-col gap-4 justify-between">
                                <div class="text-white text-sm font-semibold">
                                    <span class="bg-blue-500 rounded-full px-2 py-1">Technologie</span>
                                </div>

                                <div class="">
                                    <a href="#" class="text-lg font-bold text-gray-900 dark:text-white block hover:underline">Lorem ipsum dolor sit amet consectetur.</a>
                                </div>

                                <div class="flex gap-3 items-center">
                                    <a href="#" class="w-8 h-8">
                                        <div class="bg-yellow-400 h-8 w-8 rounded-full"></div>
                                    </a>
                                    <div class="flex text-sm gap-2 items-center">
                                        <a href="#" class="text-gray-700 dark:text-gray-200 font-semibold hover:underline">Albert Camp</a>
                                        <span class="text-gray-500 dark:text-gray-400">•</span>
                                        <span class="text-gray-500 dark:text-gray-400">15 juil. 2025 à 15:00</span>
                                    </div>
                                </div>

                                <div class="flex justify-between items-center">
                                    <div class="flex gap-2">
                                        <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-red-400 flex gap-2 items-center cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150 bg-gray-100 dark:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                            </svg>
                                            <span class="text-sm font-semibold hidden md:inline-flex">1.5k</span>
                                        </a>
                                        <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-green-400 flex gap-2 items-center cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150 bg-gray-100 dark:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/><path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                            </svg>
                                            <span class="text-sm font-semibold hidden md:inline-flex">2.7k</span>
                                        </a>
                                    </div>
                                    <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-gray-900 dark:text-white text-sm font-semibold cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150 bg-gray-100 dark:bg-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="w-full md:h-full">
                                <a href="#">
                                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="w-full md:h-full rounded-3xl">
                                </a>
                            </div>
                        </div>
                        <div class="w-full md:h-56 border border-gray-200 dark:border-gray-700 p-4 rounded-3xl md:grid grid-cols-3 gap-3">
                            <div class="col-span-2 mb-5 md:mb-0 flex flex-col gap-4 justify-between">
                                <div class="text-white text-sm font-semibold">
                                    <span class="bg-blue-500 rounded-full px-2 py-1">Technologie</span>
                                </div>

                                <div class="">
                                    <a href="#" class="text-lg font-bold text-gray-900 dark:text-white block hover:underline">Lorem ipsum dolor sit amet consectetur.</a>
                                </div>

                                <div class="flex gap-3 items-center">
                                    <a href="#" class="w-8 h-8">
                                        <div class="bg-yellow-400 h-8 w-8 rounded-full"></div>
                                    </a>
                                    <div class="flex text-sm gap-2 items-center">
                                        <a href="#" class="text-gray-700 dark:text-gray-200 font-semibold hover:underline">Albert Camp</a>
                                        <span class="text-gray-500 dark:text-gray-400">•</span>
                                        <span class="text-gray-500 dark:text-gray-400">15 juil. 2025 à 15:00</span>
                                    </div>
                                </div>

                                <div class="flex justify-between items-center">
                                    <div class="flex gap-2">
                                        <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-red-400 flex gap-2 items-center cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150 bg-gray-100 dark:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                            </svg>
                                            <span class="text-sm font-semibold hidden md:inline-flex">1.5k</span>
                                        </a>
                                        <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-green-400 flex gap-2 items-center cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150 bg-gray-100 dark:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/><path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                            </svg>
                                            <span class="text-sm font-semibold hidden md:inline-flex">2.7k</span>
                                        </a>
                                    </div>
                                    <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-gray-900 dark:text-white text-sm font-semibold cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150 bg-gray-100 dark:bg-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="w-full md:h-full">
                                <a href="#">
                                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="w-full md:h-full rounded-3xl">
                                </a>
                            </div>
                        </div>
                        <div class="w-full md:h-56 border border-gray-200 dark:border-gray-700 p-4 rounded-3xl md:grid grid-cols-3 gap-3">
                            <div class="col-span-2 mb-5 md:mb-0 flex flex-col gap-4 justify-between">
                                <div class="text-white text-sm font-semibold">
                                    <span class="bg-blue-500 rounded-full px-2 py-1">Technologie</span>
                                </div>

                                <div class="">
                                    <a href="#" class="text-lg font-bold text-gray-900 dark:text-white block hover:underline">Lorem ipsum dolor sit amet consectetur.</a>
                                </div>

                                <div class="flex gap-3 items-center">
                                    <a href="#" class="w-8 h-8">
                                        <div class="bg-yellow-400 h-8 w-8 rounded-full"></div>
                                    </a>
                                    <div class="flex text-sm gap-2 items-center">
                                        <a href="#" class="text-gray-700 dark:text-gray-200 font-semibold hover:underline">Albert Camp</a>
                                        <span class="text-gray-500 dark:text-gray-400">•</span>
                                        <span class="text-gray-500 dark:text-gray-400">15 juil. 2025 à 15:00</span>
                                    </div>
                                </div>

                                <div class="flex justify-between items-center">
                                    <div class="flex gap-2">
                                        <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-red-400 flex gap-2 items-center cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150 bg-gray-100 dark:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                            </svg>
                                            <span class="text-sm font-semibold hidden md:inline-flex">1.5k</span>
                                        </a>
                                        <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-green-400 flex gap-2 items-center cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150 bg-gray-100 dark:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/><path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                            </svg>
                                            <span class="text-sm font-semibold hidden md:inline-flex">2.7k</span>
                                        </a>
                                    </div>
                                    <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-gray-900 dark:text-white text-sm font-semibold cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150 bg-gray-100 dark:bg-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="w-full md:h-full">
                                <a href="#">
                                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="w-full md:h-full rounded-3xl">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-8 md:px-16">
        <div class="py-8 mx-auto max-w-screen-xl lg:py-16">
            <div class="">
                <div class="mb-8 text-center">
                    <h2 class="mb-3 text-3xl text-gray-900 dark:text-white font-bold">Nos auteurs</h2>
                    <p class="font-semibold text-lg text-gray-600 dark:text-gray-400">Découvrez ici toutes ces personnes qui publient de jour en jour sur notre plateforme</p>
                </div>
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8">
                    <a href="#" class="relative group w-full min-h-64 border border-dashed border-gray-400 dark:border-gray-600 rounded-4xl p-8 flex items-center flex-col gap-2 cursor-pointer overflow-hidden">

                        <!-- FOND animé qui glisse -->
                        <div class="absolute inset-0 bg-gray-700/20 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-in-out pointer-events-none rounded-4xl z-0"></div>

                        <!-- Contenu au-dessus -->
                        <div class="relative z-10 flex items-center flex-col gap-2">
                            <div class="w-20 h-20">
                                <div class="w-20 h-20 bg-pink-500 rounded-full"></div>
                            </div>
                            <h4 class="text-gray-900 dark:text-white font-bold text-lg">Loremdolor</h4>
                            <p class="text-gray-600 dark:text-gray-400 font-semibold">Lorem ipsum dolor</p>
                        </div>

                        <div href="#" class="inline-flex justify-center items-center py-1 px-3 text-base font-semibold text-center text-white rounded-full bg-gray-100 dark:bg-gray-800">
                            125
                            <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="mt-8 text-center">
                    <a href="{{ route('author') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-semibold text-center text-white rounded-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Tous les auteurs
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="px-8 md:px-16">
        <div class="py-8 mx-auto max-w-screen-xl lg:py-16">
            <div class="grid grid-cols-2 items-center mb-8 gap-8">
                <div class="flex flex-col gap-6">
                    <h2 class="mb-3 text-3xl text-gray-900 dark:text-white font-bold">Devenir auteur</h2>
                    <p class="font-semibold text-lg text-gray-600 dark:text-gray-400">Vous voulez faire partir de nos auteurs et laisser une empreinte sur notre plateforme ?</p>
                    <div>
                        <a href="{{ route('contact') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-semibold text-center text-white rounded-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                            Ecrivez-nous
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-full md:p-6">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="w-full rounded-4xl">
                </div>
            </div>
        </div>
    </section>
</div>