<?php
namespace app\src\core\show;

class ShowInvoiceDetails
{
    public static function displayCompany(string $name, string $vat_nb, string $type)
    {
        echo <<<HTML
            <tr>
                <td>$name</td> 
                <td>$vat_nb</td>
                <td>$type</td>
            </tr>
        HTML;
    }

    public static function displayContact(string $name, string $email, string $phone_nb)
    {
        echo <<<HTML
            <tr>
                <td>$name</td>
                <td>$email</td>
                <td>$phone_nb</td>
            </tr>
        HTML;
    }
}