<?php

namespace Chatti\models;

class Model
{
    /**
     * Get object private variables
     */
    public function getObjectVars(): array
    {
        $array = get_object_vars($this);
        return $array;
    }
}
