<?php

namespace Chatti\Cat;

use Chatti\utilities\Database;
use Exception;

class Cat
{
    private string $name;
    private string $password;
    private string $email;
    private int $age;
    private int $castration;
    private int $genre;
    private string $description;


    public function __construct(array $userInfos)
    {
        $this->name = $userInfos['name'];
        $this->email = $userInfos['email'];
        $this->password = password_hash($userInfos['password'], PASSWORD_DEFAULT);
        $this->age = $userInfos['age'];
        $this->castration = $userInfos['castration'];
        $this->genre = $userInfos['genre'];
        $this->description = $userInfos['description'];

        return $this;
    }

    /**
     * Get object private variables
     */
    public function getObject(): array
    {
        $catArray = get_object_vars($this);
        return $catArray;
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

        $request = "INSERT INTO chats(name, email, password, age, castration, genre, description)VALUES(:name, :email, :password, :age, :castration, :genre, :description)";
        $statement = $db->prepare($request);

        $statement->bindParam(':name', $data['name'], $db::PARAM_STR, 30);
        $statement->bindParam(':email', $data['email'], $db::PARAM_STR, 50);
        $statement->bindParam(':password', $data['password'], $db::PARAM_STR, 100);
        $statement->bindParam(':age', $data['age'], $db::PARAM_INT);
        $statement->bindParam(':castration', $data['castration'], $db::PARAM_INT);
        $statement->bindParam(':genre', $data['genre'], $db::PARAM_INT);
        $statement->bindParam(':description', $data['description'], $db::PARAM_STR, 100);

        $statement->execute();
    }

    /**
     * Login user after comparison
     * 
     * @return array||string
     */
    public static function login($userInfos)
    {
        $db = Database::getInstance()->getConnexion();

        $request = "SELECT * FROM chats WHERE (email = :email)";
        $statement = $db->prepare($request);
        $statement->execute(array('email' => $userInfos['email']));

        if ($statement === false) {
            return;
        }

        $userRetrievedFromDatabase = $statement->fetch($db::FETCH_ASSOC);

        if (is_array($userRetrievedFromDatabase) && !empty($userRetrievedFromDatabase)) {
            if (password_verify($userInfos['password'], $userRetrievedFromDatabase['password'])) {
                return $userRetrievedFromDatabase;
            }
        }
    }
}
