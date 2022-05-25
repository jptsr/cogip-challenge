<?php
namespace app\src\core\lists\details;

use app\src\core\lists\ModifiedDataForDisplay;
use app\src\models\GetAllData;

class GetContactDetails
{
    public function details($id)
    {
        $data = $this->getDetails($id);

        $invoices = new GetInvoiceDetails();
        $data[1] = $invoices->detailsForContact($id);

        return $data;
    }
    
    public function getDetails($id)
    {
        $contact = new GetAllData();
        $tables = ['contacts', 'companies'];
        $array = $contact->getInnerJoinListAll(
            $tables,
            'INNER JOIN', 'contacts.id_company', 'companies.id_company',
            'contacts.id_contact', $id,
            'contacts.lastname', 'contacts.firstname', 'companies.name', 'contacts.email', 'contacts.phone_number'
        );

        $modified_data = new ModifiedDataForDisplay($array);
        $modified_data->modifiedName();
        $array = $modified_data->modifiedPhoneNumber();
    
        return $array;
    }

    public function detailsForCompany($id)
    {
        $affiliate_details = new GetAllData();
        $data = $affiliate_details->getListAll(
            'contacts',
            'id_company', $id,
            'lastname', 'firstname', 'phone_number', 'email'
        );

        if ( !empty($data) ) {
            $modified_data = new ModifiedDataForDisplay($data);
            $modified_data->modifiedPhoneNumber();
            $final_data = $modified_data->modifiedName();
        } else {
            $final_data = [
                ["id_contact" => "/",
                "lastname" => "/",
                "firstname" => "/",
                "phone_number" => "/",
                "email" => "/",
                "id_company" => "/",]
            ];
        }

        return $final_data;
    }

    public function detailsForInvoice($id)
    {
        $contact = new GetAllData();
        $data = $contact->getDataWithId(
            'contacts', 'id_contact', $id
        );

        if ( !empty($data) ) {
            $modified_data = new ModifiedDataForDisplay($data);
            $modified_data->modifiedPhoneNumber();
            $final_data = $modified_data->modifiedName();
        } else {
            $final_data = [
                ["id_contact" => "/",
                "lastname" => "/",
                "firstname" => "/",
                "phone_number" => "/",
                "email" => "/",
                "id_company" => "/",]
            ];
        }

        return $final_data;
    }
}