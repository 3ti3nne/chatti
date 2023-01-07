<?php

namespace Chatti\utilities;

use PDO;

class Database
{

    private $connect = null;
    private PDO $connexion;

    public function __construct()
    {
        global $databaseUserInformations;

        $this->connexion = new PDO('mysql:host=' . $databaseUserInformations['db']['host'] . ';dbname=' . $databaseUserInformations['db']['database'], $databaseUserInformations['db']['user'], $databaseUserInformations['db']['password'], [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance(): ?Database
    {
        if (is_null(self::$connect)) {
            self::$connect = new Database();
        }
        return self::$connect;
    }
}
