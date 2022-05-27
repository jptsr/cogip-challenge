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
    public function CreateNewCompany($table_name, $name, $country, $vat, $id_type)
    {
        $stmt = $this->database->prepare("INSERT INTO $table_name VALUES (0, '$name', '$country', '$vat', '$id_type') ");

        $stmt->execute();
        $stmt->closeCursor();
    }
    public function CreateNewInvoice($table_name, $facture_number, $date, $id_contact, $id_company, $id_type)
    {
        $stmt = $this->database->prepare("INSERT INTO $table_name VALUES (0, '$facture_number', '$date', '$id_contact', '$id_company' '$id_type') ");

        $stmt->execute();
        $stmt->closeCursor();
    }
}
