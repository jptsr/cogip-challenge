<?php

namespace app\src\core\show;

class ShowCompaniesOption
{
    public static function listOptionsCompanies(string $name)
    {
        echo <<<HTML
             
                <option value='$name' name="companie">$name</option>

        HTML;
    }
}