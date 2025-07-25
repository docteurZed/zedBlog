<div class="my-8">
    <h4 class="text-gray-900 dark:text-white text-xl font-bold mb-3">Ajouter un commentaire</h4>

    <form wire:submit.prevent="submit" class="w-full md:w-[75%] mb-8">
        <textarea rows="4" wire:model.defer="message" class="bg-white border border-gray-200 text-gray-900 text-sm rounded-3xl block w-full p-3 dark:bg-gray-900 dark:border-gray-700 dark:placeholder-gray-500 dark:text-white" required></textarea>
        @error('message') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror

        @if($submitted)
            <div class="mt-2 text-green-600 text-sm font-semibold">
                ✅ Commentaire envoyé avec succès !
            </div>
        @endif

        <div class="flex gap-2 mt-4 items-center">
            <button type="reset" class="text-white bg-gray-700 hover:bg-gray-800 font-semibold rounded-full text-sm w-full sm:w-auto px-5 py-3 text-center">
                Annuler
            </button>

            <button type="submit" class="relative text-white hover:bg-blue-800 font-semibold rounded-full text-sm w-full sm:w-auto px-5 py-3 text-center bg-blue-700">
                <span wire:loading.remove wire:target="submit">Envoyer</span>
                <span wire:loading wire:target="submit" class="">
                    Envoi...
                </span>
            </button>
        </div>
    </form>

    <div class="flex flex-col gap-3">
        @foreach ($comments as $comment)
            <div class="flex gap-3 items-start">
                <div class="w-12 h-12">
                    <div class="bg-yellow-400 h-12 w-12 rounded-full"></div>
                </div>
                <div class="border w-full md:w-[55%] rounded-2xl border border-gray-200 dark:border-gray-700 p-5">
                    <div class="flex gap-2 items-center">
                        <span class="text-gray-700 dark:text-gray-200 font-semibold">{{ $comment->user->name }}</span>
                        <span class="text-gray-600 dark:text-gray-400">•</span>
                        <span class="text-gray-600 dark:text-gray-400 text-sm">{{ $comment->created_at->format('d M Y') }}</span>
                    </div>
                    <div class="mt-3 text-gray-600 dark:text-gray-400 text-sm">
                        {{ $comment->comment }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
