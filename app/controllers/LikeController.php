<?php

namespace Chatti\controllers;

use Chatti\models\Like;

class LikeController extends Controller
{



    public function checkLikeAndInsert(array $data)
    {
        $like = new Like($data);

        $objectToArray = $like->getObjectVars();
        $like->insertLike($objectToArray);
    }
}
