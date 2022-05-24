<?php
namespace app\src\core\show;

class ShowCompanies
{
    public static function listCompanies(string $name, string $vat_nb, string $country, string $type, int $id)
    {
        echo <<<HTML
            <tr>
                <td><a href="/details-entreprise-id=$id">$name</a></td> 
                <td>$vat_nb</td>
                <td>$country</td>
                <td>$type</td>
            </tr>
        HTML;
    }

    public static function companies(string $name, string $vat_nb, string $country, int $id)
    {
        echo <<<HTML
            <tr>
                <td><a href="/details-entreprise-id=$id">$name</a></td> 
                <td>$vat_nb</td>
                <td>$country</td>
            </tr>
        HTML;
    }
}