<div class="block p-6 w-3/4 sm:w-1/2 rounded-lg shadow-lg bg-white space-y-7">
    <h2 class="flex w-full px-3 py-1.5 justify-center mb-6 text-3xl font-bold dark:text-white text-transparent bg-clip-text bg-gradient-to-br from-roseVeryClair via-roseClair to-rose">Profil</h2>

    <!--     <form action="/" method="POST">
        <input type="hidden" name="changeEmail">
        <div class="form-group mb-6">
            <label for="email" class="form-label inline-block mb-2 text-lg font-semibold">Modifier adresse mail</label>
            <input name="email" type="email" class="form-control block w-full px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="email" aria-describedby="emailHelp" placeholder="Nouvel email">
        </div>
    </form>

    <form action="/" method="POST">
        <input type="hidden" name="changePassword">
        <div class="form-group mb-6">
            <label for="password" class="form-label inline-block mb-2 text-lg font-semibold">Modifier le mot de passe</label>
            <input name="password" type="password" class="form-control block w-full px-3 py-1.5 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-white focus:border-roseClair focus:ring-0" id="password" placeholder="Nouveau mot de passe">
        </div>
    </form>
     -->

    <?php
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>"; ?>
    <form action="/" method="POST">
        <input type="hidden" name="logOut">
        <button class="overflow-hidden text-sm font-medium">
            <span class="relative px-5 py-2.5 text-black bg-clip-text hover:text-transparent hover:bg-gradient-to-r from-roseVeryClair via-roseClair to-rose transition-all ease-in-out duration-750 rounded-md text-lg font-semibold">
                Se déconnecter
            </span>
        </button>
    </form>

    <form action="/" method="POST">
        <input type="hidden" name="delete">
        <button class="overflow-hidden text-sm font-medium">
            <span class="relative px-5 py-2.5 bg-clip-text text-transparent bg-gradient-to-r from-red-400 via-red-600 to-red-800 text-lg font-semibold">
                Supprimer le compte
            </span>
        </button>
    </form>
    <?php
    if (is_string($data)) {
    ?>
        <span><?= $data ?></span>
    <?php
    }
    ?>

    </form>
</div>