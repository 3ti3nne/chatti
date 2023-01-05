<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>{headTitle}</title>
</head>

<body>
    <?php
    require_once(__DIR__ . '/../partials/navBar.templ.php');
    ?>

    {content}

    <?php
    require_once(__DIR__ . '/../partials/footer.templ.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
</body>

</html>