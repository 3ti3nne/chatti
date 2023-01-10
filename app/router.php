<?php

/**
 * Will get $_POST, $_GET and AJAX and redirect
 */

use Chatti\CatController\CatController;
use Chatti\controllers\Controller;

$uri = $_SERVER['REQUEST_URI'];
$lay = 'layout.default';

session_start();


try {
    //ROUTEUR
    if (isset($_SESSION['user']['pseudo']) && !empty($_SESSION['user']['pseudo'])) {
        $catController = new CatController();
        echo $catController->render($lay, 'templates.home');
    } elseif (!isset($_SESSION['user']['pseudo']) && ($uri === '/register')) {
        $catController = new CatController();
        echo $catController->render($lay, 'templates.registration');
    } else {
        $catController = new CatController();
        echo $catController->render($lay, 'templates.connexion');
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

            case '/register':
                $catController = new CatController();
                echo $catController->registrationDisplay();
                break;

            default:

                throw new Exception('Page introuvable');
        }
    }
} catch (PDOException $error) {

    $controller = new Controller;
    $errorMessage = 'Chat marche pas !';
    echo $controller->render($lay, 'templates.error', $errorMessage);
} catch (Exception $error) {

    $controller = new Controller;
    echo $controller->render($lay, 'templates.error', $error->getMessage());
}
