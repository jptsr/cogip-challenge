<?php

namespace app\src\controllers\invoices;
use app\src\controllers\Controller;
use app\src\core\Permission;

class UpdateInvoiceController extends Controller
{
    public function displayView()
    {
        session_start();

        Permission::log();
        Permission::admin();
        
        return $this -> views('updateInvoice');
    }
}