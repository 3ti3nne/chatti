<?php

use Chatti\controllers\CatController;


$catController = new CatController;

echo $catController->render('layout.default', 'templates.connexion');
