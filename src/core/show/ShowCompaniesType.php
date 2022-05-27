<?php

namespace app\src\core\show;

class ShowCompaniesType
{
    public static function listTypeCompanies(string $type, int $id_type)
    {
        echo <<<HTML
             
                <option value='$id_type' name="$type">$type</option>

        HTML;
    }
}