<?php
namespace app\src\core\lists\details;

use app\src\core\lists\ModifiedDataForDisplay;
use app\src\models\GetAllData;

class GetInvoiceDetails
{
    public function details($id)
    {
        $data = $this->getDetails($id);

        $company = new GetCompanyDetails();
        $data[1] = $company->detailsForInvoice($data[0]['id_company']);

        $contact = new GetContactDetails();
        $data[2] = $contact->detailsForInvoice($data[0]['id_contact']);

        return $data;
    }

    public function getDetails($id)
    {
       $invoice = new GetAllData();
       $array = $invoice->getDataWithId('invoices', 'id_invoice', $id);
       
       return $array;
    }

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

        if ( !empty($data) ) {
            $modified_data = new ModifiedDataForDisplay($data);
            $modified_data->modifiedDate();
            $final_data = $modified_data->modifiedName();
        } else {
            $final_data = [
                ["id_invoice" => "/",
                "facture_number" => "/",
                "date" => "/",
                "id_contact" => "/",
                "id_company" => "/",
                "id_type" => "/",]
            ];
        }

        return $final_data;
    }

    public function detailsForContact($id)
    {
        $invoices = new GetAllData();
        $data = $invoices->getDataWithId('invoices', 'id_contact', $id);

        if ( !empty($data) ) {
            $modified_data = new ModifiedDataForDisplay($data);
            $final_data = $modified_data->modifiedDate();
        } else {
            $final_data = [
                ["id_invoice" => "/",
                "facture_number" => "/",
                "date" => "/",
                "id_contact" => "/",
                "id_company" => "/",
                "id_type" => "/",]
            ];
        }

        return $final_data;
    }
}