<div class="flex justify-center">
    <div class="rounded-lg shadow-lg bg-white flex-col justify-center p-6">
        <img src="./../imgs/missingCat.jpg" alt="Chat perdu" />
        <div class="p-6 flex-col justify-center text-center">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Chat perdu!</h5>
            <p class="text-gray-700 text-base mb-4">
                <?= $data ?>
            </p>
        </div>
        <a href="/" class="flex items-center justify-center p-0.5 mb-2 mx-auto overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-rose via-roseClair to-roseVeryClair group-hover:from-rose group-hover:via-roseClair group-hover:to-roseVeryClair hover:text-white dark:text-white focus:ring-4 focus:outline-none">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 text-lg font-semibold">
                Retour à l'accueil
            </span>
        </a>
    </div>
</div>