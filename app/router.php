<?php

/**
 * Will get $_POST, $_GET and AJAX and redirect
 */

use Chatti\models\Cat;
use Chatti\controllers\Controller;
use Chatti\controllers\CatController;
use Chatti\controllers\LikeController;

$uri = $_SERVER['REQUEST_URI'];
$lay = 'layout.default';

session_start();



try {

    /**
     * Ajax handling.
     */

    // Get json through PHP
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    // Routing
    if (!empty($data)) {
        if (isset($data->getProfile)) {
            $catProfile = Cat::fetchLoveCats();
            echo json_encode($catProfile);
            exit();
        }
        if (isset($data->action) && $data->action === 'like') {
            $like = new LikeController();
            $like->checkLikeAndInsert(
                $data->response,
                $data->likedUser,
                $_SESSION['userContext']['user']['id']
            );
        }
    }


    /**
     * $_POST request handling
     */
    if (!empty($_POST)) {

        if (isset($_POST['registration']) && !empty($_POST['name'])) {
            $catController = new CatController();
            $catController->insertUser($_POST, $_FILES);
            exit();
        }

        if (isset($_POST['login']) && !empty($_POST['email'])) {
            $catController = new CatController();
            $catController->loginUser($_POST);
            exit();
        }

        if (isset($_POST['logOut'])) {
            $catController = new CatController();
            $catController->logOutUser();
            exit();
        }

        if (isset($_POST['destroy']) && $_POST['destroy'] === "oui") {
            $catController = new CatController();
            $catController->destroyUser($_POST['userId']);
            exit();
        }
    }


    /**
     * Prevents all but connexion and register page when not connected
     */
    if (!isset($_SESSION['userContext']['user']['name']) && ($uri === '/register')) {
        $catController = new CatController();
        echo $catController->render($lay, 'templates.registration');
        exit();
    }


    /**
     * Route similar to $_GET
     */
    if (!empty($uri)) {

        if (isset($_SESSION['userContext']['user']['name']) && !empty($_SESSION['userContext']['user']['name'])) {


            switch ($uri) {

                case '/':
                    $catController = new CatController();
                    echo $catController->render($lay, 'templates.home');
                    break;

                case '/profile':
                    $catController = new CatController();
                    echo $catController->render($lay, 'templates.profile');
                    break;

                case '/settings':
                    $catController = new CatController();
                    echo $catController->render($lay, 'templates.settings');
                    break;

                case  '/chat':
                    $catController = new CatController();
                    echo $catController->render($lay, 'templates.chat');
                    break;

                case '/about':
                    $catController = new CatController();
                    echo $catController->render($lay, 'templates.about');
                    break;

                default:

                    throw new Exception('Page introuvable');
            }
        }
    }
} catch (PDOException $error) {

    $controller = new Controller;
    $errorMessage = 'Chat marche pas !';
    echo $controller->render($lay, 'templates.error', $error->getMessage());
} catch (Exception $error) {

    $controller = new Controller;
    echo $controller->render($lay, 'templates.error', $error->getMessage());
}
