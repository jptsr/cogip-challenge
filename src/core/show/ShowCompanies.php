<?php
namespace app\src\core\show;

class ShowCompanies
{
    public static function listCompanies(string $name, string $vat_nb, string $country, string $type)
    {
        echo <<<HTML
            <tr>
                <td>$name</td>
                <td>$vat_nb</td>
                <td>$country</td>
                <td>$type</td>
            </tr>
        HTML;
    }
}