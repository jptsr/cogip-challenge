<?php
namespace app\src\models;

use PDO;

class GetData
{
    private $database;

    public function __construct()
    {
        $this->database = DbConnection::connection();
    }

    public function getData(string $table_name, string $username)
    {
        $stmt = $this->database->prepare("SELECT * FROM $table_name WHERE username = '$username'");
        $stmt->execute();
        while ( $data = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            $user_data[] = $data;
        }
        $stmt->closeCursor();
        return $user_data;
    }
}