<?php

namespace app\src\controllers\invoices;
use app\src\controllers\Controller;
use app\src\core\lists\invoices\ListInvoices;

class InvoicesController extends Controller
{
    public function displayView()
    {
        session_start();

        if ( empty($_SESSION['username']) or empty($_SESSION['user_status']) ) {
            header('location: /logout');
        }
        
        $invoices = new ListInvoices();
        $_SESSION['all_invoices'] = $invoices->getInvoices();

        return $this -> views('invoices');
    }
}