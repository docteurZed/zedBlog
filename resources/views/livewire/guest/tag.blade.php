<div>
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="w-full h-32 md:h-48">

        <div class="-mt-16 flex justify-center items-center w-full min-h-54 px-8">
            <div class="border border-gray-200 dark:border-gray-700 p-8 rounded-4xl bg-white dark:bg-gray-900 text-gray-900 dark:text-white md:flex justify-between w-full">
                <div class="md:flex gap-4 mb-8 md:mb-0">
                    <div class="m-3 mb-8 md:mb-0 shrink-0 rotate-8 w-40 h-40 rounded-3xl border border-4 border-gray-100 dark:border-gray-700 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-16 h-16" viewBox="0 0 16 16">
                            <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                            <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043z"/>
                        </svg>
                    </div>
                    <div class="col-span-3 m-3">
                        <h2 class="mb-3 text-4xl text-gray-900 dark:text-white font-bold">Tags</h2>
                        <p class="mb-4 font-normal text-gray-600 dark:text-gray-400 w-full md:w-[80%]">Toutes les tags enrégistrés sont disponibles ici.</p>
                        <div class="flex gap-2 text-gray-700 dark:text-gray-200 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                            </svg>
                            <span class="font-semibold text-sm">{{ $tags->count() }} tag{{ $tags->count() > 1 ? 's' : '' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-8 md:p-16">
        <div class="flex flex-wrap gap-3">
            @forelse ($tags as $tag)
            <a href="{{ route('tag.detail', ['id' => $tag->id, 'slug' => $tag->slug]) }}" class="border border-gray-400 dark:border-gray-600 rounded-full px-4 py-3 text-gray-900 dark:text-white text-sm font-semibold cursor-pointer hover:bg-gray-100/25 dark:hover:bg-gray-800/25 transition ease-in-out duration-150">{{ $tag->name }}</a>
            @empty
            <div class="sm:col-span-2 md:col-span-3 lg:col-span-4 flex justify-center border border-gray-200 dark:border-gray-700 rounded-3xl group p-5">
                <p class="text-gray-600 dark:text-gray-400 font-semibold">Aucun tag disponible</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
