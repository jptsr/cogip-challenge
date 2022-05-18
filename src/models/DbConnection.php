<?php
namespace app\src\models;

use PDO;
use PDOException;

class DbConnection
{
    public static function connection()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=cogip;charset=utf8', 'root', '');
        } catch (PDOException $e) {
            die( 'Erreur : ' . $e->getMessage() );
        }
    }
}