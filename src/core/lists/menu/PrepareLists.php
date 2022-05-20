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
        $tables = ['contacts', 'companies'];
        $list = $contacts->getInnerJoinList(
            $tables, 'INNER JOIN', 
            'contacts.id_company', 'companies.id_company', 
            'contacts.id_contact', 'DESC', 5, 
            'contacts.lastname', 'contacts.firstname', 'contacts.phone_number', 'contacts.email', 'companies.name'
        );

        return $list;
    }

    public function prepareInvoicesListMenu()
    {
        $invoices = new GetData();
        $tables = ['invoices', 'companies'];
        $list = $invoices->getInnerJoinList(
            $tables, 'INNER JOIN',
            'invoices.id_company', 'companies.id_company',
            'invoices.date', 'ASC', 5,
            'invoices.facture_number', 'invoices.date', 'companies.name'
        );

        return $list;
        // return CreateListLastInvoices::createList($list);
    }
}