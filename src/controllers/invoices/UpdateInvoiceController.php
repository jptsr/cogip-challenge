<?php

namespace app\src\controllers\invoices;
use app\src\controllers\Controller;

class UpdateInvoiceController extends Controller
{
    public function displayView()
    {
        session_start();

        if ( empty($_SESSION['username']) or empty($_SESSION['user_status']) ) {
            header('location: /logout');
        }
        
        return $this -> views('updateInvoice');
    }
}