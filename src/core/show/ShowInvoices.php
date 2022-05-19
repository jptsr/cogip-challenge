<?php
namespace app\src\core\show;

class ShowInvoices
{
    public static function listInvoices(string $invoice_nb, string $date, string $company)
    {
        echo <<<HTML
            <tr>
                <td>$invoice_nb</td>
                <td>$date</td>
                <td>$company</td>
            </tr>
        HTML;
    }
}