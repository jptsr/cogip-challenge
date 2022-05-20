<?php
namespace app\src\models;

use app\src\core\lists\menu\CountSelectedColumn;
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
        return $this->SecondPartOfQuery($stmt, $quantity);
    }

    public function getInnerJoinList(array $tables, string $join_type, string $col1, string $col2, string $index_order, string $order, int $quantity, ...$selected_col) : array
    {
        $query = new CountSelectedColumn($selected_col);
        $blabla = $query->createQuery();

        $stmt = $this->database->prepare(
            "SELECT $blabla
            FROM $tables[0]
            $join_type $tables[1]
            ON $col1 = $col2
            ORDER BY $index_order $order"
        );

        return $this->SecondPartOfQuery($stmt, $quantity);
    }

    private function SecondPartOfQuery($stmt, int $quantity)
    {
        $stmt->execute();
        while ( $data = $stmt->fetch(PDO::FETCH_ASSOC) ) {
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