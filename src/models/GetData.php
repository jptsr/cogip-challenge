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

    public function getList(string $table_name, string $index_order, string $order, int $quantity) : array
    {
        $stmt = $this->database->prepare("SELECT * FROM $table_name ORDER BY $index_order $order");
        $stmt->execute();
        while( $data = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            $required_data[] = $data;

            if ( count($required_data) == $quantity ) {
                $stmt->closeCursor();
                return $required_data;
            }
        }
        $stmt->closeCursor();
        return $required_data;
    }
}