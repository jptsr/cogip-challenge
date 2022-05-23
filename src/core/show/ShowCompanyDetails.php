<?php
namespace app\src\core\show;

class ShowCompanyDetails
{
    public function display(string $name, string $phone_nb, string $email)
    {
        echo <<<HTML
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        HTML;
    }
}