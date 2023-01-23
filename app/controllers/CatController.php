<?php

namespace Chatti\controllers;

use Chatti\models\Cat;
use Chatti\controllers\Controller;

/**
 * 
 */

class CatController extends Controller
{


    /**
     * @param array
     * 
     * Create new Cat Object for security and type
     * Get private object vars to an array and insert into database
     */
    public function insertUser(array $registeringCatInfos, array $registeringCatPicture)
    {

        $error = null;

        //Verify picture
        if (isset($registeringCatPicture) && $registeringCatPicture['picture']['error'] === 0) {
            if ($registeringCatPicture['picture']['size'] <= 1000000) {

                $allowedExtensions = ['jpg', 'jpeg'];

                $pathInfo = pathinfo($registeringCatPicture['picture']['name'],  PATHINFO_EXTENSION);
                if (in_array($pathInfo, $allowedExtensions)) {

                    $registeringCatPicture = file_get_contents($registeringCatPicture['picture']['tmp_name']);

                    $cat = new Cat($registeringCatInfos, $registeringCatPicture);


                    $infos = $cat->getObjectVars();

                    if (!$cat->insert($infos)) {
                        $error = "Cet email est déjà utilisé !";
                        echo $this->render('layout.default', 'templates.registration', $error);
                    };
                } else {
                    $error = "Le format de l'image n'est pas accepté !";
                    echo $this->render('layout.default', 'templates.registration', $error);
                }
            } else {
                $error = "L'image est trop volumineuse !";
                echo $this->render('layout.default', 'templates.registration', $error);
            }
        } else {
            $error = "L'image n'est pas valide !";
            echo $this->render('layout.default', 'templates.registration', $error);
        }
    }


    /**
     * Log users after retrieving password and comparing with $_POST
     * Create $_SESSION with infos from database
     */
    public function loginUser(array $userInfos)
    {
        $userRetrievedFromDatabase = Cat::login($userInfos);

        if (!is_array($userRetrievedFromDatabase)) {
            $userRetrievedFromDatabase = 'Informations de connexions erronnées';
            echo $this->render('layout.default', 'templates.connexion', $userRetrievedFromDatabase);
        }

        $_SESSION['userContext']['user']['id'] = (int)$userRetrievedFromDatabase['cat_id'];
        $_SESSION['userContext']['user']['name'] = $userRetrievedFromDatabase['name'];
        $_SESSION['userContext']['user']['email'] = $userRetrievedFromDatabase['email'];
        $_SESSION['userContext']['user']['castration'] = $userRetrievedFromDatabase['castration'];
        $_SESSION['userContext']['user']['age'] = $userRetrievedFromDatabase['age'];
        $_SESSION['userContext']['user']['description'] = $userRetrievedFromDatabase['description'];
        $_SESSION['userContext']['user']['picture'] = $userRetrievedFromDatabase['photo'];

        echo $this->render('layout.default', 'templates.home');
    }




    /**
     * Logout function
     * 
     */
    public function logOutUser()
    {
        session_unset();
        session_destroy();
        echo $this->render('layout.default', 'templates.connexion');
    }

    /**
     * Destroy user function
     * @param int userId
     */
    public function destroyUser(int $userId)
    {
        Cat::destroy($userId);

        session_unset();
        session_destroy();

        $data = "Le compte a bien été supprimé";
        echo $this->render('layout.default', 'templates.connexion', $data);
    }
}
