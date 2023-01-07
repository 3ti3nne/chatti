<?php

/**
 * Will get $_POST, $_GET and AJAX and redirect
 */

use Chatti\CatController\CatController;
use Chatti\controllers\Controller;

$controller = new Controller;

try {
    //ROUTEUR
    if (isset($_SESSION['user']['pseudo']) && !empty($_SESSION['user']['pseudo'])) {
        $catController = new CatController();

        $catController->render('layout.default', 'templates.home');
    }
} catch (PDOException $error) {
    $errorMessage = 'Chat marche pas !';

    echo $controller->render('layout.default', 'templates.error', $errorMessage);
} catch (Exception $error) {
    $errorMessage = 'Exception';

    echo $controller->render('layout.default', 'templates.error', $errorMessage);
}
