<?php
namespace app\src\core\lists\menu;

class CreateListLastInvoices
{
    public static function createList(array $data_array) : array
    {
        $i = 0;
        foreach ( $data_array as $value ) {
            $arr[$i][] = $value['facture_number'];
            $arr[$i][] = $value['date'];
            $arr[$i][] = $value['id_company'];
            $i++;
        }

        return $arr;
    }
}