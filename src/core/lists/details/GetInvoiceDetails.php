<?php
namespace app\src\core\lists\details;

use app\src\core\lists\ModifiedDataForDisplay;
use app\src\models\GetAllData;

class GetInvoiceDetails
{
    public function detailsForCompany($id)
    {
        $invoice_details = new GetAllData();
        $tables = ['invoices', 'contacts'];
        $data = $invoice_details->getInnerJoinListAll(
            $tables,
            'INNER JOIN', 'invoices.id_contact', 'contacts.id_contact',
            'invoices.id_company', $id,
            'invoices.facture_number', 'invoices.date', 'contacts.lastname', 'contacts.firstname'
        );

        $modified_data = new ModifiedDataForDisplay($data);
        $modified_data->modifiedDate();
        $final_data = $modified_data->modifiedName();
        
        return $final_data;
    }

    public function detailsForContact($id)
    {
        $invoices = new GetAllData();
        $data = $invoices->getDataWithId('invoices', 'id_contact', $id);

        $modified_data = new ModifiedDataForDisplay($data);
        $final_data = $modified_data->modifiedDate();

        return $final_data;
    }
}