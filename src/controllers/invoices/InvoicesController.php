<?php

namespace app\src\controllers\invoices;
use app\src\controllers\Controller;

class InvoicesController extends Controller
{
    public function displayView()
    {
        return $this -> views('invoices');
    }
}