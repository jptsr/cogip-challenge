<?php

namespace app\src\controllers\invoices;
use app\src\controllers\Controller;
use app\src\core\lists\details\GetInvoiceDetails;

class InvoiceDetailsController extends Controller
{
    public function displayView()
    {
        session_start();

        if ( empty($_SESSION['username']) or empty($_SESSION['user_status']) ) {
            header('location: /logout');
        }
        
        $id = $_SESSION['get_id_details'];

        $invoice = new GetInvoiceDetails();
        $_SESSION['details_invoice'] = $invoice->details($id);

        return $this -> views('invoiceDetails');
    }
}
