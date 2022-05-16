<?php

namespace app\src\controllers\invoices;
use app\src\controllers\Controller;

class NewInvoiceController extends Controller
{
    public function displayView()
    {
        return $this -> views('newInvoice');
    }
}