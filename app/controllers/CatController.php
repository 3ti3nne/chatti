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

    public function settingsDisplay()
    {
        return $this->render('layout.default', 'templates.settings');
    }

    public function profileDisplay()
    {
        return $this->render('layout.default', 'templates.profile');
    }

    public function homeDisplay()
    {
        return $this->render('layout.default', 'templates.home');
    }

    public function chatDisplay()
    {
        return $this->render('layout.default', 'templates.chat');
    }

    public function aboutDisplay()
    {
        return $this->render('layout.default', 'templates.about');
    }
}
