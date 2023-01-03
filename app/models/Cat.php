<?php

namespace Chatti\Cat;

class Cat
{
    private string $name;
    private string $password;
    private string $email;
    private int $age;
    private int $castration;
    private int $genre;
    private string $description;


    public function __construct(string $name, string $password, string $email, int $age, int $castration, int $genre, string $description)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->age = $age;
        $this->castration = $castration;
        $this->genre = $genre;
        $this->description = $description;
    }
}
