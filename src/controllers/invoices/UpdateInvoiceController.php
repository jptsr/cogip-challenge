<?php

namespace app\src\controllers\invoices;
use app\src\controllers\Controller;

class UpdateInvoiceController extends Controller
{
    public function displayView()
    {
        session_start();
        
        return $this -> views('updateInvoice');
    }
}