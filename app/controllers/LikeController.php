<?php

namespace Chatti\controllers;

use Chatti\models\Like;

class LikeController extends Controller
{

    public function checkLikeAndInsert(int $likeValue, int $toCatId, int $fromCatId)
    {
        $like = new Like($likeValue, $toCatId, $fromCatId);

        $objectToArray = $like->getObjectVars();
        $like->insertLike($objectToArray);
    }
}
