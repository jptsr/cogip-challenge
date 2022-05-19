<?php
namespace app\src\controllers;

use app\src\core\lists\PrepareLists;

class HomeController extends Controller
{
    public function displayView()
    {
        session_start();
        
        $getCompaniesList = new PrepareLists();
        $_SESSION['list_last_companies'] = $getCompaniesList->prepareCompaniesListMenu();

        $getContactsList = new PrepareLists();
        $_SESSION['list_last_contacts'] = $getContactsList->prepareContactsListMenu();

        $getInvoicesList = new PrepareLists();
        $_SESSION['list_last_invoices'] = $getInvoicesList->prepareInvoicesListMenu();
        
        return $this->views('welcome');
    }
}