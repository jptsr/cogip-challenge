<?php
namespace app\src\core\lists;

class CreateListLastCompanies
{
    public static function createList(array $data_array) : array
    {
        $i = 0;
        foreach ($data_array as $value) {
            $arr[$i][] = $value['name'];
            $arr[$i][] = $value['VAT'];
            $arr[$i][] = $value['country'];
            $arr[$i][] = ( $value['id_type'] == 1 ) ? 'fournisseur' : 'client';
            $i++;
        }
        
        return $arr;
    }
}