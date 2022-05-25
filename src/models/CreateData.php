<?php

namespace app\src\models;

use app\src\models\DbConnection;

class CreateData
{
    private $database;

    public function __construct()
    {
        $this->database = DbConnection::connection();
    }

    public function CreateNewContact($table_name, $lastname, $firstname, $phone_number, $email, $id_company)
    {
        $stmt = $this->database->prepare("INSERT INTO $table_name VALUES (0, '$lastname', '$firstname', '$phone_number', '$email', '$id_company') ");
        
        $stmt->execute();
        $stmt->closeCursor();
    }
}