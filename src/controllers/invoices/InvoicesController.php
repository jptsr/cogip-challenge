<?php

namespace app\src\controllers\invoices;
use app\src\controllers\Controller;
use app\src\core\lists\invoices\ListInvoices;
use app\src\core\Permission;

class InvoicesController extends Controller
{
    public function displayView()
    {
        session_start();

        Permission::log();
        
        $invoices = new ListInvoices();
        $_SESSION['all_invoices'] = $invoices->getInvoices();

        return $this -> views('invoices');
    }
}