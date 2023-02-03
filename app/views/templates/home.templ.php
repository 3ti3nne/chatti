<h1 class="hidden">Chatti, l'application de rencontre pour chats célibataires</h1>
<div class="flex justify-center max-w-sm md:max-h-3/4">
    <div class="rounded-lg shadow-lg bg-white min-w-3/4 flex-col">
        <div class="object-contain">
            <img id="catPhoto" class="rounded-t-lg h-72 w-80 md:w-96" src="" alt="Photo de profil" />
        </div>
        <div class="flex justify-around">

            <div class="p-6 ">

                <h5 id="catName" class="text-gray-900 text-xl font-medium"></h5>

                <p id="catAge" class="text-gray-700 text-base mb-4">
                </p>

                <p id="catDescription" class="text-gray-700 text-base mb-4">

                </p>

            </div>
        </div>

        <div class="flex justify-around mb-5">


            <!-- <input name="likeValue" type="hidden" value="0">
                <input class="catId" name="toCatId" type="hidden" value="">
                <input name="fromCatId" type="hidden" value="<? $_SESSION['userContext']['user']['id'] ?>"> -->

            <button type="button" id="dislikeBtn" class=" p-3 rounded-full border flex justify-center items-center" data-value="0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 md:w-20 md:h-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>


            <!--  <input name="likeValue" type="hidden" value="1">
                <input class="catId" name="toCatId" type="hidden" value="">
                <input name="fromCatId" type="hidden" value="<? $_SESSION['userContext']['user']['id'] ?>">
 -->

            <button type="button" id="likeBtn" class=" p-3 rounded-full border flex justify-center items-center" data-value="1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 md:w-20 md:h-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </button>

        </div>
    </div>
</div>

<script src="./js/displayCard.js" onload="run()"></script>