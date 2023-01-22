<?php
echo ($data['chat_id']);
?>

<div class="flex justify-center max-w-md md:max-h-3/4">
    <div class="rounded-lg shadow-lg bg-white min-w-3/4 flex-col">
        <div class="object-contain">
            <img class="rounded-t-lg" src="data:image/jpeg;base64,<?= base64_encode($data['photo']) ?>" alt="" />
        </div>
        <div class="flex justify-around">

            <div class="p-6 ">
                <h5 class="text-gray-900 text-xl font-medium"><?= $data['name'] ?></h5>

                <p class="text-gray-700 text-base mb-4">
                    <?= $data['age'] ?>
                </p>

                <p class="text-gray-700 text-base mb-4">
                    <?= $data['genre'] ?>
                </p>
            </div>
        </div>

        <div class="flex justify-around mb-5">

            <button type="button" class="p-3 rounded-full border flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <button type="button" class="p-3 rounded-full border flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </button>

        </div>
    </div>
</div>