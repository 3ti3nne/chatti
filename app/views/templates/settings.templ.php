<div class="block p-6 w-3/4 sm:w-1/2 rounded-lg shadow-lg bg-white space-y-7">
    <h2 class="flex w-full px-3 py-1.5 justify-center mb-6 text-3xl font-bold dark:text-white text-transparent bg-clip-text bg-gradient-to-br from-roseVeryClair via-roseClair to-rose">Réglages</h2>

    <form action="/" method="POST">
        <input type="hidden" name="logOut">
        <button class="overflow-hidden text-sm font-medium">
            <span class="relative px-5 py-2.5 text-black bg-clip-text hover:text-transparent hover:bg-gradient-to-r from-roseVeryClair via-roseClair to-rose transition-all ease-in-out duration-750 rounded-md text-lg font-semibold">
                Se déconnecter
            </span>
        </button>
    </form>

    <input type="hidden" name="delete">
    <button data-modal-target="destroy" data-modal-toggle="destroy" class="overflow-hidden text-sm font-medium">
        <span class="relative px-5 py-2.5 bg-clip-text text-transparent bg-gradient-to-r from-red-400 via-red-600 to-red-800 text-lg font-semibold">
            Supprimer le compte
        </span>
    </button>

    <!-- ALERT MODAL BOX FOR DESTROY -->

    <div id="destroy" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="destroy">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>

                <div class="p-6 text-center">

                    <h3 class="mb-5 text-lg font-semibold dark:text-gray-400">Cette action est définitive, vous ne pourrez pas récupérer votre compte.</h3>

                    <form action="/" method="POST">
                        <div class="form-group mb-6">
                            <input type="hidden" name="userId" value="<?= $_SESSION['userContext']['user']['id'] ?>">
                            <input name="destroy" required type="text" class="form-control w-full mx-auto md:w-3/4 block px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="destroy" placeholder="Ecrivez 'oui' si vous voulez continuer.">
                        </div>

                        <button data-modal-hide="destroy" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Supprimer le compte
                        </button>

                        <button data-modal-hide="destroy" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                            Annuler
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>