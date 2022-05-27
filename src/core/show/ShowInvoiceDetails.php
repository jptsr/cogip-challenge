<?php
namespace app\src\core\show;

class ShowInvoiceDetails
{
    public static function displayCompany(string $name, string $vat_nb, string $type, string $page_name, int $id)
    {
        echo <<<HTML
            <tr>
                <td>$name</td> 
                <td>$vat_nb</td>
                <td>$type</td>
                <td class="text-center">
                   <form action="/modification-$page_name-id=$id" method="post">
                        <input type="submit" class="btn_modifier" name="" value="">
                    </form>
                </td>
            </tr>
            HTML;
        }
        
        public static function displayContact(string $name, string $email, string $phone_nb, string $page_name, int $id)
        {
            echo <<<HTML
            <tr>
                <td>$name</td>
                <td>$email</td>
                <td>$phone_nb</td>
                <td class="text-center">
                   <form action="/modification-$page_name-id=$id" method="post">
                        <input type="submit" class="btn_modifier" name="" value="">
                    </form>
                </td>
            </tr>
        HTML;
    }
}