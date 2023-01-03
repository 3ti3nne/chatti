<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>{headTitle}</title>
</head>

<body>
    <?php
    require_once(__DIR__ . '..app/views/partials/navBar.php');
    ?>
    <div>
        <h1>hello

        </h1>
    </div>
    {content}
    <?php
    require_once(__DIR__ . '..app/views/partials/footer.php');
    ?>

    <script src="node_modules/tw-elements/dist/js/index.min.js"></script>
</body>

</html>