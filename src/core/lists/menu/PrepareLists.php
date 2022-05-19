<?php
namespace app\src\core\lists\menu;

use app\src\models\GetData;

class PrepareLists
{
    public function prepareCompaniesListMenu()
    {
        $companies = new GetData();
        $list = $companies->getList('companies', 'id_company', 'DESC', 5);

        return CreateListLastCompanies::createList($list);
    }

    public function prepareContactsListMenu()
    {
        $contacts = new GetData();
        $list = $contacts->getList('contacts', 'id_contact', 'DESC', 5);

        return CreateListLastContacts::createList($list);
    }

    public function prepareInvoicesListMenu()
    {
        $invoices = new GetData();
        $list = $invoices->getList('invoices', 'date', 'ASC', 5);

        return CreateListLastInvoices::createList($list);
    }
}