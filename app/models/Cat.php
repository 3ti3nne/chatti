<?php

namespace Chatti\Cat;

use Chatti\utilities\Database;

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
        $catObject = get_object_vars($this);
        return $catObject;
    }

    public function insertNewUser(array $objectInfos)
    {

        $db = Database::getInstance()->getConnexion();

        $request = "INSERT INTO chats(name, email, password, age, castration, genre, description)VALUES(:name, :email, :password, :age, :castration, :genre, :description)";
        $statement = $db->prepare($request);

        $statement->bindParam(':name', $objectInfos['name'], $db::PARAM_STR, 30);
        $statement->bindParam(':email', $objectInfos['email'], $db::PARAM_STR, 50);
        $statement->bindParam(':password', $objectInfos['password'], $db::PARAM_STR, 100);
        $statement->bindParam(':age', $objectInfos['age'], $db::PARAM_INT);
        $statement->bindParam(':castration', $objectInfos['castration'], $db::PARAM_INT);
        $statement->bindParam(':genre', $objectInfos['genre'], $db::PARAM_INT);
        $statement->bindParam(':description', $objectInfos['description'], $db::PARAM_STR, 100);

        $statement->execute();
    }
}
