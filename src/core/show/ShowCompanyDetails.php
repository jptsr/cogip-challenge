<?php
namespace app\src\core\show;

class ShowCompanyDetails
{
    public static function displayContacts(string $name, string $phone_nb, string $email)
    {
        echo <<<HTML
            <tr>
                <td>$name</td>
                <td>$phone_nb</td>
                <td>$email</td>
            </tr>
        HTML;
    }

    public static function displayInvoices(string $invoice_nb, string $date, string $contact)
    {
        echo <<<HTML
            <tr>
                <td>$invoice_nb</td>
                <td>$date</td>
                <td>$contact</td>
            </tr>
        HTML;
    }
}