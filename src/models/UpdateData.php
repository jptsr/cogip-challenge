<?php

namespace app\src\models;

class UpdateData
{
    private $database;

    public function __construct()
    {
        $this->database = DbConnection::connection();
    }

    public function updateContact(string $table_name, string $lastname, string $firstname, string $phone, string $email, int $id_company, int $id_contact)
    {
        $stmt = $this->database->prepare(
            "UPDATE $table_name
            SET lastname = '$lastname', firstname = '$firstname', phone_number = '$phone', email = '$email', id_company = $id_company
            WHERE id_contact = $id_contact"
        );
        $stmt->execute();
        $stmt->closeCursor();
    }
}