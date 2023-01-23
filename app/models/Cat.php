<?php

namespace Chatti\models;

use Chatti\models\Model;
use Chatti\utilities\Database;

class Cat extends Model
{
    private string $name;
    private string $password;
    private string $email;
    private int $age;
    private int $castration;
    private int $genre;
    private string $description;
    private string $picture;


    public function __construct(array $userInfos, string $userPicture)
    {
        $this->name = $userInfos['name'];
        $this->email = $userInfos['email'];
        $this->password = password_hash($userInfos['password'], PASSWORD_DEFAULT);
        $this->age = $userInfos['age'];
        $this->castration = $userInfos['castration'];
        $this->genre = $userInfos['genre'];
        $this->description = $userInfos['description'];
        $this->picture = $userPicture;

        return $this;
    }

    /**
     * Get object private variables
     */
    public function getObjectVars(): array
    {
        $array = get_object_vars($this);
        return $array;
    }


    /**
     * Insert new user with informations from the object Cat, created after register's form passed Model
     * @param array $data 
     * @return bool, throw PDOException if false
     */
    public function insert(array $data)
    {

        ///PUT A FUNCTION TO SELECT AND CHECKS IF EMAIL ALREADY EXISTS
        $db = Database::getInstance()->getConnexion();


        $request = "SELECT email FROM cats WHERE (email = :email)";
        $statement = $db->prepare($request);
        $statement->bindParam(':email', $data['email'], $db::PARAM_STR, 50);
        $statement->execute();
        $statement = $statement->fetch();

        if (is_array($statement) && !empty($statement)) {
            return false;
        } else {


            $request = "INSERT INTO cats(name, email, password, age, castration, genre, description)VALUES(:name, :email, :password, :age, :castration, :genre, :description)";
            $statement = $db->prepare($request);

            $statement->bindParam(':name', $data['name'], $db::PARAM_STR, 30);
            $statement->bindParam(':email', $data['email'], $db::PARAM_STR, 50);
            $statement->bindParam(':password', $data['password'], $db::PARAM_STR, 100);
            $statement->bindParam(':age', $data['age'], $db::PARAM_INT);
            $statement->bindParam(':castration', $data['castration'], $db::PARAM_INT);
            $statement->bindParam(':genre', $data['genre'], $db::PARAM_INT);
            $statement->bindParam(':description', $data['description'], $db::PARAM_STR, 100);

            $statement->execute();

            //Checks last inserted id to insert picture in database with foreign key

            $catRegisteringId = $db->lastInsertId();

            $request = "INSERT INTO photos(photo, photo_cat_id)VALUES(:photo, :photo_cat_id)";
            $statement = $db->prepare($request);

            $statement->bindParam(':photo', $data['picture'], $db::PARAM_STR, 100);
            $statement->bindParam(':photo_cat_id', $catRegisteringId, $db::PARAM_INT);

            $statement->execute();

            return true;
        }
    }

    /**
     * Login user after comparison
     * 
     * @return array||void
     */
    public static function login($userInfos)
    {
        $db = Database::getInstance()->getConnexion();

        $request = "SELECT * FROM cats
        LEFT JOIN photos on cats.cat_id = photos.photo_cat_id
        LEFT JOIN likes on cats.cat_id = likes.from_cat_id
        LEFT JOIN conversations on cats.cat_id = conversations.conversation_cat_id_one
        LEFT JOIN messages on cats.cat_id = messages.message_cat_id
        WHERE (email = :email)";

        $statement = $db->prepare($request);

        $statement->execute(array('email' => $userInfos['email']));

        if (!$statement) {
            return;
        }

        $userRetrievedFromDatabase = $statement->fetch($db::FETCH_ASSOC);


        if (is_array($userRetrievedFromDatabase) && !empty($userRetrievedFromDatabase)) {
            if (password_verify($userInfos['password'], $userRetrievedFromDatabase['password'])) {
                return $userRetrievedFromDatabase;
            }
        }
    }

    /**
     * Destroy user entry in database
     * @param int $userId
     */
    public static function destroy($userId)
    {
        $db = Database::getInstance()->getConnexion();

        $request = "DELETE FROM cats WHERE (cat_id = :userId)";
        $statement = $db->prepare($request);
        $statement->bindParam(':userId', $userId, $db::PARAM_INT);

        $statement->execute();
    }

    /**
     * Update email
     * 
     */

    /**
     * Update password
     * 
     */

    /**
     * Update description
     * 
     */


    /**
     * Fetch users to create Love Cats Users
     * 
     */
    public static function fetchLoveCats()
    {

        $db = Database::getInstance()->getConnexion();

        $request = "SELECT cats.cat_id, cats.name, cats.age, cats.castration, cats.genre, cats.description, photos.photo
        FROM cats
        LEFT JOIN photos on cats.cat_id = photos.photo_cat_id
        ORDER BY RAND()
        LIMIT 1";
        $statement = $db->prepare($request);

        $statement->execute();

        $catProfile = $statement->fetch($db::FETCH_ASSOC);
        $catProfile['photo'] = base64_encode($catProfile['photo']);

        return $catProfile;
    }
}
