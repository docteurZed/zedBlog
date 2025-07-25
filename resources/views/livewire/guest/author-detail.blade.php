<div>
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="w-full h-32 md:h-48">

        <div class="-mt-16 flex justify-center items-center w-full min-h-54 px-8">
            <div class="border border-gray-200 dark:border-gray-700 p-8 rounded-4xl bg-white dark:bg-gray-900 text-gray-900 dark:text-white md:flex justify-between w-full">
                <div class="md:flex gap-4 mb-8 md:mb-0">
                    <div class="m-3 mb-8 md:mb-0 shrink-0 w-40 h-40">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="rounded-full border border-4 border-gray-100 dark:border-gray-700 w-full h-full">
                    </div>
                    <div class="col-span-3 m-3">
                        <div class="mb-1">
                            <span class="bg-blue-600 text-sm font-semibold text-white px-2 py-1 rounded-full">Auteur</span>
                        </div>
                        <h2 class="mb-4 text-4xl text-gray-900 dark:text-white font-bold">{{ $author->name }}</h2>
                        <p class="mb-4 font-normal text-gray-600 dark:text-gray-400 w-full md:w-[80%]">{{ $author->bio }}</p>
                        @if ($author->media && $author->media->isNotEmpty())
                        <div class="flex mb-4 gap-1">
                            <a href="{{ $author->media->facebook }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                </svg>
                            </a>
                            <a href="{{ $author->media->linkedin }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                </svg>
                            </a>
                            <a href="{{ $author->media->whatsapp }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                </svg>
                            </a>
                        </div>
                        @endif
                        <div class="flex gap-2 text-gray-700 dark:text-gray-200 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                            </svg>
                            <span class="font-semibold text-sm">{{ $posts->total() }} publication{{ $posts->count() > 1 ? 's' : '' }}</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <div class="flex gap-2">
                        <button wire:click="toggleFollow" type="button" class="border border-gray-400 dark:border-gray-600 rounded-full px-4 py-3 text-gray-900 dark:text-white flex gap-2 items-center cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800 {{ $isFollowing ? 'bg-gray-400 dark:bg-gray-600' : '' }} transition ease-in-out duration-150">
                            @if ($isFollowing)
                            <span class="text-sm font-semibold">Abonné</span>
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                            </svg>
                            <span class="text-sm font-semibold">S'abonner</span>
                            @endif
                        </button>
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
                @livewire('guest.article.detail', ['post' => $post, 'author' => $author], key($post->id))
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
