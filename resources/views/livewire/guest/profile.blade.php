<div class="px-8 md:px-16">
    <div class="md:grid grid-cols-2 py-8 mx-auto max-w-screen-xl lg:py-16">
        <div class="relative w-48 h-48 mb-8 md:mb-0 md:mt-8">
            <form action="" method="POST" enctype="multipart/form-data" class="relative">
                @csrf
                @method('PUT')
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" class="w-48 h-48 rounded-full border-4 border-gray-900 shadow-lg object-cover" alt="Photo de profil">
                <label for="photo-upload" class="absolute bottom-0 right-0 bg-black/60 text-white p-2 rounded-full cursor-pointer hover:bg-black">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6 m-1" viewBox="0 0 16 16">
                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                        <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0"/>
                      </svg>
                </label>
                <input type="file" id="photo-upload" name="profile_photo" class="hidden" accept=".png,.jpg,.jpeg" onchange="this.form.submit()">
            </form>
        </div>
        <form class="mt-4">
            <div class="mb-8">
                <label for="name" class="block mb-2 font-semibold text-gray-900 dark:text-white">Nom</label>
                <input type="name" id="name" class="bg-white border border-gray-200 text-gray-900 text-sm rounded-full block w-full p-3 dark:bg-gray-900 dark:border-gray-700 dark:placeholder-gray-500 dark:text-white" placeholder="Ex: John Doe" required />
            </div>
            <div class="mb-8">
                <label for="email" class="block mb-2 font-semibold text-gray-900 dark:text-white">Email</label>
                <input type="email" id="email" class="bg-white border border-gray-200 text-gray-900 text-sm rounded-full block w-full p-3 dark:bg-gray-900 dark:border-gray-700 dark:placeholder-gray-500 dark:text-white" placeholder="Ex: name@flowbite.com" required />
            </div>
            <div class="mb-8">
                <label for="email" class="block mb-2 font-semibold text-gray-900 dark:text-white">Téléphone</label>
                <input type="email" id="email" class="bg-white border border-gray-200 text-gray-900 text-sm rounded-full block w-full p-3 dark:bg-gray-900 dark:border-gray-700 dark:placeholder-gray-500 dark:text-white" placeholder="Ex: name@flowbite.com" required />
            </div>
            <div class="mb-8">
                <label for="message" class="block mb-2 font-semibold text-gray-900 dark:text-white">Bio</label>
                <textarea rows="4" id="message" class="bg-white border border-gray-200 text-gray-900 text-sm rounded-3xl block w-full p-3 dark:bg-gray-900 dark:border-gray-700 dark:placeholder-gray-500 dark:text-white" required></textarea>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 font-semibold rounded-full text-sm w-full sm:w-auto px-5 py-3 text-center bg-blue-500">
                Envoyer
            </button>
        </form>
    </div>
</div>
