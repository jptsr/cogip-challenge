<?php
namespace app\src\core\lists\menu;

class CallListsMenu
{
    public function call()
    {
        $getCompaniesList = new PrepareLists();
        $_SESSION['list_last_companies'] = $getCompaniesList->prepareCompaniesListMenu();

        $getContactsList = new PrepareLists();
        $_SESSION['list_last_contacts'] = $getContactsList->prepareContactsListMenu();

        $getInvoicesList = new PrepareLists();
        $_SESSION['list_last_invoices'] = $getInvoicesList->prepareInvoicesListMenu();
    }
}