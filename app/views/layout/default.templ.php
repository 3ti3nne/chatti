<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>{headTitle}</title>
</head>

<body class="md:overflow-hidden">
    <main class="relative h-screen md:flex">

        <?php
        require_once(__DIR__ . '/../partials/navBar.templ.php');
        ?>
        <div id="content" class="flex flex-1 items-center justify-center bg-center bg-cover py-10 md:min-h-screen" style="background-image: url(./imgs/backgroundPaws.svg);">
            {content}
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>