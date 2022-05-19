<?php
namespace app\src\core\lists;

class CreateListLastContacts
{
    public static function createList(array $data_array) : array
    {
        $i = 0;
        foreach ( $data_array as $value ) {
            $arr[$i][] = $value['lastname'].' '.$value['firstname'];
            $arr[$i][] = $value['phone_number'];
            $arr[$i][] = $value['email'];
            $arr[$i][] = $value['id_company'];
            $i++;
        }

        return $arr;
    }
}