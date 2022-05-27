<?php

namespace app\src\core\show;

class ShowCompaniesOption
{
    public static function listOptionsCompanies(string $name, int $id_company, ...$selected)
    {
        $ok = ( $selected[0] == $name ) ? 'selected' : '' ;
        echo <<<HTML
             
                <option value='$id_company' name="companie" $ok>$name</option>

        HTML;
    }
}