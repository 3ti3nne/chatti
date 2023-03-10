    <div class="block p-6 w-3/4 sm:w-1/2 rounded-lg shadow-lg bg-white">
        <h2 class="flex w-full px-3 py-1.5 justify-center mb-6 text-3xl font-bold dark:text-white text-transparent bg-clip-text bg-gradient-to-br from-roseVeryClair via-roseClair to-rose">Connexion</h2>
        <form action="/" method="POST">
            <input type="hidden" name="login">

            <div class="form-group mb-6">
                <label for="email" class="form-label inline-block mb-2 text-lg font-semibold">Adresse email</label>
                <input name="email" type="email" class="form-control block w-full px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="email" aria-describedby="emailHelp" placeholder="Email">
            </div>

            <div class="form-group mb-6">
                <label for="password" class="form-label inline-block mb-2 text-lg font-semibold">Mot de passe</label>
                <input name="password" type="password" class="form-control block w-full px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="password" placeholder="Mot de passe">
            </div>

            <button class="flex items-center justify-center p-0.5 mb-2 mx-auto overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-rose via-roseClair to-roseVeryClair group-hover:from-rose group-hover:via-roseClair group-hover:to-roseVeryClair hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 text-lg font-semibold">
                    Se connecter
                </span>
            </button>
            <?php
            if (is_string($data)) {
            ?>
                <span><?= $data ?></span>
            <?php
            }
            ?>
            <p class="text-gray-800 mt-6 text-center">Pas encore de compte ? <a href="/register" class="p-2 text-lg font-semibold text-rose transition duration-200 ease-in-out">S'enregistrer</a>
            </p>
        </form>
    </div>