<?php
namespace app\src\core\lists\details;

use app\src\core\lists\ModifiedDataForDisplay;
use app\src\models\GetAllData;

class GetCompanyDetails
{
    public function details($id)
    {
        $array = $this->getDetails($id);

        $contacts_details = new GetContactDetails($id);
        $array[1] = $contacts_details->detailsForCompany($id);

        $invoices_details = new GetInvoiceDetails($id);
        $array[2] = $invoices_details->detailsForCompany($id);

        return $array;
    }

    private function getDetails($id)
    {
        $company_details = new GetAllData();
        $data = $company_details->getDataWithId('companies', 'id_company', $id);

        $modified_data = new ModifiedDataForDisplay($data);
        $final_data = $modified_data->modifiedVatNumber();

        $final_data[0]['id_type'] = ( $final_data[0]['id_type'] == 1 ) ? 'fournisseur' : 'client';

        return $final_data;
    }

    public function detailsForInvoice($id)
    {
        $invoice = new GetAllData();
        $tables = ['companies', 'company_type'];
        $data = $invoice->getInnerJoinListAll(
            $tables, 
            'INNER JOIN', 'companies.id_company', 'company_type.id_type',
            'companies.id_company', $id,
            'companies.name', 'companies.VAT', 'company_type.type'
        );

        $modified_data = new ModifiedDataForDisplay($data);
        $final_data = $modified_data->modifiedVatNumber();

        return $final_data;
    }
}