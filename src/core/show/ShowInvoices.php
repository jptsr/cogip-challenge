<?php
namespace app\src\core\show;

class ShowInvoices
{
    public static function listInvoices(string $invoice_nb, string $date, string $company)
    {
        echo <<<HTML
            <tr>
                <td><a href="/details-facture">$invoice_nb</a></td>
                <td>$date</td>
                <td>$company</td>
            </tr>
        HTML;
    }
}