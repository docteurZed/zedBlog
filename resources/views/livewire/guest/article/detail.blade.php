<div class="flex flex-col justify-between border border-gray-200 dark:border-gray-700 rounded-3xl group">
    <a href="{{ route('article.detail', ['id' => $post->id, 'slug' => $post->slug]) }}">
        <div class="relative w-full h-56 rounded-t-3xl overflow-hidden shadow-lg">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="..." class="object-cover w-full h-full">

            <div class="absolute inset-0 bg-black/25 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-in-out pointer-events-none rounded-t-3xl"></div>

            <div class="absolute top-0 m-4 z-10 text-white text-sm bg-blue-500 rounded-full px-2 py-1 font-semibold capitalize">{{ $post->category->name }}</div>


            <div class="absolute w-full h-full flex items-center justify-center top-0 left-0 z-10 transition duration-500 group-hover:scale-125">
                <div class="text-white text-sm bg-black/60 rounded-full p-3 font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                        @if ($post->type === 'article')
                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z"/>
                        @elseif ($post->type === 'audio')
                        <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13s1.12-2 2.5-2 2.5.896 2.5 2m9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2"/>
                        <path fill-rule="evenodd" d="M14 11V2h1v9zM6 3v10H5V3z"/>
                        <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4z"/>
                        @elseif ($post->type === 'video')
                        <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393"/>
                        @endif
                    </svg>
                </div>
            </div>
        </div>
    </a>
    <div class="relative flex flex-col gap-3 bg-gray-50 p-4 dark:bg-gray-800/50 rounded-b-3xl overflow-hidden">
        <div class="flex gap-3 items-center">
            <a href="{{ route('author.detail', ['id' => $post->user->id, 'slug' => Str::slug($post->user->name)]) }}" class="w-10 h-10">
                <div class="bg-yellow-400 h-10 w-10 rounded-full"></div>
            </a>
            <div class="flex gap-2 items-center text-sm">
                <a href="{{ route('author.detail', ['id' => $post->user->id, 'slug' => Str::slug($post->user->name)]) }}" class="text-gray-700 dark:text-gray-200 font-semibold hover:underline capitalize">{{ $post->user->name }}</a>
                <span class="text-gray-500 dark:text-gray-400">•</span>
                <span class="text-gray-500 dark:text-gray-400">{{ $post->created_at->format('d M Y') }}</span>
            </div>
        </div>
        <div class="">
            <a href="{{ route('article.detail', ['id' => $post->id, 'slug' => Str::slug($post->title)]) }}" class="text-lg font-bold text-gray-900 dark:text-white block hover:underline">{{ $post->title }}</a>
        </div>
        <div class="flex justify-between items-center">
            <div class="flex gap-2">
                <button wire:click="toggleLike" type="button" class="border border-gray-400 dark:border-gray-600 {{ $liked ? 'bg-red-500' : '' }} rounded-full p-2 text-gray-900 dark:text-white flex gap-2 items-center cursor-pointer transition ease-in-out duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                    </svg>
                    <span class="text-sm font-semibold hidden md:inline-flex">{{ $totalLikes }}</span>
                </button>
                <button type="button" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 text-gray-900 dark:text-white flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/><path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                    </svg>
                    <span class="text-sm font-semibold hidden md:inline-flex">{{ $totalComments }}</span>
                </button>
            </div>
            <button type="button" wire:click="toggleSave" class="border border-gray-400 dark:border-gray-600 rounded-full p-2 {{ $saved ? 'text-white dark:text-gray-800 bg-gray-800 dark:bg-gray-100' : 'text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-800' }} text-sm font-semibold cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                </svg>
            </button>
        </div>
    </div>
</div>
