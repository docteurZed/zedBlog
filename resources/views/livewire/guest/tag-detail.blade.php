<div>
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="w-full h-32 md:h-48">

        <div class="-mt-16 flex justify-center items-center w-full min-h-54 px-8">
            <div class="border border-gray-200 dark:border-gray-700 p-8 rounded-4xl bg-white dark:bg-gray-900 text-gray-900 dark:text-white md:flex justify-between w-full">
                <div class="md:flex gap-4 mb-8 md:mb-0">
                    <div class="m-3 mb-8 md:mb-0 shrink-0 rotate-8 w-40 h-40">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="rounded-3xl border border-4 border-gray-100 dark:border-gray-700 w-full h-full">
                    </div>
                    <div class="col-span-3 m-3">
                        <div class="mb-1">
                            <span class="bg-red-600 text-sm font-semibold text-white px-2 py-1 rounded-full">Tag</span>
                        </div>
                        <h2 class="mb-5 text-4xl text-gray-900 dark:text-white font-bold">{{ $tag->name }}</h2>
                        <div class="flex gap-2 text-gray-700 dark:text-gray-200 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                            </svg>
                            <span class="font-semibold text-sm">{{ $tag->posts->count() }} article{{ $tag->posts->count() > 1 ? 's' : '' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-8 md:p-16">
        <div class="flex flex-wrap gap-3 justify-between items-center mb-8">
            <div class="flex gap-2">
                <button wire:click="setFilter('all')" type="button" class="{{ $filter === 'all' ? 'bg-gray-200 dark:bg-gray-700' : '' }} border border-gray-400 dark:border-gray-600 rounded-full px-4 p-3 text-gray-900 dark:text-white text-sm font-semibold cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800 transition ease-in-out duration-150">Tout</button>
                <button wire:click="setFilter('article')" type="button" class="{{ $filter === 'article' ? 'bg-gray-200 dark:bg-gray-700' : '' }} border border-gray-400 dark:border-gray-600 rounded-full px-4 p-3 text-gray-900 dark:text-white text-sm font-semibold cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800 transition ease-in-out duration-150">Aricles</button>
                <button wire:click="setFilter('video')" type="button" class="{{ $filter === 'video' ? 'bg-gray-200 dark:bg-gray-700' : '' }} border border-gray-400 dark:border-gray-600 rounded-full px-4 p-3 text-gray-900 dark:text-white text-sm font-semibold cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800 transition ease-in-out duration-150">Vidéos</button>
                <button wire:click="setFilter('audio')" type="button" class="{{ $filter === 'audio' ? 'bg-gray-200 dark:bg-gray-700' : '' }} border border-gray-400 dark:border-gray-600 rounded-full px-4 p-3 text-gray-900 dark:text-white text-sm font-semibold cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800 transition ease-in-out duration-150">Audios</button>
            </div>
            <button id="dropdownSortButton" data-dropdown-toggle="dropdownSort" href="#" class="border border-gray-400 dark:border-gray-600 rounded-full px-4 p-3 text-gray-900 dark:text-white flex gap-2 items-center cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371zm1.57-.785L11 2.687h-.047l-.652 2.157z"/>
                    <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293z"/>
                </svg>
                <span class="text-sm font-semibold">
                    @switch($sort)
                        @case('most_liked') Du plus aimé @break
                        @case('most_viewed') Du plus vu @break
                        @default Du plus récent
                    @endswitch
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </button>
            <div id="dropdownSort" class="z-20 hidden bg-white divide-y divide-gray-100 rounded-2xl shadow-sm w-48 dark:bg-gray-800 border border-gray-400 dark:border-gray-600">
                <ul class="py-3 text-gray-800 dark:text-white" aria-labelledby="dropdownSortButton">
                    <li>
                        <button wire:click="setSort('latest')" type="button" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 {{ $sort === 'latest' ? 'bg-gray-100 dark:bg-gray-700' : '' }} dark:hover:text-white font-semibold items-center w-full">
                            <span>
                                Du plus récent
                            </span>
                        </button>
                    </li>
                    <li>
                        <button wire:click="setSort('most_viewed')" type="button" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 {{ $sort === 'most_viewed' ? 'bg-gray-100 dark:bg-gray-700' : '' }} dark:hover:text-white font-semibold items-center w-full">
                            <span>
                                Du plus vu
                            </span>
                        </button>
                    </li>
                    <li>
                        <button wire:click="setSort('most_liked')" type="button" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 {{ $sort === 'most_liked' ? 'bg-gray-100 dark:bg-gray-700' : '' }} dark:hover:text-white font-semibold items-center w-full">
                            <span>
                                Du plus aimé
                            </span>
                        </button>
                    </li>
                    <li>
                        <button wire:click="setSort('most_commented')" type="button" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 {{ $sort === 'most_commented' ? 'bg-gray-100 dark:bg-gray-700' : '' }} dark:hover:text-white font-semibold items-center w-full">
                            <span>
                                Du plus commenté
                            </span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @forelse ($posts as $post)
                @livewire('guest.article.detail', ['post' => $post, 'tag' => $tag], key($post->id))
            @empty
            <div class="sm:col-span-2 md:col-span-3 lg:col-span-4 flex justify-center border border-gray-200 dark:border-gray-700 rounded-3xl group p-5">
                <p class="text-gray-600 dark:text-gray-400 font-semibold">Aucune publication disponible</p>
            </div>
            @endforelse
        </div>

        @if ($posts->total() > $posts->perPage())
        <div class="my-12 flex justify-between items-center font-semibold text-gray-900 dark:text-white">
            <!-- Précédent -->
            <div>
                <button
                    wire:click="previousPage"
                    @class([
                        'rounded-2xl px-4 py-3 flex gap-2 items-center cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800 transition ease-in-out duration-150',
                        'text-gray-400 cursor-not-allowed' => $posts->onFirstPage(),
                        'text-gray-900 dark:text-white' => !$posts->onFirstPage(),
                    ])
                    @disabled($posts->onFirstPage())
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                    </svg>
                    <span>Précédent</span>
                </button>
            </div>

            <!-- Numéros de page -->
            <div class="hidden md:flex gap-2 items-center">
                @for ($page = 1; $page <= $posts->lastPage(); $page++)
                    <button
                        wire:click="gotoPage({{ $page }})"
                        class="rounded-2xl px-4 py-3 transition ease-in-out duration-150 hover:bg-gray-100 dark:hover:bg-gray-800 cursor-pointer
                            {{ $posts->currentPage() === $page ? 'bg-gray-900 text-white' : 'text-gray-900 dark:text-white' }}"
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
                        'text-gray-400 cursor-not-allowed' => !$posts->hasMorePages(),
                        'text-gray-900 dark:text-white' => $posts->hasMorePages(),
                    ])
                    @disabled(!$posts->hasMorePages())
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
