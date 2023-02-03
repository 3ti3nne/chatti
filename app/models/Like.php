<?php

namespace Chatti\models;

use Chatti\models\Model;
use Chatti\utilities\Database;

class Like extends Model
{
    protected int $fromCatId;
    protected int $toCatId;
    protected int $likeValue;

    public function __construct(int $likeValue, int $toCatId, int $fromCatId)
    {
        $this->fromCatId = $fromCatId;
        $this->toCatId = $toCatId;
        $this->likeValue = $likeValue;
    }


    /**
     * Like function
     * Use $_POST values from user to insert like into database
     * 
     * @param array from user $_POST like values
     */
    public function insertLike(object $like)
    {

        $like = $this->getObjectVars($like);

        $db = Database::getInstance()->getConnexion();

        $request = "INSERT INTO likes(from_cat_id, to_cat_id, like_value)VALUES(:from_cat_id, :to_cat_id, :like_value)";
        $statement = $db->prepare($request);

        $statement->bindParam(':from_cat_id', $like['fromCatId'], $db::PARAM_INT);
        $statement->bindParam(':to_cat_id', $like['toCatId'], $db::PARAM_INT);
        $statement->bindParam(':like_value', $like['likeValue'], $db::PARAM_INT);

        $statement->execute();
    }
}
