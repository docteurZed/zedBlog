<div>
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="w-full h-32 md:h-48">

        <div class="-mt-16 flex justify-center items-center w-full min-h-54 px-8">
            <div class="border border-gray-200 dark:border-gray-700 p-8 rounded-4xl bg-white dark:bg-gray-900 text-gray-900 dark:text-white md:flex justify-between w-full">
                <div class="md:flex gap-4 mb-8 md:mb-0">
                    <div class="m-3 mb-8 md:mb-0 shrink-0 rotate-8 w-40 h-40 rounded-3xl border border-4 border-gray-100 dark:border-gray-700 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-16 h-16" viewBox="0 0 16 16">
                            <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3m-8.322.12q.322-.119.684-.12h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981z"/>
                        </svg>
                    </div>
                    <div class="col-span-3 m-3">
                        <h2 class="mb-3 text-4xl text-gray-900 dark:text-white font-bold">Catégories</h2>
                        <p class="mb-4 font-normal text-gray-600 dark:text-gray-400 w-full md:w-[80%]">Toutes les articles enrégistrés sont disponibles ici.</p>
                        <div class="flex gap-2 text-gray-700 dark:text-gray-200 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                            </svg>
                            <span class="font-semibold text-sm">{{ $categories->total() }} catégorie{{ $categories->total() > 1 ? 's' : '' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-8 md:p-16">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8">
            @forelse ($categories as $category)
            <a href="{{ route('category.detail', ['id' => $category->id, 'slug' => $category->slug]) }}" class="relative group w-full h-52 border border-dashed border-gray-400 dark:border-gray-600 rounded-4xl p-8 flex items-center flex-col gap-2 cursor-pointer overflow-hidden">

                <!-- FOND animé qui glisse -->
                <div class="absolute inset-0 bg-gray-700/20 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-in-out pointer-events-none rounded-4xl z-0"></div>

                <!-- Contenu au-dessus -->
                <div class="relative z-10 flex items-center flex-col gap-2">
                    <div class="w-20 h-20">
                        <div class="w-20 h-20 bg-red-500 rounded-full"></div>
                    </div>
                    <h4 class="text-gray-900 dark:text-white font-bold text-lg">{{ $category->name }}</h4>
                    <p class="text-gray-600 dark:text-gray-400 font-semibold">{{ $category->posts->count() }} article{{ $category->posts->count() > 1 ? 's' : '' }}</p>
                </div>
            </a>
            @empty
            <div class="sm:col-span-2 md:col-span-3 lg:col-span-4 flex justify-center border border-gray-200 dark:border-gray-700 rounded-3xl group p-5">
                <p class="text-gray-600 dark:text-gray-400 font-semibold">Aucune catégorie disponible</p>
            </div>
            @endforelse
        </div>
        @if ($categories->total() > $categories->perPage())
        <div class="my-12 flex justify-between items-center font-semibold text-gray-900 dark:text-white">
            <!-- Précédent -->
            <div>
                <button
                    wire:click="previousPage"
                    @class([
                        'rounded-2xl px-4 py-3 flex gap-2 items-center cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800 transition ease-in-out duration-150',
                        'text-gray-400 cursor-not-allowed' => $categories->onFirstPage(),
                        'text-gray-900 dark:text-white' => !$categories->onFirstPage(),
                    ])
                    @disabled($categories->onFirstPage())
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                    </svg>
                    <span>Précédent</span>
                </button>
            </div>

            <!-- Numéros de page -->
            <div class="hidden md:flex gap-2 items-center">
                @for ($page = 1; $page <= $categories->lastPage(); $page++)
                    <button
                        wire:click="gotoPage({{ $page }})"
                        class="rounded-2xl px-4 py-3 transition ease-in-out duration-150 hover:bg-gray-100 dark:hover:bg-gray-800 cursor-pointer
                            {{ $categories->currentPage() === $page ? 'bg-gray-900 text-white' : 'text-gray-900 dark:text-white' }}"
                    >
                        {{ $page }}
                    </button>
                @endfor
            </div>

            <!-- Suivant -->
            <div>
                <button
                    wire:click="nextPage"
                    @class([
                        'rounded-2xl px-4 py-3 flex gap-2 items-center cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800 transition ease-in-out duration-150',
                        'text-gray-400 cursor-not-allowed' => !$categories->hasMorePages(),
                        'text-gray-900 dark:text-white' => $categories->hasMorePages(),
                    ])
                    @disabled(!$categories->hasMorePages())
                >
                    <span>Suivant</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                    </svg>
                </button>
            </div>
        </div>
        @endif
    </div>
</div>
