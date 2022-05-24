<?php

namespace app\src\controllers\invoices;
use app\src\controllers\Controller;
use app\src\core\lists\invoices\ListInvoices;

class InvoicesController extends Controller
{
    public function displayView()
    {
        session_start();

        $invoices = new ListInvoices();
        $_SESSION['all_invoices'] = $invoices->getInvoices();

        return $this -> views('invoices');
    }
}