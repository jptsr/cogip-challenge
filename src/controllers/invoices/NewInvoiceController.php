<?php

namespace app\src\controllers\invoices;
use app\src\controllers\Controller;
use app\src\core\Permission;

class NewInvoiceController extends Controller
{
    public function displayView()
    {
        session_start();
        
        Permission::log();

        return $this -> views('newInvoice');
    }
}