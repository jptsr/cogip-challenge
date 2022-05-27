<?php
namespace app\src\core\show;

class ShowContactDetails
{
    public static function displayInvoices(string $vat_nb, string $date, string $page_name, int $id)
    {
        echo <<<HTML
            <tr>
                <td>$vat_nb</td>
                <td>$date</td>
                <td class="text-center">
                   <form action="/modification-$page_name-id=$id" method="post">
                        <input type="submit" class="btn_modifier" name="" value="">
                    </form>
                </td>
            </tr>
        HTML;
    }

    public static function displayInvoices2(string $vat_nb, string $date)
    {
        echo <<<HTML
            <tr>
                <td>$vat_nb</td>
                <td>$date</td>
            </tr>
        HTML;
    }
}