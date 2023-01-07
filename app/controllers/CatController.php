<?php

namespace Chatti\CatController;

use Chatti\controllers\Controller;

/**
 * 
 */

class CatController extends Controller
{
    public function authentificationDisplay()
    {
        return $this->render('layout.default', 'templates.connexion');
    }

    public function registrationDisplay()
    {
        return $this->render('layout.default', 'templates.registration');
    }
}
