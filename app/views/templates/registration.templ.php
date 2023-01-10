<div class="flex flex-col justify-center text-center p-6 w-3/4 md:max-h-screen rounded-lg shadow-lg bg-white md:overflow-y-auto no-scrollbar">
    <h2 class="flex w-full px-3 justify-center md:mt-80 mb-6 text-3xl font-bold dark:text-white text-transparent bg-clip-text bg-gradient-to-br from-roseVeryClair via-roseClair to-rose">Inscription</h2>
    <form action="/" method="POST">

        <div class="mx-auto sm:w-3/4">

            <div class="form-group mb-6">
                <label for="name" class="form-label inline-block mb-2 text-lg font-semibold">Son nom</label>
                <input type="text" class="form-control w-full mx-auto md:w-3/4 block px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="name" placeholder="Nom">
            </div>

            <div class="form-group mb-6">
                <label for="age" class="form-label inline-block mb-2 text-lg font-semibold">Son âge</label>
                <input name="age" type="number" class="form-control block w-full mx-auto md:w-3/4 px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="age" placeholder="Age">
            </div>


            <div class="form-group mb-6">
                <label for="castration" class="form-label inline-block mb-2 text-lg font-semibold">Elle(il) est castré(e) ?</label>
                <select name="castration" class="form-control block w-full mx-auto md:w-3/4 px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="castration">
                    <option selected>Oui? Non?</option>
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                </select>
            </div>

            <div class="form-group mb-6">
                <label for="genre" class="form-label inline-block mb-2 text-lg font-semibold">Son genre ?</label>
                <select name="genre" class="form-control block w-full mx-auto md:w-3/4 px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="genre">
                    <option selected>Choisir un genre</option>
                    <option value="1">Mâle</option>
                    <option value="0">Femelle</option>
                </select>
            </div>

            <div class="form-group mb-6">
                <label for="description" class="form-label inline-block mb-2 text-lg font-semibold">Décrivez le en quelques mots</label>
                <textarea name="description" rows="4" class="form-control block w-full mx-auto md:w-3/4 px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="description" placeholder="Ses croquettes préférées, plutôt 18h ou 20h de sommeil, etc..."></textarea>
            </div>

            <div class="form-group mb-6">
                <label for="email" class="form-label inline-block mb-2 text-lg font-semibold">Adresse email</label>
                <input type="email" class="form-control block w-full mx-auto md:w-3/4 px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="email" placeholder="Email">
            </div>

            <div class="form-group mb-6">
                <label for="password" class="form-label inline-block mb-2 text-lg font-semibold">Mot de passe</label>
                <input type="password" class="form-control block w-full mx-auto md:w-3/4 px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="password" placeholder="Mot de passe">
            </div>

            <button class="flex items-center justify-center p-0.5 mb-2 mx-auto overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-rose via-roseClair to-roseVeryClair group-hover:from-rose group-hover:via-roseClair group-hover:to-roseVeryClair hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 text-lg font-semibold">
                    S'enregistrer
                </span>
            </button>
        </div>

    </form>
</div>