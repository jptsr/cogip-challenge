<?php
namespace app\src\models;

use app\src\core\lists\menu\CountSelectedColumn;

class GetAllData
{
    private $database;

    public function __construct()
    {
        $this->database = DbConnection::connection();
    }

    public function getData(string $table_name, string $column_name, string $username)
    {
        $stmt = $this->database->prepare("SELECT * FROM $table_name WHERE $column_name = '$username'");

        return QueryPartTwo::all($stmt);    
    }
    
    public function getDataWithId(string $table_name, string $id_column, int $id)
    {
        $stmt = $this->database->prepare("SELECT * FROM $table_name WHERE $id_column = $id");
        
        return QueryPartTwo::all($stmt);
    }

    public function getListAll(string $table, string $id_column, int $id, ...$selected_col) : array
    {
        $query = new CountSelectedColumn($selected_col);
        $blabla = $query->createQuery();

        $stmt = $this->database->prepare(
            "SELECT $blabla
            FROM $table
            WHERE $id_column = $id"
        );

        return QueryPartTwo::all($stmt);
    }

    public function getInnerJoinListAll(array $tables, string $join_type, string $col1, string $col2, string $id_column, int $id, ...$selected_col) : array
    {
        $query = new CountSelectedColumn($selected_col);
        $blabla = $query->createQuery();

        $stmt = $this->database->prepare(
            "SELECT $blabla
            FROM $tables[0]
            $join_type $tables[1]
            ON $col1 = $col2
            WHERE $id_column = $id"
        );

        return QueryPartTwo::all($stmt);
    }
}