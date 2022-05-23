<?php

namespace app\src\controllers\invoices;
use app\src\controllers\Controller;

class InvoiceDetailsController extends Controller
{
    public function displayView()
    {
        session_start();
        var_dump($_SESSION['get_id_details']);

        return $this -> views('invoiceDetails');
    }
}
