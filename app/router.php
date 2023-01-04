<?php

/**
 * Will get $_POST, $_GET and AJAX and redirect
 */

use Chatti\utilities\Database;
use Chatti\controllers\Controller;

$controller = new Controller;

try {
    $database = new Database;
    //ROUTEUR

    echo $controller->render('layout.default', 'templates.test');
} catch (PDOException $error) {

    $errorMessage = 'Chat marche pas !';

    echo $controller->render('layout.default', 'templates.error', $errorMessage);
} catch (Exception $error) {

    $errorMessage = 'Exception';

    echo $controller->render('layout.default', 'templates.error', $errorMessage);
}
