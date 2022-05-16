<?php

namespace app\src\controllers\invoices;
use app\src\controllers\Controller;

class InvoiceDetailsController extends Controller
{
    public function displayView()
    {
        return $this -> views('invoiceDetails');
    }
}
