<?php
namespace app\src\core\show;

class ShowContacts
{
    public static function listContacts(string $name, string $phone_nb, string $email, string $company)
    {
        echo <<<HTML
            <tr>
                <td><a href="/liste-contacts/details-contact">$name</a></td>
                <td>$phone_nb</td>
                <td>$email</td>
                <td>$company</td>
            </tr>
        HTML;
    }
}