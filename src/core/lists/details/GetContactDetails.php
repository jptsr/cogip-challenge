<?php
namespace app\src\core\lists\details;

use app\src\core\lists\ModifiedDataForDisplay;
use app\src\models\GetData;

class GetContactDetails
{
    public function detailsForCompany($id)
    {
        $affiliate_details = new GetData();
        $data = $affiliate_details->getListAll(
            'contacts',
            'id_company', $id,
            'lastname', 'firstname', 'phone_number', 'email'
        );

        $modified_data = new ModifiedDataForDisplay($data);
        $modified_data->modifiedPhoneNumber();
        $final_data = $modified_data->modifiedName();

        return $final_data;
    }
}