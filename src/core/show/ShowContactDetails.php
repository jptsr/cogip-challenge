<?php
namespace app\src\core\show;

class ShowContactDetails
{
    public static function displayInvoices(string $vat_nb, string $date)
    {
        echo <<<HTML
            <tr>
                <td>$vat_nb</td>
                <td>$date</td>
            </tr>
        HTML;
    }
}