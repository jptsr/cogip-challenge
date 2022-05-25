<?php
namespace app\src\models;

class DeleteData
{
    private $database;

    public function __construct()
    {
        $this->database = DbConnection::connection();
    }

    public function deleteOnId(string $table_name, string $id_column, int $id)
    {
        $stmt = $this->database->prepare( "DELETE FROM $table_name WHERE $id_column = $id" );
        $stmt->bindParam("delete", $id);
        $stmt->execute();
        $stmt->closeCursor();
    }

    // public function deleteContact()
    // {}

    // public function deleteCompany()
    // {}
}