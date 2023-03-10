<!-- MOBILE NAVBAR -->
<nav id="mobileNavTopMenu" class="bg-rose text-beige flex justify-between md:hidden transition duration-200 ease-in-out">
    <button class="mobileMenuButton p-2">
        <?php
        if (isset($_SESSION['userContext']['user']['picture']) && !empty($_SESSION['userContext']['user']['picture'])) {
        ?>
            <img class="w-20 h-20 rounded-full shadow-lg object-cover border-2" src="data:image/jpeg;base64,<?= base64_encode($_SESSION['userContext']['user']['picture']) ?>" alt="" />
        <?php
        } else {
        ?>
            <img class="w-20 h-20 rounded-full shadow-lg object-cover border-2" src="./imgs/miniBackgroundPaws.svg" alt="" />

        <?php
        }
        ?>
    </button>

    <img src="./imgs/miniBackgroundPaws.svg" alt="" class="w-28 h-28 object-fit">
    <a href="/chat" class="block p-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
        </svg>
    </a>
</nav>
<!-- NAVBAR -->
<nav id="sidebarNav" class="z-40 w-64 text-beige flex flex-col h-screen absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out" aria-label="Sidebar">
    <!-- PROFILE -->
    <div class="flex py-5 pl-2 bg-roseClair dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-row">
            <div>
                <?php
                if (isset($_SESSION['userContext']['user']['picture']) && !empty($_SESSION['userContext']['user']['picture'])) {
                ?>
                    <img class="w-24 h-24 rounded-full shadow-lg object-cover border-2" src="data:image/jpeg;base64,<?= base64_encode($_SESSION['userContext']['user']['picture']) ?>" alt="" />
                <?php
                } else {
                ?>
                    <img class="w-24 h-24 rounded-full shadow-lg object-cover border-2" src="./imgs/miniBackgroundPaws.svg" alt="" />
                <?php
                }
                ?>
            </div>
            <div class="flex flex-col justify-center pl-5">
                <?php if (isset($_SESSION['userContext']['user']['name'])) {
                ?>
                    <h5 class="mb-1 text-2xl font-bold dark:text-white">
                    <?= $_SESSION['userContext']['user']['name'];
                } ?>
                    </h5>
                    <a class="text-xl rounded-lg p-2 dark:text-gray-400 hover:bg-rose" href="/profile">Voir le profil</a>
            </div>
        </div>
        <button class="mobileMenuButton absolute top-0 right-0 p-2 hover:bg-rose rounded-lg transition duration-200 md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>

        </button>
    </div>
    <!--     REST OF NAVBAR     -->
    <div class="px-3 pt-9 h-screen bg-rose dark:bg-gray-800">
        <ul class="space-y-7">
            <li>
                <a href="/" class="flex items-center p-2 text-xl font-semibold rounded-lg dark:text-white hover:bg-roseClair dark:hover:bg-gray-700 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>

                    <span class="ml-9">Accueil</span>
                </a>
            </li>

            <li>
                <a href="/chat" class="flex items-center p-2 text-xl font-semibold rounded-lg dark:text-white hover:bg-roseClair dark:hover:bg-gray-700 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                    <span class="ml-9">Chat</span>
                    <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">num</span>
                </a>
            </li>
            <li>
                <a href="/settings" class="flex items-center p-2 text-xl font-semibold rounded-lg dark:text-white hover:bg-roseClair dark:hover:bg-gray-700 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                    <span class="ml-9">R??glages</span>
                </a>
            </li>
            <li>
                <a href="/about" class="flex items-center p-2 text-xl font-semibold rounded-lg dark:text-white hover:bg-roseClair dark:hover:bg-gray-700 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>

                    <span class="ml-9">A propos</span>
                </a>
            </li>

        </ul>
        <img src="./imgs/miniBackgroundPaws.svg" alt="paws" class="w-28 h-36 object-fill absolute bottom-0 left-0">
        <div class="absolute bottom-0 right-0">Version 1.0.1</div>
    </div>
</nav>