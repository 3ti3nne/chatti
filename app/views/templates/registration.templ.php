<div class="flex flex-col justify-center text-center p-6 w-3/4 md:h-screen rounded-lg shadow-lg bg-white md:overflow-y-auto no-scrollbar">
    <h2 class="w-full px-3 justify-center md:mt-32 mb-6 text-3xl font-bold dark:text-white text-transparent bg-clip-text bg-gradient-to-br from-roseVeryClair via-roseClair to-rose">Inscription</h2>
    <form action="/" method="POST" enctype="multipart/form-data">

        <div class="mx-auto sm:w-3/4">
            <input type="hidden" name="registration">

            <?php
            if ($data) {
            ?>
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-gray-800 dark:text-red-400" role="alert">
                    <?= $data ?>
                </div>
            <?php
            }
            ?>

            <div class="form-group mb-6">
                <input name="name" required type="text" class="form-control w-full mx-auto md:w-3/4 block px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="name" placeholder="Nom">
            </div>

            <div class="form-group mb-6">
                <input name="age" required type="number" class="form-control block w-full mx-auto md:w-3/4 px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="age" placeholder="Age">
            </div>

            <div class="form-group mb-6">
                <select name="castration" required class="form-control block w-full mx-auto md:w-3/4 px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="castration">
                    <option selected><span class="text-beige">Il(Elle) est castré(e) ?</span></option>
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                </select>
            </div>

            <div class="form-group mb-6">
                <select name="genre" class="form-control block w-full mx-auto md:w-3/4 px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="genre">
                    <option selected>Choisir un genre</option>
                    <option value="1">Mâle</option>
                    <option value="0">Femelle</option>
                </select>
            </div>

            <div class="form-group mb-6">
                <textarea name="description" rows="4" class="resize-none form-control block w-full mx-auto md:w-3/4 px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="description" placeholder="Une courte description de ses activités préférées, sieste, croquettes.."></textarea>
            </div>

            <div class="form-group mb-6">
                <input name="picture" required type="file" class="form-control block w-full mx-auto md:w-3/4 px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="picture" placeholder="Photo">
            </div>

            <div class="form-group mb-6">
                <input name="email" type="email" required class="form-control block w-full mx-auto md:w-3/4 px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="email" placeholder="Email">
            </div>

            <div class="form-group mb-6">
                <input name="password" type="password" required class="form-control block w-full mx-auto md:w-3/4 px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="password" placeholder="Mot de passe">
            </div>

            <button type="submit" class="flex items-center justify-center p-0.5 mb-2 mx-auto overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-rose via-roseClair to-roseVeryClair group-hover:from-rose group-hover:via-roseClair group-hover:to-roseVeryClair hover:text-white dark:text-white focus:ring-4 focus:outline-none">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 text-lg font-semibold">
                    S'enregistrer
                </span>
            </button>
        </div>

    </form>
</div>