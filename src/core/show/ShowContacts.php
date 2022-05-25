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
                <td class="text-center">
                    <form action="" method="post">
                        <input type="submit" class="btn_poubelle" name="" value="">
                    </form>
                </td>
            </tr>
        HTML;
    }
}