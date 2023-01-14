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