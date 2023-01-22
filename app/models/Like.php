<?php

namespace Chatti\models;

use Chatti\models\Model;
use Chatti\utilities\Database;

class Like extends Model
{
    private int $fromCatId;
    private int $toCatId;
    private int $likeValue;

    public function __construct(array $data)
    {
        $this->fromCatId = $data['fromCatId'];
        $this->toCatId = $data['toCatId'];
        $this->likeValue = $data['likeValue'];

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
     * Like function
     * Use $_POST values from user to insert like into database
     * 
     * @param array from user $_POST like values
     */
    public static function insertLike(array $data)
    {
        $db = Database::getInstance()->getConnexion();

        $request = "INSERT INTO likes(from_cat_id, to_cat_id, like_value)VALUES(:from_cat_id, :to_cat_id, :like_value)";
        $statement = $db->prepare($request);

        $statement->bindParam(':from_cat_id', $data['fromCatId'], $db::PARAM_INT);
        $statement->bindParam(':to_cat_id', $data['toCatId'], $db::PARAM_INT);
        $statement->bindParam(':like_value', $data['likeValue'], $db::PARAM_INT);

        $statement->execute();
    }
}
