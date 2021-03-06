<?php
namespace app\src\core\lists\menu;

use app\src\core\lists\ModifiedDataForDisplay;
use app\src\models\GetData;

class PrepareLists
{
    public function prepareCompaniesListMenu()
    {
        $companies = new GetData();
        // $list = $companies->getList('companies', 'id_company', 'DESC', 5);
        $tables = ['companies', 'company_type'];
        $list = $companies->getInnerJoinList(
            $tables, 'INNER JOIN',
            'companies.id_type', 'company_type.id_type',
            'companies.id_company', 'DESC', 5,
            'companies.id_company', 'companies.name',' companies.country', 'companies.VAT', 'company_type.type'
        );

        $modified_data = new ModifiedDataForDisplay($list);
        $new_list = $modified_data->modifiedVatNumber();

        return $new_list;
    }

    public function prepareContactsListMenu()
    {
        $contacts = new GetData();
        $tables = ['contacts', 'companies'];
        $list = $contacts->getInnerJoinList(
            $tables, 'INNER JOIN', 
            'contacts.id_company', 'companies.id_company', 
            'contacts.id_contact', 'DESC', 5, 
            'contacts.id_contact', 'contacts.lastname', 'contacts.firstname', 'contacts.phone_number', 'contacts.email', 'companies.name'
        );

        $modified_data = new ModifiedDataForDisplay($list);
        $new_list = $modified_data->modifiedPhoneNumber();
        $new_list = $modified_data->modifiedName();

        return $new_list;
    }

    public function prepareInvoicesListMenu()
    {
        $invoices = new GetData();
        $tables = ['invoices', 'companies'];
        $list = $invoices->getInnerJoinList(
            $tables, 'INNER JOIN',
            'invoices.id_company', 'companies.id_company',
            'invoices.date', 'ASC', 5,
            'invoices.id_invoice', 'invoices.facture_number', 'invoices.date', 'companies.name'
        );

        $modified_data = new ModifiedDataForDisplay($list);
        $new_list = $modified_data->modifiedDate();

        return $new_list;
    }
}