<?php

namespace Chatti\Like;

class Like
{
    private int $fromCatId;
    private int $toCatId;
    private int $likeValue;

    public function __construct(int $fromCatId, int $toCatId, int $likeValue)
    {
    }
}
