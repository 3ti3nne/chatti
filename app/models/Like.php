<?php

namespace Chatti\Like;

class Like
{
    private int $fromCatId;
    private int $toCatId;
    private int $likeValue;

    public function __construct(int $fromCatId, int $toCatId, int $likeValue)
    {
        $this->fromCatId = $fromCatId;
        $this->toCatId = $toCatId;
        $this->likeValue = $likeValue;
    }
}
