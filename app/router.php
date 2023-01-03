<?php

/**
 * Will get $_POST, $_GET and AJAX and redirect
 */

use Chatti\controllers\Controller;

$controller = new Controller;

echo $controller->render('layout.index', 'templates.test');
