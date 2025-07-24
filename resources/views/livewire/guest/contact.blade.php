<div class="px-8 md:px-16">
    <div class="md:grid grid-cols-2 py-8 mx-auto max-w-screen-xl lg:py-16">
        <div class="mb-16 md:mb-0">
            <h2 class="mb-3 text-4xl text-gray-900 dark:text-white font-bold">Contact</h2>
            <div class="flex flex-col gap-8 mt-12">
                <div class="w-full md:w-[75%]">
                    <h4 class="mb-2 text-xl text-gray-900 dark:text-white font-semibold flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"/>
                            <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                        </svg>
                        Adresse
                    </h4>
                    <p class="font-normal text-gray-600 dark:text-gray-400">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, commodi.</p>
                </div>
                <div class="w-[75%]">
                    <h4 class="mb-2 text-xl text-gray-900 dark:text-white font-semibold flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                        </svg>
                        Email
                    </h4>
                    <p class="font-normal text-gray-600 dark:text-gray-400">{{ config('mail.from.address') }}</p>
                </div>
                <div class="w-[75%]">
                    <h4 class="mb-2 text-xl text-gray-900 dark:text-white font-semibold flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                        </svg>
                        Téléphone
                    </h4>
                    <p class="font-normal text-gray-600 dark:text-gray-400">{{ config('app.phone') }}</p>
                </div>
                <div class="w-[75%]">
                    <h4 class="mb-3 text-xl text-gray-900 dark:text-white font-semibold flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0m0 1a6.97 6.97 0 0 0-4.335 1.505l-.285.641a.847.847 0 0 0 1.48.816l.244-.368a.81.81 0 0 1 1.035-.275.81.81 0 0 0 .722 0l.262-.13a1 1 0 0 1 .775-.05l.984.34q.118.04.243.054c.784.093.855.377.694.801a.84.84 0 0 1-1.035.487l-.01-.003C8.273 4.663 7.747 4.5 6 4.5 4.8 4.5 3.5 5.62 3.5 7c0 3 1.935 1.89 3 3 1.146 1.194-1 4 2 4 1.75 0 3-3.5 3-4.5 0-.704 1.5-1 1-2.5-.097-.291-.396-.568-.642-.756-.173-.133-.206-.396-.051-.55a.334.334 0 0 1 .42-.043l1.085.724a.276.276 0 0 0 .348-.035c.15-.15.414-.083.488.117.16.428.445 1.046.847 1.354A7 7 0 0 0 8 1"/>
                        </svg>
                        Réseau sociaux
                    </h4>
                    <div class="text-gray-600 dark:text-gray-400 flex gap-4">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
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
                    <label for="message" class="block mb-2 font-semibold text-gray-900 dark:text-white">Message</label>
                    <textarea rows="4" id="message" class="bg-white border border-gray-200 text-gray-900 text-sm rounded-3xl block w-full p-3 dark:bg-gray-900 dark:border-gray-700 dark:placeholder-gray-500 dark:text-white" required></textarea>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 font-semibold rounded-full text-sm w-full sm:w-auto px-5 py-3 text-center bg-blue-500">
                    Envoyer
                </button>
            </form>
        </div>
    </div>
</div>
