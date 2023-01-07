<?php

/**
 * Will get $_POST, $_GET and AJAX and redirect
 */

use Chatti\controllers\Controller;

$controller = new Controller;

try {
    //ROUTEUR

} catch (PDOException $error) {
    $errorMessage = 'Chat marche pas !';

    echo $controller->render('layout.default', 'templates.error', $errorMessage);
} catch (Exception $error) {
    $errorMessage = 'Exception';

    echo $controller->render('layout.default', 'templates.error', $errorMessage);
}
