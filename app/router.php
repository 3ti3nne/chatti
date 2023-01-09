<?php

/**
 * Will get $_POST, $_GET and AJAX and redirect
 */

use Chatti\CatController\CatController;
use Chatti\controllers\Controller;


try {
    //ROUTEUR
    if (isset($_SESSION['user']['pseudo']) && !empty($_SESSION['user']['pseudo'])) {
        $catController = new CatController();

        $catController->render('layout.default', 'templates.home');
    }

    if (!empty($_GET)) {

        if (isset($_GET['home'])) {
            $catController = new CatController();

            echo $catController->homeDisplay();
        } elseif (isset($_GET['settings'])) {
            $catController = new CatController();

            echo $catController->settingsDisplay();
        } elseif (isset($_GET['chat'])) {
            $catController = new CatController();

            echo $catController->chatDisplay();
        } elseif (isset($_GET['about'])) {
            $catController = new CatController();

            echo $catController->aboutDisplay();
        } else {
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
