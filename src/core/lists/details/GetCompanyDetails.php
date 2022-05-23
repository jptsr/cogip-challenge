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
}