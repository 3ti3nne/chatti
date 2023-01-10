<?php

/**
 * Will get $_POST, $_GET and AJAX and redirect
 */

use Chatti\CatController\CatController;
use Chatti\controllers\Controller;

$uri = $_SERVER['REQUEST_URI'];


try {
    //ROUTEUR
    if (isset($_SESSION['user']['pseudo']) && !empty($_SESSION['user']['pseudo'])) {
        $catController = new CatController();

        $catController->render('layout.default', 'templates.home');
    }

    if (!empty($uri)) {

        switch ($uri) {

            case '/':
                $catController = new CatController();
                echo $catController->homeDisplay();
                break;

            case '/settings':
                $catController = new CatController();
                echo $catController->settingsDisplay();
                break;

            case  '/chat':
                $catController = new CatController();
                echo $catController->chatDisplay();
                break;

            case '/about':
                $catController = new CatController();
                echo $catController->aboutDisplay();
                break;

            default:

                throw new Exception('Page introuvable');
        }
    }
} catch (PDOException $error) {
    $controller = new Controller;

    $errorMessage = 'Chat marche pas !';

    echo $controller->render('layout.default', 'templates.error', $errorMessage);
} catch (Exception $error) {
    $controller = new Controller;

    echo $controller->render('layout.default', 'templates.error', $error->getMessage());
}
