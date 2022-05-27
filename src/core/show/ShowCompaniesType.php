<?php

namespace app\src\core\show;

class ShowCompaniesType
{
    public static function listTypeCompanies(string $type, int $id_type, int $actual_type)
    {
        $ok = ($actual_type == $id_type) ? 'selected' : '';
        echo <<<HTML
             
                <option value='$id_type' name="$type" $ok>$type</option>

        HTML;
    }
}