<?php
namespace app\src\core\show;

class ShowContact
{
    public static function listContacts(string $name, string $phone_nb, string $email, string $company)
    {
        echo <<<HTML
            <tr>
                <td>$name</td>
                <td>$phone_nb</td>
                <td>$email</td>
                <td>$company</td>
            </tr>
        HTML;
    }
}