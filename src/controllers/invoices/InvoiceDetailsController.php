<?php

namespace app\src\controllers\invoices;
use app\src\controllers\Controller;
use app\src\core\lists\details\GetInvoiceDetails;
use app\src\core\Permission;

class InvoiceDetailsController extends Controller
{
    public function displayView()
    {
        session_start();

        Permission::log();
        
        $id = $_SESSION['get_id_details'];

        $invoice = new GetInvoiceDetails();
        $_SESSION['details_invoice'] = $invoice->details($id);

        return $this -> views('invoiceDetails');
    }
}
