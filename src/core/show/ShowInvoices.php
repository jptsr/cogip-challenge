<?php
namespace app\src\core\show;

class ShowInvoices
{
    public static function listInvoices(string $invoice_nb, string $date, string $company, int $id)
    {
        echo <<<HTML
            <tr>
                <td><a href="/details-facture-id=$id">$invoice_nb</a></td>
                <td>$date</td>
                <td>$company</td>
            </tr>
        HTML;
    }

    public static function listInvoicesAdmin(string $invoice_nb, string $date, string $company, int $id)
    {
        echo <<<HTML
            <tr>
                <td><a href="/details-facture-id=$id">$invoice_nb</a></td>
                <td>$date</td>
                <td>$company</td>
                <td class="text-center">
                    <form action="/liste-factures-id=$id" method="post">
                        <input type="submit" class="btn_poubelle" name="delete" value="">
                    </form>
                </td>
            </tr>
        HTML;
    }

    public static function invoices(string $invoice_nb, string $date, string $company, string $company_type, int $id)
    {
        echo <<<HTML
            <tr>
                <td><a href="/details-facture-id=$id">$invoice_nb</a></td>
                <td>$date</td>
                <td>$company</td>
                <td>$company_type</td>
                <td class="text-center">
                    <form action="/liste-factures-id=$id" method="post">
                        <input type="submit" class="btn_poubelle" name="delete" value="">
                    </form>
                </td>
            </tr>
        HTML;
    }
}