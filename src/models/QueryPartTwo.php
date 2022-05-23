<?php
namespace app\src\models;

use PDO;

class QueryPartTwo
{
    public static function all($stmt)
    {
        $stmt->execute();
        while ( $data = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            $user_data[] = $data;
        }
        $stmt->closeCursor();
        return $user_data;
    }

    public static function partial($stmt, int $quantity)
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