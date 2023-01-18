<?php

/**
 * Will get $_POST, $_GET and AJAX and redirect
 */

use Chatti\controllers\Controller;
use Chatti\CatController\CatController;

$uri = $_SERVER['REQUEST_URI'];
$lay = 'layout.default';

session_start();


try {

    /**
     * $_POST request handling
     */
    if (!empty($_POST)) {

        if (isset($_POST['registration']) && !empty($_POST['name'])) {
            $catController = new CatController();
            $catController->insertUser($_POST, $_FILES);
        }

        if (isset($_POST['login']) && !empty($_POST['email'])) {
            $catController = new CatController();
            $catController->loginUser($_POST);
        }

        if (isset($_POST['logOut'])) {
            $catController = new CatController();
            $catController->logOutUser();
        }

        if (isset($_POST['destroy']) && $_POST['destroy'] === "oui") {
            $catController = new CatController();
            $catController->destroyUser($_POST['userId']);
        }
    }


    /**
     * Prevents all but connexion and register page when not connected
     */
    if (!isset($_SESSION['userContext']['user']['name']) && ($uri === '/register')) {
        $catController = new CatController();
        echo $catController->render($lay, 'templates.registration');
    }


    /**
     * Route similar to $_GET
     */
    if (!empty($uri)) {

        if (isset($_SESSION['userContext']['user']['name']) && !empty($_SESSION['userContext']['user']['name'])) {


            switch ($uri) {

                case '/':
                    $catController = new CatController();
                    $catsArray = $catController->fetchLoveCatsToCreateCards();

                    echo $catController->homeDisplay($catsArray);
                    break;

                case '/profile':
                    $catController = new CatController();
                    echo $catController->profileDisplay();
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
    }
} catch (PDOException $error) {

    $controller = new Controller;
    $errorMessage = 'Chat marche pas !';
    echo $controller->render($lay, 'templates.error', $errorMessage);
} catch (Exception $error) {

    $controller = new Controller;
    echo $controller->render($lay, 'templates.error', $error->getMessage());
}


/*
 * Gestion des appels avec AJAX fetch.
 */

// On récupère le flux JSON posté.
$json = file_get_contents('php://input');
// On convertit le flux JSON en tableau d'objets.
$data = json_decode($json);
// On route vers le controller "Annonces" et la méthode d'affichage d'une annonce "annonceDisplay".
if (!empty($data)) {
}
