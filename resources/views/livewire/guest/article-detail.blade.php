<div>
    <div class="relative">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="w-full h-48 md:h-56">

        <div class="-mt-16 flex justify-center items-center w-full min-h-54 px-8 md:px-16">
            <div class="border border-gray-200 dark:border-gray-700 p-8 rounded-4xl bg-white dark:bg-gray-900 text-gray-900 dark:text-white md:flex justify-between w-full">
                <div class="md:flex gap-4 mb-8 md:mb-0">
                    <div class="m-3 mb-8 md:mb-0 shrink-0 rotate-8 w-40 h-40 rounded-3xl border border-4 border-gray-100 dark:border-gray-700 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-16 h-16" viewBox="0 0 16 16">
                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z"/>
                        </svg>
                    </div>
                    <div class="col-span-3 m-3">
                        <div class="mb-2">
                            <span class="bg-blue-600 text-sm font-semibold text-white px-2 py-1 rounded-full">{{ $post->category->name }}</span>
                        </div>
                        <h2 class="mb-3 text-2xl text-gray-900 dark:text-white font-bold capitalize">
                            {{ $post->title }}
                        </h2>
                        <p class="mb-4 font-normal text-gray-600 dark:text-gray-400 w-full md:w-[80%]">
                            {{ $post->resume }}
                        </p>
                        @if ($post->tags->isNotEmpty())
                            @foreach ($post->tags as $tag)
                            <div class="flex flex-wrap gap-3">
                                <a href="#" class="border border-gray-400 dark:border-gray-600 rounded-full px-3 py-2 text-gray-900 dark:text-white text-sm font-semibold cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800 transition ease-in-out duration-150">{{ $tag->name }}</a>
                            </div>
                            @endforeach
                        @endif
                        <hr class="my-5 w-full md:w-[60%] text-gray-100 dark:text-gray-800">
                        <div class="flex gap-3 items-center">
                            <a href="#" class="w-12 h-12">
                                <div class="bg-yellow-400 h-12 w-12 rounded-full"></div>
                            </a>
                            <div class="flex gap-2 items-center text-sm">
                                <a href="#" class="text-gray-700 dark:text-gray-200 font-semibold hover:underline">{{ $post->user->name }}</a>
                                <span class="text-gray-500 dark:text-gray-400">•</span>
                                <span class="text-gray-500 dark:text-gray-400">{{ $post->created_at->format('d M Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <div class="flex gap-2">
                        <button wire:click="toggleLike" type="button" class="border border-gray-400 dark:border-gray-600 {{ $liked ? 'bg-red-500' : '' }} rounded-full p-2 text-gray-900 dark:text-white flex gap-2 items-center cursor-pointer transition ease-in-out duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                            </svg>
                            <span class="text-sm font-semibold">{{ $totalLikes }}</span>
                        </button>
                        <a href="#comment" class="border border-gray-400 dark:border-gray-600 rounded-full px-3 py-2 text-gray-900 dark:text-white flex gap-2 items-center cursor-pointer hover:bg-gray-100/50 dark:hover:bg-gray-800/50 transition ease-in-out duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                            </svg>
                            <span class="text-sm font-semibold">{{ $totalComments }}</span>
                        </a>
                        <button type="button" wire:click="toggleSave" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 {{ $saved ? 'text-white dark:text-gray-900 bg-gray-900 dark:bg-gray-100' : 'text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-900' }} text-sm font-semibold cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-8 px-12 md:py-16 md:px-24">
        <div class="text-gray-700 text-lg dark:text-gray-200 font-normal">
            {!! $post->content !!}
        </div>
        <livewire:guest.article.comment :post="$post" />
    </div>
</div>
