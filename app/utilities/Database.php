<?php

namespace Chatti\utilities;

use PDO;

class Database
{

    private static $instance = null;
    private PDO $connexion;

    private function __construct()
    {
        global $databaseUserInformations;

        $this->connexion = new PDO('mysql:host=' . $databaseUserInformations['db']['host'] . ';dbname=' . $databaseUserInformations['db']['database'], $databaseUserInformations['db']['user'], $databaseUserInformations['db']['password'], [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * Singleton method to get only one instance of Database
     * 
     * @return Database
     */
    public static function getInstance(): ?Database
    {
        if (is_null(self::$instance)) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    /**
     * Getter for PDO Object
     * 
     * @return PDO $connexion
     */
    public function getConnexion()
    {
        return $this->connexion;
    }
}
