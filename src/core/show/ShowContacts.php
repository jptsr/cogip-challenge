<?php
namespace app\src\core\show;

class ShowContacts
{
    public static function listContacts(string $name, string $phone_nb, string $email, string $company, int $id)
    {
        echo <<<HTML
            <tr>
                <td><a href="/details-contact-id=$id">$name</a></td>
                <td>$phone_nb</td>
                <td>$email</td>
                <td>$company</td>
            </tr>
        HTML;
    }

    public static function listContactsAdmin(string $name, string $phone_nb, string $email, string $company, int $id)
    {
        echo <<<HTML
            <tr>
                <td><a href="/details-contact-id=$id">$name</a></td>
                <td>$phone_nb</td>
                <td>$email</td>
                <td>$company</td>
                <td class="text-center"><button class="btn btn-light"><img src="./assets/img/poubelle.png" alt="poubell" width="20" height="20" ></button></td>
            </tr>
        HTML;
    }
}