<?php
namespace app\src\core\lists;

class CreateListLastCompanies
{
    public static function createList(array $data_arr)
    {
        $i = 0;
        foreach ($data_arr as $value) {
            $arr[$i][] = $value['name'];
            $arr[$i][] = $value['VAT'];
            $arr[$i][] = $value['country'];
            $arr[$i][] = ( $value['id_type'] == 1 ) ? 'fournisseur' : 'client';
            $i++;
        }
        
        return $arr;
    }
}