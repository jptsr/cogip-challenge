<?php

namespace app\src\core\show;

class ShowCompaniesOption
{
    public static function listOptionsCompanies(string $name, int $id_company)
    {
        echo <<<HTML
             
                <option value='$id_company' name="companie">$name</option>

        HTML;
    }
}