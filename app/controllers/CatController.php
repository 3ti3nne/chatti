<?php

namespace Chatti\CatController;

use Chatti\Cat\Cat;
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

    /**
     * @param Cat
     * 
     * Get private object vars to an array and insert into database
     */
    public function insertUser($registeringCatInfos)
    {
        $cat = new Cat($registeringCatInfos);
        $infos = $cat->getObject();
        $cat->insert($infos);
    }

    public function loginUser(array $userInfos)
    {
        $userRetrievedFromDatabase = Cat::login($userInfos);

        if (!is_array($userRetrievedFromDatabase)) {
            $userRetrievedFromDatabase = 'Informations de connexions erronnées';
            echo $this->render('layout.default', 'templates.connexion', $userRetrievedFromDatabase);
        }

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['userContext']['user']['id'] = $userRetrievedFromDatabase['id'];
        $_SESSION['userContext']['user']['name'] = $userRetrievedFromDatabase['name'];
        $_SESSION['userContext']['user']['email'] = $userRetrievedFromDatabase['email'];
        $_SESSION['userContext']['user']['castration'] = $userRetrievedFromDatabase['castration'];
        $_SESSION['userContext']['user']['age'] = $userRetrievedFromDatabase['age'];
        $_SESSION['userContext']['user']['description'] = $userRetrievedFromDatabase['age'];
    }

    /**
     * Logout function
     * 
     */
    public function logOutUser()
    {
        session_unset();
        session_destroy();
        echo self::authentificationDisplay();
    }
}
